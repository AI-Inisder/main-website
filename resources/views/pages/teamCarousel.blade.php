@extends('layout.layout')

@php
    $headTitle = 'Team Carousel';
    $title='Team';
    $subTitle = 'Team carousel';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Team Page Start-->
        <section class="team-page-carousel">
            <div class="container">
                <div class="thm-owl__carousel owl-theme owl-carousel teamCarousel carousel-dot-style" data-owl-options='{
                    "items": 3,
                    "margin": 108,
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
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Thomas Jakson</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Hallen Smith</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">David Cooper</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Thomas Jakson</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-5.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Kevin Martin</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-6.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Jessica Brown</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Thomas Jakson</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Hallen Smith</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">David Cooper</a></h3>
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
        <!--Team Page End-->

@endsection 