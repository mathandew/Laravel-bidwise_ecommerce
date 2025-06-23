@extends('frontend.layout.main')
@section('main-container')
<section class="tf-slider">
    <div class="swiper-container slider" style="width: 100%; height: 100%;">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="slider-inner flex home-1">
                        <div class="slider-content">
                            <h1 class="heading">Revolutionizing Your Shopping Experience with Competitive Bidding</h1>
                            <p class="sub-heading">Join a community where competitive bidding meets exceptional savings, making every purchase a win.</p>
                            <div class="button-slider">
                                <a href="{{ url('product') }}" class="sc-button btn-bordered-white style letter"><span>All Product</span></a>

                                @if(Auth::check() && Auth::user()->login_type == '1')
                                    <a href="{{ Auth::check() ? url('sell') : url('login') }}" class="sc-button btn-bordered-white style file">
                                        <span>Sell Now</span>
                                    </a>
                                @else
                                    <a href="{{ Auth::check() ? url('buy') : url('login') }}" class="sc-button btn-bordered-white style file">
                                        <span>Buy Now</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="slider-img" style="display: flex; justify-content: center; align-items: center;">
                            <div class="img-home-1" style="flex: 1; display: flex; justify-content: center; align-items: center;">
                                <img src="{{ url('frontend/assets/images/slider/Object.png') }}" alt="Image" style="width: 100%; max-width: 600px; height: auto;">
                            </div>
                        </div>
                    </div>
                </div><!-- item-->
            </div>
            
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="slider-inner style-2 home-1 flex">
                            <div class="slider-content">
                                <h1 class="heading">Experience Smart Shopping with Bidwise</h1>
                                <p class="sub-heading">Discover an innovative platform that connects buyers and sellers, offering unique deals through exciting bidding opportunities.</p>
                                <div class="button-slider">
                                    <a href="{{ url('product') }}" class="sc-button btn-bordered-white style letter"><span>All Product</span></a>

                                    @if(Auth::check() && Auth::user()->login_type == '1')
                                        <a href="{{ Auth::check() ? url('sell') : url('login') }}" class="sc-button btn-bordered-white style file">
                                            <span>Sell Now</span>
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="slider-img" style="display: flex; justify-content: center; align-items: center;">
                                <!-- Left Image Section -->
                                <div class="img-left" style="flex: 1; display: flex; justify-content: center; align-items: center;">
                                    <div class="img-1">
                                        <img src="{{ url('frontend/assets/images/slider/Object-2.png') }}" alt="Image" style="width: 100%; max-width: 600px; height: auto;">
                                    </div>
                                </div>
                                
                                <!-- Right Image Section (empty for now) -->
                                <div class="img-right" style="flex: 1;">
                                    <!-- Add images here if needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- item-->
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next btn-slide-next"></div>
        <div class="swiper-button-prev btn-slide-prev"></div>
    </div>
</section>


