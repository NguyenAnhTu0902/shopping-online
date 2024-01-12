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
}
