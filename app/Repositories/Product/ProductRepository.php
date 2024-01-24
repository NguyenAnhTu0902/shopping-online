<?php

namespace App\Repositories\Product;

use App\Constants\CommonConstants;
use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected $model;
    public function getModel()
    {
        return Product::class;
    }
    public function getProductOnIndex(Request $request)
    {
        //Search
        $search = $request->search ?? '';
        //Brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        //Price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);

        $query = $this->model
            ->where(function ($query) use ($search) {
                $query->where('name', CommonConstants::OPERATOR_LIKE, "%{$search}%")
                    ->orWhereHas('category', function ($q) use ($search) {
                        $q->where('name', CommonConstants::OPERATOR_LIKE, "%{$search}%");
                });
            })
            ->when($brand_ids, function ($query) use ($brand_ids) {
                $query->whereIn('brand_id', $brand_ids);
            })
            ->when($priceMin && $priceMax, function ($query) use ($priceMin, $priceMax) {
                $query->whereBetween('discount', [$priceMin, $priceMax]);
            });

        $products = $query->get();
        $products = $this->sortAndPagination($products,$request);

        return $products;
    }

    private function sortAndPagination($products, Request $request)
    {
        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'latest';

        switch ($sortBy) {
            case 'latest':
                $products = $products->sortBy('id');
                break;
            case 'oldest':
                $products = $products->sortByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->sortBy('name');
                break;
            case 'name-descending':
                $products = $products->sortByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->sortBy('discount');
                break;
            case 'price-descending':
                $products = $products->sortByDesc('discount');
                break;
            default:
                $products = $products->sortBy('id');
        }

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = array_slice($products->all(), ($currentPage - 1) * $perPage, $perPage);

        $paginatedProducts = new LengthAwarePaginator(
            $currentPageItems,
            $products->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        $paginatedProducts->appends(['sort_by' => $sortBy, 'show' => $perPage]);

        return $paginatedProducts;
    }

    public function list(array $data, $paginate, $select)
    {
        $query = $this->model
            ->with('productImages', 'productDetails')
            ->select($select);
        if (isset($data[CommonConstants::KEYWORD])) {
            $keyword = $data[CommonConstants::KEYWORD];
            foreach ($keyword as $key => $value) {
                if (isset($value) && $value !== "") {
                    $query->where($key, CommonConstants::OPERATOR_LIKE, "%{$value}%");
                }
            }
        }

        if (!empty($data[CommonConstants::KEY_SORT_COLUMN]) && !empty($data[CommonConstants::KEY_SORT_TYPE])) {
            $sort = [
                $data[CommonConstants::KEY_SORT_COLUMN] => $data[CommonConstants::KEY_SORT_TYPE]
            ];
            $query = $this->sort($query, $sort);
        }

        if ($paginate) {
            $query = $this->paginate($query, $this->handlePaginate($data));
        }
        return $query;
    }
}
