@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <a class="breadcrumb-item" href="{{ route('get.shop') }}">Shop</a>
                        <span class="breadcrumb-item active">Wishlist</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div id="content" class="main-content-wrapper">

        <!-- Start of Wishlist Wrapper -->
        <div class="wishlist-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="wishlist">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="section-title">
                                            <h2>Wishlist</h2>
                                        </div>

                                        <form action="#">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td>Image</td>
                                                        <td>Product Name</td>
                                                        <td>Model</td>
                                                        <td>Stock</td>
                                                        <td>Unit Price</td>
                                                        <td>Action</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="single-product.html"><img src="assets/images/products/new/product-1.jpg" alt="Wishlist Product Image" title="Compete Track Tote"></a>
                                                        </td>
                                                        <td>
                                                            <a href="single-product.html">Compete Track Tote</a>
                                                        </td>
                                                        <td>3</td>
                                                        <td>In Stock</td>
                                                        <td>
                                                            <div class="price"><small><del>$430.00</del></small> <strong>$100.00</strong></div>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                                            <a href="#" data-toggle="tooltip" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="single-product.html"><img src="assets/images/products/new/product-3.jpg" alt="Wishlist Product Image" title="Rival Field Messenger 6"></a>
                                                        </td>
                                                        <td>
                                                            <a href="single-product.html">Rival Field Messenger 6</a>
                                                        </td>
                                                        <td>3</td>
                                                        <td>In Stock</td>
                                                        <td>
                                                            <div class="price"><small><del>$440.00</del></small> <strong>$180.00</strong></div>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                                            <a href="#" data-toggle="tooltip" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="single-product.html"><img src="assets/images/products/new/product-2.jpg" alt="Wishlist Product Image" title="Fusion Backpack"></a>
                                                        </td>
                                                        <td>
                                                            <a href="single-product.html">Fusion Backpack</a>
                                                        </td>
                                                        <td>3</td>
                                                        <td>In Stock</td>
                                                        <td>
                                                            <div class="price">$200.00</div>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-toggle="tooltip" class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                                            <a href="#" data-toggle="tooltip" class="btn btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>

                                        <div class="cart-button-wrapper d-flex justify-content-end mt-4">
                                            <a href="cart.html" class="btn btn-secondary dark align-self-end">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of wishlist -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Wishlist Wrapper -->
    </div>
@stop
