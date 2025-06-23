@extends('frontend.layout.main')
@section('main-container')
<style>
    .upload-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 5px 0px 15px 0px;
    }

    .uploadFile {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .uploadFile .filename {
        margin-right: 10px;
    }

    .upload-box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 70px;
        border: 2px;
        border-radius: 8px;
        cursor: pointer;
        background-color: #5e5e74a1;
        margin-right: 20px;
        /* opacity: 0.7; */
        position: relative;
    }

    .upload-box i {
        font-size: 24px;
        color: #ffffff;
    }

    .image-preview {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .thumbnail {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        transition: opacity 0.3s ease;
    }

    .remove-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: transparent;
        /* No background color */
        color: white;
        /* Icon color */
        border: none !important;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 16px;
        opacity: 0;
        /* Hidden by default */
        transition: opacity 0.3s ease;
    }

    .image-container:hover .thumbnail {
        opacity: 0.5;
        /* Reduce opacity of the image on hover */
    }

    .image-container:hover .remove-btn {
        opacity: 1;
        /* Show delete button on hover */
    }

    .keyword-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 550px;
        margin: 10px 0;
    }

    .keywords-input {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 5px;
        border-radius: 5px;
    }

    #keywords-list {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0 0 0 10px;
        /* Add margin to separate the list from the input */
        padding: 0;
    }

    #keywords-list li {
        background-color: #4e4e62;
        color: white;
        padding: 5px 15px;
        margin: 5px 5px 5px 0;
        border-radius: 7px;
        display: flex;
        align-items: center;
    }

    #keywords-list li .remove-keyword {
        margin-left: 5px;
        cursor: pointer;
        font-weight: bold;
        color: white;
    }

    #keyword-input {
        border: none;
        flex: 1;
        padding: 5px;
        min-width: 100px;
    }

    #keyword-input:focus {
        outline: none;
    }

    .error-message {
        color: red;
        margin-top: 5px;
        font-size: 14px;
        display: none;
    }
</style>

