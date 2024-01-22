<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('layouts.admin.product.index', compact('brands', 'categories'));
    }
}
