<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->all();
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('layouts.client.page.cart', compact('products', 'carts', 'total', 'subtotal'));
    }
    public function addCart(Request $request)
    {
        if ($request->ajax()) {
            $product = $this->productService->find($request->productId);
            $carts = Cart::content();
            foreach ($carts as $cart)
            {
                if($cart->id == $request->productId){
                    $existingItem = Cart::get($cart->rowId, ['weight' => $request->size]);
                }
            }
            if (!$existingItem){
                $response['cart'] = Cart::add([
                    'id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->discount ?? $product->price,
                    'weight' => $request->size,
                    'image' => $product->productImages,
                    'rowId' => rand()
                ]);
            }
            else
            {
                $response['cart'] = Cart::add([
                    'id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->discount ?? $product->price,
                    'weight' => $request->size,
                    'image' => $product->productImages,
                ]);
            }
            $response['count'] = Cart::count();
            $response['total'] = Cart::total();
            return $response;
        }
        return back();
    }
}
