@extends('layout.layout')

@php
$headTitle = 'News';
$title = 'news';
$subTitle = 'Latest news';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Which allows you to pay down
                                        insurance bills</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Leverage agile frameworks to
                                        provide</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Bring to the table win-win
                                        survival strategis</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-4.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">It is a long established fact
                                        that a reader</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-5.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">There are many variations of
                                        passages of Lorem</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-6.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Contrary to popular belief,
                                        Lorem Ipsum text</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

@endsection 