<section class="tf-live-auctions tf-section bg-color-1">
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
                <div class="swiper-container live-auc">
                    <div class="swiper-wrapper">
                        @if(Auth::check() && Auth::user()->login_type == '0')
                            @foreach ($auction_products as $auction_product)
                                <div class="swiper-slide">
                                    <div class="slider-item">
                                        <div class="sc-product-item">
                                            <div class="product-img active">
                                                @foreach ($auction_product->images as $image)
                                                    <img style="width:100%; height:30vh;"
                                                        src="{{ asset('storage/' . $image->product_image) }}" alt="Image">
                                                @endforeach
                                                <a href="#" data-toggle="modal" data-target="#popup_bid{{$auction_product->id}}"
                                                    class="sc-button style letter"><span>Place Bid</span></a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="title"><a
                                                href="{{ route('product.detail', $auction_product->id) }}">‘’{{$auction_product->title}}’’</a>
                                                </h5>

                                                <div class="product-price">
                                                    <div class="title">Current Bid</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item-->
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next btn-slide-next "></div>
                    <div class="swiper-button-prev btn-slide-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-latest-collections tf-section bg-color-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sc-heading style-2">
                    <div class="content-left">
                        <div class="inner">
                            <h3>Latest Collections</h3>
                            <p class="desc">Most popular gaming digital nft market place </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="swiper-container latest-coll style-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide tf-col-item">
                            <div class="slider-item">
                                <div class="sc-product-item style-3 bg-color-dark">
                                    <div class="product-img ">
                                        <img src="{{ url('frontend/assets/images/product-item/item-5.jpg') }}"
                                            alt="Image">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="sc-button style letter"><span>Place Bid</span></a>
                                        <label>BSC</label>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                Smoke Premium’’</a> </h5>
                                        <div class="product-author flex mg-bt-0">
                                            <div class="avatar">
                                                <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M.
                                                        Bivens</a></div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- item-->
                        </div>
                        <div class="swiper-slide tf-col-itemx2">
                            <div class="slider-item">
                                <div class="sc-product-item style-4 bg-color-dark">
                                    <div class="product-img flex">
                                        <div class="img-left">
                                            <img src="{{ url('frontend/assets/images/product-item/item-6.jpg') }}"
                                                alt="Image">
                                            <label>BSC</label>
                                        </div>
                                        <div class="img-right">
                                            <div class="top-img flex">
                                                <img src="{{ url('frontend/assets/images/product-item/item-7.jpg') }}"
                                                    alt="Image">
                                                <img src="{{ url('frontend/assets/images/product-item/item-8.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="bottom-img">
                                                <img src="{{ url('frontend/assets/images/product-item/item-9.jpg') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="title"><a href="{{url('product-detail')}}">‘’Multi-purpose 3D
                                                Space Rocket With Animate Real Special Smoke Premium Quality
                                                Gaming’’</a> </h5>
                                        <div class="product-author flex mg-bt-0">
                                            <div class="left flex">
                                                <div class="avatar">
                                                    <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}"
                                                        alt="Image">
                                                </div>
                                                <div class="infor">
                                                    <div class="author-name"><a href="author.html">Daniel M.
                                                            Bivens</a></div>
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
                            </div><!-- item-->
                        </div>
                        <div class="swiper-slide tf-col-item">
                            <div class="slider-item">
                                <div class="sc-product-item style-3 bg-color-dark">
                                    <div class="product-img ">
                                        <img src="{{ url('frontend/assets/images/product-item/item-10.jpg') }}"
                                            alt="Image">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="sc-button style letter"><span>Place Bid</span></a>
                                        <label>BSC</label>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                Smoke Premium’’</a> </h5>
                                        <div class="product-author flex mg-bt-0">
                                            <div class="avatar">
                                                <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M.
                                                        Bivens</a></div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- item-->
                        </div>
                        <div class="swiper-slide tf-col-item">
                            <div class="slider-item">
                                <div class="sc-product-item style-3 bg-color-dark">
                                    <div class="product-img ">
                                        <img src="{{ url('frontend/assets/images/product-item/item-11.jpg') }}"
                                            alt="Image">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="sc-button style letter"><span>Place Bid</span></a>
                                        <label>BSC</label>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                Smoke Premium’’</a> </h5>
                                        <div class="product-author flex mg-bt-0">
                                            <div class="avatar">
                                                <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M.
                                                        Bivens</a></div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- item-->
                        </div>

                        <div class="swiper-slide tf-col-itemx2">
                            <div class="slider-item">
                                <div class="sc-product-item style-4 bg-color-dark">
                                    <div class="product-img flex">
                                        <div class="img-left">
                                            <img src="{{ url('frontend/assets/images/product-item/item-6.jpg') }}"
                                                alt="Image">
                                            <label>BSC</label>
                                        </div>
                                        <div class="img-right">
                                            <div class="top-img flex">
                                                <img src="{{ url('frontend/assets/images/product-item/item-7.jpg') }}"
                                                    alt="Image">
                                                <img src="{{ url('frontend/assets/images/product-item/item-8.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="bottom-img">
                                                <img src="{{ url('frontend/assets/images/product-item/item-9.jpg') }}"
                                                    alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="title"><a href="{{url('product-detail')}}">‘’Multi-purpose 3D
                                                Space Rocket With Animate Real Special Smoke Premium Quality
                                                Gaming’’</a> </h5>
                                        <div class="product-author flex mg-bt-0">
                                            <div class="left flex">
                                                <div class="avatar">
                                                    <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}"
                                                        alt="Image">
                                                </div>
                                                <div class="infor">
                                                    <div class="author-name"><a href="author.html">Daniel M.
                                                            Bivens</a></div>
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
                            </div><!-- item-->
                        </div>
                        <div class="swiper-slide tf-col-item">
                            <div class="slider-item">
                                <div class="sc-product-item style-3 bg-color-dark">
                                    <div class="product-img ">
                                        <img src="{{ url('frontend/assets/images/product-item/item-10.jpg') }}"
                                            alt="Image">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                                            class="sc-button style letter"><span>Place Bid</span></a>
                                        <label>BSC</label>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="title"><a href="{{url('product-detail')}}">‘’3D Space Rocket With
                                                Smoke Premium’’</a> </h5>
                                        <div class="product-author flex mg-bt-0">
                                            <div class="avatar">
                                                <img src="{{ url('frontend/assets/images/avatar/avt-7.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M.
                                                        Bivens</a></div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
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

