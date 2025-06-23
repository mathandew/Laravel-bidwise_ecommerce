
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
                                    <h2 class="heading">Contact</h2>
                                </div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-contact tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="sc-contact-infor">
                                <h4>Need Help? Contact
                                    With Our Hotline</h4>
                                <div class="icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="infor">
                                    <a href="tel:012345678">+012 (345) 678 88</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sc-contact-infor">
                                <h4>Need Help? Contact
                                    With Our Hotline</h4>
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="infor">
                                    55 Main Street, 2nd Block,3rd Floor, New York
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sc-contact-infor">
                                <h4>Need Help? Contact
                                    With Our Hotline</h4>
                                <div class="icon">
                                    <i class="fal fa-envelope-open"></i>
                                </div>
                                <div class="infor">
                                    <a href="mailto:abc@gmail.com">hotlineinfo@gmail.com
                                        www.bidzen.net</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <iframe class="map-contact"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946234!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2zVGjDoG5oIHBo4buRIE5ldyBZb3JrLCBUaeG7g3UgYmFuZyBOZXcgWW9yaywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1640857108284!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </section>
            <section class="tf-section login-page contact-page pd-top-0">
                <div class="container">
                    <div class="row jtf-content-center">
                        <div class="col-md-8">
                            <div class="form-create-item-content">
                                <div class="form-create-item">
                                    <div class="sc-heading">
                                        <h3>Send Us Message</h3>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                    <form id="create-item-1" action="https://themesflat.co/html/bidzend/contact/contact-process.php" method="post"
                                        accept-charset="utf-8" novalidate="novalidate">
                                        <input type="text" id="name" class="tb-my-input" name="name" tabindex="1"
                                            placeholder="Your Full Name" value="" aria-required="true" required="">
                                        <input type="email" id="email" class="tb-my-input" name="email" tabindex="2"
                                            placeholder="Email Address" value="" aria-required="true" required="">
                                        <select class="valid">
                                            <option value="1">Subject</option>
                                            <option value="2">Subject</option>
                                            <option value="3">Subject</option>
                                        </select>
                                        <textarea id="comment-message" name="message" tabindex="4"
                                            placeholder="Write Message" aria-required="true"></textarea>
                                        <button name="submit" type="submit" id="comment-reply"
                                            class="sc-button style letter style-2"><span>Send Message</span> </button>
                                    </form>
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
                                    <button name="submit" type="submit"
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
