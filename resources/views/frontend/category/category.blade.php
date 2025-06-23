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
                                    <h2 class="heading">All Categories</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li>Category</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section best-seller-page style-2">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="swiper-container author-best pd-bt-50">
                                <div class="swiper-wrapper">
                                    @foreach ($data as $cat)
                                    <div class="swiper-slide" style="height-max: 300px">
                                        <div class="slider-item">
                                            <div class="sc-author active" style="margin: auto;">
                                                <div class="card-avatar" style="width: 100px; height: 100px; overflow: hidden; border-radius: 50%; margin: auto; padding-bottom: 16px;">
                                                    <img src="{{ asset('storage/'.$cat->cat_image) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                                </div>

                                                <div class="infor">
                                                    <h6> <a href="author.html">{{$cat->name}}</a> </h6>
                                                    <div class="details">{{$cat->cat_desc }}</div>
                                                </div>
                                                <a href="#" class="sc-button btn-bordered-white"><span>View Item</span></a>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    @endforeach


                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
{{--
            <section class="tf-section creators-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading">
                                <h3>Our Creators</h3>
                                <p class="desc">Most popular gaming digital nft market place </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sc-product-item style-3">
                                <div class="product-img ">
                                    <img src="assets/images/product-item/item-5.jpg" alt="Image">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                    <a href="#" class="button-follow">Follow</a>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With Smoke
                                            Premium’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="avatar">
                                            <img src="assets/images/avatar/avt-7.jpg" alt="Image">
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
                                        <img src="assets/images/product-item/item-6.jpg" alt="Image">
                                    </div>
                                    <div class="img-right">
                                        <div class="top-img flex">
                                            <img src="assets/images/product-item/item-7.jpg" alt="Image">
                                            <img src="assets/images/product-item/item-8.jpg" alt="Image">
                                        </div>
                                        <div class="bottom-img">
                                            <img src="assets/images/product-item/item-9.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’Multi-purpose 3D Space Rocket With
                                            Animate Real Special Smoke Premium Quality Gaming’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="left flex">
                                            <div class="avatar">
                                                <img src="assets/images/avatar/avt-7.jpg" alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M. Bivens</a>
                                                </div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button-follow">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sc-product-item style-3 mg-bt-0-mb">
                                <div class="product-img ">
                                    <img src="assets/images/product-item/item-10.jpg" alt="Image">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                    <a href="#" class="button-follow">Follow</a>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With Smoke
                                            Premium’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="avatar">
                                            <img src="assets/images/avatar/avt-7.jpg" alt="Image">
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
                                        <img src="assets/images/product-item/item-25.jpg" alt="Image">
                                    </div>
                                    <div class="img-right">
                                        <div class="top-img flex">
                                            <img src="assets/images/product-item/item-26.jpg" alt="Image">
                                            <img src="assets/images/product-item/item-27.jpg" alt="Image">
                                        </div>
                                        <div class="bottom-img">
                                            <img src="assets/images/product-item/item-28.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’Multi-purpose 3D Space Rocket With
                                            Animate Real Special Smoke Premium Quality Gaming’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="left flex">
                                            <div class="avatar">
                                                <img src="assets/images/avatar/avt-7.jpg" alt="Image">
                                            </div>
                                            <div class="infor">
                                                <div class="author-name"><a href="author.html">Daniel M. Bivens</a>
                                                </div>
                                                <span>Creator</span>
                                            </div>
                                        </div>
                                        <a href="#" class="button-follow">Follow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sc-product-item style-3">
                                <div class="product-img ">
                                    <img src="assets/images/product-item/item-19.jpg" alt="Image">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                    <a href="#" class="button-follow">Follow</a>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With Smoke
                                            Premium’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="avatar">
                                            <img src="assets/images/avatar/avt-7.jpg" alt="Image">
                                        </div>
                                        <div class="infor">
                                            <div class="author-name"><a href="author.html">Daniel M. Bivens</a></div>
                                            <span>Creator</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sc-product-item style-3">
                                <div class="product-img ">
                                    <img src="assets/images/product-item/item-29.jpg" alt="Image">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                    <a href="#" class="button-follow">Follow</a>
                                </div>
                                <div class="product-content">
                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With Smoke
                                            Premium’’</a> </h5>
                                    <div class="product-author flex mg-bt-0">
                                        <div class="avatar">
                                            <img src="assets/images/avatar/avt-7.jpg" alt="Image">
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

            <section class="new-letter bg-newletter">
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
                            <img src="assets/images/background/img-newletter.png" alt="Image">
                        </div>
                    </div>
                </div>
            </section>

@endsection
