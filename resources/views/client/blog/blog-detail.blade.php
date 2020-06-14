@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <a class="breadcrumb-item" href="{{ route('get.blog') }}">Blog</a>
                        <span class="breadcrumb-item active">Blog Details</span>
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
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                        <main id="primary" class="site-main">
                            <div class="single-post-wrapper">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <article class="blog-post post-entry">
                                            <div class="single-post">
                                                <div class="content-wrapper">
                                                    <div class="post-media image-popup" data-pswp-uid="1">
                                                        <figure>
                                                            <a href="assets/images/blog/blog-single-large.jpg" data-size="1920x930">
                                                                <img src="assets/images/blog/blog-single.jpg" alt="Blog Details">
                                                                <div class="image-overlay"><i class="ion ion-ios-add"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Blog Details</span>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="post-content">
                                                        <h3 class="post-title">Top 10 buying tips to follow in 2018</h3>
                                                        <div class="post-meta">
                                                            <p>
                                                                    <span>By
                                                                        <span class="single-meta">
                                                                            <a href="#">Pebona Themes</a>
                                                                        </span>
                                                                    </span>
                                                                <span class="post-categories">In
                                                                        <span class="single-meta">
                                                                            <a href="#">Tips, </a>
                                                                            <a href="#">Shopping</a>
                                                                        </span>
                                                                    </span>
                                                                <span>Posted on
                                                                        <span class="single-meta">
                                                                            <a href="#">Aug 14, 2018</a>
                                                                        </span>
                                                                    </span>
                                                            </p>
                                                        </div>
                                                        <div class="post-description">
                                                            <div class="post-details">
                                                                <p>There boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt  obtain pain of itself, because it is pain, but because occasionally <a href="#">circumstances occur</a> in which toil and pain can procure him some great pleasure  obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt  obtain pain of itself, because it is pain.</p>

                                                                <p>Someone boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt obtain pain of itself, because it is pain, but <a href="#">because occasionally circumstances occur</a> in which toil and pain can procure him some great pleasure obtain.</p>

                                                                <div class="row align-items-center my-4 my-sm-5">
                                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 mb-sm-4 mb-md-0">
                                                                        <img src="assets/images/blog/blog-inner-1.jpg" alt="Post Inner Image">
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                                        <img src="assets/images/blog/blog-inner-2.jpg" alt="Post Inner Image">
                                                                    </div>
                                                                </div>

                                                                <p>Someone boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt  obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure obtain corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi tempora incidunt  obtain pain of itself, because it is pain</p>

                                                                <blockquote class="blockquote">
                                                                    <p>"While most companies strive to deliver seamless and issue-free customer service, what they often fail to understand is just how significantly their processes good and bad can impact their overall service delivery and, ultimately, how their customers view them."</p>
                                                                    <footer class="blockquote-footer">Devid Chory</footer>
                                                                </blockquote>

                                                                <p>There boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non similique sunt in culpa modi <a href="#">tempora incidunt obtain</a> pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure someone boluptatum deleniti atque corrupti sdolores et quas molestias cepturi sint  eca itate non </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-footer">
                                                        <div class="d-md-flex justify-content-sm-between">
                                                            <div class="tags align-self-center">
                                                                <p>Tags:</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><a href="#">design,</a></li>
                                                                    <li class="list-inline-item"><a href="#">development,</a></li>
                                                                    <li class="list-inline-item"><a href="#">sketch</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="post-share">
                                                                <p>Share:</p>
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item"><a href="#" class="bg-facebook"><i class="fa fa-facebook"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#" class="bg-twitter"><i class="fa fa-twitter"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#" class="bg-gplus"><i class="fa fa-google-plus"></i></a></li>
                                                                    <li class="list-inline-item"><a href="#" class="bg-pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of blog-grid -->
                                        </article> <!-- end of blog-post -->

                                        <div class="author-box">
                                            <div class="media">
                                                <div class="author-image mb-4 mb-sm-4 mb-md-0 mr-md-4">
                                                    <img src="assets/images/testimonial/testimonial-2.jpg" alt="blog-comment">
                                                </div>
                                                <div class="author-description media-body">
                                                    <h6>Author: <a href="#">Stuart Smith</a></h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus harum, est fuga veritatis esse dignissimos optio sunt obcaecati sit quos. Maiores tempora harum fugit voluptates?</p>
                                                </div>
                                            </div>
                                        </div> <!-- end of author-box -->

                                        <div class="post-pagination">
                                            <ul class="pagination">
                                                <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous</a></li>
                                                <li class="ml-auto"><a href="#">Next<i class="fa fa-long-arrow-right"></i></a></li>
                                            </ul>
                                        </div> <!-- end of post-pagination -->

                                        <div id="comments" class="comments-area">
                                            <h3>This post has 4 Comments</h3>
                                            <ol class="comment-list list-unstyled">
                                                <li class="comment-single media">
                                                    <div class="comment-author-thumb mr-3 mr-sm-4">
                                                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Comment Author">
                                                    </div>
                                                    <div class="comment-content media-body">
                                                        <div class="comment-meta d-flex justify-content-between align-items-top">
                                                            <div class="comment-title">
                                                                <h6>Alva Ano</h6>
                                                                <span><span class="comment-date">July 14, 2018</span> at <span class="comment-time">11:27 am</span></span>
                                                            </div>
                                                            <div class="comment-reply">
                                                                <a href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                        <p>Efficiently drive robust niche markets and premium technologies. Distinctively maintain client-centric outsourcing.</p>
                                                    </div>
                                                </li>

                                                <li class="comment-single media flex-wrap">
                                                    <div class="comment-author-thumb mr-3 mr-sm-4">
                                                        <img src="assets/images/testimonial/testimonial-3.jpg" alt="Comment Author">
                                                    </div>
                                                    <div class="comment-content media-body">
                                                        <div class="comment-meta d-flex justify-content-between align-items-top">
                                                            <div class="comment-title">
                                                                <h6>Amber Laha</h6>
                                                                <span><span class="comment-date">Jun 27, 2018</span> at <span class="comment-time">06:07 pm</span></span>
                                                            </div>
                                                            <div class="comment-reply">
                                                                <a href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                        <p>Credibly enhance cross-platform results through fully tested architectures. Dynamically recaptiualize unique models.</p>
                                                    </div>

                                                    <ol class="comment-list nested">
                                                        <li class="comment-single media">
                                                            <div class="comment-author-thumb mr-3 mr-sm-4">
                                                                <img src="assets/images/testimonial/testimonial-4.jpg" alt="Comment Author">
                                                            </div>
                                                            <div class="comment-content media-body">
                                                                <div class="comment-meta d-flex justify-content-between align-items-top">
                                                                    <div class="comment-title">
                                                                        <h6>Dewey Tetzlaff</h6>
                                                                        <span><span class="comment-date">Jun 29, 2018</span> at <span class="comment-time">05:56 pm</span></span>
                                                                    </div>
                                                                    <div class="comment-reply">
                                                                        <a href="#"><span>Reply</span></a>
                                                                    </div>
                                                                </div>
                                                                <p>Synergistically promote business leadership skills without optimal value. Holisticly incentivize technically sound.</p>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>

                                                <li class="comment-single media">
                                                    <div class="comment-author-thumb mr-3 mr-sm-4">
                                                        <img src="assets/images/testimonial/testimonial-5.jpg" alt="Comment Author">
                                                    </div>
                                                    <div class="comment-content media-body">
                                                        <div class="comment-meta d-flex justify-content-between align-items-top">
                                                            <div class="comment-title">
                                                                <h6>John Doe</h6>
                                                                <span><span class="comment-date">Apr 18, 2018</span> at <span class="comment-time">12:47 pm</span></span>
                                                            </div>
                                                            <div class="comment-reply">
                                                                <a href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                        <p>Proactively revolutionize wireless applications and impactful human capital. Progressively productize professional relationships.</p>
                                                    </div>
                                                </li>
                                            </ol> <!-- end of comment-list -->

                                            <div class="comment-form">
                                                <h3>Leave a comment</h3>
                                                <form action="#" method="post" id="comment_form">
                                                    <div class="row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-12">
                                                            <textarea id="comment" placeholder="Your Comment *" name="comment" class="form-control" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <input type="text" class="form-control" id="com-name" placeholder="Name *" required="">
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <input type="email" class="form-control" id="com-email" placeholder="Email *" required="">
                                                        </div>
                                                        <div class="form-group col-12 col-sm-12 col-md-4">
                                                            <input type="email" class="form-control" id="com-website" placeholder="Website" required="">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-12 col-sm-12 col-md-12 mb0">
                                                            <input name="submit" type="submit" id="submit_my_comment" class="btn btn-secondary" value="Submit Comment">
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div> <!-- end of comment form -->
                                        </div> <!-- end of comment-area -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of single-post-wrapper -->
                        </main> <!-- end of #primary -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3">
                        <aside id="secondary" class="widget-area">
                            <div class="sidebar-widget search-widget">
                                <h2 class="widgettitle">Search</h2>
                                <div class="search-content">
                                    <form action="#" class="input-group">
                                        <input class="form-control" type="search" name="s" title="search" placeholder="Search...">
                                        <input type="submit" class="btn btn-secondary" value="search">
                                    </form>
                                </div>
                            </div> <!-- end of sidebar-widget -->

                            <div class="sidebar-widget recent-posts">
                                <h2 class="widgettitle">Recent Posts</h2>
                                <div class="recent-posts-widget-container">
                                    <div class="element-carousel instance-0 swiper-container-horizontal" data-visible-slide="1" data-visible-xl-slide="1" data-visible-lg-slide="1" data-visible-md-slide="1" data-visible-sm-slide="1" data-loop="true" data-autoplay-delay="7000">
                                        <div class="swiper-wrapper" style="transform: translate3d(-855px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 255px; margin-right: 30px;">
                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-1.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Aypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-2.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Bypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-3.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Cabent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">21 Nov</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->
                                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 255px; margin-right: 30px;">
                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-4.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Cabent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-5.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Aypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-6.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Bypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">21 Nov</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->
                                            </div>
                                            <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 255px; margin-right: 30px;">
                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-1.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Aypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-2.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Bypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-3.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Cabent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">21 Nov</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->
                                            </div>

                                            <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="1" style="width: 255px; margin-right: 30px;">
                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-4.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Cabent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-5.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Aypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-6.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Bypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">21 Nov</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->
                                            </div>
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 255px; margin-right: 30px;">
                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-1.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Aypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-2.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Bypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-3.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Cabent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">21 Nov</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->
                                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 255px; margin-right: 30px;">
                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-4.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Cabent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-5.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Aypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">09 Aug</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->

                                                <div class="posts-single media">
                                                    <div class="post-thumbnail mr-4 mr-lg-3 mr-xl-4">
                                                        <a href="#">
                                                            <img src="assets/images/blog/blog-thumb-6.jpg" alt="Blog Image">
                                                            <div class="overlay"></div>
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <div class="post-title">
                                                            <h5><a href="blog-details.html">Bypi non habent claritatem insitam</a></h5>
                                                        </div>
                                                        <div class="post-date">21 Nov</div>
                                                    </div>
                                                </div> <!-- end of posts-single -->
                                            </div></div>

                                        <div class="swiper-arrow prev fa fa-angle-left prev-0" tabindex="0" role="button" aria-label="Previous slide"></div>
                                        <div class="swiper-arrow next fa fa-angle-right next-0" tabindex="0" role="button" aria-label="Next slide"></div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> <!-- end of element-carousel -->
                                </div> <!-- end of recent-posts-widget -->
                            </div> <!-- end of sidebar-widget -->

                            <div class="sidebar-widget list-widget">
                                <h2 class="widgettitle">Categories</h2>
                                <div class="categories-widget">
                                    <ul class="categorie-list">
                                        <li><a href="#">creative<span>(20)</span></a></li>
                                        <li><a href="#">corporate<span>(40)</span></a></li>
                                        <li><a href="#">business<span>(22)</span></a></li>
                                        <li><a href="#">consultancy<span>(15)</span></a></li>
                                        <li><a href="#">technology<span>(18)</span></a></li>
                                        <li><a href="#">general<span>(12)</span></a></li>
                                    </ul>
                                </div> <!-- end of categories-widget -->
                            </div> <!-- end of sidebar-widget -->

                            <div class="sidebar-widget tag-cloud">
                                <h2 class="widgettitle">Tag Cloud</h2>
                                <div class="tags-widget">
                                    <ul>
                                        <li><a href="#">Ecommerce</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Store</a></li>
                                        <li><a href="#">Ideas</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Smart</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end of sidebar-widget -->

                            <div class="sidebar-widget instagram-widget">
                                <h2 class="widgettitle">Latest Instagram</h2>
                                <div class="instagram-area">
                                    <div id="instagram_feed" class="image-popup" data-pswp-uid="2"><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38718999_2180492135567494_3167918996506804224_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=CAtzSgNOxeUAX_xBCQC&amp;oh=c97bb2954ade7066214b748590cb46fb&amp;oe=5F0CA74C" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38718999_2180492135567494_3167918996506804224_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=CAtzSgNOxeUAX_xBCQC&amp;oh=c97bb2954ade7066214b748590cb46fb&amp;oe=5F0CA74C"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38438453_437152673456918_7675973278057365504_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=FjjguoalJUoAX9ZI0bk&amp;oh=d68b95b3cc2132acce9e09ca72bd98aa&amp;oe=5F0D0CB9" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38438453_437152673456918_7675973278057365504_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=FjjguoalJUoAX9ZI0bk&amp;oh=d68b95b3cc2132acce9e09ca72bd98aa&amp;oe=5F0D0CB9"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38220199_240659423442857_6656056529671684096_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=2i36xdMCSdYAX8dpBOZ&amp;oh=26b9c8083b6e4ab06a8af59275b0b177&amp;oe=5F0E3742" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38220199_240659423442857_6656056529671684096_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=2i36xdMCSdYAX8dpBOZ&amp;oh=26b9c8083b6e4ab06a8af59275b0b177&amp;oe=5F0E3742"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38434441_481923782283944_4700768222876532736_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=6PbahnsnOtgAX9_2qUo&amp;oh=80e29545bd0f52d149750954035a744a&amp;oe=5F0EA59C" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38434441_481923782283944_4700768222876532736_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=6PbahnsnOtgAX9_2qUo&amp;oh=80e29545bd0f52d149750954035a744a&amp;oe=5F0EA59C"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38682768_1881128848592640_3833707968986087424_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=ObkYT0Vqk20AX_YN8P-&amp;oh=6911d4383964312d4c5be98e985eaf66&amp;oe=5F0EA919" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38682768_1881128848592640_3833707968986087424_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=ObkYT0Vqk20AX_YN8P-&amp;oh=6911d4383964312d4c5be98e985eaf66&amp;oe=5F0EA919"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38081691_1657776794350491_5915680137222815744_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=M-yfJ1RW5CwAX9twRtE&amp;oh=3fa250fa4d71221b38a62bcbdc52e2c1&amp;oe=5F0C8347" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/38081691_1657776794350491_5915680137222815744_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=M-yfJ1RW5CwAX9twRtE&amp;oh=3fa250fa4d71221b38a62bcbdc52e2c1&amp;oe=5F0C8347"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/37960412_280981295826464_5275600323581313024_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=IkmTCxMib5kAX94DMrL&amp;oh=85c339085a52b0a56857567c1ae0fe24&amp;oe=5F0CC922" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/37960412_280981295826464_5275600323581313024_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=IkmTCxMib5kAX94DMrL&amp;oh=85c339085a52b0a56857567c1ae0fe24&amp;oe=5F0CC922"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/21434119_219241678607007_183591576818155520_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=esq1YEy2ZVwAX-yuK00&amp;oh=7e60f1195ba6d8b007cd46335ea2528c&amp;oe=5F0CC48E" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/21434119_219241678607007_183591576818155520_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=esq1YEy2ZVwAX-yuK00&amp;oh=7e60f1195ba6d8b007cd46335ea2528c&amp;oe=5F0CC48E"></a><figcaption class="visually-hidden"><span></span></figcaption></figure><figure class="swiper-slide"><a href="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/21373684_1658547750857263_3384288041446146048_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=5aIoat5L4MAAX-9SB3_&amp;oh=a923d7c2932d3d78f6988e159288836b&amp;oe=5F0D971F" data-size="640x640"><img src="https://scontent.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/21373684_1658547750857263_3384288041446146048_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=5aIoat5L4MAAX-9SB3_&amp;oh=a923d7c2932d3d78f6988e159288836b&amp;oe=5F0D971F"></a><figcaption class="visually-hidden"><span></span></figcaption></figure></div>
                                    <p>Follow Us <a href="https://www.instagram.com/themeitems/" target="_blank">@Instagram</a>.</p>
                                </div>
                            </div> <!-- end of sidebar-widget -->
                        </aside> <!-- end of #secondary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Blog Posts Section -->
    </div>
@stop
