<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\BrandService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $brandService;
    protected $productService;

    public function __construct(BrandService $brandService, ProductService $productService)
    {
        $this->brandService = $brandService;
        $this->productService = $productService;
    }

     public function index(Request $request) {
         $brands = $this->brandService->all();
         $products = $this->productService->getProductOnIndex($request);
         $search = $request->search;
         return view('layouts.client.page.shop', compact('products', 'brands', 'search'));
     }

     public function show($id)
     {
         $brands = $this->brandService->all();
         $product = $this->productService->findOneOrFail($id);
         return view('layouts.client.page.product', compact('product', 'brands'));
     }
}
