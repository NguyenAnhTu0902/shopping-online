@extends('layouts.client.layout.master')
@section('title','Cart')
@section('content')
    <!-- Shopping Cart Section Begin -->
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="front/img/products/loafer-1.png" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Loafer S202</h5>
                                    </td>
                                    <td class="p-price first-row">$20</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <input class="pro-qty" value="5" disabled>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$100</td>
                                    <td class="close-td first-row">
                                        <i onclick="" class="ti-close"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="/san-pham" class="primary-btn up-cart">Update cart</a>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Total <span>$100</span></li>
                                </ul>
                                <a href="" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection
