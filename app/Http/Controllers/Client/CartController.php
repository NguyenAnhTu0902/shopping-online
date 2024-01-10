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

    }
    public function addCart(Request $request)
    {
        if ($request->ajax()) {
            $product = $this->productService->find($request->productId);
            $response['cart'] = Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->discount ?? $product->price,
                'weight' => $request->size,
                'image' => $product->productImages,
                'options' => [
                    'images' => $product->productImages[0]->path,
                ],
            ]);
            $response['count'] = Cart::count();
            $response['total'] = Cart::total();

            return $response;
        }

        return back();

        return back();
    }
}
