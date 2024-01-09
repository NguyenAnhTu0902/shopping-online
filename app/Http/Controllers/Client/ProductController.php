<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index() {
         return view('layouts.client.page.shop');
     }

     public function show($id)
     {
         return view('layouts.client.page.product');
     }
}
