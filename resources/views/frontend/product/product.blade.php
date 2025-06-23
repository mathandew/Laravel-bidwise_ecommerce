
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
                                    <h2 class="heading">Items</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Products</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="tf-section our-latest-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading">
                                <h3>Our Latest Collections</h3>
                                <p class="desc">Most popular gaming digital nft market place </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sc-product-item style-3">
                                <div class="product-img ">
                                    <img src="{{url('assets/images/product-item/item-5.jpg')}}" alt="Image">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                    <label>BSC</label>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With Smoke
                                            Premium’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="avatar">
                                            <img src="{{ url('assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                        </div>
                                        <div class="infor">
                                            <div class="author-name"><a href="author.html">Daniel M. Bivens</a></div>
                                            <span>Creator</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sc-product-item style-4">
                                <div class="product-img flex">
                                    <div class="img-left">
                                        <img src="{{asset('assets/images/product-item/item-6.jpg')}}" alt="Image">
                                        <label>BSC</label>
                                    </div>
                                    <div class="img-right">
                                        <div class="top-img flex">
                                            <img src="{{ url('frontend/assets/images/product-item/item-7.jpg')}}" alt="Image">
                                            <img src="{{ url('frontend/assets/images/product-item/item-8.jpg')}}" alt="Image">
                                        </div>
                                        <div class="bottom-img">
                                            <img src="{{ url('frontend/assets/images/product-item/item-9.jpg')}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’Multi-purpose 3D Space Rocket With
                                            Animate Real Special Smoke Premium Quality Gaming’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="left flex">
                                            <div class="avatar">
                                                <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M. Bivens</a>
                                                </div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                        <div class="button-wishlish">
                                            <a href="#" class=" wishlish"><i class="fas fa-heart"></i></a>
                                            <span>152k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sc-product-item style-3 mg-bt-0-mb">
                                <div class="product-img ">
                                    <img src="{{ url('frontend/assets/images/product-item/item-10.jpg')}}" alt="Image">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                    <label>BSC</label>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With Smoke
                                            Premium’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="avatar">
                                            <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                        </div>
                                        <div class="infor">
                                            <div class="author-name"><a href="author.html">Daniel M. Bivens</a></div>
                                            <span>Creator</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="tf-section trendy-colection-page style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wg-drop-category seclect-box">
                                <div id="all-items" class="dropdown">
                                    <a href="#" class="btn-selector nolink">All Categories</a>
                                    <ul class="">
                                        <li><span>NFT</span></li>
                                        <li><span>Crypto</span></li>
                                        <li><span>Token</span></li>
                                    </ul>
                                </div>
                                <div id="new-items" class="dropdown">
                                    <a href="#" class="btn-selector nolink">New Items</a>
                                    <ul class="">
                                        <li><span>New bestsellers</span></li>
                                        <li><span>New releases</span></li>
                                    </ul>
                                </div>
                                <div id="buy" class="dropdown">
                                    <a href="#" class="btn-selector nolink">Buy Now</a>
                                    <ul class="">
                                        <li><span>Wallet</span></li>
                                        <li><span>Website</span></li>
                                    </ul>
                                </div>
                                <div id="sort-by" class="dropdown">
                                    <a href="#" class="btn-selector nolink">Sort By</a>
                                    <ul class="">
                                        <li><span>View</span></li>
                                        <li><span>Rating</span></li>
                                        <li><span>Sale</span></li>
                                        <li><span>Date</span></li>
                                    </ul>
                                </div>
                                <button class="sc-button style letter style-2"><span>Filter</span> </button>
                            </div>
                        </div>
                        <section class="tf-section trendy-colection-page style-2">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)

                        <div class="fl-item col-xl-4 col-lg-4 col-md-6">
                            <div class="sc-product-item style-5">
                                <div class="product-img" style="height: 200px; overflow: hidden;">
                                    @if($product->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                            alt="Product Image" style="width: 100%; height: auto;">
                                    @endif
                                    @if($product->type == '1')
                                    <a href="#" data-toggle="modal" data-target="#popup_bid{{$product->id}}"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                @endif
                                </div>
                                <div class="product-content" style="height: 100px; overflow: hidden;">
                                    <h5 class="title"><a href="{{ route('product.detail', $product->id) }}">‘’{{$product->title}}’’</a></h5>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
                        <div class="col-md-12">
                            <button id="loadmore" class=" sc-button style letter style-2"><span>Explore More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            
@endsection
