@extends('layout.layout')

@php
    $headTitle = $news['title'] . ' - AI Insider';
    $css = '';
    $header = 'false';
    $script = '';
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
                                            <li class="scrollToLink">
                                                <a href="{{ route('index') }}">Home</a>
                                            </li>
                                            <li class="dropdown current scrollToLink">
                                                <a href="{{ route('news.index') }}">News</a>
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

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg.jpg') }}')">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>News Details</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ route('news.index') }}">News</a></li>
                        <li><span>/</span></li>
                        <li>{{ $news['title'] }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="https://cms.asets.id/storage/{{ $news['image'] }}" alt="{{ $news['title'] }}">
                                <div class="news-details__date">
                                    <p>{{ \Carbon\Carbon::parse($news['published_date'])->format('d M, Y') }}</p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-folder-open"></i> {{ $news['category'] }}</a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">{{ $news['title'] }}</h3>
                                <div class="news-details__text-1">
                                    {!! $news['content'] !!}
                                </div>
                            </div>
                            <div class="news-details__bottom">
                                <p class="news-details__tags">
                                    <span>Tags:</span>
                                    @php
                                        $tags = explode(' ', $news['tags']);
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <a href="#">{{ $tag }}</a>
                                    @endforeach
                                </p>
                                <div class="news-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search news">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="#">{{ $news['category'] }} <span
                                                class="icon-right-arrow"></span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    @foreach ($tags as $tag)
                                        <a href="#">{{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->
    </div>
@endsection
