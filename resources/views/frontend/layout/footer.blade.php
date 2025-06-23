<!-- Footer -->
<footer id="footer" class="clearfix bg-style ft-home-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="widget widget-logo">
                    <div class="logo-footer" id="logo-footer">
                        <h2>BIDWISE</h2>
                        </a>
                    </div>
                    <p class="sub-widget-logo">Sed ut perspiciatis unde omnis iste natus error sit voluptate
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes</p>
                    <div class="widget-social">
                        <ul>
                            <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="widget widget-menu menu-marketplace">
                    <h5 class="title-widget">Marketplace</h5>
                    <ul>
                        <li><a href="item.html">Gaming </a></li>
                        <li><a href="item.html">Product </a></li>
                        <li><a href="item.html">All NFTs</a></li>
                        <li><a href="item.html">Social Network</a></li>
                        <li><a href="item.html">Domain Names</a></li>
                        <li><a href="item.html">Collectibles</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="widget widget-menu menu-supports">
                    <h5 class="title-widget">Supports</h5>
                    <ul>
                        <li><a href="contact.html">Setting & Privacy </a></li>
                        <li><a href="contact.html">Help & Support </a></li>
                        <li><a href="item.html">Live Auctions</a></li>
                        <li><a href="item-details.html"> Item Details</a></li>
                        <li><a href="contact.html"> 24/7 Supports</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget widget-post">
                                <h5 class="title-widget">News & Post</h5>
                                <ul class="post-new">
                                    <li>
                                        <div class="post-img">
                                            <img src="{{ url('frontend/assets/images/post/post-recent-new-4.jpg') }}" alt="Post New">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="blog-details.html">Roll Out New Features Without
                                                    Hurting Loyal Users</a></h6>
                                            <a href="blog-details.html" class="post-date"><i
                                                    class="far fa-calendar-week"></i> 25 JAN 2022</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <img src="{{ url('frontend/assets/images/post/post-recent-new-5.jpg') }}" alt="Post New">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="blog-details.html">An Overview The Most Comon UX
                                                    Design Deliverables</a></h6>
                                            <a href="blog-details.html" class="post-date"><i
                                                    class="far fa-calendar-week"></i> 25 JAN 2022</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
        </div>
    </div>
</footer><!-- /#footer -->

<!-- Bottom -->
<div class="bottom">
    <div class="container">
        <div class="bottom-inner">
            Copyright © 2024 BIDWISE | Bidding Ecommerce Plateform .
        </div>
    </div>
</div>

</div>
<!-- /#page -->
</div>
<!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Modal Popup Bid -->
<div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 pd-40">
                <h3 class="text-center">Your Bidding
                    Successfuly Added</h3>
                <p class="text-center">your bid <span class="price color-popup">(5.23ETH) </span> has been listing
                    to our database</p>
                <a href="#" class="btn btn-primary"> Watch the listings</a>
            </div>
        </div>
    </div>
</div>
@if(Auth::check() && Auth::user()->login_type == '0')
@endif
@if(session('status'))
    <script>
        window.onload = function() {
            setTimeout(function() {
                location.reload(); // Refresh the page after the status message is shown
            }, 2000); // Wait 2 seconds before refreshing
        };
    </script>
@endif
<!-- Javascript -->
<script src="{{url('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{url('frontend/assets/js/jquery.easing.js') }}"></script>
<script src="{{url('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{url('frontend/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{url('frontend/assets/js/swiper.js') }}"></script>

<script src="{{url('frontend/assets/js/plugin.js') }}"></script>
<script src="{{url('frontend/assets/js/count-down.js') }}"></script>
<script src="{{url('frontend/assets/js/shortcodes.js') }}"></script>
<script src="{{url('frontend/assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from themesflat.co/html/bidzend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Aug 2024 08:34:54 GMT -->

</html>