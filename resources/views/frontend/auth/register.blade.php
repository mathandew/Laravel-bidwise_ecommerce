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
                                    <h2 class="heading">Register</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="{{ url('/')}}">Home</a></li>
                                        <li>Register</li>
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
                                        <h3>Create An Account</h3>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                    @if (Session::has('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif
                                    <form id="create-item-1" action="{{url('register_user')}}" method="Post" accept-charset="utf-8" onsubmit="return validateCNIC()">
                                        @csrf
                                        {{-- <div class="input-group">
                                            <input name="name" value="" type="text" placeholder="Last Name" required="">
                                        </div>
                                        <div class="input-group">
                                            <input name="date" value="" type="date" placeholder="Date OF Birth" required="">
                                        </div> --}}
                                        <input name="name" value="" type="text" placeholder="User Name"
                                            required="">
                                        <input name="phone_no" value="" type="text" placeholder="Phone Number"
                                        required="">
                                        <input name="email" value="" type="email" placeholder="Email Address"
                                            required="">
                                            <div class="input-group">
                                                <input id="password" name="password" type="password" placeholder="Password" required="">
                                                <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-Password" required="">
                                            </div>
                                            <div id="password-message" style="color: red; display: none;">
                                                Passwords do not match!
                                            </div>
                                        <div class="input-group style-2 ">
                                            <div class="btn-check">
                                                <input type="radio" checked id="buyer" onclick="checkRegType(this)" name="reg_type" class="mg-bt-0"
                                                    value="0">
                                                <label for="buyer">Become Buyer &nbsp;</label>
                                                <input type="radio" id="seller" name="reg_type" onclick="checkRegType(this)" class="mg-bt-0"
                                                    value="1">
                                                <label for="seller"> Become Seller</label>
                                            </div>
                                        </div>
                                        <input name="cnic" id="cnic" value="" type="text"  placeholder="XXXXX-XXXXXXX-X" 
                                             style="display:none">
                                        <div id="cnic-format" style="margin-bottom:5px;color: red; display: none;">
                                            CNIC format is wrong
                                        </div>
                                        <input name="b_username" id="b_username" value="" type="text" placeholder="Business Username"
                                             style="display:none">
                                        <div class="input-group style-2 ">
                                            <div class="btn-check">
                                                <input type="radio" id="html" name="fav_language" class="mg-bt-0"
                                                    value="HTML">
                                                <label for="html">Remember Me</label>
                                            </div>
                                        </div>
                                        <button name="submit" type="submit"
                                            class="sc-button style letter style-2"><span>Register Now</span> </button>
                                    </form>
                                    <div class="other-login">
                                        <div class="text">Or</div>
                                        <div class="widget-social">
                                            <ul>
                                                <li><a href="{{ url('login')}}" title="Sign In"><i class="fas fa-sign-in-alt"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
    function validateCNIC()
    {
        var idToTest = document.getElementById('cnic').value;
        myRegExp = new RegExp(/\d{5}-\d{7}-\d/);
        var radioValue = $("input[name='reg_type']:checked").val();
        if(regTypeVal == 1 && myRegExp.test(idToTest)) 
        {     
            $("#cnic-format").css('display','none');
            return true;
        } 
        else 
        {     
            $("#cnic-format").css('display','block');
            
            return false;
        }
    }

    function checkRegType(t)
    {
        var regTypeVal = $(t).val();
        if(regTypeVal == '1')
        {
            $("#cnic").css('display','block');
            $("#b_username").css('display','block');
            $("#cnic").attr("Require","");
            $("#b_username").attr("Require","");

        }
        else
        {
            $("#cnic").css('display','none');
            $("#b_username").css('display','none');
            ("#cnic").removeAttr("Require");
            $("#b_username").removeAttr("Require");
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        var password = document.getElementById('password');
        var confirmPassword = document.getElementById('confirm_password');
        var message = document.getElementById('password-message');

        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                message.style.display = 'block';
                confirmPassword.setCustomValidity('Passwords do not match');
            } else {
                message.style.display = 'none';
                confirmPassword.setCustomValidity('');
            }
        }

        password.onkeyup = validatePassword;
        confirmPassword.onkeyup = validatePassword;
    });
</script>
@endsection
