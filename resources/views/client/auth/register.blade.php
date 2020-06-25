@extends('client.layout.master')
@section('content')
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ route('get.home') }}">Home</a>
                        <span class="breadcrumb-item active">Register</span>
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
                                            <h2>Create an Account</h2>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                        <div class="registration-form login-form">
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="login-info mb-half">
                                                    <p>Already have an account? <a href="{{ route('get.login') }}">Log in instead!</a></p>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="f-name" class="col-12 col-sm-12 col-md-4 col-form-label">User name</label>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Enter your first and last name ...">
                                                        @if($errors->has('name'))
                                                            <span class="error-text">
                                                            {{$errors->first('name')}}
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Email Address</label>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Enter your email address ...">
                                                        @if($errors->has('email'))
                                                            <span class="error-text">
                                                                {{$errors->first('email')}}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="newpassword" class="col-12 col-sm-12 col-md-4 col-form-label">New Password</label>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="******">
                                                        <button class="pass-show-btn" type="button" onclick="eyePassword(event)">Show</button>
                                                        @if($errors->has('password'))
                                                            <span class="error-text">
                                                                {{$errors->first('password')}}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="c-password" class="col-12 col-sm-12 col-md-4 col-form-label">Confirm Password</label>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  placeholder="******">
                                                        <button class="pass-show-btn" onclick="eyePassword(event)" type="button">Show</button>
                                                        @if($errors->has('password_confirmation'))
                                                            <span class="error-text">
                                                                {{$errors->first('password_confirmation')}}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Phone</label>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" placeholder="Enter your phone number ...">
                                                        @if($errors->has('phone'))
                                                            <span class="error-text">
                                                                {{$errors->first('phone')}}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-12 col-sm-12 col-md-4 col-form-label">Address</label>
                                                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" placeholder="Enter your address ...">
                                                        @if($errors->has('address'))
                                                            <span class="error-text">
                                                                {{$errors->first('address')}}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="register-box d-flex justify-content-end mt-half">
                                                    <button type="submit" class="default-btn tiny-btn">Register</button>
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