<section class="tf-best-seller">
    <div class="best-seller-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="sc-heading style-2">
                    <div class="content-left">
                        <div class="inner">
                            <h3>Best Sellers</h3>
                            <p class="desc">Most popular gaming digital nft market place </p>
                        </div>
                    </div>
                    <div class="content-right">
                        <button class="sc-button style letter style-2"><span>Explore More</span> </button>
                    </div>
                </div>
            </div>
            @foreach ($seller as $user)

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="sc-author">
                        <div class="card-avatar">
                            <img src="{{ asset('storage/' . $user->image) }}" alt="">
                        </div>
                        <div class="infor">
                            <h6>
                                <a href="{{ route('seller_profile', ['business_username' => $user->business_username]) }}">
                                    {{ $user->name }}
                                </a>
                            </h6>
                            <a href="{{ route('seller_profile', ['business_username' => $user->business_username]) }}"
                                class="sc-button btn-bordered-white">
                                <span>Explore</span>
                            </a>
                        </div>
                    </div>
                </div>


            @endforeach

            
            <!-- <div class="col-lg-2 col-md-4 col-6">
                <div class="sc-author end">
                    <div class="card-avatar">
                        <img src="{{ url('frontend/assets/images/avatar/avt-6.jpg') }}" alt="">
                    </div>
                    <div class="infor">
                        <h6> <a href="author.html">Mizanur Mango</a> </h6>
                        <div class="details">523.7 ETH</div>
                    </div>
                    <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="tf-trendy-collections tf-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sc-heading style-2">
                    <div class="content-left">
                        <div class="inner">
                            <h3>Trendy Collection</h3>
                            <p class="desc">Most popular gaming digital items </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fl-item col-xl-4 col-lg-4 col-md-6 mt-5">
                <div class="sc-product-item style-5">
                    <div class="product-img">
                        <img style="width:100%; height:35vh;"
                            src="{{ url('frontend/assets/images/product-item/Headphones.webp')}}" alt="Image">
                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                            class="sc-button style letter"><span>Place Bid</span></a>
                    </div>
                    <div class="product-content">
                        <h5 class="title"><a href="item-details.html">‘’Wireless Bluetooth Headphones’’</a> </h5>
                        <p>These sleek, wireless Bluetooth headphones provide excellent sound quality with
                            noise-canceling features. Perfect for music lovers on the go with up to 20 hours of battery
                            life.</p>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</section>

<section class="tf-category tf-section">
    <div class="category-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="sc-heading style-2">
                    <div class="content-left">
                        <div class="inner">
                            <h3>Popular Categories</h3>
                            <p class="desc">Most popular Categories At Market Place </p>
                        </div>
                    </div>
                    <div class="content-right">
                        <a href="{{url('/category')}}" class="sc-button style letter style-2"><span>Browse More</span>
                        </a>
                    </div>
                </div>
            </div>
            @foreach ($category as $cat)

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="sc-category">
                        <div class="card-media">
                            <img src="{{ asset('storage/' . $cat->cat_image) }}" alt="">
                        </div>
                        <div class="card-content">
                            <h5><a href="{{url('/category')}}">{{$cat->name}}</a></h5>
                            <p>{{$cat->cat_desc }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="new-letter">
    <div class="container">
        <div class="new-letter-inner style-2 flex">
            <div class="new-letter-content">
                <h3 class="heading">Newsletters</h3>
                <p class="sub-heading">Most popular gaming digital nft market place </p>
            </div>
            <div class="new-letter-img">
                <div class="form-subcribe">
                    <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                        <input name="email" value="" class="email" type="email" placeholder="Enter Email Address"
                            required="">
                        <button name="submit" type="submit" id="submit"
                            class="sc-button style letter style-2"><span>Browse More</span> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection