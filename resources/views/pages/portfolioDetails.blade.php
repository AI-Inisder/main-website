@extends('layout.layout')

@php
    $headTitle = 'Portfolio Details';
    $title='Portfolio Details';
    $subTitle = 'Portfolio details';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Portfolio Details Start-->
        <section class="portfolio-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-details__img">
                            <img src="{{ asset('assets/images/project/portfolio-details-img.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="portfolio-details__content">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="portfolio-details__content-left">
                                <h3 class="portfolio-details__title">Insurance policy</h3>
                                <p class="portfolio-details__text-1">Tincidunt elit magnis nulla facilisis sagittis
                                    sapien nunc amet ultrices dolores sit ipsum velit purus aliquet massa fringilla leo
                                    orci. Sapien nunc amet ultrices, dolores sit ipsum velit massa fringilla leo orci
                                    dolors sit amet elit amet. </p>
                                <p class="portfolio-details__text-2">It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking at its layout. The point
                                    of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable
                                    English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                                    as their default model text, and a search for 'lorem ipsum' will uncover many web
                                    sites still in their infancy. Various versions have evolved over the years,
                                    sometimes by accident, humour and the like.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="portfolio-details__content-right">
                                <div class="portfolio-details__details-box">
                                    <ul class="list-unstyled portfolio-details__details-list">
                                        <li>
                                            <p class="portfolio-details__client">Clients:</p>
                                            <h4 class="portfolio-details__name">Jessica Brown</h4>
                                        </li>
                                        <li>
                                            <p class="portfolio-details__client">Category:</p>
                                            <h4 class="portfolio-details__name">Insurance, Policies</h4>
                                        </li>
                                        <li>
                                            <p class="portfolio-details__client">Date:</p>
                                            <h4 class="portfolio-details__name">20 March, 2022</h4>
                                        </li>
                                        <li>
                                            <div class="portfolio-details__social">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="projectc-details__pagination-box">
                            <ul class="projectc-details__pagination list-unstyled clearfix">
                                <li class="next">
                                    <div class="icon">
                                        <a href="#" aria-label="Previous"><i class="icon-right-arrow"></i></a>
                                    </div>
                                    <div class="content">
                                        <span>Previous post</span>
                                        <p>Business strategy</p>
                                    </div>
                                </li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="count"><a href="#"></a></li>
                                <li class="previous">
                                    <div class="content">
                                        <span>Next post</span>
                                        <p>Tech solutions</p>
                                    </div>
                                    <div class="icon">
                                        <a href="#" aria-label="Previous"><i class="icon-right-arrow1"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Details End-->

        <!--Similar Portfolio Start-->
        <section class="similar-portfolio">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">our portfolio</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Our similar completed <br> projects</h2>
                </div>
                <div class="row">
                    <!--Portfolio Single Start-->
                    <div class="col-xl-4 col-lg-4">
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
                    <div class="col-xl-4 col-lg-4">
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
                    <div class="col-xl-4 col-lg-4">
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
        <!--Similar Portfolio End-->

@endsection 