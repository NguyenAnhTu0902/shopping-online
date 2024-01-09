<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\BrandService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

     public function index() {
         $brands = $this->brandService->all();
         return view('layouts.client.page.shop', compact('brands'));
     }

     public function show($id)
     {
         return view('layouts.client.page.product');
     }
}
