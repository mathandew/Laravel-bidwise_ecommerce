@extends('frontend.layout.main')
@section('main-container')

<!-- page title -->
@if($product->type == 1)
    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner flex">
                        <div class="page-title-heading">
                            <h2 class="heading">Auctions Details</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Auctions Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section item-details-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="item-media">
                        <div class="media">
                            @if($product->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                    alt="Product Image" style="width: 100%; height: auto;">
                            @endif
                        </div>
                        <div class="countdown style-2">
                            <span class="js-countdown" data-timer="516400" data-labels=" Days  , Hour , Mint ,Seco"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="content-item">
                        <h3>{{$product->title}}</h3>
                        <p class="mg-bt-42">{{$product->description}}</p>
                        <div class="author-item">
                            <div class="avatar">
                                @if($product->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                        alt="Product Image" style="width: 100%; height: auto;">
                                @endif
                            </div>
                            <div class="infor">
                                <div class="create">Owner By</div>
                                <h6><a href="author.html">{{$user->name}} {{$user->last_name}}</a> </h6>
                                <!-- <div class="widget-social">
                                        <ul>
                                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div> -->
                            </div>
                        </div>
                        <ul class="list-details-item">
                            @if($user_bid)
                            <li>
                                <span class="name">Your Bid</span><span class="price">${{$user_bid->bid_amount}}</span>
                            </li>
                            @endif
                            @if ($latest_bid)
                                <li>
                                    <span class="name">Current Bid</span><span class="price">${{$latest_bid->bid_amount}} placed
                                        {{ $latest_bid->created_at->diffForHumans() }}
                                        by {{ $latest_bid->user->name }}</span>
                                </li>
                            @else
                                <p>No bids have been placed on this product yet.</p>
                            @endif
                        </ul>
                        <div class="author-bid">

                        </div>
                        <div class="infor-bid">
                            <div class="content-left">
                                <h6>Highest Bid</h6>
                                <div class="price">{{ $highest_bid ? '$' . number_format($highest_bid, 2) : 'No bids yet' }}
                                </div>
                            </div>
                        </div>
                        @if(!$user_bid)
                        <a href="#" data-toggle="modal" data-target="#popup_bid{{$product->id}}"
                            class="sc-button style letter style-2 style-item-details"><span>Place Bid</span>
                        </a>
                        @else
                        <a href="#" data-toggle="modal" data-target="#popup_bid{{$product->id}}"
                            class="sc-button style letter style-2 style-item-details disabled-link" ><span>Place Bid</span>
                        </a>
                        @endif
                        <div class="flat-tabs themesflat-tabs">
                            <ul class="menu-tab tab-title">
                                <li class="item-title active">
                                    <span class="inner">Bids</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">History</span>
                                </li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner tab-content">
                                    @if ($bids->isNotEmpty())
                                        <ul class="bid-history-list">
                                            @foreach ($bids as $bid)
                                                <li>
                                                    <div class="content">
                                                        <div class="author-item">
                                                            <div class="avatar">
                                                                <img src="{{ asset('storage/' . $bid->user->image) }}" alt="">
                                                            </div>
                                                            <div class="infor">
                                                                <p>Bid listed for <span
                                                                        class="status">${{ number_format($bid->bid_amount, 2) }}</span>
                                                                    {{ $bid->created_at->diffForHumans() }}
                                                                    by <span class="creator">{{ $bid->user->name }}</span> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No bids available for this product.</p>
                                    @endif
                                </div>
                                <div class="content-inner tab-content">
                                    @if ($user_bid)
                                        <ul class="bid-history-list">

                                            @foreach ($bids as $bid)
                                                <li>
                                                    <div class="content">
                                                        <div class="author-item">
                                                            <div class="avatar">
                                                                <img src="{{ asset('storage/' . $bid->user->image) }}" alt="">
                                                            </div>
                                                            <div class="infor">
                                                                <p>Bid listed for <span
                                                                        class="status">${{ number_format($bid->bid_amount, 2) }}</span>
                                                                    {{ $bid->created_at->diffForHumans() }}
                                                                    by <span class="creator">{{ $bid->user->name }}</span> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>You haven't placed a bid on this product yet.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner flex">
                        <div class="page-title-heading">
                            <h2 class="heading">Product Details</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section item-details-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="item-media">
                        <div class="media">
                            @if($product->images->isNotEmpty())
                                <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                    alt="Product Image" style="width: 100%; height: auto;">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="content-item">
                        <h3>{{$product->title}}</h3>
                        <p class="mg-bt-42">{{$product->description}}</p>
                        <div class="author-item">
                            <div class="avatar">
                                @if($product->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                        alt="Product Image" style="width: 100%; height: auto;">
                                @endif
                            </div>
                            <div class="infor">
                                <div class="create">Owner By</div>
                                <h6><a href="author.html">{{$user->name}} {{$user->last_name}}</a> </h6>
                                <!-- <div class="widget-social">
                                        <ul>
                                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div> -->
                            </div>
                        </div>
                        <ul class="list-details-item">
                            <li>
                                <span class="name">Current Price</span><span class="price">${{$product->price}}</span>
                            </li>
                        </ul>
                        <a href="#" data-toggle="modal" data-target="#popup_bid"
                            class="sc-button style letter style-2 style-item-details"><span>Buy Now</span>
                        </a>
                        <div class="flat-tabs themesflat-tabs">
                            <ul class="menu-tab tab-title">
                                <li class="item-title">
                                    <span class="inner">History</span>
                                </li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner tab-content">
                                    <ul class="bid-history-list">

                                        <li>
                                            <div class="content">
                                                <div class="author-item">
                                                    <div class="avatar">
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="infor">
                                                        <p>You haven't buy this product yet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif


<section class="new-letter bg-newletter">
    <div class="container">
        <div class="new-letter-inner flex">
            <div class="new-letter-content">
                <h3 class="heading">Newsletters</h3>
                <p class="sub-heading">Most popular gaming digital nft market place </p>
                <div class="form-subcribe">
                    <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                        <input name="email" value="" class="email" type="email" placeholder="Enter Email Address"
                            required="">
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