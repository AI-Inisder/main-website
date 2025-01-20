@extends('layout.layout')

@php
    $headTitle = 'Testimonial';
    $title='Testimonials';
    $subTitle = 'Testimonials';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Testimonial Page Start-->
        <section class="testimonial-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">Smith Vectoria</h3>
                                            <p class="testimonial-one__client-sub-title">director</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">Christine Eve</h3>
                                            <p class="testimonial-one__client-sub-title">director</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">Hallen Smith</h3>
                                            <p class="testimonial-one__client-sub-title">director</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-4.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                            <p class="testimonial-one__client-sub-title">director</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-5.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">Jessica Brown</h3>
                                            <p class="testimonial-one__client-sub-title">director</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__single-inner">
                                <div class="testimonial-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img-box">
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-6.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <div class="testimonial-one__client-review">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h3 class="testimonial-one__client-name">Mike Hardson</h3>
                                            <p class="testimonial-one__client-sub-title">director</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Page End-->

@endsection 