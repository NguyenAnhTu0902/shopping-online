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
                                        <select class="sorting" name="sort_by" >
                                            <option value="latest">Sorting: Latest</option>
                                            <option value="oldest">Sorting: Oldest</option>
                                            <option value="name-ascending">Sorting: Name A-Z</option>
                                            <option value="name-descending">Sorting: Name Z-A</option>
                                            <option value="price-ascending">Sorting: Price Ascending</option>
                                            <option value="price-descending">Sorting: Price decrease</option>
                                        </select>
                                        <select class="p-show" name="show">
                                            <option value="9">Show: 9</option>
                                            <option value="15">Show: 15</option>
                                        </select>
                                    </div>
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
