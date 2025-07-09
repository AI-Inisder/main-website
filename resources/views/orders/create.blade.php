@extends('layout.layout')

@php
    $headTitle = 'Create Order - AI Insider';
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Create New Order</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('orders.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="fullName">Full Name *</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName"
                                           value="{{ old('fullName') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="companyEmail">Company Email *</label>
                                    <input type="email" class="form-control" id="companyEmail" name="companyEmail"
                                           value="{{ old('companyEmail') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="companyName">Company Name *</label>
                                    <input type="text" class="form-control" id="companyName" name="companyName"
                                           value="{{ old('companyName') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="division">Division *</label>
                                    <input type="text" class="form-control" id="division" name="division"
                                           value="{{ old('division') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="customProduct">Service Type *</label>
                                    <select class="form-control" id="customProduct" name="customProduct" required>
                                        <option value="">Select Service Type</option>
                                        <option value="Market Profiling" {{ old('customProduct') == 'Market Profiling' ? 'selected' : '' }}>Market Profiling</option>
                                        <option value="Talent Profiling" {{ old('customProduct') == 'Talent Profiling' ? 'selected' : '' }}>Talent Profiling</option>
                                        <option value="Customize AI Usecase" {{ old('customProduct') == 'Customize AI Usecase' ? 'selected' : '' }}>Customize AI Usecase</option>
                                    </select>
                                    <small class="form-text text-muted">Choose the service that best fits your needs</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="projectType">Project Type</label>
                                    <select class="form-control" id="projectType" name="projectType">
                                        <option value="">Select Project Type</option>
                                        <option value="new" {{ old('projectType') == 'new' ? 'selected' : '' }}>New Project</option>
                                        <option value="existing" {{ old('projectType') == 'existing' ? 'selected' : '' }}>Existing Project</option>
                                    </select>
                                    <small class="form-text text-muted">New project starts from scratch, existing project builds on current work</small>
                                </div>
                            </div>
                        </div>

                        <!-- Hidden fields for API compatibility -->
                        <input type="hidden" name="productType" value="custom">
                        <input type="hidden" name="productName" value="">

                        <div class="row" id="projectNameDiv" style="display: none;">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="projectName">Project Name</label>
                                    <input type="text" class="form-control" id="projectName" name="projectName"
                                           value="{{ old('projectName') }}" placeholder="Enter project name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="orderDescription">Order Description *</label>
                            <textarea class="form-control" id="orderDescription" name="orderDescription"
                                      rows="5" required placeholder="Please provide detailed description of your order (minimum 10 characters)">{{ old('orderDescription') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="googleDriveLink">Google Drive Link (Optional)</label>
                            <input type="url" class="form-control" id="googleDriveLink" name="googleDriveLink" 
                                   value="{{ old('googleDriveLink') }}" placeholder="https://drive.google.com/file/d/...">
                            <small class="form-text text-muted">
                                <strong>Supported formats:</strong> Google Drive files/folders, Google Docs, Sheets, Slides<br>
                                <strong>Share settings:</strong> "Anyone with the link can view" for public access
                            </small>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Create Order</button>
                            <a href="{{ route('orders.track') }}" class="btn btn-secondary btn-lg">Track Order</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const projectType = document.getElementById('projectType');
    const projectNameDiv = document.getElementById('projectNameDiv');
    const form = document.querySelector('form');

    function toggleProjectName() {
        if (projectType.value === 'existing') {
            projectNameDiv.style.display = 'block';
            document.getElementById('projectName').required = true;
        } else {
            projectNameDiv.style.display = 'none';
            document.getElementById('projectName').required = false;
        }
    }

    // Validate Google Drive link format
    function validateGoogleDriveLink() {
        const googleDriveLink = document.getElementById('googleDriveLink');
        const value = googleDriveLink.value.trim();
        
        if (value && !value.includes('drive.google.com') && !value.includes('docs.google.com')) {
            googleDriveLink.setCustomValidity('Please provide a valid Google Drive or Google Docs link');
            return false;
        } else {
            googleDriveLink.setCustomValidity('');
            return true;
        }
    }

    projectType.addEventListener('change', toggleProjectName);
    document.getElementById('googleDriveLink').addEventListener('input', validateGoogleDriveLink);

    // Form validation before submit
    form.addEventListener('submit', function(e) {
        if (!validateGoogleDriveLink()) {
            e.preventDefault();
            return false;
        }

        // Additional validation for required fields
        if (!document.getElementById('customProduct').value) {
            alert('Please select a service type.');
            e.preventDefault();
            return false;
        }

        if (projectType.value === 'existing' && !document.getElementById('projectName').value) {
            alert('Please enter the project name for existing projects.');
            e.preventDefault();
            return false;
        }
    });

    // Initialize form state
    toggleProjectName();
});
</script>

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

@endsection
