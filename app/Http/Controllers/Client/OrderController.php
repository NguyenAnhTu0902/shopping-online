<?php

namespace App\Http\Controllers\Client;

use App\Constants\CommonConstants;
use App\Http\Controllers\Controller;
use App\Http\Requests\Client\OrderRequest;
use App\Services\OrderDetailService;
use App\Services\OrderService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

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
    public function create(OrderRequest $request)
    {
        //Thêm đơn hàng
        $data = $request->only(
            'user_id' ?? null,
            'name',
            'address',
            'phone',
            'email',
            'payment'
        );

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
    public function myOrder()
    {
        $orders = $this->orderService->getOrderByUserId(Auth::id());
        return view('layouts.client.page.my_order', compact('orders'));
    }

    public function myOrderDetail($id)
    {
        $order = $this->orderService->find($id);

        return view('layouts.client.page.my_order_detail', compact('order'));
    }
}
