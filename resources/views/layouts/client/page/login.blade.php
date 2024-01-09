@extends('layouts.client.layout.master')
@section('title','Login')
@section('content')


<!-- Breacrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <a href="./"><i class="fa fa-home"></i>Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Breacrumb Section End -->

<!-- Login Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="email">Email address *</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Save Password
                                    <input type="checkbox" id="save-pass" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Forget your Password</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Sign In</button>
                    </form>
                    <div class="switch-login">
                        <a href="/dang-ky" class="or-login">Crete An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Section End -->

@endsection
