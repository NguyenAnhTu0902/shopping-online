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

     public function index() {
         $brands = $this->brandService->all();
         $products = $this->productService->all();
         return view('layouts.client.page.shop', compact('brands', 'products'));
     }

     public function show($id)
     {
         return view('layouts.client.page.product');
     }
}
