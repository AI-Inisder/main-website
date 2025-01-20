@extends('layout.layout')

@php
    $headTitle = 'Portfolio Carousel';
    $title='portfolio carousel';
    $subTitle = 'Portfolio carousel';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Portfolio Carousel Page Start-->
        <section class="portfolio-carousel-page">
            <div class="container">
                <div class="row">
                    <div class="thm-owl__carousel owl-theme owl-carousel portfolio-carousel carousel-dot-style"
                        data-owl-options='{
                        "items": 3,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":2
                            },
                            "992":{
                                "items": 3
                            }
                        }
                    }'>
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-1.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-1.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-2.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-2.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-3.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-3.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-4.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-4.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-5.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-5.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-6.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-6.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-7.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-7.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-8.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-8.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                        <!--Portfolio Single Start-->
                        <div class="item">
                            <div class="portfolio__single">
                                <div class="portfolio__img">
                                    <img src="{{ asset('assets/images/project/portfolio-1-9.jpg') }}" alt="">
                                    <div class="portfolio__plus">
                                        <a href="{{ asset('assets/images/project/portfolio-1-9.jpg') }}" class="img-popup"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                    <div class="portfolio__content">
                                        <p class="portfolio__sub-title">Strategy</p>
                                        <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance
                                                policy</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Portfolio Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Carousel Page End-->
        
@endsection 