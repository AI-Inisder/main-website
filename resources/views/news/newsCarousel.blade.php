@extends('layout.layout')

@php
$headTitle = 'News Carousel';
$title = 'News Carousel';
$subTitle = 'News carousel';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--News One Start-->
        <section class="news-carousel-page">
            <div class="container">
                <div class="row">
                    <div class="thm-owl__carousel owl-theme owl-carousel news-carousel carousel-dot-style"
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
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Which allows you to pay down
                                            insurance bills</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Leverage agile frameworks to
                                            provide</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Bring to the table win-win
                                            survival strategis</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Which allows you to pay down
                                            insurance bills</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Leverage agile frameworks to
                                            provide</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Bring to the table win-win
                                            survival strategis</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Which allows you to pay down
                                            insurance bills</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Leverage agile frameworks to
                                            provide</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                        <div class="item">
                            <!--News One Single Start-->
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
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2022
                                            </a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Bring to the table win-win
                                            survival strategis</a></h3>
                                    <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                        mattis.</p>
                                    <div class="news-one__read-more">
                                        <a href="{{ route('newsDetails') }}">Read More <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News One End-->

@endsection 