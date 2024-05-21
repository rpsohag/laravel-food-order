@extends('frontend.layouts.master')
@section('frontend_content')
    <!--=========================
        SIGN UP START
    ==========================-->
    <section class="fp__signup pt-5" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signup_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class=" container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>Welcome back!</h2>
                            <p>sign up to continue</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name"  placeholder="Enter your name here..">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Enter your email here..">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="password">password</label>
                                            <input type="password" name="password" id="password" placeholder="Password">
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label for="password_confirmation">confirm password</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter confirm Password here..">
                                            @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="create_account">Dont’t have an aceount ? <a href="{{ route('login') }}">login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGN UP END
    ==========================-->
@endsection