<!-- page title -->
<section class="fl-page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-inner flex">
                    <div class="page-title-heading">
                        <h2 class="heading">Sell Product</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Sell</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="tf-section create-item pd-top-0 mg-t-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-create-item-content">
                    <div class="form-create-item">
                        <div class="sc-heading">
                            <h3>Create Item</h3>
                            <p class="desc">Post Your Porduct Detail Here to get sell it faster </p>
                        </div>
                        @if (Session::has('status'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                        <form id="create-item-1" action="{{url('/sell-product')}}" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="upload-container">
                                <div id="uploadBox" class="upload-box">
                                    <i class="far fa-plus"></i>
                                </div>
                                <input type="file" class="inputfile form-control" name="pro_image[]" multiple
                                    style="display: none;" required>
                                <div class="image-preview"></div>
                            </div>
                            <p id="image-limit-msg" style="color: red; font-size: 14px;">You can upload up to 15 images.
                            </p>


                            <div class="input-group">
                                <input name="title" value="" type="text" placeholder="Item Title" maxlength="70"
                                    required>
                            </div>
                            <textarea id="comment-message" name="description" tabindex="4" placeholder="Description"
                                aria-required="true" required></textarea>
                            <div class="input-group" style="margin-bottom: 10px">
                                <select name="cat_id" id="category" placeholder="category" style="margin-right: 10px"
                                    required>
                                    <option>Select Category</option>
                                    @foreach ($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                <select name="condition" id="condition" placeholder="Condition" required>
                                    <option>Item Condition</option>
                                    <option value="box packed">Box Packed</option>
                                    <option value="new">New</option>
                                    <option value="used">Used</option>
                                    <option value="10/9">10/9</option>
                                    <option value="10/8">10/8</option>
                                    <option value="low">Low</option>
                                </select>
                            </div>
                            <input id="itemPrice" name="price" value="" type="text" placeholder="Item Price"
                                oninput="formatPrice(this)" style="margin-bottom: 10px" required>

                            <div class="input-group">
                                <input name="city" value="" type="text" placeholder="City" required>
                                <input name="area" value="" type="text" placeholder="Area" required>
                            </div>
                            <div class="input-group">
                                <div class="keyword-container">
                                    <div class="keywords-input">
                                        <input type="text" id="keyword-input" placeholder="Add up to 5 keywords"
                                            maxlength="30">
                                        <ul id="keywords-list"></ul>
                                        <input type="hidden" name="keywords" id="keywords-hidden">

                                    </div>
                                    <p id="error-message" class="error-message"></p>
                                </div>
                            </div>


                            <div class="input-group style-2">
                                <div class="btn-check">
                                    <input type="radio" id="sale" name="type" value="0" onchange="togglePriceField()"
                                        required>
                                    <label for="sale">Fixed Price</label>
                                </div>
                                <div class="btn-check">
                                    <input type="radio" id="price" name="type" value="1" onchange="togglePriceField()"
                                        required>
                                    <label for="price">Auction</label>
                                </div>
                            </div>
                            @if ($product_count >= 6)
                                <button name="submit" type="submit" id="submit" class="sc-button style letter style-2"
                                    style="pointer-events: none;" disabled><span>Create Item</span> </button>
                            @else
                                <button name="submit" type="submit" id="submit"
                                    class="sc-button style letter style-2"><span>Create Item</span> </button>
                            @endif
                        </form>
                    </div>
                    <div class="form-background">
                        <img src="{{ url('frontend/assets/images/background/img-create-item.jpg')}}" alt="">
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
                    <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
                        <input name="email" value="" class="email" type="email" placeholder="Enter Email Address"
                            required="">
                        <button name="submit" type="submit" class="sc-button style letter style-2"><span>Browse
                                More</span> </button>
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

@section('scripts')

<script>

    function togglePriceField() {
        const itemPriceField = document.getElementById("itemPrice");
        const saleRadioButton = document.getElementById("sale");

        if (saleRadioButton.checked) {
            itemPriceField.disabled = false;
            itemPriceField.required = true;
        } else {
            itemPriceField.disabled = true;
            itemPriceField.required = false;
            itemPriceField.value = ""; 
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const inputFile = document.querySelector('.inputfile');
        const uploadBox = document.getElementById('uploadBox');
        const imagePreview = document.querySelector('.image-preview');

        inputFile.addEventListener('change', function (event) {
            const files = event.target.files;
            const existingImages = [...imagePreview.querySelectorAll('.thumbnail')].map(img => img.src);

            for (const file of files) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    if (!existingImages.includes(e.target.result)) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('thumbnail');

                        const div = document.createElement('div');
                        div.classList.add('image-container');
                        div.appendChild(img);

                        const removeBtn = document.createElement('button');
                        removeBtn.classList.add('remove-btn');
                        removeBtn.innerHTML = '<i class="fas fa-trash"></i>'; // Use FontAwesome trash icon
                        removeBtn.onclick = function () {
                            div.remove();
                        };

                        div.appendChild(removeBtn);
                        imagePreview.appendChild(div);
                    }
                };
                reader.readAsDataURL(file);
            }
        });

        uploadBox.addEventListener('click', function () {
            inputFile.click();
        });
    });

    function formatPrice(input) {
        // Remove any non-numeric characters except the dot
        let value = input.value.replace(/[^0-9.]/g, '');

        // Format the value with commas
        let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

        // Set the formatted value back to the input
        input.value = formattedValue;
    }


    const keywordInput = document.getElementById('keyword-input');
    const keywordsList = document.getElementById('keywords-list');
    const errorMessage = document.getElementById('error-message');
    const keywordsHiddenInput = document.getElementById('keywords-hidden');
    let keywords = [];

    keywordInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const keyword = keywordInput.value.trim();
            if (keyword && keywords.length < 5) {
                if (!keywords.includes(keyword)) {
                    keywords.push(keyword);
                    const li = document.createElement('li');
                    li.textContent = keyword;
                    const removeBtn = document.createElement('span');
                    removeBtn.textContent = 'x';
                    removeBtn.classList.add('remove-keyword');
                    removeBtn.addEventListener('click', function () {
                        keywordsList.removeChild(li);
                        keywords = keywords.filter(kw => kw !== keyword);
                        updateKeywordsInput();
                    });
                    li.appendChild(removeBtn);
                    keywordsList.appendChild(li);
                    keywordInput.value = '';
                    errorMessage.style.display = 'none';
                    updateKeywordsInput(); // Update hidden input
                } else {
                    errorMessage.textContent = 'Keyword already added.';
                    errorMessage.style.display = 'block';
                }
            } else if (keywords.length >= 5) {
                errorMessage.textContent = 'You can only add up to 5 keywords.';
                errorMessage.style.display = 'block';
            }
        }
    });

    function updateKeywordsInput() {
        // Join keywords array into a comma-separated string and set it to the hidden input
        keywordsHiddenInput.value = keywords.join(',');
    }

    document.getElementById('yourFormId').addEventListener('submit', function (e) {
        updateKeywordsInput(); // Ensure keywords are updated before submitting the form
    });

</script>
@endsection