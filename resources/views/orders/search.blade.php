@extends('layout.layout')

@php
    $headTitle = 'search Order - AI Insider';
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
                    <h3>Search Orders by Email</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('orders.search') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Enter email address to find all orders"
                                   value="{{ request('email') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Search Orders</button>
                        <a href="{{ route('orders.create') }}" class="btn btn-secondary">Create New Order</a>
                    </form>

                    @if($error)
                        <div class="alert alert-danger mt-4">
                            {{ $error }}
                        </div>
                    @endif

                    @if(count($orders) > 0)
                        <div class="mt-4">
                            <h4>Found {{ count($orders) }} order(s)</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
                                            <th>Customer</th>
                                            <th>Company</th>
                                            <th>Status</th>
                                            <th>Change Type</th>
                                            <th>Pricing</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order['order_number'] }}</td>
                                            <td>{{ $order['full_name'] }}</td>
                                            <td>{{ $order['company_name'] }}</td>
                                            <td>
                                                <span class="badge badge-{{ $order['status_color'] ?? 'gray' }}">
                                                    {{ $order['status_label'] ?? $order['status'] ?? 'Unknown' }}
                                                </span>
                                            </td>
                                            <td>
                                                @if(isset($order['order_change']) && $order['order_change'])
                                                    <span class="badge badge-{{ $order['order_change_color'] ?? 'gray' }}">
                                                        {{ $order['order_change_label'] ?? 'Unknown' }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-gray">Not Set</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if(isset($order['pricing_type']) && $order['pricing_type'])
                                                    <span class="badge badge-{{ $order['pricing_type_color'] ?? 'gray' }}">
                                                        {{ $order['pricing_type_label'] ?? 'Unknown' }}
                                                    </span>
                                                    @if(isset($order['formatted_order_amount']) && $order['formatted_order_amount'])
                                                        <br><small>{{ $order['formatted_order_amount'] }}</small>
                                                    @endif
                                                @else
                                                    <span class="badge badge-gray">Not Set</span>
                                                @endif
                                            </td>
                                            <td>{{ date('M d, Y', strtotime($order['created_at'])) }}</td>
                                            <td>
                                                <a href="{{ route('orders.track', $order['order_number']) }}" class="btn btn-sm btn-info">Track</a>
                                                <a href="{{ route('orders.details', $order['order_number']) }}" class="btn btn-sm btn-primary">Details</a>
                                                @if(isset($order['google_drive_link']) && $order['google_drive_link'])
                                                    <a href="{{ $order['google_drive_link'] }}" target="_blank" class="btn btn-sm btn-success" title="Open Google Drive Link">
                                                        <i class="fab fa-google-drive"></i>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @elseif(request()->has('email'))
                        <div class="alert alert-info mt-4">
                            No orders found for the email address: {{ request('email') }}
                        </div>
                    @endif
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
