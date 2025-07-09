@extends('layout.layout')

@php
    $headTitle = 'AI Insider';
    $css =
        '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />';
    $header = 'false';
    $script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <script src="' . asset('assets/js/insur.js') . '"></script>';
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
                                            <li class="dropdown scrollToLink">
                                                <a href="../#home">Home </a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="../#about">About</a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="../#why">Choose Us</a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="../#team">Team</a>
                                            </li>
                                            <li class="scrollToLink current">
                                                <a href="{{ route('specialist') }}">Specialist</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('orders') }}">Orders</a>
                                            </li>
                                            <li class="scrollToLink">
                                                <a href="../#news">News</a>
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

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/resources/benefits-two-img.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="margin: 0"><span>Specialist</span>
                                        </h2>
                                        <h2 class="main-slider__title">Services
                                        </h2>
                                        <p class="main-slider__text">Connect with our team of experts who provide
                                            comprehensive <br> solutions for all your business and legal needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url('{{ asset('assets/images/backgrounds/about-one-bg.png') }}')"></div>
            <div class="container">
                <h2 class="section-title__title mb-5">Our Specialist Services</h2>

                {{-- WIDGETS --}}
                <div class="d-flex flex-wrap justify-content-center gap-5">
                    <!-- General Consultation -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20konsultasi%20umum" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #3B82F6, #2563EB); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">General<br>Consultation</div>
                    </div>

                    <!-- Lawyer -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20bantuan%20lawyer" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #F59E0B, #D97706); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v4.5H6v-4.5Z" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">Lawyer</div>
                    </div>

                    <!-- Notaris -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20jasa%20notaris" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #22C55E, #16A34A); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192m-5.801 0a2.251 2.251 0 0 1 2.15 1.586m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25H4.875A1.125 1.125 0 0 0 3.75 9.375v11.25A1.125 1.125 0 0 0 4.875 21.75h9.75a1.125 1.125 0 0 0 1.125-1.125V9.375A1.125 1.125 0 0 0 14.625 8.25H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">Notaris</div>
                    </div>

                    <!-- Legal Services -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20layanan%20legal" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #8B5CF6, #7C3AED); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25A1.125 1.125 0 0 1 2.25 18.375v-2.25Z" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">Legal<br>Services</div>
                    </div>

                    <!-- Capital Investment -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20investasi%20modal" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #6366F1, #4F46E5); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H15.75c.621 0 1.125.504 1.125 1.125v.375m0 0A.75.75 0 0 1 16.5 6h-.75m0 0h-.375A1.125 1.125 0 0 0 14.25 7.125v.75m0 0v3.75A1.125 1.125 0 0 0 15.375 13.5h.75A.75.75 0 0 1 17 14.25v0M21 10.5h.75c.621 0 1.125.504 1.125 1.125v.375m0 0A.75.75 0 0 1 21 12.75h-.75m0 0h-.375A1.125 1.125 0 0 0 18.75 13.875v.75m0 0v3.75A1.125 1.125 0 0 0 19.875 19.5h.75A.75.75 0 0 1 21.5 20.25v0" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">Capital<br>Investment</div>
                    </div>

                    <!-- Investor -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20bantuan%20investor" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #10B981, #059669); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">Investor</div>
                    </div>

                    <!-- Engineers -->
                    <div class="text-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20jasa%20engineer" target="_blank" class="d-inline-flex align-items-center justify-content-center rounded-circle shadow"
                            style="width: 80px; height: 80px; background: linear-gradient(to bottom right, #EF4444, #DC2626); transition: transform 0.3s;"
                            onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 32px; height: 32px; color: white;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26" />
                            </svg>
                        </a>
                        <div class="mt-2 fw-medium text-center">Engineers</div>
                    </div>

                </div>

                <!-- Call to Action Section -->
                <div class="mt-5 p-5 text-center text-white rounded-4"
                    style="background: linear-gradient(to right, #2563eb, #7c3aed); border-radius: 15px;">
                    <h2 class="h2 fw-bold mb-3 text-white">Need Multiple Specialist Services?</h2>
                    <p class="fs-5 mb-4" style="opacity: 0.9;">
                        Get comprehensive support from our integrated team of professionals
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="https://wa.me/62811102239?text=Halo%20saya%20memerlukan%20konsultasi%20lengkap%20untuk%20berbagai%20layanan%20specialist"
                            target="_blank"
                            class="btn btn-light text-primary fw-semibold d-flex align-items-center justify-content-center px-4 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            Schedule Consultation
                        </a>
                        <a href="mailto:info@asets.co"
                            class="btn border border-white text-white fw-semibold d-flex align-items-center justify-content-center px-4 py-2"
                            style="background: transparent;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                                class="me-2" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 21.75 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            Send Email
                        </a>
                    </div>
                </div>

                <!-- Why Choose Our Specialists Section -->
                <div class="mt-5">
                    <h2 class="h2 fw-bold text-center text-dark mb-5">Why Choose Our Specialists?</h2>
                    <div class="row g-4">
                        <div class="col-md-4 text-center">
                            <div class="rounded-circle bg-purple bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 64px; height: 64px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="#2563eb"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443" />
                                </svg>
                            </div>
                            <h3 class="h5 fw-semibold text-dark mb-2">Expert Professionals</h3>
                            <p class="text-muted">Certified and experienced specialists in their respective fields with
                                proven track records.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <div class="rounded-circle bg-purple bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 64px; height: 64px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="#16a34a"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <h3 class="h5 fw-semibold text-dark mb-2">24/7 Availability</h3>
                            <p class="text-muted">Round-the-clock support and consultation available whenever you need
                                assistance.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <div class="rounded-circle bg-purple bg-opacity-10 d-flex align-items-center justify-content-center mx-auto mb-3"
                                style="width: 64px; height: 64px; background-color: #f3e8ff;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" stroke="#9333ea"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                            </div>
                            <h3 class="h5 fw-semibold text-dark mb-2">Integrated Solutions</h3>
                            <p class="text-muted">Comprehensive services that work together to provide complete business
                                solutions.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!--About One End-->

@endsection