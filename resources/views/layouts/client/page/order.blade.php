@extends('layouts.client.layout.master')
@section('title','Order')
@section('content')

    <!-- Checkout Section Begin -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="/dat-hang" method="post" class="checkout-form">
                @csrf
                <div class="row">
                    @if(Cart::count() > 0)
                        <div class="col-lg-6">
                            <h4>Billing Details</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="fir">Họ tên <span>*</span></label>
                                    <input type="text" id="fir" name="name">
                                </div>
                                <div class="col-lg-12">
                                    <label for="phone">Phone <span>*</span></label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                                <div class="col-lg-12">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="text" id="email" name="email">
                                </div>
                                <div class="col-lg-12">
                                    <label for="address">Địa chỉ <span>*</span></label>
                                    <input type="text" id="address" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="place-order">
                                <h4>Your order</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Product <span>Total</span></li>
                                        @foreach($carts as $cart)
                                            <li class="fw-normal">{{$cart->name}} (size: {{$cart->weight}}) x {{$cart->qty}} <span>${{$cart->price * $cart->qty}}</span></li>
                                        @endforeach
                                        <li class="total-price">Total <span>${{$subtotal}}</span></li>
                                    </ul>
                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                                Thanh toán khi nhận hàng
                                                <input type="radio" id="pc-check" name="payment_type" value="pay_later">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Thanh toán online
                                                <input disabled type="radio" id="pc-paypal" name="payment_type" value="online_payment">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order-btn">
                                        <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <h4>Your cart is empty!!!</h4>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Section End -->

@endsection