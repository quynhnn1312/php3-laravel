@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <span class="breadcrumb-item active">Blog</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div id="content" class="main-content-wrapper">

        <!-- Start of Blog Posts Section -->
        <div class="blog-posts-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="blog-grid-area">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <article class="blog-post post-entry">
                                            <div class="blog-grid">
                                                <div class="content-wrapper">
                                                    <div class="post-media">
                                                        <a href="blog-details.html"><img src="assets/images/blog/blog-1-1.jpg" alt="Blog Image"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <ul class="post-category">
                                                            <li><a href="#">Tech</a></li>
                                                        </ul>
                                                        <h3 class="post-title"><a href="blog-details.html">When an unknown printer took a galley of type.</a></h3>
                                                        <p>Distinctively simplify dynamic resources whereas prospective core competencies. Objectively pursue multidisciplinary human capital for interoperable.</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li>Jun 20, 2018</li>
                                                                <li>3 Comments</li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-more">
                                                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <article class="blog-post post-entry">
                                            <div class="blog-grid">
                                                <div class="content-wrapper">
                                                    <div class="post-media">
                                                        <a href="blog-details.html">
                                                            <div class="element-carousel instance-0 swiper-container-fade swiper-container-horizontal" data-visible-slide="1" data-visible-xl-slide="1" data-visible-lg-slide="1" data-visible-md-slide="1" data-visible-sm-slide="1" data-loop="true" data-autoplay-delay="5000" data-effect="fade">
                                                                <div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 350px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-2.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 350px; opacity: 1; transform: translate3d(-350px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-3.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 350px; opacity: 1; transform: translate3d(-700px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-4.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 350px; opacity: 1; transform: translate3d(-1050px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-5.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 350px; opacity: 1; transform: translate3d(-1400px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-6.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide" data-swiper-slide-index="0" style="width: 350px; opacity: 1; transform: translate3d(-1750px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-2.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide" data-swiper-slide-index="1" style="width: 350px; opacity: 1; transform: translate3d(-2100px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-3.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 350px; opacity: 1; transform: translate3d(-2450px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-4.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="3" style="width: 350px; opacity: 1; transform: translate3d(-2800px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-5.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 350px; opacity: 0; transform: translate3d(-3150px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-6.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 350px; opacity: 0; transform: translate3d(-3500px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-2.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 350px; opacity: 0; transform: translate3d(-3850px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-3.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 350px; opacity: 0; transform: translate3d(-4200px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-4.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 350px; opacity: 0; transform: translate3d(-4550px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-5.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 350px; opacity: 0; transform: translate3d(-4900px, 0px, 0px); transition-duration: 0ms;">
                                                                        <img src="assets/images/blog/blog-1-6.jpg" alt="Blog Image">
                                                                    </div></div>
                                                                <div class="swiper-arrow prev fa fa-angle-left prev-0" tabindex="0" role="button" aria-label="Previous slide"></div>
                                                                <div class="swiper-arrow next fa fa-angle-right next-0" tabindex="0" role="button" aria-label="Next slide"></div>
                                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <ul class="post-category">
                                                            <li><a href="#">World</a></li>
                                                            <li><a href="#">Travel</a></li>
                                                        </ul>
                                                        <h3 class="post-title"><a href="blog-details.html">Many desktop publishing packages and web page editors.</a></h3>
                                                        <p>Competently brand compelling results with premier solutions. Dynamically generate inexpensive web-readiness whereas e-business expertise. Globally.</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li>May 10, 2018</li>
                                                                <li>10 Comments</li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-more">
                                                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <article class="blog-post post-entry">
                                            <div class="blog-grid">
                                                <div class="content-wrapper">
                                                    <div class="post-media">
                                                        <a href="blog-details.html"><img src="assets/images/blog/blog-1-7.jpg" alt="Blog Image"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <ul class="post-category">
                                                            <li><a href="#">Digital Design</a></li>
                                                        </ul>
                                                        <h3 class="post-title"><a href="blog-details.html">Various versions have evolved over the years sometimes.</a></h3>
                                                        <p>Assertively streamline e-business "outside the box" thinking vis-a-vis future-proof functionalities. Dynamically revolutionize highly efficient relationships.</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li>Apr 20, 2018</li>
                                                                <li>1 Comment</li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-more">
                                                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <article class="blog-post post-entry">
                                            <div class="blog-grid">
                                                <div class="content-wrapper">
                                                    <div class="post-media">
                                                        <a href="blog-details.html">
                                                            <div class="element-carousel instance-1 swiper-container-horizontal" data-visible-slide="1" data-visible-xl-slide="1" data-visible-lg-slide="1" data-visible-md-slide="1" data-visible-sm-slide="1" data-loop="true" data-autoplay-delay="4500" data-space-between="0" data-effect="slide">
                                                                <div class="swiper-wrapper" style="transform: translate3d(-3150px, 0px, 0px); transition-duration: 1000ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-8.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-9.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-10.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-11.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-12.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-8.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide" data-swiper-slide-index="1" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-9.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide" data-swiper-slide-index="2" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-10.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-11.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="4" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-12.jpg" alt="Blog Image">
                                                                    </div>
                                                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-8.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-9.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-10.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-11.jpg" alt="Blog Image">
                                                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" style="width: 350px;">
                                                                        <img src="assets/images/blog/blog-1-12.jpg" alt="Blog Image">
                                                                    </div></div>
                                                                <div class="swiper-arrow prev fa fa-angle-left prev-1" tabindex="0" role="button" aria-label="Previous slide"></div>
                                                                <div class="swiper-arrow next fa fa-angle-right next-1" tabindex="0" role="button" aria-label="Next slide"></div>
                                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <ul class="post-category">
                                                            <li><a href="#">Recent Trends</a></li>
                                                        </ul>
                                                        <h3 class="post-title"><a href="blog-details.html">Various versions have evolved over the years sometimes.</a></h3>
                                                        <p>Assertively streamline e-business "outside the box" thinking vis-a-vis future-proof functionalities. Dynamically revolutionize highly efficient relationships.</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li>Apr 20, 2018</li>
                                                                <li>1 Comment</li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-more">
                                                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <article class="blog-post post-entry">
                                            <div class="blog-grid">
                                                <div class="content-wrapper">
                                                    <div class="post-media">
                                                        <a href="blog-details.html"><img src="assets/images/blog/blog-1-13.jpg" alt="Blog Image"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <ul class="post-category">
                                                            <li><a href="#">Design</a></li>
                                                        </ul>
                                                        <h3 class="post-title"><a href="blog-details.html">When an unknown printer took a galley of type.</a></h3>
                                                        <p>Distinctively simplify dynamic resources whereas prospective core competencies. Objectively pursue multidisciplinary human capital for interoperable.</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li>Jun 20, 2018</li>
                                                                <li>3 Comments</li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-more">
                                                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <article class="blog-post post-entry">
                                            <div class="blog-grid">
                                                <div class="content-wrapper">
                                                    <div class="post-media">
                                                        <a href="blog-details.html"><img src="assets/images/blog/blog-1-14.jpg" alt="Blog Image"></a>
                                                    </div>
                                                    <div class="post-content">
                                                        <ul class="post-category">
                                                            <li><a href="#">beauty</a></li>
                                                            <li><a href="#">fashion</a></li>
                                                        </ul>
                                                        <h3 class="post-title"><a href="blog-details.html">Many desktop publishing packages and web page editors.</a></h3>
                                                        <p>Competently brand compelling results with premier solutions. Dynamically generate inexpensive web-readiness whereas e-business expertise. Globally.</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="post-meta">
                                                            <ul>
                                                                <li>May 10, 2018</li>
                                                                <li>10 Comments</li>
                                                            </ul>
                                                        </div>
                                                        <div class="post-more">
                                                            <a href="blog-details.html">Read more <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of blog-grid-area -->

                            <div class="pagination-area">
                                <div class="row align-items-center">
                                    <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                        <div class="page-amount d-flex justify-content-center justify-content-md-start">
                                            <p>Showing 7 to 12 of 30 (5 Pages)</p>
                                        </div>
                                    </div>
                                    <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                        <ul class="pagination">
                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-left"></i> <span>Previous</span></a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item active"><span class="page-link">2</span></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link"><span>Next</span> <i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end of pagination-area -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Blog Posts Section -->
    </div>
@stop
