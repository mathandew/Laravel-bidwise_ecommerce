@extends('frontend.layout.main')
@section('main-container')
            <!-- page title -->
            @if (Auth::check())
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
                                        <h3>Become A Buyer</h3>
                                        <p class="desc">Sale your products in most popular market place</p>
                                    </div>
                                    @if (Session::has('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif
                                    <form id="create-item-1" action="{{url('register_buyer')}}" method="Post" accept-charset="utf-8" onsubmit="return validateCNIC()">
                                        @csrf
                                        <button name="submit" type="submit"
                                            class="sc-button style letter style-2"><span>Become Buyer</span> </button>
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
