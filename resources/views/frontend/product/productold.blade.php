@extends('frontend.layout.main')
@section('main-container')
            <!-- page title -->
            <section class="fl-page-title">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-inner flex">
                                <div class="page-title-heading">
                                    <h2 class="heading">Item (Auctions)</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Item (Auctions)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section auctions-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2 has-icon">
                                <div class="content-left">

                                    <div class="inner">
                                        <div class="group">
                                            <div class="icon"><i class="ripple"></i></div>
                                            <h3>Live Auctions</h3>
                                        </div>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="swiper-container popular-coll-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-1.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-2.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-2.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-2.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-2.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-2.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-3.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-4.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-5.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-6.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-1.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-5.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-30.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-31.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-3.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-2.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-5.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-6">
                                                <div class="product-item-top flex">
                                                    <div class="avatar-box">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-8.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-9.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-10.jpg') }}" alt="Image">
                                                        <img src="{{ url('frontend/assets/images/avatar/avt-11.jpg') }}" alt="Image">
                                                    </div>

                                                    <div class="dropdown-options">
                                                        <div class="options flex">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <ul class="menu target-menu">
                                                            <li><a href="#" class="nolink">Refresh Metadata</a></li>
                                                            <li><a href="#" class="nolink">Share</a></li>
                                                            <li><a href="#" class="nolink">Report</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="product-img">
                                                    <img src="{{ url('frontend/assets/images/product-item/item-4.jpg') }}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Place Bid</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown">
                                                    <span class="js-countdown" data-timer="516400"
                                                        data-labels=" :  ,  : , : , "></span>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next btn-slide-next "></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="new-letter">
                <div class="container">
                    <div class="new-letter-inner flex">
                        <div class="new-letter-content">
                            <h3 class="heading">Newsletters</h3>
                            <p class="sub-heading">Most popular gaming digital nft market place </p>
                            <div class="form-subcribe">
                                <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8"
                                    class="form-submit">
                                    <input name="email" value="" class="email" type="email"
                                        placeholder="Enter Email Address" required="">
                                    <button name="submit" type="submit" id="submit"
                                        class="sc-button style letter style-2"><span>Browse More</span> </button>
                                </form>
                            </div>
                        </div>
                        <div class="new-letter-img">
                            <img src="{{ url('frontend/assets/images/background/img-newletter.png" alt="Image">
                        </div>
                    </div>
                </div>
            </section>
            @endsection
