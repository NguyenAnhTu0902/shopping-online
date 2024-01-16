<?php

namespace App\Http\Controllers\Client;

use App\Constants\CommonConstants;
use App\Http\Controllers\Controller;
use App\Services\OrderDetailService;
use App\Services\OrderService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    protected $orderDetailService;

    public function __construct(OrderService $orderService, OrderDetailService $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('layouts.client.page.order', compact('carts', 'total', 'subtotal'));
    }
    public function create(Request $request)
    {
        //Thêm đơn hàng
        $data = $request->all();

        $data['status'] = CommonConstants::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);
        //Thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach($carts as  $cart)
        {
            $data = [
                'order_id' => $order->id ,
                'product_id' => $cart->id ,
                'size' => $cart->weight,
                'qty' => $cart->qty ,
                'total' => $cart->qty * $cart->price ,
            ];
            $this->orderDetailService->create($data);
        }
        Cart::destroy();
        return redirect('/dat-hang/tro-ve')->with('notification','Bạn đã đặt hàng thành công!!');
    }
    public function result()
    {
        $notification = session('notification');
        return view('layouts.client.page.result', compact('notification'));
    }
}
