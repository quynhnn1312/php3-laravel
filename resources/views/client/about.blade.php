@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <span class="breadcrumb-item active">About Us</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <main id="content" class="main-content-wrapper page-about">

        <!-- Start of About US Section -->
        <section class="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-6">
                        <div class="content-wrapper">
                            <div class="section-title left-aligned">
                                <h2>Welcome To Pebona Store!</h2>
                            </div>
                            <p class="lead">Pebona Shop is a premium HTML template designed and develoved from the ground up with the sole purpose of helping you create an astonishing, the beautiful and user friendly website that will boost your product’s sales.</p>
                            <p>The theme design package provides a complete Magento theme set for your online store according to your desired theme. This includes all Magento themes that are required for your online store's successful implementation.</p>
                            <a class="default-btn" href="shop-grid.html">Shop now!</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-6">
                        <div class="overview-img text-center">
                            <a href="#">
                                <img src="assets/images/about/about.jpg" alt="About Us">
                            </a>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of About US Section -->

        <!-- Start of Team Section -->
        <section class="team-section pt-full pb-half bgc-offset">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="section-title">
                            <h2>Pebona Team Members</h2>
                        </div>
                    </div>
                </div> <!-- end of row -->

                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="team-wrapper">
                            <div class="team-media">
                                <a href="#">
                                    <img src="assets/images/about/team-1.jpg" alt="Team Image">
                                </a>
                                <div class="team-socials">
                                    <div class="chain-animation">
                                        <a class="bg-facebook" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-gplus" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Mike Banding</h4>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="team-wrapper">
                            <div class="team-media">
                                <a href="#">
                                    <img src="assets/images/about/team-4.jpg" alt="Team Image">
                                </a>
                                <div class="team-socials">
                                    <div class="chain-animation">
                                        <a class="bg-facebook" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-gplus" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Peter Johnson</h4>
                                <span>Team Leader</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="team-wrapper">
                            <div class="team-media">
                                <a href="#">
                                    <img src="assets/images/about/team-2.jpg" alt="Team Image">
                                </a>
                                <div class="team-socials">
                                    <div class="chain-animation">
                                        <a class="bg-facebook" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-gplus" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Jane Loren</h4>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="team-wrapper">
                            <div class="team-media">
                                <a href="#">
                                    <img src="assets/images/about/team-3.jpg" alt="Team Image">
                                </a>
                                <div class="team-socials">
                                    <div class="chain-animation">
                                        <a class="bg-facebook" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="chain-animation">
                                        <a class="bg-gplus" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Jack Logan</h4>
                                <span>Chairman</span>
                            </div>
                        </div>
                    </div>

                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Team Section -->

        <!-- Start of Testimonial Section -->
        <section class="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <div class="testimonial-container swiper-container-horizontal">

                            <!-- Slides -->
                            <div class="swiper-wrapper" style="transform: translate3d(-2920px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 730px;">
                                    <div class="testimonial-media" data-swiper-parallax="-100" style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                                        <img src="assets/images/testimonial/testimonial-3.jpg" alt="Amber Laha">
                                    </div>
                                    <div class="testimonial-content" data-swiper-parallax="-500" style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                        <div class="client-meta" data-swiper-parallax="-300" style="transform: translate3d(-300px, 0px, 0px); transition-duration: 0ms;">
                                            <h3 class="client-name">Amber Laha</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 730px;">
                                    <div class="testimonial-media" data-swiper-parallax="-100" style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Alva Ono">
                                    </div>
                                    <div class="testimonial-content" data-swiper-parallax="-500" style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                        <div class="client-meta" data-swiper-parallax="-300" style="transform: translate3d(-300px, 0px, 0px); transition-duration: 0ms;">
                                            <h3 class="client-name">Alva Ono</h3>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->

                                <div class="swiper-slide" data-swiper-slide-index="1" style="width: 730px;">
                                    <div class="testimonial-media" data-swiper-parallax="-100" style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                                        <img src="assets/images/testimonial/testimonial-2.jpg" alt="Dewey Tetzlaff">
                                    </div>
                                    <div class="testimonial-content" data-swiper-parallax="-500" style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                        <div class="client-meta" data-swiper-parallax="-300" style="transform: translate3d(-300px, 0px, 0px); transition-duration: 0ms;">
                                            <h3 class="client-name">Dewey Tetzlaff</h3>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->

                                <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 730px;">
                                    <div class="testimonial-media" data-swiper-parallax="-100" style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                                        <img src="assets/images/testimonial/testimonial-3.jpg" alt="Amber Laha">
                                    </div>
                                    <div class="testimonial-content" data-swiper-parallax="-500" style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                        <div class="client-meta" data-swiper-parallax="-300" style="transform: translate3d(-300px, 0px, 0px); transition-duration: 0ms;">
                                            <h3 class="client-name">Amber Laha</h3>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 730px;">
                                    <div class="testimonial-media" data-swiper-parallax="-100" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Alva Ono">
                                    </div>
                                    <div class="testimonial-content" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                        <div class="client-meta" data-swiper-parallax="-300" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                            <h3 class="client-name">Alva Ono</h3>
                                        </div>
                                    </div>
                                </div></div> <!-- end of swiper-wrapper -->

                            <!-- Pagination -->
                            <div class="swiper-pagination-testimonial swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> <!-- end of testimonial-container -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Testimonial Section -->

        <!-- Start of Banner Section -->
        <div class="banner-section mb-half">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="promo-banner hover-effect-1">
                            <a href="#">
                                <img src="assets/images/banners/banner-9.jpg" alt="Promo Banner">
                            </a>
                        </div> <!-- end of promo-banner -->
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="promo-banner hover-effect-1">
                            <a href="#">
                                <img src="assets/images/banners/banner-10.jpg" alt="Promo Banner">
                            </a>
                        </div> <!-- end of promo-banner -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Banner Section -->

        <!-- Start of Client Section -->
        <div class="client-section mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="clients element-carousel instance-0 swiper-container-horizontal" data-visible-slide="5" data-visible-xl-slide="5" data-visible-lg-slide="5" data-visible-md-slide="4" data-visible-sm-slide="3" data-visible-xs-slide="2" data-loop="true" data-autoplay-delay="3000" data-space-between="0" data-effect="slide">

                            <!-- Slides -->
                            <div class="swiper-wrapper" style="transform: translate3d(-3074.4px, 0px, 0px); transition-duration: 1000ms;"><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="6" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="7" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="0" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="1" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="2" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="3" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide" data-swiper-slide-index="4" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible swiper-slide-prev" data-swiper-slide-index="5" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="6" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-visible swiper-slide-next" data-swiper-slide-index="7" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                </div>
                                <div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-visible" data-swiper-slide-index="0" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-visible" data-swiper-slide-index="1" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-visible" data-swiper-slide-index="2" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="6" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                </div><div class="item-brand swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="7" style="width: 219.6px;">
                                    <img src="assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> <!-- end of element-carousel -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Client Section -->

        <!-- Start of Newsletter Section -->
        <section class="newsletter-section vpadding bgc-offset mb0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="newsletter-title d-lg-flex justify-content-lg-start">
                            <h6>Subscribe to our Newsletter</h6>
                            <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be always trendy.</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="newsletter-form-wrapper">
                            <form class="mc-subscribe-form" novalidate="true">
                                <input type="email" autocomplete="off" placeholder="Enter you email address here..." required="" name="EMAIL">
                                <input type="submit" class="default-btn" value="Subscribe">
                            </form>

                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div><!-- end of mailchimp-alerts -->
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Newsletter Section -->
    </main>
@stop
