@extends('frontend.layout.main')
@section('main-container')
<!-- page title -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (Auth::check() && Auth::user()->login_type == 1)
    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner flex">
                        <div class="page-title-heading">
                            <h2 class="heading">Seller Profile</h2>
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
    <!-- <section class="tf-section login-page register-page">
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
                                                                            </section> -->
    <section>
        <div class="container" style="margin-top:70px;">
            <div class="row  mx-auto">
                <div class="col-lg-8 mx-auto">

                    <div class="card mb-4"
                        style="background: transparent; border: 1px solid white; color: white; border-radius: 20px;">
                        @if($user->image)
                            <div class="card-body d-flex align-items-center py-5" style="margin-left:90px;">
                                <!-- Left side: Image -->

                                <div class="left-side text-center">
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image"
                                        class="img-thumbnail rounded-circle img-fluid" style="width: 150px;">
                                </div>
                        @else
                            <div class="left-side text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            </div>
                        @endif


                            <!-- Right side: Details -->
                            <div class="right-side" style="flex: 1;margin-left:90px;">
                                <h5 class="my-3">{{$user->business_username}}</h5>
                                <p class="text-white mb-2"><strong>Full Name: </strong>{{$user->name}} {{$user->last_name}}
                                </p>
                                <p class="text-white mb-2"><strong>Email: </strong>{{$user->email}}</p>
                            </div>
                        </div>
                        <div class="col-12 text-center mb-5 mt-5 mx-auto">
                            <a href="{{url('edit-profile')}}" class="sc-button style letter style-2"><span>Update
                                    Profile</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mb-5 mt-5 mx-auto">
                    @if ($product_count >= 6)
                        <a href="{{url('add-product')}}" class="sc-button style letter style-2 disabled-link">
                            <span>Add new Products</span>
                        </a>
                    @else
                        <a href="{{url('add-product')}}" class="sc-button style letter style-2"><span>Add new
                                Products</span></a>
                    @endif
                </div>
            </div>
        </div>

        <section class="tf-section trendy-colection-page style-2">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)

                        <div class="fl-item col-xl-4 col-lg-4 col-md-6">
                            <div class="sc-product-item style-5">
                                <div class="dropdown-wrapper position-absolute top-0 end-0 mt-2 mr-2">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        onclick="toggleDropdown('dropdownMenu{{$product->id}}')">
                                        <i class="fas fa-bars"></i> <!-- Hamburger Icon -->
                                    </button>
                                    <div id="dropdownMenu{{$product->id}}" class="dropdown-menu-custom" style="display: none;">
                                        <a href="{{ route('products.edit', $product->id) }}" class="dropdown-item">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Are you sure you want to delete this product?');">
                                                Delete
                                            </button>
                                        </form>
                                        @if($product->status)
                                            <form action="{{ route('products.deactivate', $product->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Deactivate</button>
                                            </form>
                                        @else
                                            <form action="{{ route('products.activate', $product->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Activate</button>
                                            </form>
                                        @endif
                                        <button href="#" class="dropdown-item"
                                            onclick="openModal('modal{{$product->id}}')">Preview</button>

                                    </div>
                                </div>
                                <div class="product-img" style="height: 200px; overflow: hidden;">
                                    @if($product->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                            alt="Product Image" style="width: 100%; height: auto;">
                                    @endif
                                </div>
                                <div class="product-content" style="height: 100px; overflow: hidden;">
                                    <h5 class="title"><a href="">‘’{{$product->title}}’’</a></h5>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>

                        <div id="modal{{$product->id}}" class="modal" style="display: none;">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal('modal{{$product->id}}')">&times;</span>
                                <h3>Bids for {{ $product->title }}</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Bidder Name</th>
                                            <th>Bid Amount</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product->bids as $bid)
                                            <tr>
                                                <td>{{ $bid->user->business_username }}</td>
                                                <td>{{ $bid->bid_amount }}</td>
                                                <td>{{ $bid->quantity }}</td>
                                                <td>{{ $bid->status }}</td>
                                                <td>
                                                    <form action="{{ route('bids.accept', $bid->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Accept</button>
                                                    </form>
                                                    <form action="{{ route('bids.reject', $bid->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Reject</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>


        <section class="tf-section trendy-colection-page style-2">
            <div class="container">
                <h1 class="mb-5">Ratings & Reviews</h1>
                <p class="mb-5"> <strong>Average Rating: {{ number_format($user->rating, 1) }} based on {{ $rating_count }}
                        reviews</strong></p>
                <div class="row">
                    @foreach ($ratings as $rating)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                            <div class="sc-product-item style-5">
                                <div class="product-img" style="height: 100px; width: 100px; overflow: hidden; margin: 0 auto;">
                                    <img src="{{ asset('storage/' . $rating->buyer->image) }}" alt="Buyer Image"
                                        style="width: 100%; height: auto; border-radius: 50%;">
                                </div>
                                <div class="product-content" style="height: 150px; overflow: hidden; text-align: center;">
                                    <h5 class="title">
                                        <strong>{{ $rating->buyer->name }}</strong>
                                    </h5>
                                    <div class="star-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $rating->rating)
                                                <span class="star filled">&#9733;</span>
                                            @else
                                                <span class="star">&#9733;</span>
                                            @endif
                                        @endfor
                                    </div>
                                    <p class="mt-2">{{ $rating->review }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                if (myRegExp.test(idToTest)) {
                    return true;
                }
                else {
                    return false;
                }
            }

            //     password.onkeyup = validatePassword;
            //     confirmPassword.onkeyup = validatePassword;
            // });

            function toggleDropdown(id) {
                const dropdown = document.getElementById(id);
                const isVisible = dropdown.style.display === 'block';
                dropdown.style.display = isVisible ? 'none' : 'block';
            }

            document.addEventListener('click', function (event) {
                const isDropdownButton = event.target.matches('.dropdown-toggle');
                if (!isDropdownButton) {
                    document.querySelectorAll('.dropdown-menu-custom').forEach(function (menu) {
                        menu.style.display = 'none';
                    });
                }
            });

            function openModal(modalId) {
                document.getElementById(modalId).style.display = "block";
            }

            function closeModal(modalId) {
                document.getElementById(modalId).style.display = "none";
            }


            const ratingValue = {{ $user->rating }};
            const maxStars = 5;

            const starContainer = document.getElementById('dynamicStars');

            for (let i = 1; i <= maxStars; i++) {
                const star = document.createElement('span');
                star.classList.add('star');
                star.innerHTML = '&#9733;';

                if (i <= ratingValue) {
                    star.classList.add('filled');
                }

                starContainer.appendChild(star);
            }
        </script>
