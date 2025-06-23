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

@if (Auth::check() && Auth::user()->login_type == 0)
    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner flex">
                        <div class="page-title-heading">
                            <h2 class="heading">Buyer Profile</h2>
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
                                    </div>
                                </div>
                                <div class="product-img" style="height: 200px; overflow: hidden;">
                                    @if($product->images->isNotEmpty())
                                        <img src="{{ asset('storage/' . $product->images->first()->product_image) }}"
                                            alt="Product Image" style="width: 100%; height: auto;">
                                    @endif
                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                        class="sc-button style letter"><span>Place Bid</span></a>
                                </div>
                                <div class="product-content" style="height: 100px; overflow: hidden;">
                                    <h5 class="title"><a href="item-details.html">‘’{{$product->title}}’’</a></h5>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
        <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-center text-white mb-4">Your Bids</h3>

                <table class="table table-bordered table-striped text-white">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Bid Amount</th>
                            <th>Quantity</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bids as $bid)
                            <tr>
                                <td>{{ $bid->product->title }}</td>
                                <td>{{ $bid->bid_amount }}</td>
                                <td>{{ $bid->quantity }}</td>
                                <td>{{ $bid->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $bid->status}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No bids found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection


        @section('scripts')

        <script>

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
        </script>
@else




@endif
    @endsection

    @section('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            document.getElementById('openRatingModal').addEventListener('click', function () {
                $('#ratingModal').modal('show');
            });

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