@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <span class="breadcrumb-item active">Login</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <div id="content" class="main-content-wrapper">

        <!-- Start of Login Wrapper -->
        <div class="login-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="user-login">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="section-title">
                                            <h2>Log in to your account</h2>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->
                                @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                        <strong>Lỗi!</strong> {{ Session::get('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {{ Session::put('error', null) }}
                                @endif
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                        <div class="login-form">
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="form-group row align-items-center mb-4">
                                                    <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email address</label>
                                                    <div class="col-12 col-sm-12 col-md-8">
                                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email">
                                                        @if($errors->has('email'))
                                                            <span class="error-text">
                                                                {{$errors->first('email')}}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center mb-4">
                                                    <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Password</label>
                                                    <div class="col-12 col-sm-12 col-md-8">
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="c-password" placeholder="Password">
                                                        @if($errors->has('password'))
                                                            <span class="error-text">
                                                                {{$errors->first('password')}}
                                                            </span>
                                                        @endif
                                                        <button class="pass-show-btn" onclick="eyePassword (event)" type="button">Show</button>
                                                    </div>
                                                </div>
                                                <div class="login-box mt-5 text-center">
                                                    <p><a href="#">Forgot your password?</a></p>
                                                    <button type="submit" class="default-btn tiny-btn mt-4">Sign In</button>
                                                </div>
                                                <div class="social-auth-links text-center mb-3 mt-4">
                                                    <p>- OR -</p>
                                                    <a href="" style="color: #fff" class="btn btn-block btn-primary">
                                                        <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
                                                    </a>
                                                    <a href="{{ route('auth.login') }}" style="color: #fff" class="btn btn-block btn-danger">
                                                        <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
                                                    </a>
                                                </div>
                                                <div class="text-center mt-half pt-half top-bordered">
                                                    <p>No account? <a href="{{ route('get.register') }}">Create one here</a>.</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of user-login -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Login Wrapper -->
    </div>
@stop
@section('js')
    <script>
        function eyePassword (event) {
            let type =event.target.parentElement.parentElement.querySelector('input');
            if( type.getAttribute('type') == 'password'){
                type.setAttribute('type','text');
            }else{
                type.setAttribute('type','password');
            }
        }
    </script>
@stop
