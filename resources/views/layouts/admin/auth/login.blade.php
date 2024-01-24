<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/icon/clinic-icon.jpg') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('font/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Đăng nhập</title>
</head>
<body>
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2 d-none d-sm-block" style="background-image: url({{ asset('images/logo/bg-image-1.png') }});">
        <div class="d-flex flex-wrap h-100 justify-content-end align-content-end">
            <div class="m-lg-2 p-3 text-center" id="system_name">
                <img class="img-logo mb-2" src="{{ asset('images/logo/logo.png') }}" alt="logo">
                <h3 class="my-2"><strong>Hanavy Shop</strong></h3>
            </div>
        </div>
    </div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <form class="" method="post" action="">
                        @csrf
                        <div class="text-center mb-4">
                            <div class=" d-block d-sm-none">
                                <img class="img-logo mb-3" src="{{ asset('.\images\logo\bg-image.png') }}" alt="logo">
                            </div>
                            <h3>Đăng nhập Hệ thống</h3>
                        </div>
                        @include('layouts.admin.components.notification')
                        <div class="form-group first">
                            <label for="email">Email</label>
                            <input value="{{ old('email') }}" type="text" class="form-control form-control-sm @inputValid('email')"
                                   placeholder="Nhập email" name="email">
                        </div>
                        <div style="clear:both"></div>
                        <div class="form-group last mb-3">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control form-control-sm @inputValid('password')"
                                   placeholder="Nhập mật khẩu" id="password" name="password">
                        </div>
                        <div style="clear:both"></div>
                        <div class="d-flex mb-3 align-items-center">
                            <label class="control control--checkbox mb-0">
                                <span class="caption">Nhớ tài khoản</span>
                                <input type="checkbox" checked="checked" class="form-control form-control-sm"/>
                                <div class="control__indicator"></div>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                        <div class="mt-2">
                            <a href="#" class="forgot-pass">Quên mật khẩu?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
