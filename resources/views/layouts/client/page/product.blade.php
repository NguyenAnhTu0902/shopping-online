<style>
    /* Rating */

    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }
    .rate:not(:checked) > input {
        display: none;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
</style>
@extends('layouts.client.layout.master')
@section('titile','Product')
@section('content')
    <!-- Breacrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href=""><i class="fa fa-home"></i>Home</a>
                        <a href="">Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breacrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
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
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="front/img/products/loafer-1.png" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="front/img/products/loafer-1.png">
                                        <img src="front/img/products/loafer-1.png" alt="">
                                    </div>
                                    <div class="pt active" data-imgbigurl="front/img/products/loafer-2.png">
                                        <img src="front/img/products/loafer-2.png" alt="">
                                    </div>
                                    <div class="pt active" data-imgbigurl="front/img/products/loafer-3.png">
                                        <img src="front/img/products/loafer-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>Loafer</span>
                                    <h3>Loafer S202</h3>
                                    <a href="#" class="heart-icon">
                                        <i class="icon_heart_alt"></i>
                                    </a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star-o"></i>
                                    <span>1</span>
                                </div>
                                <div class="pd-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque enim odio, vel suscipit sapien vulputate et. In tincidunt urna in dui malesuada, quis porta felis iaculis. Donec fermentum posuere metus, et convallis est commodo vitae. Maecenas venenatis fermentum ultricies.</p>
                                    <h4>$150 <span>$120</span></h4>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-l">
                                        <label for="sm-l">L</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="sm-xl">
                                        <label for="sm-xl">XL</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="sm-m">
                                        <label for="sm-m">M</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <a href="" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: Loafer</li>
                                    <li><span>TAGS</span>: August</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : 001</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li><a class="active" href="#tab1" data-toggle="tab" role="tab">Customer Reviews 5</a></li>
                                <li><a href="#tab2" data-toggle="tab" role="tab">SPECIFICATIONS</a></li>
                                <li><a href="#tab3" data-toggle="tab" role="tab">DESCRIPTION</a></li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">

                                <div class="tab-pane fade-in active" id="tab-3" role="tabpannel">
                                    <div class="customer-review-option">
                                        <h4>Comments</h4>
                                        <div class="comment-option">
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="front/img/user/default-avatar.jpg'" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Nguyễn Anh Tú <span>12/12/2024</span></h5>
                                                    <div class="at-reply">Không có gì</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="leave-comment">
                                            <h4>Leave A Comment</h4>
                                            <form action="" method="post" class="comment-form">
                                                @csrf
                                                <input type="hidden" name="product_id" value="">
                                                <input type="hidden" name="user_id" value="">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Name" name="name" value="">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email" name="email" value="">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages" name="messages"></textarea>
                                                        <div class="personal-rating">
                                                            <h6>Your Rating</h6>
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
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

    <!-- Related Products Section Begin -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/loafer-1.png" alt="">
                                <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
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
                                $ 150
                                <span>$120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/loafer-1.png" alt="">
                            <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
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
                                $ 150
                                <span>$120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/loafer-1.png" alt="">
                            <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
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
                                $ 150
                                <span>$120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/loafer-1.png" alt="">
                            <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
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
                                $ 150
                                <span>$120</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->

@endsection