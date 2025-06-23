@extends('frontend.layout.main')

@section('main-container')
<section class="fl-page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-inner flex">
                    <div class="page-title-heading">
                        <h2 class="heading">Update Profile</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Update Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Update Profile Form -->
<section class="tf-section login-page register-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-create-item-content">
                    <div class="form-create-item">
                        <div class="sc-heading">
                            <h3>Update Your Profile</h3>
                            <p class="desc">Manage your personal information here.</p>
                        </div>
                        @if (Session::has('status'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                        <form id="update-profile" action="{{ url('update-profile') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}" />
                            <input name="name" type="text" placeholder="First Name" value="{{ $user->name }}" required>
                            <input name="last_name" type="text" placeholder="Last Name" value="{{ $user->last_name }}"
                                required>
                            <input name="phone_no" type="text" placeholder="Phone Number" value="{{ $user->phone_no }}"
                                required>

                            <input name="email" type="email" placeholder="Email Address" value="{{ $user->email }}"
                                readonly disabled>

                            <input name="date_of_birth" type="date" value="{{ $user->date_of_birth }}" required>


                            <input name="cnic" id="cnic" type="text" placeholder="XXXXX-XXXXXXX-X"
                                value="{{ $user->cnic }}">
                            <div id="cnic-format" style="color: red; display: none;">CNIC format is wrong</div>

                            <input name="business_username" id="business_username" type="text"
                                placeholder="Business Username" value="{{ $user->business_username }}">
                            <input name="contact_number" type="text" placeholder="Contact Number"
                                value="{{ $user->contact_number }}">

                            <div class="upload-container">
                                <div id="uploadBox" class="upload-box">
                                    <i class="far fa-plus"></i>
                                </div>
                                <input type="file" class="inputfile form-control" name="pro_image"
                                    style="display: none;">
                                <div class="image-preview">
                                    @if($user->image)
                                        <img src="{{ asset('storage/' . $user->image) }}" class="thumbnail"
                                            alt="Profile Image">
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="sc-button style letter style-2">
                                <span>Update Profile</span>
                            </button>
                        </form>
                    </div>
                    <div class="form-background">
                        <img src="{{ url('/frontend/assets/images/background/img-register.jpg') }}"
                            alt="Background Image">
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
                <p class="sub-heading">Stay updated with the latest news</p>
                <div class="form-subcribe">
                    <form id="subscribe-form" action="#" method="GET" class="form-submit">
                        <input name="email" class="email" type="email" placeholder="Enter Email Address" required>
                        <button type="submit" class="sc-button style letter style-2"><span>Subscribe</span></button>
                    </form>
                </div>
            </div>
            <div class="new-letter-img">
                <img src="{{ url('/frontend/assets/images/background/img-newletter.png') }}" alt="Newsletter Image">
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>

    const inputFile = document.querySelector('.inputfile');
    const uploadBox = document.getElementById('uploadBox');
    const imagePreview = document.querySelector('.image-preview');

    inputFile.addEventListener('change', function (event) {
        const file = event.target.files[0];  // Get only the first selected file

        // Clear previous preview if any
        imagePreview.innerHTML = '';

        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('thumbnail');

            const div = document.createElement('div');
            div.classList.add('image-container');
            div.appendChild(img);

            const removeBtn = document.createElement('button');
            removeBtn.classList.add('remove-btn');
            removeBtn.innerHTML = '<i class="fas fa-trash"></i>';
            removeBtn.onclick = function () {
                div.remove();
                inputFile.value = '';  // Clear the input file value
            };

            div.appendChild(removeBtn);
            imagePreview.appendChild(div);
        };
        reader.readAsDataURL(file);  // Read the uploaded file
    });

    uploadBox.addEventListener('click', function () {
        inputFile.click();
    });


    function validateCNIC() {
        var cnic = document.getElementById('cnic').value;
        var cnicPattern = /\d{5}-\d{7}-\d/;
        var loginType = document.querySelector('input[name="login_type"]:checked').value;

        if (loginType === 'seller' && !cnicPattern.test(cnic)) {
            document.getElementById('cnic-format').style.display = 'block';
            return false;
        } else {
            document.getElementById('cnic-format').style.display = 'none';
            return true;
        }
    }

    function toggleBusinessFields(isSeller) {
        var cnicField = document.getElementById('cnic');
        var businessUsernameField = document.getElementById('business_username');

        if (isSeller) {
            cnicField.style.display = 'block';
            businessUsernameField.style.display = 'block';
        } else {
            cnicField.style.display = 'none';
            businessUsernameField.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        toggleBusinessFields(document.querySelector('input[name="login_type"]:checked').value === 'seller');
    });
</script>
@endsection