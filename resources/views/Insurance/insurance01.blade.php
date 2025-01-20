
@extends('layout.layout')

@php
$headTitle = 'Insurance One';
$title = 'INSURANCE ONE';
$subTitle = 'Insurance one';
$counterone = 'false';
$css = '<link rel="stylesheet" href="' . asset('assets/vendors/insur-three-icon/style.css') . '"/>';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Insurance Page One Start-->
        <section class="insurance-page-one">
            <div class="services-one__container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-drive"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('carInsurance') }}">Car insurance</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-2.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-family"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('lifeInsurance') }}">Life insurance</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-3.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-home"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('homeInsurance') }}">Home insurance</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-4.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-heart-beat"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('healthInsurance') }}">Health insurance</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-5.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('businessInsurance') }}">Business insurance</a>
                                </h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-6.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-fire"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('fireInsurance') }}">Fire insurance</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-7.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-ring"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('marriageInsurance') }}">Marriage insurance</a>
                                </h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                        <div class="services-one__single">
                            <div class="service-one__img">
                                <img src="{{ asset('assets/images/services/services-1-8.jpg') }}" alt="">
                            </div>
                            <div class="service-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-plane"></span>
                                </div>
                                <h2 class="service-one__title"><a href="{{ route('travelInsurance') }}">Travel insurance</a></h2>
                                <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Insurance Page One End-->

        <!--Tracking Start-->
        <section class="tracking">
            <div class="container">
                <div class="tracking__inner">
                    <div class="tracking-shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-1.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-2.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-3.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-4 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-4.png') }}" alt="">
                    </div>
                    <div class="tracking__left">
                        <div class="tracking__icon">
                            <span class="icon-folder"></span>
                        </div>
                        <div class="tracking__content">
                            <p class="tracking__sub-title">Quisque vel ortor</p>
                            <h3 class="tracking__title">Start tracking your claims</h3>
                        </div>
                    </div>
                    <div class="tracking__btn-box">
                        <a href="{{ route('about') }}" class="thm-btn tracking__btn">Track Your Claim</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Tracking End-->

@endsection 