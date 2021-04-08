@extends('base')

@section('title')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign up | Catkin Software Solution Farm</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styler.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }} ">
@endsection

@section('content')
<div class="main">

    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form method="POST" action="{{ route('register') }}" id="signup-form" class="signup-form">
                    @csrf
                    <h2 class="form-title">Create account</h2>
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <input value="{{ old('username') }}" type="text" class="form-input" name="username" id="name" placeholder="User name"/>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <input value="{{ old('email') }}" type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <input value="{{ old('password') }}"  type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                    </div>
                </form>
                <p class="loginhere">
                    Have already an account ? <a href="{{ route('login') }}" class="loginhere-link">Login here</a>
                </p>
            </div>
        </div>
    </section>

</div>
@endsection

    @section('javascript')
    <script src="{{ asset('assets/js/home.js') }} "></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/mainr.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @endsection
    <!-- JS -->

