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

        @include('components.indexheader')

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
                                            <a href="{{ route('orders.create') }}" class="thm-btn main-slider__btn">Request
                                                Demo</a>
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

                        <!-- Video Section Mobile/Tablet Only - After First Column -->
                        <div class="d-lg-none">
                            <div class="video-section-mobile" style="margin-top: 60px;">
                                <div class="section-title text-center">
                                    <div class="section-sub-title-box">
                                        {{-- <p class="section-sub-title">Video Pembelajaran</p> --}}
                                    </div>
                                    <h2 class="section-title__title">What’s new from AI?</h2>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="video-section__single">
                                            <div class="video-section__inner">
                                                <div class="video-wrapper">
                                                    <iframe width="100%" height="250"
                                                        src="https://drive.google.com/file/d/1fl48qeRNmGr1akKDUEDr1ha5ktUIQdzJ/preview"
                                                        title="Google Drive video player" frameborder="0"
                                                        allowfullscreen>
                                                    </iframe>
                                                </div>
                                                <div class="video-section__content">
                                                    <h3 class="video-section__title">Unveiling The Trends with AI</h3>
                                                    <p class="video-section__text">Unveiling The Trends with AI</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <div class="video-section__single">
                                            <div class="video-section__inner">
                                                <div class="video-wrapper">
                                                    <iframe width="100%" height="250"
                                                        src="https://drive.google.com/file/d/17lNs391PfM6iCShtD7mFuhmxjRK_Bd6V/preview"
                                                        title="Google Drive video player" frameborder="0" allowfullscreen>
                                                    </iframe>
                                                </div>
                                                <div class="video-section__content">
                                                    <h3 class="video-section__title">AI Hallucination Running</h3>
                                                    <p class="video-section__text">AI Hallucination Running</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="about-one__btn-box" style="display: flex; gap: 1rem;">
                                    <a href="mailto:aiinsidergo25@gmail.com" target="_blank"
                                        class="thm-btn about-one__btn">Discover More</a>
                                    <a href="{{ route('orders.create') }}" class="thm-btn about-one__btn">Request
                                        Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Video Section Start - Desktop Only-->
        <section class="video-section d-none d-lg-block" id="videos">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        {{-- <p class="section-sub-title">Video Pembelajaran</p> --}}
                    </div>
                    <h2 class="section-title__title">What’s new from AI?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="video-section__single">
                            <div class="video-section__inner">
                                <div class="video-wrapper">
                                    <iframe width="100%" height="315"
                                        src="https://drive.google.com/file/d/1fl48qeRNmGr1akKDUEDr1ha5ktUIQdzJ/preview"
                                        title="Google Drive video player" frameborder="0"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="video-section__content">
                                    <h3 class="video-section__title">Unveiling The Trends with AI</h3>
                                    <p class="video-section__text">Unveiling The Trends with AI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="200ms">
                        <div class="video-section__single">
                            <div class="video-section__inner">
                                <div class="video-wrapper">
                                    <iframe width="100%" height="315"
                                        src="https://drive.google.com/file/d/17lNs391PfM6iCShtD7mFuhmxjRK_Bd6V/preview"
                                        title="Google Drive video player" frameborder="0" allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="video-section__content">
                                    <h3 class="video-section__title">AI Hallucination Running</h3>
                                    <p class="video-section__text">AI Hallucination Running</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video Section End-->

        <!--AI Features Section Start-->
        <section class="ai-features-section">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">AI Insider: Unlock Your Business Potential</p>
                    </div>
                    <h2 class="section-title__title">Our Powerful Features</h2>
                    <p class="section-title__text">At AI Insider, we empower businesses to thrive in the digital age by providing unparalleled insights into the market and talent landscape. With over million successful data structure, we possess end-to-end data capabilities that help businesses like yours find the right markets, talent, and opportunities.</p>
                </div>
                <div class="row">
                    <!-- Feature 1: AI Market Profiling -->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="ai-features-single">
                            <div class="ai-features-single__inner">
                                <div class="ai-features-single__icon">
                                    <i class="icon-analytics"></i>
                                </div>
                                <div class="ai-features-single__content">
                                    <h3 class="ai-features-single__title">AI Market Profiling</h3>
                                    <p class="ai-features-single__text">Navigate the complexities of the market with confidence. Our AI Market Profiling tool goes beyond basic demographics, offering a deep dive into your target audience and competitive landscape.</p>
                                    <div class="ai-features-single__features">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Customer Profiling: Understand your ideal customers with precision</li>
                                            <li><i class="fa fa-check"></i> Market Trends & Opportunities: Stay ahead of the curve</li>
                                            <li><i class="fa fa-check"></i> Risk Assessment: Mitigate potential pitfalls before they arise</li>
                                        </ul>
                                    </div>
                                    <div class="ai-features-single__btn">
                                        <a href="{{ route('orders.create') }}" class="thm-btn ai-features-single__btn-link">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2: AI Talent Profiling -->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="ai-features-single">
                            <div class="ai-features-single__inner">
                                <div class="ai-features-single__icon">
                                    <i class="icon-team"></i>
                                </div>
                                <div class="ai-features-single__content">
                                    <h3 class="ai-features-single__title">AI Talent Profiling</h3>
                                    <p class="ai-features-single__text">Discover, attract, and retain the best talent for your organization. Our AI Talent Profiling solution streamlines your recruitment process and optimizes your workforce.</p>
                                    <div class="ai-features-single__features">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Skill Gap Analysis: Identify critical skill gaps within your team</li>
                                            <li><i class="fa fa-check"></i> Candidate Matching: Effortlessly match top-tier candidates</li>
                                            <li><i class="fa fa-check"></i> Talent Retention Insights: Build a loyal and productive workforce</li>
                                        </ul>
                                    </div>
                                    <div class="ai-features-single__btn">
                                        <a href="{{ route('orders.create') }}" class="thm-btn ai-features-single__btn-link">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3: AI Do-It-Yourself -->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="ai-features-single">
                            <div class="ai-features-single__inner">
                                <div class="ai-features-single__icon">
                                    <i class="icon-customize"></i>
                                </div>
                                <div class="ai-features-single__content">
                                    <h3 class="ai-features-single__title">AI Do-It-Yourself Custom Use Cases</h3>
                                    <p class="ai-features-single__text">Tailor AI Insider to your unique business needs. Our intuitive "Do-It-Yourself" platform allows you to create customized AI-powered solutions for specific challenges and opportunities.</p>
                                    <div class="ai-features-single__features">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Build Your Own Workflows: Design bespoke AI models</li>
                                            <li><i class="fa fa-check"></i> Integrate Your Data: Seamlessly integrate existing datasets</li>
                                            <li><i class="fa fa-check"></i> Endless Possibilities: From supply chains to customer experiences</li>
                                        </ul>
                                    </div>
                                    <div class="ai-features-single__btn">
                                        <a href="{{ route('orders.create') }}" class="thm-btn ai-features-single__btn-link">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ai-features-section__bottom">
                    <div class="text-center">
                        <p class="ai-features-section__bottom-text">Ready to revolutionize your business with data-driven insights?</p>
                        <a href="{{ route('orders.create') }}" class="thm-btn ai-features-section__cta-btn">Explore AI Insider Today</a>
                    </div>
                </div>
            </div>
        </section>
        <!--AI Features Section End-->

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
                    <p class="text">AI Insider has revolutionized how we approach market and talent profiling. The
                        insights
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

        <style>
            .video-section {
                padding: 120px 0;
                background-color: #f8f9fa;
                margin: 60px 0;
            }

            .video-section__single {
                margin-bottom: 30px;
            }

            .video-section__inner {
                background: #fff;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                height: 100%;
            }

            .video-section__inner:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            }

            .video-wrapper {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 56.25%;
                margin-bottom: 20px;
                border-radius: 8px;
                overflow: hidden;
            }

            .video-wrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 8px;
            }

            .video-section__title {
                font-size: 20px;
                font-weight: 600;
                color: #2c3e50;
                margin-bottom: 10px;
            }

            .video-section__text {
                color: #6c757d;
                font-size: 14px;
                line-height: 1.6;
            }

            .video-section-mobile {
                padding: 40px 0;
                background-color: #f8f9fa;
                border-radius: 15px;
                margin-top: 60px;
            }

            .video-section-mobile .video-wrapper {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 56.25%;
                margin-bottom: 15px;
                border-radius: 8px;
                overflow: hidden;
            }

            .video-section-mobile .video-wrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 8px;
            }

            @media (max-width: 768px) {
                .video-section {
                    padding: 80px 0;
                    margin: 40px 0;
                }
            }

            /* AI Features Section Styles */
            .ai-features-section {
                padding: 120px 0;
                background-color: #ffffff;
            }

            .ai-features-single {
                margin-bottom: 30px;
            }

            .ai-features-single__inner {
                background: #fff;
                border-radius: 15px;
                padding: 40px 30px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                transition: all 0.3s ease;
                height: 100%;
                min-height: 500px;
                border: 1px solid #f0f0f0;
                position: relative;
                overflow: hidden;
                display: flex;
                flex-direction: column;
            }

            .ai-features-single__inner:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            }

            .ai-features-single__inner:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .ai-features-single__icon {
                text-align: center;
                margin-bottom: 25px;
            }

            .ai-features-single__icon i {
                font-size: 48px;
                color: #667eea;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .ai-features-single__title {
                font-size: 22px;
                font-weight: 700;
                color: #2c3e50;
                margin-bottom: 15px;
                text-align: center;
            }

            .ai-features-single__text {
                color: #6c757d;
                font-size: 14px;
                line-height: 1.7;
                margin-bottom: 20px;
                text-align: center;
            }

            .ai-features-single__content {
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .ai-features-single__features {
                flex: 1;
                margin-bottom: 25px;
            }

            .ai-features-single__features ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .ai-features-single__features li {
                padding: 8px 0;
                color: #555;
                font-size: 13px;
                line-height: 1.5;
                display: flex;
                align-items: flex-start;
            }

            .ai-features-single__features li i {
                color: #28a745;
                margin-right: 10px;
                margin-top: 2px;
                font-size: 12px;
            }

            .ai-features-single__btn {
                text-align: center;
                margin-top: auto;
                padding-top: 25px;
            }

            .ai-features-single__btn-link {
                padding: 12px 30px;
                font-size: 14px;
                border-radius: 25px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border: none;
                color: white;
                text-decoration: none;
                display: inline-block;
                transition: all 0.3s ease;
            }

            .ai-features-single__btn-link:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
                color: white;
                text-decoration: none;
            }

            .ai-features-section__bottom {
                margin-top: 60px;
                padding-top: 40px;
                border-top: 1px solid #e9ecef;
            }

            .ai-features-section__bottom-text {
                font-size: 18px;
                color: #2c3e50;
                margin-bottom: 25px;
                font-weight: 600;
            }

            .ai-features-section__cta-btn {
                padding: 15px 40px;
                font-size: 16px;
                border-radius: 30px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border: none;
                color: white;
                text-decoration: none;
                display: inline-block;
                transition: all 0.3s ease;
                font-weight: 600;
            }

            .ai-features-section__cta-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
                color: white;
                text-decoration: none;
            }

            @media (max-width: 768px) {
                .ai-features-section {
                    padding: 80px 0;
                }

                .ai-features-single__inner {
                    padding: 30px 20px;
                    min-height: 450px;
                }

                .ai-features-single__title {
                    font-size: 20px;
                }

                .ai-features-section__bottom {
                    margin-top: 40px;
                }
            }
        </style>

    @endsection
