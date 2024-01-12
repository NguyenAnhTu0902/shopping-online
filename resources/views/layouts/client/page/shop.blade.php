@php
    $dataSearch = session()->get('dataSearch') ?? null;
    $search = $dataSearch['search'] ?? null;
    $price_min = $dataSearch['price_min'] ?? null;
    $price_max = $dataSearch['price_max'] ?? null;
    $brandChoose = $dataSearch['brand'] ?? null
@endphp
@extends('layouts.client.layout.master')
@section('title','Shop')
@section('content')
    <!-- Breacrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breacrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    @include('layouts.client.page.filter')
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <form action="">
                                    <div class="select-option">
                                        <select class="sorting" onchange="this.form.submit();" name="sort_by" >
                                            <option {{request('sort_by') == 'latest' ? 'selected' : ''}} value="latest">Sorting: Latest</option>
                                            <option {{request('sort_by') == 'oldest' ? 'selected' : ''}} value="oldest">Sorting: Oldest</option>
                                            <option {{request('sort_by') == 'name-ascending' ? 'selected' : ''}} value="name-ascending">Sorting: Name A-Z</option>
                                            <option {{request('sort_by') == 'name-descending' ? 'selected' : ''}} value="name-descending">Sorting: Name Z-A</option>
                                            <option {{request('sort_by') == 'price-ascending' ? 'selected' : ''}} value="price-ascending">Sorting: Price Ascending</option>
                                            <option {{request('sort_by') == 'price-descending' ? 'selected' : ''}} value="price-descending">Sorting: Price decrease</option>
                                        </select>
                                        <select class="p-show" onchange="this.form.submit();" name="show">
                                            <option {{request('show') == '9' ? 'selected' : ''}} value="9">Show: 9</option>
                                            <option {{request('show') == '15' ? 'selected' : ''}} value="15">Show: 15</option>
                                        </select>
                                    </div>
                                    <input name="search" type="hidden" @if($dataSearch) value="{{$search}}" @else value="" @endif>
                                    <input name="brand[]" type="hidden" @if($dataSearch) value="{{implode(',', $brandChoose)}}" @else value="" @endif>
                                    <input name="price_max" type="hidden" @if($dataSearch) value="{{$price_max}}" @else value="" @endif>
                                    <input name="price_min" type="hidden" @if($dataSearch) value="{{$price_min}}" @else value="" @endif>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <a href="/san-pham/{{$product->id}}">
                                                <img src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                            </a>
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="/san-pham/{{$product->id}}"><i class="fa fa-search"></i></a></li>
                                                <li class="quick-view"><a href="/san-pham/{{$product->id}}">+ Quick View</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$product->tag}}</div>
                                            <a href="">
                                                <h5>{{$product->name}}</h5>
                                            </a>
                                            <div class="product-price">
                                                ${{$product->discount}}
                                                <span>{{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Product Shop Section End -->

@endsection
