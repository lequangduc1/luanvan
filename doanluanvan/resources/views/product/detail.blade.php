@extends('layouts.app')
@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="index.html">Home</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Shop List</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- product-details Area Start -->
    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1"
                                    src="{{ url('resources') }}/img/products/{{ $productDetail->sanpham_hinhanh }}"
                                    data-zoom-image="{{ url('resources') }}/img/products/{{ $productDetail->sanpham_hinhanh }}"
                                    alt="big-1">
                            </a>
                        </div>
                        {{-- <div class="single-zoom-thumb">
                        <ul class="bxslider" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{url('resources')}}/img/products/{{$item->hinh}}" data-zoom-image="img/product-details/iphone_13-_pro-2_2_1.jpg"><img src="{{url('resources')}}/img/product-details/iphone_13-_pro-2_2_1.jpg" alt="zo-th-1" /></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/iphone_13-_pro-2_2_1.jpg" data-zoom-image="img/product-details/iphone_13-_pro-2_2_1.jpg"><img src="{{url('resources')}}/img/product-details/iphone_13-_pro-2_2_1.jpg" alt="zo-th-2"></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/iphone_13-_pro-2_2_1.jpg" data-zoom-image="img/product-details/iphone_13-_pro-2_2_1.jpg"><img src="{{url('resources')}}/img/product-details/iphone_13-_pro-2_2_1.jpg" alt="ex-big-3" /></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/big-4.jpg" data-zoom-image="img/product-details/iphone_13-_pro-2_2_1.jpg"><img src="{{url('resources')}}/img/product-details/iphone_13-_pro-2_2_1.jpg" alt="zo-th-4"></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/big-5.jpg" data-zoom-image="img/product-details/ex-big-5.jpg"><img src="{{url('resources')}}/img/product-details/th-5.jpg" alt="zo-th-5" /></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/big-6.jpg" data-zoom-image="img/product-details/ex-big-6.jpg"><img src="{{url('resources')}}/img/product-details/th-6.jpg" alt="ex-big-3" /></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/big-7.jpg" data-zoom-image="img/product-details/ex-big-7.jpg"><img src="{{url('resources')}}/img/product-details/th-7.jpg" alt="ex-big-3" /></a>
                            </li>
                            <li class="">
                                <a href="#" class="elevatezoom-gallery" data-image="{{url('resources')}}/img/product-details/big-8.jpg" data-zoom-image="img/product-details/ex-big-8.jpg"><img src="{{url('resources')}}/img/product-details/th-8.jpg" alt="ex-big-3" /></a>
                            </li>
                        </ul>
                    </div> --}}
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">{{ $productDetail->sanpham_ten }}</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">{{ $productDetail->sanpham_gia }}</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate,
                                        tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus
                                        orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva
                                    </p>
                                </div>
                                <p class="availability in-stock">Availability: <span>In stock</span></p>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <div class="inputx-content">
                                            <label for="qty">Quantity:</label>
                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty"
                                                class="input-text qty">
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title=""
                                                    data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i
                                                        class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="singl-share">
                                    <a href="#"><img src="{{ url('resources') }}/img/single-share.png" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-product-tab">
                    <!-- Nav tabs -->
                    <ul class="details-tab">
                        <li class="active"><a href="#home" data-toggle="tab">Chi tiết sản phẩm</a></li>
                        <li class=""><a href="#messages" data-toggle="tab"> Đánh giá </a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="product-tab-content">
                                {{ $productDetail->sanpham_mo_ta }}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="component_rating" style="margin-bottom: 20px">
                                <div class="component_rating_content" style="display: flex;align-items:center;border: 1px solid #dedede;border-radius: 5px;">
                                    <div class="rating_item" style="width: 20%; position: relative;">
                                        <span class="fa fa-star" style="font-size: 100px;
                                            color: #ff9705;
                                            display: block;
                                            margin: auto;
                                            text-align: center;">
                                        </span><b style="    position: absolute;
                                            left: 50%;
                                            top: 50%;
                                            transform: translateX(-50%) translateY(-50%);
                                            color: white;
                                            font-size: 20px;">2.5</b>
                                    </div>
                                    <div class="list_rating" style="width: 60%;padding:20px">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="item_rating" style="display: flex; align-items:center">
                                                <div style="width:10%;font-size:14px">
                                                    {{ $i }}<span class="fa fa-star"></span>
                                                </div>
                                                <div style="width:70%; margin:0 20px">
                                                    <span
                                                        style="width:100%;height:10px;display:block;border:1px solid #dedede;border-radius: 4px; background-color: #dedede;"><b style="    width: 30%;
                                                        background-color: #f25800;
                                                        display: block;
                                                        height: 100%;
                                                        border-radius: 4px
                                                        "></b></span>
                                                </div>
                                                <div style="width:20%">
                                                    <a href="">290 danh gia</a>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div style="width: 20%">
                                        <a href=""> Gửi đánh giá của bạn</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="comments-area">
                                <h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
                                <div class="comments-list">
                                    <ul>
                                        <li>
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img src="{{url('resources')}}/img/user-1.jpg" alt="">
                                                </div>
                                                <div class="comments-content-wrap">
                                                    <span>
                                                        <b><a href="#">Admin - </a></b>
                                                        <span class="post-time">October 6, 2014 at 1:38 am</span>
                                                    </span>
                                                    <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                                                </div>
                                            </div>
                                        </li>									
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Add a review</h3>
                                <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Name *</p>
                                            <input type="text">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Email *</p>
                                            <input type="email">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Your Rating</p>
                                            <div class="pro-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 comment-form-comment">
                                            <p>Your Review</p>
                                            <textarea id="message" cols="30" rows="10"></textarea>
                                            <input type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details Area end -->
    <!-- product section start -->
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2>New products</h2>
            </div>
            <!-- our-product area start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="features-curosel">
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/mi-watch-lite_1.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/product-2.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$200.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/mi-watch-lite_1.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/mi-watch-lite_1.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/mi-watch-lite_1.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/mi-watch-lite_1.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$270.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>

                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/mi-watch-lite_1.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/product-1.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$340.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/product-4.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/product-5.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$360.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/product-8.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/product-9.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$400.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Accumsan elit</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/product-11.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/product-12.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$280.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image"
                                                src="{{ url('resources') }}/img/products/product-11.jpg" alt="" />
                                            <img class="secondary-image"
                                                src="{{ url('resources') }}/img/products/product-2.jpg" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i
                                                                class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                                <div class="quickviewbtn">
                                                    <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$222.00</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
@stop
