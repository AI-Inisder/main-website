@extends('layout.layout')

@php
    $headTitle = 'Pricing';
    $title='Pricing';
    $subTitle = 'Pricing plans';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--pricing Start-->
        <section class="pricing">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">pricing plans</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Choose the best plans <br> for yourself</h2>
                </div>
                <div class="pricing__tab">
                    <div class="pricing__tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#monthly" class="tab-btn active-btn"><span>Monthly Plan</span></li>
                            <li data-tab="#yearly" class="tab-btn"><span>Yearly Plan</span></li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="monthly">
                                <div class="pricing__main-content-box">
                                    <div class="row">
                                        <!--Pricing Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="pricing__single">
                                                <div class="pricing-shape-1">
                                                    <img src="{{ asset('assets/images/shapes/pricing-shape-1.png') }}" alt="">
                                                </div>
                                                <div class="pricing__single-top">
                                                    <div class="pricing__img">
                                                        <img src="{{ asset('assets/images/resources/pricing-img-1.png') }}" alt="">
                                                    </div>
                                                    <div class="pricing__content">
                                                        <h3>25$</h3>
                                                        <p>Per month</p>
                                                    </div>
                                                </div>
                                                <div class="pricing__single-bottom">
                                                    <h3 class="pricing__title">Business plan</h3>
                                                    <ul class="list-unstyled pricing__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Invoices/Estimates</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Online Payments</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Projects and Time Sheet</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Recurring Transations</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Client Portal</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing__btn-box">
                                                        <a href="{{ route('pricing') }}" class="thm-btn pricing__btn">Select
                                                            Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing Single End-->
                                        <!--Pricing Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="pricing__single">
                                                <div class="pricing-shape-1">
                                                    <img src="{{ asset('assets/images/shapes/pricing-shape-1.png') }}" alt="">
                                                </div>
                                                <div class="pricing__single-top">
                                                    <div class="pricing__img">
                                                        <img src="{{ asset('assets/images/resources/pricing-img-2.png') }}" alt="">
                                                    </div>
                                                    <div class="pricing__content">
                                                        <h3>45$</h3>
                                                        <p>Per month</p>
                                                    </div>
                                                </div>
                                                <div class="pricing__single-bottom">
                                                    <h3 class="pricing__title">Vehicle plan</h3>
                                                    <ul class="list-unstyled pricing__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Invoices/Estimates</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Online Payments</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Projects and Time Sheet</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Recurring Transations</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Client Portal</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing__btn-box">
                                                        <a href="{{ route('pricing') }}" class="thm-btn pricing__btn">Select
                                                            Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing Single End-->
                                        <!--Pricing Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="pricing__single">
                                                <div class="pricing-shape-1">
                                                    <img src="{{ asset('assets/images/shapes/pricing-shape-1.png') }}" alt="">
                                                </div>
                                                <div class="pricing__single-top">
                                                    <div class="pricing__img">
                                                        <img src="{{ asset('assets/images/resources/pricing-img-3.png') }}" alt="">
                                                    </div>
                                                    <div class="pricing__content">
                                                        <h3>65$</h3>
                                                        <p>Per month</p>
                                                    </div>
                                                </div>
                                                <div class="pricing__single-bottom">
                                                    <h3 class="pricing__title">Property plan</h3>
                                                    <ul class="list-unstyled pricing__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Invoices/Estimates</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Online Payments</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Projects and Time Sheet</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Recurring Transations</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Client Portal</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing__btn-box">
                                                        <a href="{{ route('pricing') }}" class="thm-btn pricing__btn">Select
                                                            Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing Single End-->
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab" id="yearly">
                                <div class="pricing__main-content-box">
                                    <div class="row">
                                        <!--Pricing Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="pricing__single">
                                                <div class="pricing-shape-1">
                                                    <img src="{{ asset('assets/images/shapes/pricing-shape-1.png') }}" alt="">
                                                </div>
                                                <div class="pricing__single-top">
                                                    <div class="pricing__img">
                                                        <img src="{{ asset('assets/images/resources/pricing-img-1.png') }}" alt="">
                                                    </div>
                                                    <div class="pricing__content">
                                                        <h3>35$</h3>
                                                        <p>Per month</p>
                                                    </div>
                                                </div>
                                                <div class="pricing__single-bottom">
                                                    <h3 class="pricing__title">Business plan</h3>
                                                    <ul class="list-unstyled pricing__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Invoices/Estimates</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Online Payments</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Projects and Time Sheet</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Recurring Transations</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Client Portal</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing__btn-box">
                                                        <a href="{{ route('pricing') }}" class="thm-btn pricing__btn">Select
                                                            Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing Single End-->
                                        <!--Pricing Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="pricing__single">
                                                <div class="pricing-shape-1">
                                                    <img src="{{ asset('assets/images/shapes/pricing-shape-1.png') }}" alt="">
                                                </div>
                                                <div class="pricing__single-top">
                                                    <div class="pricing__img">
                                                        <img src="{{ asset('assets/images/resources/pricing-img-2.png') }}" alt="">
                                                    </div>
                                                    <div class="pricing__content">
                                                        <h3>55$</h3>
                                                        <p>Per month</p>
                                                    </div>
                                                </div>
                                                <div class="pricing__single-bottom">
                                                    <h3 class="pricing__title">Vehicle plan</h3>
                                                    <ul class="list-unstyled pricing__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Invoices/Estimates</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Online Payments</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Projects and Time Sheet</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Recurring Transations</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Client Portal</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing__btn-box">
                                                        <a href="{{ route('pricing') }}" class="thm-btn pricing__btn">Select
                                                            Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing Single End-->
                                        <!--Pricing Single Start-->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="pricing__single">
                                                <div class="pricing-shape-1">
                                                    <img src="{{ asset('assets/images/shapes/pricing-shape-1.png') }}" alt="">
                                                </div>
                                                <div class="pricing__single-top">
                                                    <div class="pricing__img">
                                                        <img src="{{ asset('assets/images/resources/pricing-img-3.png') }}" alt="">
                                                    </div>
                                                    <div class="pricing__content">
                                                        <h3>75$</h3>
                                                        <p>Per month</p>
                                                    </div>
                                                </div>
                                                <div class="pricing__single-bottom">
                                                    <h3 class="pricing__title">Property plan</h3>
                                                    <ul class="list-unstyled pricing__points">
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Invoices/Estimates</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Online Payments</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Projects and Time Sheet</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Recurring Transations</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Client Portal</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing__btn-box">
                                                        <a href="{{ route('pricing') }}" class="thm-btn pricing__btn">Select
                                                            Policy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing Single End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing End-->

        <section class="brand-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="brand-one__title">
                            <h2>Trusted and funded by more then 800 companies</h2>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="brand-one__main-content">
                            <div class="thm-swiper__slider swiper-container swiper-container-initialized swiper-container-horizontal" data-swiper-options="{&quot;spaceBetween&quot;: 100, &quot;slidesPerView&quot;: 5, &quot;autoplay&quot;: { &quot;delay&quot;: 5000 }, &quot;breakpoints&quot;: {
                        &quot;0&quot;: {
                            &quot;spaceBetween&quot;: 30,
                            &quot;slidesPerView&quot;: 2
                        },
                        &quot;375&quot;: {
                            &quot;spaceBetween&quot;: 30,
                            &quot;slidesPerView&quot;: 2
                        },
                        &quot;575&quot;: {
                            &quot;spaceBetween&quot;: 30,
                            &quot;slidesPerView&quot;: 3
                        },
                        &quot;767&quot;: {
                            &quot;spaceBetween&quot;: 50,
                            &quot;slidesPerView&quot;: 4
                        },
                        &quot;991&quot;: {
                            &quot;spaceBetween&quot;: 50,
                            &quot;slidesPerView&quot;: 5
                        },
                        &quot;1199&quot;: {
                            &quot;spaceBetween&quot;: 100,
                            &quot;slidesPerView&quot;: 5
                        }
                    }}">
                                <div class="swiper-wrapper" style="transform: translate3d(-776px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide swiper-slide-prev" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide swiper-slide-active" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide swiper-slide-next" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide" style="width: 94px; margin-right: 100px;">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection 