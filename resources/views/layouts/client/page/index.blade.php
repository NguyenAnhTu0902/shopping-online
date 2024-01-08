@extends('layouts.client.layout.master')
@section('titile','Home')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg ="front/img/banner/banner-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod the incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg ="front/img/banner/banner-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod the incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Begin -->
    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/hero/hero-1.png" alt="">
                        <div class="inner-text">
                            <h4>Sneaker</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/hero/hero-2.png" alt="">
                        <div class="inner-text">
                            <h4>Boots</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/hero/hero-3.png" alt="">
                        <div class="inner-text">
                            <h4>Loafer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg ="front/img/latest/latest-1.png">
                        <h2>Loafer</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="loafer">All</li>
                            <li class="item" data-tag=".PennyLoafer" data-category="loafer">Penny Loafer</li>
                            <li class="item" data-tag=".TasselledLoafer" data-category="loafer">Tasselled Loafer</li>
                            <li class="item" data-tag=".HorsebitLoafer" data-category="loafer">Horsebit loafer</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        <div class="product-item item ">
                            <div class="pi-pic">
                                <img src="front/img/products/loafer-1.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">Penny Loafer</div>
                                <a href="">
                                    <h5>Casual Drive Loafer</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item item ">
                            <div class="pi-pic">
                                <img src="front/img/products/loafer-2.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">Tasselled Loafer</div>
                                <a href="">
                                    <h5>Slip-on Loafers</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item item ">
                            <div class="pi-pic">
                                <img src="front/img/products/loafer-3.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">Tasselled Loafer</div>
                                <a href="">
                                    <h5>Loafer S20348</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item item ">
                            <div class="pi-pic">
                                <img src="front/img/products/loafer-4.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">Horsebit loafer</div>
                                <a href="">
                                    <h5>LOAFER S2021</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin -->
    <section class="deal-of-the-week set-bg spad" data-setbg="front/img/time-bg.png">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br> do ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <div class="product-price">
                        $35.00
                        <span>/ Shoes</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>48</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="men-banner spad">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="men">All</li>
                            <li class="item" data-tag=".Chunky" data-category="men">Chunky Boot</li>
                            <li class="item" data-tag=".Marbe" data-category="men">Marbe Boot</li>
                            <li class="item" data-tag=".Chelsea" data-category="men">Chelsea Boot</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Harness Boot</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        <div class="product-item item">
                            <div class="pi-pic">
                                <img src="front/img/products/boot-1.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">CHUNKY CHELSEA BOOT</div>
                                <a href="">
                                    <h5>Chelsea boot S2131</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item item">
                            <div class="pi-pic">
                                <img src="front/img/products/boot-2.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">MARBE CHUNKY BOOT</div>
                                <a href="">
                                    <h5>Chunky boot S2938</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item item">
                            <div class="pi-pic">
                                <img src="front/img/products/boot-3.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">CHELSEA BOOT</div>
                                <a href="">
                                    <h5>Chelsea boot G2312</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item item">
                            <div class="pi-pic">
                                <img src="front/img/products/boot-4.png" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="">Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="caterogy-name">HARNESS BOOT</div>
                                <a href="">
                                    <h5>Harness boot H2312</h5>
                                </a>
                                <div class="product-price">
                                    $150
                                    <span>$120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg ="front/img/latest/latest-2.png">
                        <h2>Boots</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin  -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg ="front/img/insta/insta-1.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Atus_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg ="front/img/insta/insta-2.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Atus_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg ="front/img/insta/insta-3.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Atus_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg ="front/img/insta/insta-4.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Atus_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg ="front/img/insta/insta-5.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Atus_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg ="front/img/insta/insta-6.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Atus_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End  -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/blog/blog-1.png" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>The Best Street Style From London Atus Week</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam qua</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/blog/blog-2.png" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>The Best Street Style From London Atus Week</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam qua</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/blog/blog-3.png" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2022
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="">
                                <h4>The Best Street Style From London Atus Week</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam qua</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery on time</h6>
                                <p>If good have problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

@endsection
