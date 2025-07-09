@extends('layout.layout')

@php
    $headTitle = 'Detail Order - AI Insider';
    $css =
        '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />';
    $header = 'false';
    $script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <script src="' . asset('assets/js/insur.js') . '"></script>';
    $counterone = 'false';
    $footer = 'false';
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
                                        <ul class="main-menu__list">
                                            <li class="dropdown">
                                                <a href="{{ route('index') }}">Home </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">Choose Us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">Team</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('specialist') }}">Specialist</a>
                                            </li>
                                            <li class="current">
                                                <a href="{{ route('orders') }}">Orders</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">News</a>
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

        <div class="container" style="padding: 80px 0;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h3>Order Details - {{ $order['order_number'] }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Customer Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Full Name:</strong></td>
                                        <td>{{ $order['full_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Company:</strong></td>
                                        <td>{{ $order['company_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Division:</strong></td>
                                        <td>{{ $order['division'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>{{ $order['company_email'] }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Order Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Product:</strong></td>
                                        <td>{{ $order['product_display_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Project Type:</strong></td>
                                        <td>{{ ucfirst($order['project_type']) }}</td>
                                    </tr>
                                    @if ($order['project_name'])
                                        <tr>
                                            <td><strong>Project Name:</strong></td>
                                            <td>{{ $order['project_name'] }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td><strong>Created:</strong></td>
                                        <td>{{ date('M d, Y H:i', strtotime($order['created_at'])) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Updated:</strong></td>
                                        <td>{{ date('M d, Y H:i', strtotime($order['updated_at'])) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Order Description</h5>
                                <div class="card">
                                    <div class="card-body">
                                        {{ $order['order_description'] }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (isset($order['google_drive_link']) && $order['google_drive_link'])
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>Google Drive Link</h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <i class="fab fa-google-drive" style="font-size: 24px; color: #4285f4; margin-right: 10px;"></i>
                                                <div>
                                                    <a href="{{ $order['google_drive_link'] }}" target="_blank" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-external-link-alt"></i> Open Google Drive Link
                                                    </a>
                                                    <div class="mt-2">
                                                        <small class="text-muted">{{ $order['google_drive_link'] }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <h5>Status</h5>
                                <span class="badge badge-{{ $order['status_color'] ?? 'gray' }} badge-lg">
                                    {{ $order['status_label'] ?? $order['status'] ?? 'Unknown' }}
                                </span>
                            </div>
                            <div class="col-md-4">
                                @if (isset($order['order_change']) && $order['order_change'])
                                    <h5>Change Type</h5>
                                    <span class="badge badge-{{ $order['order_change_color'] ?? 'gray' }} badge-lg">
                                        {{ $order['order_change_label'] ?? 'Unknown' }}
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                @if ($order['pricing_type'])
                                    <h5>Pricing</h5>
                                    <span class="badge badge-{{ $order['pricing_type_color'] ?? 'gray' }} badge-lg">
                                        {{ $order['pricing_type_label'] ?? 'Unknown' }}
                                    </span>
                                    @if ($order['order_amount'])
                                        <div class="mt-2">
                                            <strong>Amount: {{ $order['formatted_order_amount'] }}</strong>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>

                        @if (isset($order['files']) && count($order['files']) > 0)
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>Uploaded Files</h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>File Name</th>
                                                    <th>Size</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order['files'] as $file)
                                                    <tr>
                                                        <td>{{ $file['name'] }}</td>
                                                        <td>{{ $file['size'] }}</td>
                                                        <td>{{ strtoupper($file['type']) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (isset($order['status_history']) && count($order['status_history']) > 0)
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5>Status History</h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Previous Status</th>
                                                    <th>Changed At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order['status_history'] as $history)
                                                    <tr>
                                                        <td>{{ ucfirst($history['status']) }}</td>
                                                        <td>{{ ucfirst($history['previous_status']) }}</td>
                                                        <td>{{ date('M d, Y H:i', strtotime($history['changed_at'])) }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="mt-4">
                            <a href="{{ route('orders.track') }}" class="btn btn-secondary">Back to Tracking</a>
                            <a href="{{ route('orders.create') }}" class="btn btn-primary">Create New Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /.container -->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-shape"
                style="background-image: url('{{ asset('assets/images/shapes/site-footer-shape.png') }}')"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/icon/insider2_logo.png') }}" style="width: 10rem" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">AI Insider is a revolutionary platform recently approved by the Digi Council, marking a monumental leap in Telkom Indonesia's AI development journey.</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__Explore">
                                <div class="footer-widget__title">
                                    <h3>Explore</h3>
                                </div>
                                <ul class="footer-widget__Explore-list list-unstyled">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('specialist') }}">Specialist</a></li>
                                    <li><a href="{{ route('orders') }}">Orders</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__services">
                                <div class="footer-widget__title">
                                    <h3>Services</h3>
                                </div>
                                <ul class="footer-widget__services-list list-unstyled">
                                    <li><a href="#">Market Profiling</a></li>
                                    <li><a href="#">Talent Profiling</a></li>
                                    <li><a href="#">AI Solutions</a></li>
                                    <li><a href="#">Business Intelligence</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__Contact">
                                <div class="footer-widget__title">
                                    <h3>Contact</h3>
                                </div>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:aiinsidergo25@gmail.com">aiinsidergo25@gmail.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>Telkom Indonesia HQ<br> Jakarta, Indonesia</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2024 by <a href="#">AI Insider</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->

    </div>
    <!-- /.page-wrapper -->

    <style>
        .badge-lg {
            font-size: 14px;
            padding: 8px 12px;
        }

        .badge-yellow {
            background-color: #ffc107;
            color: #212529;
        }

        .badge-blue {
            background-color: #007bff;
            color: white;
        }

        .badge-indigo {
            background-color: #6610f2;
            color: white;
        }

        .badge-green {
            background-color: #28a745;
            color: white;
        }

        .badge-red {
            background-color: #dc3545;
            color: white;
        }

        .badge-gray {
            background-color: #6c757d;
            color: white;
        }
    </style>
@endsection
