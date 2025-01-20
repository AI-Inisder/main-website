@extends('layout.layout')

@php
    $headTitle = 'Sign In';
    $title='Login register';
    $subTitle = 'Login register';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Sign In Start -->
        <section class="sign-in">
            <div class="container">
                <div class="sign-in__top">
                    <p>We have a demo account setup. <span>Username:</span> <span class="span-two">demo</span> and
                        <span>Password:</span> <span class="span-two">demo</span></p>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="sign-in__single">
                            <h3 class="sign-in__title">Login</h3>
                            <form class="sign-in__form">
                                <div class="sign-in__form-input-box">
                                    <input type="email" placeholder="Username or Email address*">
                                </div>
                                <div class="sign-in__form-input-box">
                                    <input type="password" placeholder="Password*">
                                </div>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper2" id="skipper2" checked="">
                                    <label for="skipper2"><span></span>Remember Me?</label>
                                </div>
                                <div class="sign-in__form-btn-box">
                                    <button type="submit" class="thm-btn sign-in__form-btn">Login</button>
                                    <div class="sign-in__form-forgot-password">
                                        <a href="#">Forgot your Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="sign-in__single">
                            <h3 class="sign-in__title">Register</h3>
                            <form class="sign-in__form">
                                <div class="sign-in__form-input-box">
                                    <input type="email" placeholder="Email address">
                                </div>
                                <div class="sign-in__form-input-box">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper3" id="skipper3" checked="">
                                    <label for="skipper3"><span></span>I accept company privacy policy.</label>
                                </div>
                                <div class="sign-in__form-btn-box">
                                    <button type="submit" class="thm-btn sign-in__form-btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Sign In End-->

@endsection 