@else
    <section class="tf-section login-page register-page">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-create-item-content">
                        <div class="form-create-item">
                            <h1>Page not found</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container" style="margin-top:70px;">
            <div class="row  mx-auto">
                <div class="col-lg-8 mx-auto">

                    <div class="card mb-4"
                        style="background: transparent; border: 1px solid white; color: white; border-radius: 20px;">
                        @if($user->image)
                            <div class="card-body d-flex align-items-center py-5" style="margin-left:90px;">


                                <div class="left-side text-center">
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image"
                                        class="img-thumbnail rounded-circle img-fluid" style="width: 150px;">
                                </div>
                        @else
                            <div class="left-side text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            </div>
                        @endif



                            <div class="right-side" style="flex: 1;margin-left:90px;">
                                <h5 class="my-3">{{$user->business_username}}</h5>
                                <p class="text-white mb-2"><strong>Full Name: </strong>{{$user->name}}
                                    {{$user->last_name}}
                                </p>
                                <p class="text-white mb-2"><strong>Email: </strong>{{$user->email}}</p>
                                <p class="text-white mb-2">
                                    <strong>Rating: </strong>
                                    <span id="dynamicStars"></span>
                                    <span id="ratingValue" style="display:none;">{{ $user->rating }}</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-12 text-center mb-5 mt-5 mx-auto">
                            <input type="hidden" name="seller_id" id="seller_id" value="{{ $user->id }}">
                            @if($rating)
                                <button class="sc-button style letter style-2" id="openRatingModal" hidden>
                                    <span>Give Rating</span>
                                </button>
                            @endif
                            @if(!$rating)
                                <button class="sc-button style letter style-2" id="openRatingModal">
                                    <span>Give Rating</span>
                                </button>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tf-section trendy-colection-page style-2">
        <div class="container">
            <h1 class="mb-5">Products</h1>
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
                                <h5 class="title"><a
                                        href="{{ route('product.detail', $product->id) }}">‘’{{$product->title}}’’</a></h5>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

    <section class="tf-section trendy-colection-page style-2">
        <div class="container">
            <h1 class="mb-5">Seller Ratings & Reviews</h1>
            <p class="mb-5"> <strong>Average Rating: {{ number_format($user->rating, 1) }} based on {{ $rating_count }}
                    reviews</strong></p>
            <div class="row">
                @foreach ($ratings as $rating)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                        <div class="sc-product-item style-5">
                            <div class="product-img" style="height: 100px; width: 100px; overflow: hidden; margin: 0 auto;">
                                <img src="{{ asset('storage/' . $rating->buyer->image) }}" alt="Buyer Image"
                                    style="width: 100%; height: auto; border-radius: 50%;">
                            </div>
                            <div class="product-content" style="height: 150px; overflow: hidden; text-align: center;">
                                <h5 class="title">
                                    <strong>{{ $rating->buyer->name }}</strong>
                                </h5>
                                <div class="star-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $rating->rating)
                                            <span class="star filled">&#9733;</span>
                                        @else
                                            <span class="star">&#9733;</span>
                                        @endif
                                    @endfor
                                </div>
                                <p class="mt-2">{{ $rating->review }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ratingModalLabel">Rate the Seller</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('rate.seller', $user->id) }}" method="POST">
                    @csrf
                    <div class="modal-body text-center">
                        <input type="hidden" name="seller_id" value="{{ $user->id }}">

                        <textarea name="review" class="form-control mt-3" rows="3"
                            placeholder="Write your review..."></textarea>

                        <div class="star-rating" id="starRating">
                            <span data-value="1">&#9733;</span>
                            <span data-value="2">&#9733;</span>
                            <span data-value="3">&#9733;</span>
                            <span data-value="4">&#9733;</span>
                            <span data-value="5">&#9733;</span>
                        </div>

                        <input type="hidden" name="rating" id="selectedRating">
                        <button type="submit" class="btn btn-success mt-3">Submit Rating</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endif
    @endsection

    @section('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            document.getElementById('openRatingModal').addEventListener('click', function () {
                $('#ratingModal').modal('show');
            });


            let ratingValue = parseFloat("{{ str_replace(',', '.', $user->rating) }}");
            const maxStars = 5;
            const starContainer = document.getElementById('dynamicStars');

            for (let i = 1; i <= maxStars; i++) {
                const star = document.createElement('span');
                star.classList.add('star');
                star.innerHTML = '&#9733;';


                if (i <= Math.floor(ratingValue)) {
                    star.classList.add('filled');
                }

                else if (i === Math.ceil(ratingValue) && ratingValue % 1 !== 0) {
                    star.classList.add('half-filled');
                }

                starContainer.appendChild(star);
            }


            let selectedRating = 0;


            const stars = document.querySelectorAll('#starRating span');
            stars.forEach(star => {
                star.addEventListener('click', function () {
                    selectedRating = this.getAttribute('data-value');
                    document.getElementById('selectedRating').value = selectedRating;
                    highlightStars(selectedRating);
                });
            });

            function highlightStars(rating) {
                stars.forEach(star => {
                    star.classList.toggle('selected', star.getAttribute('data-value') <= rating);
                });
            }
        });

    </script>

    @endsection