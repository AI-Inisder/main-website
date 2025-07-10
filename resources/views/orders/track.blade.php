@extends('layout.layout')

@php
    $headTitle = 'Track Order - AI Insider';
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

        @include('components.indexheader')

        <x-strickyheader />

        <div class="container" style="padding: 80px 0;">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Track Your Order</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('orders.track.post') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="identifier">Order Number or Email</label>
                            <input type="text" class="form-control" id="identifier" name="identifier" 
                                   placeholder="Enter order number (e.g., ORD-20250708-1234) or email address"
                                   value="{{ request()->route('identifier') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Track Order</button>
                        <a href="{{ route('orders') }}" class="btn btn-secondary">Create New Order</a>
                    </form>

                    @if($error)
                        <div class="alert alert-danger mt-4">
                            {{ $error }}
                        </div>
                    @endif

                    @if($order)
                        <div class="mt-4">
                            <h4>Order Status</h4>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Order Number:</strong> {{ $order['order_number'] }}<br>
                                            <strong>Status:</strong> 
                                            <span class="badge badge-{{ $order['status_color'] ?? 'gray' }}">
                                                {{ $order['status_label'] ?? $order['status'] ?? 'Unknown' }}
                                            </span><br>
                                            <strong>Created:</strong> {{ date('M d, Y H:i', strtotime($order['created_at'])) }}<br>
                                            <strong>Last Updated:</strong> {{ date('M d, Y H:i', strtotime($order['last_updated'])) }}
                                        </div>
                                        <div class="col-md-6">
                                            @if(isset($order['order_change']) && $order['order_change'])
                                                <strong>Change Type:</strong> 
                                                <span class="badge badge-{{ $order['order_change_color'] ?? 'gray' }}">
                                                    {{ $order['order_change_label'] ?? 'Unknown' }}
                                                </span><br>
                                            @endif
                                            @if($order['pricing_type'])
                                                <strong>Pricing:</strong> 
                                                <span class="badge badge-{{ $order['pricing_type_color'] ?? 'gray' }}">
                                                    {{ $order['pricing_type_label'] ?? 'Unknown' }}
                                                </span><br>
                                                @if($order['order_amount'])
                                                    <strong>Amount:</strong> {{ $order['formatted_order_amount'] }}
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    @if(isset($order['google_drive_link']) && $order['google_drive_link'])
                                        <div class="mt-3">
                                            <strong>Google Drive Link:</strong><br>
                                            <a href="{{ $order['google_drive_link'] }}" target="_blank" class="btn btn-success btn-sm mt-1">
                                                <i class="fab fa-google-drive"></i> Open Drive Link
                                            </a>
                                        </div>
                                    @endif
                                    <div class="mt-3">
                                        <a href="{{ route('orders.details', $order['order_number']) }}" class="btn btn-info">
                                            View Full Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h4>Search Orders by Email</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('orders.search') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" 
                                   placeholder="Enter email address to find all orders" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Search Orders</button>
                    </form>
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
.badge-yellow { background-color: #ffc107; color: #212529; }
.badge-blue { background-color: #007bff; color: white; }
.badge-indigo { background-color: #6610f2; color: white; }
.badge-green { background-color: #28a745; color: white; }
.badge-red { background-color: #dc3545; color: white; }
.badge-gray { background-color: #6c757d; color: white; }
</style>
@endsection