@extends('layout.layout')

@php
    $headTitle = 'Berita - AI Insider';
    $css = '
    <style>
        .news-one__single {
            height: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .news-one__single:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }
        .news-one__content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .news-one__title {
            min-height: 80px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            margin-bottom: 15px;
        }
        .news-one__img {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        .news-one__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .news-one__single:hover .news-one__img img {
            transform: scale(1.05);
        }
        .news-one__excerpt {
            margin-bottom: 20px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            color: #777;
            line-height: 1.6;
        }
        .news-one__read-more {
            margin-top: auto;
            padding-top: 10px;
        }
        .news-one__read-more a {
            display: inline-flex;
            align-items: center;
            font-weight: 600;
        }
        .news-one__read-more a i {
            margin-left: 5px;
            transition: margin-left 0.3s ease;
        }
        .news-one__read-more a:hover i {
            margin-left: 8px;
        }
        .news-empty {
            padding: 50px 0;
            text-align: center;
        }
        .news-empty i {
            font-size: 3rem;
            color: #ddd;
            margin-bottom: 20px;
        }
    </style>';
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
                                                <a href="{{ route('index') }}">Beranda</a>
                                            </li>
                                            <li class="dropdown current scrollToLink">
                                                <a href="{{ route('news.index') }}">Berita</a>
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
                    <h2>Berita Terbaru</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Berita</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Section Start-->
        <section class="news-two">
            <div class="container">
                <div class="row">
                    @if (isset($news) && is_array($news) && count($news) > 0)
                        @foreach ($news as $item)
                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <img src="{{ isset($item['image']) ? 'https://cms.asets.id/storage/' . $item['image'] : asset('assets/images/resources/news-default.jpg') }}"
                                            alt="{{ $item['title'] ?? 'News image' }}">
                                        <div class="news-one__tag">
                                            <p>{{ $item['category'] ?? 'Berita' }}</p>
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
                                        <h3 class="news-one__title">
                                            <a
                                                href="{{ route('news.show', $item['slug'] ?? '#') }}">{{ $item['title'] ?? 'Tidak ada judul' }}</a>
                                        </h3>
                                        <p class="news-one__excerpt">
                                            {{ $item['excerpt'] ?? substr(strip_tags($item['content'] ?? 'Tidak ada konten'), 0, 120) . '...' }}
                                        </p>
                                        <div class="news-one__read-more">
                                            <a href="{{ route('news.show', $item['slug'] ?? '#') }}">Baca Selengkapnya <i
                                                    class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="news-empty">
                                <i class="far fa-newspaper"></i>
                                <h4>Tidak ada berita ditemukan</h4>
                                <p>Silakan kembali lagi nanti untuk melihat berita terbaru.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <!--News Section End-->
    </div>
@endsection
