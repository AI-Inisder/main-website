@extends('layout.layout')

@php
$headTitle = '404 error';
$title = '404 error';
$subTitle = '404 error';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Error Page Start-->
        <section class="error-page">
            <div class="error-page-shape-1 float-bob-y" style="background-image: url('{{ asset('assets/images/shapes/error-page-shape-1.png') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">404</h2>
                                <h3 class="error-page__sub-title">Page not found!</h3>
                            </div>
                            <p class="error-page__text">Sorry we can't find that page! The page you are looking <br> for
                                was never existed.</p>
                            <form class="error-page__form">
                                <div class="error-page__form-input">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </div>
                            </form>
                            <a href="{{ route('index') }}" class="thm-btn error-page__btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

@endsection 