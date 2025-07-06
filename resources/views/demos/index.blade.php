@extends('layout.layout')

@php
    $headTitle = 'AI Insider';
    $css =
        '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />';
    $header = 'false';
    $script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <script src="' . asset('assets/js/insur.js') . '"></script>';
    $counterone = 'false';
@endphp

@section('content')

    <div class="page-wrapper">

        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix" style="padding: 0;">
                            <div class="main-menu__left"
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                                <div class="main-menu__logo" style="padding: 1rem 0;">
                                    <a href="{{ route('index') }}"><img
                                            src="{{ asset('assets/images/icon/insider2_logo.png') }}" alt=""
                                            style="width: 7rem"></a>
                                </div>
                                <div class="main-menu__main-menu-box" style="padding: .5rem 1rem">
                                    <div class="main-menu__main-menu-box-inner">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list one-page-scroll-menu">
                                            <li class="dropdown current scrollToLink">
                                                <a href="#home">Home </a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="#about">About</a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="#why">Choose Us</a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="#team">Team</a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="#news">News</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <x-strickyheader />
        <!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix" id="home">
            <div class="swiper-container thm-swiper__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/resources/benefits-two-img.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="margin: 0"><span>Powering</span>
                                        </h2>
                                        <h2 class="main-slider__title">Every Market <br> and Talent Profiling
                                        </h2>
                                        <p class="main-slider__text">Redefining the B2B digital market with AI-driven
                                            solutions, <br> empowering businesses to thrive globally with Telkom Indonesia's
                                            innovation.</p>
                                        <div class="main-slider__btn-box" style="display: flex; gap: 1rem;">
                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                class="thm-btn main-slider__btn">Explore
                                                Insights</a>
                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                class="thm-btn main-slider__btn">Learn About
                                                AI
                                                Insider</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one" id="about">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url('{{ asset('assets/images/backgrounds/about-one-bg.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <h2 class="about-one__experience-year">2</h2>
                                    <p class="about-one__experience-text">Awards <br> Winning Platform</p>
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/about-one-shape-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">What is AI Insider?</p>
                                </div>
                                <h2 class="section-title__title">Your Gateway to the Future of Artificial Intelligence</h2>
                            </div>
                            <p class="about-one__text-2">AI Insider is a revolutionary platform recently approved by the
                                Digi Council, marking a monumental leap in Telkom Indonesia's AI development journey. Our
                                goal is to empower businesses with tools for market profiling, data-driven decision-making,
                                operational efficiency, and new growth opportunities.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon" style="padding: 10px">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Cutting-edge AI solutions for B2B markets.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon" style="padding: 10px">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Insights into market trends and data analytics.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon" style="padding: 10px">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Backed by Telkom Indonesia's expertise in telecommunications and digital
                                            innovation.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-call">
                                <div class="about-one__btn-box">
                                    <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                        class="thm-btn about-one__btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one" id="why">
            <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="{{ asset('assets/images/resources/why-choose-one-img.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why choose AI Insider</p>
                                </div>
                                <h2 class="section-title__title">Revolutionizing Businesses with AI</h2>
                            </div>
                            <p class="why-choose-one__text">By integrating AI into its core business strategy, Telkom Group
                                ensures its leadership in the competitive telecommunications and digital services landscape.
                                With the AI Insider Platform, businesses can unlock unprecedented growth opportunities.</p>
                            <div class="why-choose-one__list-box">
                                <ul class="list-unstyled why-choose-one__list">
                                    <li>
                                        <div class="why-choose-one__single" style="height: 10rem">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Data-Driven Market Profiling
                                                    </h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Gain deep insights into market
                                                        opportunities.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single" style="height: 10rem">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Enhanced Efficiency</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Streamline operations with
                                                        AI-powered tools.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single" style="height: 10rem">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Global Reach</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Harness the power of AI to scale
                                                        your business worldwide.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single" style="height: 10rem">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Trusted Innovation</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Built on Telkom Indonesia’s legacy
                                                        of excellence.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/get-insurance-bg.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Specialist</p>
                                </div>
                                <h2 class="section-title__title">Connect with our team of experts who provide comprehensive
                                    solutions for all your business and legal needs</h2>
                            </div>
                            <div class="get-insurance__tab">
                                <div class="get-insurance__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#gencon" style="height: 4rem;" class="tab-btn active-btn">
                                            <span>General Consultation</span>
                                        </li>
                                        <li data-tab="#lawyer" style="height: 4rem;" class="tab-btn"><span>Lawyer</span>
                                        </li>
                                        <li data-tab="#notaris" style="height: 4rem;" class="tab-btn"><span>Notaris</span>
                                        </li>
                                        <li data-tab="#legser" style="height: 4rem;" class="tab-btn"><span>Legal
                                                Services</span></li>
                                        <li data-tab="#capin" style="height: 4rem;" class="tab-btn"><span>Capital
                                                Investment</span></li>
                                        <li data-tab="#investors" style="height: 4rem;" class="tab-btn">
                                            <span>Investors</span>
                                        </li>
                                        <li data-tab="#enginers" style="height: 4rem;" class="tab-btn"><span>Enginers</span>
                                        </li>
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="gencon">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="lawyer">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="notaris">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="legser">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="capin">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="investors">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <!--tab-->
                                        <div class="tab" id="enginers">
                                            <div class="get-insurance__content">
                                                <div class="testimonial-six__bottom" style="margin-top: 5rem;">
                                                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel"
                                                        data-owl-options='{
                                                                                                    "loop": true,
                                                                                                    "autoplay": true,
                                                                                                    "margin": 36,
                                                                                                    "nav": true,
                                                                                                    "dots": false,
                                                                                                    "smartSpeed": 500,
                                                                                                    "autoplayTimeout": 10000,
                                                                                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
                                                                                                    "responsive": {
                                                                                                        "0": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "768": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "992": {
                                                                                                            "items": 1
                                                                                                        },
                                                                                                        "1350": {
                                                                                                            "items": 1
                                                                                                        }
                                                                                                    }
                                                                                                }'>
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Remedios Linared</h3>
                                                                        <p>Web designar</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Brandon Martinez</h3>
                                                                        <p>Product Manager</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                        <!--Testimonial Six Single Start-->
                                                        <div class="item">
                                                            <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                                                class="testimonial-six__single">
                                                                <div class="testimonial-six__single-top">
                                                                    <div class="testimonial-six__ratting">
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                    </div>
                                                                    <p class="testimonial-six__text">Standard dummy text
                                                                        ever since the unknown printer
                                                                        took
                                                                        galley of scramble make a type specimen book has the
                                                                        been industr</p>
                                                                </div>
                                                                <div class="testimonial-six__client-info-box">
                                                                    <div class="testimonial-six__quote-icon">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-img">
                                                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="testimonial-six__client-info">
                                                                        <h3>Marjorie Worley</h3>
                                                                        <p>Web Development</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--Testimonial Six Single Start-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--Get Insurance End-->

    <!--Team One Start-->
    <section class="team-one" id="team">
        <div class="team-one__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/team-one-shape-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Our Team</p>
                </div>
                <p class="text">AI Insider has revolutionized how we approach market and talent profiling. The insights
                    provided by this platform have driven efficiency and growth across our operations</p>
                <h2 class="section-title__title">Here is the Team
                </h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="{{ asset('assets/images/resources/person3.jpg') }}" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title" style="height: 3.5rem;">Chief of Executive Officer</p>
                            <h3 class="team-one__name">Amy Maryana</h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="{{ asset('assets/images/resources/person2.jpg') }}" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title" style="height: 3.5rem;">Chief of Marketing and Management
                                Risk
                                Officer</p>
                            <h3 class="team-one__name">Amanda Julia Isa</h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img">
                            <div class="team-one__img-box">
                                <img src="{{ asset('assets/images/resources/person1.jpg') }}" alt="">
                            </div>
                            <ul class="list-unstyled team-one__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-one__content">
                            <p class="team-one__sub-title" style="height: 3.5rem;">Chief of creative and experience
                                officer
                            </p>
                            <h3 class="team-one__name">Hefrian</h3>
                            <ul class="list-unstyled team-one__social-two">
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-shape-2 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-2.png') }}" alt="">
        </div>
        <div class="testimonial-one-shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="testimonial-one__top">
                <div class="row" style="margin-bottom: 1rem">
                    <div class="col-xl-6">
                        <div class="testimonial-one__top-left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Hear From Us</p>
                                </div>
                                <h2 class="section-title__title">Here is the testimonials</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-one__top-right">
                            <p class="testimonial-one__top-text">Got questions or ideas? Reach out to our team and
                                discover how AI Insider can empower your business and join our partners to leverage AI
                                Digital Platform just in one swipe</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-one__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                            data-owl-options='{
                                                                                                                                                                "loop": true,
                                                                                                                                                                "autoplay": true,
                                                                                                                                                                "margin": 30,
                                                                                                                                                                "nav": false,
                                                                                                                                                                "dots": false,
                                                                                                                                                                "smartSpeed": 500,
                                                                                                                                                                "autoplayTimeout": 10000,
                                                                                                                                                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                                                                                                                                                "responsive": {
                                                                                                                                                                    "0": {
                                                                                                                                                                        "items": 1
                                                                                                                                                                    },
                                                                                                                                                                    "768": {
                                                                                                                                                                        "items": 2
                                                                                                                                                                    },
                                                                                                                                                                    "992": {
                                                                                                                                                                        "items": 2
                                                                                                                                                                    },
                                                                                                                                                                    "1200": {
                                                                                                                                                                        "items": 2
                                                                                                                                                                    }
                                                                                                                                                                }
                                                                                                                                                            }'>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-content">
                                                <div class="testimonial-one__client-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="testimonial-one__client-details">
                                                    <h3 class="testimonial-one__client-name">Tiffany</h3>
                                                    <p class="testimonial-one__client-sub-title">Chief of Marketing
                                                        Officer - Omni Channel Asistant (OCA)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="testimonial-one__text" style="height: 5rem">AI Insider membantu kami
                                            dari sisi Produk utk
                                            bisa memahami market wholesale di regional dan memahami profile potential
                                            customernya
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-inner">
                                        <div class="testimonial-one__shape-1">
                                            <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <div class="testimonial-one__client-content">
                                                <div class="testimonial-one__client-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="testimonial-one__client-details">
                                                    <h3 class="testimonial-one__client-name">Puji Suharmanto</h3>
                                                    <p class="testimonial-one__client-sub-title">AM Divisi Wholesale
                                                        Service, PT Telkom Indonesia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="testimonial-one__text" style="height: 5rem">AI Insider ibarat
                                            menjadi
                                            kompas ditengah hutan
                                            belantara</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--News One Start-->
    <section class="news-one" id="news">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Latest News</p>
                </div>
                <h2 class="section-title__title">Our Latest Articles <br> & News</h2>
            </div>
            <div class="row">
                @if (isset($news) && count($news) > 0)
                    @foreach ($news as $item)
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="news-one__single">
                                <div class="news-one__img" style="height: 250px; overflow: hidden;">
                                    <img src="{{ isset($item['image']) ? 'https://cms.asets.id/storage/' . $item['image'] : asset('assets/images/resources/news-default.jpg') }}"
                                        alt="{{ $item['title'] ?? 'News image' }}"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                    <div class="news-one__tag">
                                        <p>{{ $item['category'] ?? 'News' }}</p>
                                    </div>
                                    <a href="{{ route('news.show', $item['slug'] ?? '#') }}">
                                        <span class="news-one__plus"></span>
                                    </a>
                                    <div class="news-one__date">
                                        <p>{{ isset($item['published_date']) ? \Carbon\Carbon::parse($item['published_date'])->format('d M, Y') : date('d M, Y') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    </ul>
                                    <h3 class="news-one__title"
                                        style="min-height: 50px; margin-bottom: 15px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        <a
                                            href="{{ route('news.show', $item['slug'] ?? '#') }}">{{ $item['title'] ?? 'No title available' }}</a>
                                    </h3>
                                    <p class="news-one__excerpt"
                                        style="margin-bottom: 20px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {{ $item['excerpt'] ?? substr(strip_tags($item['content'] ?? 'No content available'), 0, 100) . '...' }}
                                    </p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('news.show', $item['slug'] ?? '#') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="news-one__empty text-center py-5">
                            <i class="far fa-newspaper fa-3x mb-3" style="color: #c0c0c0;"></i>
                            <h4>No News Available</h4>
                            <p>Check back later for updates and the latest articles.</p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="news-one__btn-box">
                <a href="{{ route('news.index') }}" class="thm-btn news-one__btn">View All News</a>
            </div>
        </div>
    </section>
    <!--News One End-->

@endsection