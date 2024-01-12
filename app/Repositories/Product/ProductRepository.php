<?php

namespace App\Repositories\Product;

use App\Constants\CommonConstants;
use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected $model;
    public function getModel()
    {
        return Product::class;
    }
    public function getProductOnIndex($request)
    {
        $search = $request->search ?? '';
        $products = $this->model
            ->where(function ($query) use ($search) {
                $query->where('name', CommonConstants::OPERATOR_LIKE, '%' . $search . '%')
                    ->orWhere('description', CommonConstants::OPERATOR_LIKE, '%' . $search . '%');
            })
            ->get();
        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products,$request);
        return $products;
    }
    private function filter($products, Request $request)
    {
        //Brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;

        //Price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null)
            ? $products->whereBetween('discount', [$priceMin, $priceMax])
            : $products;
        return $products;
    }

    private function sortAndPagination($products, Request $request)
    {
        $perPage = $request->show ?? 9 ;
        $sortBy = $request->sort_by ?? 'latest';

        switch ($sortBy)
        {
            case 'latest':
                $products = $products->sortBy('id');
                break;
            case 'oldest':
                $products = $products -> orderBy('id', 'desc');
                break;
            case 'name-ascending':
                $products = $products -> orderBy('name');
                break;
            case 'name-descending':
                $products = $products -> orderBy('name', 'desc');
                break;
            case 'price-ascending':
                $products = $products -> orderBy('price');
                break;
            case 'price-descending':
                $products = $products -> orderBy('price', 'desc');
                break;
            default:
                $products = $products -> orderBy('id');
        };
        $products = Product::query()
            ->paginate($perPage)
            ->appends(['sort_by' => $sortBy, 'show' => $perPage]);

        return $products;
    }
}
