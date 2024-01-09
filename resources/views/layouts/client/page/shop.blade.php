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
                    <form action="">
                        <div class="filter-widget">
                            <h4 class="fw-title">Categories</h4>
                            <ul class="filter-catagories">
                                <li><a href="">Loafer</a></li>
                                <li><a href="">Chelsea Boot</a></li>
                                <li><a href="">Harness Boot</a></li>
                                <li><a href="">Chunky Boot</a></li>
                            </ul>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title">Brand</h4>
                            <div class="fw-brand-check">
                                <div class="bc-item">
                                    <label for="bc-1">
                                        August
                                        <input type="checkbox" id="bc-1" name="1">
                                        <span class="checkmark "></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-2">
                                        The Wolf
                                        <input type="checkbox" id="bc-2" name="2">
                                        <span class="checkmark "></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-3">
                                        Dior
                                        <input type="checkbox" id="bc-3" name="3">
                                        <span class="checkmark "></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-4">
                                        Channel
                                        <input type="checkbox" id="bc-4" name="4">
                                        <span class="checkmark "></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title">Price</h4>
                            <div class="filter-range-wrap">
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount" name="price_min">
                                        <input type="text" id="maxamount" name="price_max">
                                    </div>
                                </div>
                                <div class="price-range ui-slide ui-corner-all ui-slide-horizontal ui-widget ui-widget-content"
                                     data-min ="0" data-max="1000" data-min-value="" data-max-value="">
                                    <div class="ui-slide-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                            </div>
                            <button type="submit" class="filter-btn">Filter</button>
                        </div>
                        <div class="filter-widget">
                            <h4 class="fw-title">Tags</h4>
                            <div class="fw-tags">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Blackpack</a>
                            </div>
                        </div>
                    </form>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/loafer-1.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Loafer</div>
                                        <a href="">
                                            <h5>Loafer S202</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/loafer-2.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Loafer</div>
                                        <a href="">
                                            <h5>Loafer S203</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/loafer-3.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Loafer</div>
                                        <a href="">
                                            <h5>Loafer S203</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/loafer-4.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Loafer</div>
                                        <a href="">
                                            <h5>Loafer S204</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/boot-1.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Chelsea Boot</div>
                                        <a href="">
                                            <h5>Boot S201</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/boot-2.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Chelsea Boot</div>
                                        <a href="">
                                            <h5>Boot S202</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/boot-3.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Chelsea Boot</div>
                                        <a href="">l
                                            <h5>Boot S202</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/boot-4.png" alt="">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Chelsea Boot</div>
                                        <a href="">l
                                            <h5>Boot S204</h5>
                                        </a>
                                        <div class="product-price">
                                            $120
                                            <span>150</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Product Shop Section End -->

@endsection
