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
                                    <h2 class="heading">Log In</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="{{ url('/')}}">Home</a></li>
                                        <li>Log In</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-section login-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-create-item-content">
                                <div class="form-create-item">
                                    <div class="sc-heading">
                                        <h3>Login Your Account</h3>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                    @if (Session::has('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif
                                    <form id="create-item-1"action="{{url('login_user')}}" method="Post"  accept-charset="utf-8">
                                        @csrf
                                        @csrf
                                        <input name="email" value="" type="text" placeholder="User Name/Email Address"
                                            required="">
                                        <input name="password" value="" type="password" placeholder="Password"
                                            required="">
                                        <div class="input-group style-2 ">
                                            <div class="btn-check">
                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">Remember Me</label>
                                            </div>
                                        </div>
                                        <button name="submit" type="submit"
                                            class="sc-button style letter style-2"><span>Sign In</span> </button>
                                    </form>
                                    <div class="other-login">
                                        <div class="text">Or</div>
                                        <div class="widget-social">
                                            <ul>
                                                <li><a href="{{ url('register')}}" title="Register Here"><i class="fas fa-user-plus"></i></a>
                                                </li>
                                                <li><a href="#" title="Google Sign Up"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-background">
                                    <img src="{{ url('/frontend/assets/images/background/img-login.jpg')}}" alt="">
                                </div>
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
                            <img src="assets/images/background/img-newletter.png" alt="Image">
                        </div>
                    </div>
                </div>
            </section>
@endsection
