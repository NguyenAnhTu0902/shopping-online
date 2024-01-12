<?php

namespace App\Repositories\Product;

use App\Constants\CommonConstants;
use App\Models\Product;
use App\Repositories\BaseRepository;

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
        return $products;
    }
}
