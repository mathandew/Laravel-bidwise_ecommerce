@extends('frontend.layout.main')
@section('main-container')
            <!-- page title -->
            @if (Auth::check() && Auth::user()->login_type == 0)
                        <section class="fl-page-title">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="page-title-inner flex">
                                            <div class="page-title-heading">
                                                <!-- <h2 class="heading">Become A Seller</h2> -->
                                            </div>
                                            <div class="breadcrumbs">
                                                <ul>
                                                    <!-- <li><a href="{{ url('/')}}">Become A Seller</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tf-section login-page register-page">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-create-item-content">
                                            <div class="form-create-item">
                                                <div class="sc-heading">
                                                    <h3>Become A Seller</h3>
                                                    <p class="desc">Sale your products in most popular market place</p>
                                                </div>
                                                @if (Session::has('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('status') }}
                                                </div>
                                            @endif
                                                <form id="create-item-1" action="{{url('register_seller')}}" method="Post" accept-charset="utf-8" onsubmit="return validateCNIC()">
                                                    @csrf
                                                    <input name="cnic" id="cnic" value="" type="text"  data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X" 
                                                        required="">
                                                    <input name="contact_no" value="" type="text" placeholder="Contact Number"
                                                    required="">
                                                    <input name="b_username" value="" type="text" placeholder="Business Username"
                                                        required="">
                                                    <button name="submit" type="submit"
                                                        class="sc-button style letter style-2"><span>Register Now</span> </button>
                                                </form>

                                            </div>
                                            <div class="form-background">
                                                <img src="{{ url('/frontend/assets/images/background/img-register.jpg')}}" alt="">
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
                                        <img src="{{ url('/frontend/assets/images/background/img-newletter.png')}}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </section>
                        
            @endsection

            @section('scripts')

            <script>
                // document.addEventListener('DOMContentLoaded', function() {
                    // var password = document.getElementById('password');
                    // var confirmPassword = document.getElementById('confirm_password');
                    // var message = document.getElementById('password-message');

            function validateCNIC() {
                var idToTest = document.getElementById('cnic').value;
                myRegExp = new RegExp(/\d{5}-\d{7}-\d/);  
                if(myRegExp.test(idToTest)) 
                {     
                    return true;
                } 
                else 
                {     
                    return false;
                }
            }

                //     password.onkeyup = validatePassword;
                //     confirmPassword.onkeyup = validatePassword;
                // });
            </script>
        @else
            <section class="tf-section login-page register-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-create-item-content">
                                <div class="form-create-item">
                                <h1>Page not found</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endsection
