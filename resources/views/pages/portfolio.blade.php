@extends('layout.layout')

@php
    $headTitle = 'Portfolio';
    $title='Portfolio';
    $subTitle = 'Our portfolio';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Portfolio Start-->
        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                            <li data-filter=".stra"><span class="filter-text">Strategy</span></li>
                            <li data-filter=".busi"><span class="filter-text">Business</span></li>
                            <li data-filter=".insur"><span class="filter-text">Insurance</span></li>
                            <li data-filter=".poli"><span class="filter-text last-pd-none">Policies</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row filter-layout masonary-layout">
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-1.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-1.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi insur">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-2.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-2.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi poli">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-3.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-3.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item poli busi">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-4.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-4.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra poli">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-5.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-5.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item insur busi">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-6.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-6.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra busi">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-7.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-7.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item stra poli">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-8.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-8.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item poli busi">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('assets/images/project/portfolio-1-9.jpg') }}" alt="">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('assets/images/project/portfolio-1-9.jpg') }}" class="img-popup"><span
                                            class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">Strategy</p>
                                    <h4 class="portfolio__title"><a href="{{ route('portfolioDetails') }}">Insurance policy</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Portfolio Single End-->
                </div>
            </div>
        </section>
        <!--Portfolio End-->

@endsection 