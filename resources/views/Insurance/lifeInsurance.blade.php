@extends('layout.layout')

@php
$headTitle = 'Life insurance';
$title = 'Insurance';
$subTitle = 'Life insurance';
$counterone = 'false';
$css = '<link rel="stylesheet" href="' . asset('assets/vendors/insur-three-icon/style.css') . '"/>';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Insurance Details Start-->
        <section class="insurance-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="insurance-details__left">
                            <div class="insurance-details__services-box">
                                <ul class="insurance-details__services-list list-unstyled">
                                    <li><a href="{{ route('carInsurance') }}">Car insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="{{ route('lifeInsurance') }}">Life insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="{{ route('homeInsurance') }}">Home insurance</a>
                                    </li>
                                    <li><a href="{{ route('healthInsurance') }}">Health insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="{{ route('businessInsurance') }}">Business insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="{{ route('fireInsurance') }}">Fire insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="{{ route('marriageInsurance') }}">Marriage insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                    <li><a href="{{ route('travelInsurance') }}">Travel insurance<span
                                                class="icon-right-arrow1"></span></a></li>
                                </ul>
                            </div>
                            <div class="insurance-details__download">
                                <h3 class="insurance-details__download-title">Download resources</h3>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="insurance-details__download-single">
                                            <div class="insurance-details__download-icon">
                                                <span class="insur-three-icon-pdf-file"></span>
                                            </div>
                                            <p class="insurance-details__download-mb">3.9KB</p>
                                            <h3 class="insurance-details__download-title-2"><a href="#">Travel plan &
                                                    <br> policy</a></h3>
                                            <div class="insurance-details__download-btn-box">
                                                <a href="#" class="insurance-details__download-btn thm-btn">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="insurance-details__download-single">
                                            <div class="insurance-details__download-icon">
                                                <span class="insur-three-icon-pdf-file"></span>
                                            </div>
                                            <p class="insurance-details__download-mb">3.9KB</p>
                                            <h3 class="insurance-details__download-title-2"><a href="#">Travel plan &
                                                    <br> policy</a></h3>
                                            <div class="insurance-details__download-btn-box">
                                                <a href="#" class="insurance-details__download-btn thm-btn">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="insurance-details__need-help">
                                <div class="insurance-details__need-help-bg"
                                    style="background-image: url('{{ asset('assets/images/update-10-02-2023/resources/insurance-details-need-help-bg.jpg') }}')">
                                </div>
                                <div class="insurance-details__need-help-icon">
                                    <span class="insur-three-icon-call"></span>
                                </div>
                                <h2 class="insurance-details__need-help-title">Talk to our
                                    <br> insurance agent</h2>
                                <div class="insurance-details__need-help-contact">
                                    <a href="tel:+9200368090">+92 (003) 68-090</a>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="insurance-details__right">
                            <div class="insurance-details__img-1">
                                <img src="{{ asset('assets/images/update-10-02-2023/resources/insurance-details-img-8.jpg') }}" alt="">
                            </div>
                            <div class="insurance-details__age-box">
                                <div class="insurance-details__age-title-box">
                                    <h3 class="insurance-details__age-title">Eligible ages:</h3>
                                </div>
                                <ul class="insurance-details__age-list list-unstyled">
                                    <li>
                                        <p>Minimum Age: <span>10 Years</span></p>
                                    </li>
                                    <li>
                                        <p>Maximum Age: <span>65 Years</span></p>
                                    </li>
                                </ul>
                            </div>
                            <p class="insurance-details__text-1">Neque porro est qui dolorem ipsum quia quaed inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis
                                enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry.</p>
                            <p class="insurance-details__text-2">Biophilia is the idea that humans possess an innate
                                tendency to seek connections with nature. The term translates</p>
                            <p class="insurance-details__text-3">When an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining essentially unchanged. Aelltes port
                                lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                            <div class="insurance-details__opportunities">
                                <div class="insurance-details__opportunities-img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/resources/insurance-details-opportunities-img.jpg') }}"
                                        alt="">
                                    <div class="insurance-details__opportunities-hope">
                                        <p>Hope for the Best,
                                            <br> Prepare for the Worst</p>
                                    </div>
                                </div>
                                <div class="insurance-details__opportunities-points-box">
                                    <h3 class="insurance-details__opportunities-points-title">Main features</h3>
                                    <p class="insurance-details__opportunities-points-text">There are many variations of
                                        passages of available but the majority have suffered alteration in some form, by
                                        injected hum randomised words which don't slightly.</p>
                                    <ul class="insurance-details__opportunities-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>International Plans</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Domestic Plans</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Student Study Plans</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Specialized Investigations</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="insurance-details__points list-unstyled">
                                <li>
                                    <div class="insurance-details__points-left">
                                        <div class="insurance-details__points-icon">
                                            <span class="icon-easy-to-use"></span>
                                        </div>
                                        <h3 class="insurance-details__points-title">Fast & Easy <br> Process</h3>
                                    </div>
                                    <div class="insurance-details__points-right">
                                        <p>There are many not of age of dirm available the simply free text available in
                                            the market today you can use them majority.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="insurance-details__points-left">
                                        <div class="insurance-details__points-icon">
                                            <span class="icon-contract"></span>
                                        </div>
                                        <h3 class="insurance-details__points-title">Quick Claim <br> Handle</h3>
                                    </div>
                                    <div class="insurance-details__points-right">
                                        <p>There are many not of age of dirm available the simply free text available in
                                            the market today you can use them majority.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="insurance-details__points-left">
                                        <div class="insurance-details__points-icon">
                                            <span class="icon-fund"></span>
                                        </div>
                                        <h3 class="insurance-details__points-title">Save Your <br> Money</h3>
                                    </div>
                                    <div class="insurance-details__points-right">
                                        <p>There are many not of age of dirm available the simply free text available in
                                            the market today you can use them majority.</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="insurance-details__title-1">Talk to our insurance experts</h3>
                            <p class="insurance-details__text-4">Speak with insurance experts and ask questions before
                                finalizing your plans or if you want help regarding our services. Our dedicated staff is
                                more than happy to call and guide you.</p>
                            <form class="insurance-details__email-box">
                                <div class="insurance-details__email-input-box">
                                    <input type="text" placeholder="Your phone number" name="phone">
                                </div>
                                <button type="submit" class="insurance-details__subscribe-btn thm-btn">Get a Phone
                                    Call</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Insurance Details End-->

        <!--Tracking Start-->
        <section class="tracking">
            <div class="container">
                <div class="tracking__inner">
                    <div class="tracking-shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-1.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-2.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-3.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-4 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-4.png') }}" alt="">
                    </div>
                    <div class="tracking__left">
                        <div class="tracking__icon">
                            <span class="icon-folder"></span>
                        </div>
                        <div class="tracking__content">
                            <p class="tracking__sub-title">Quisque vel ortor</p>
                            <h3 class="tracking__title">Start tracking your claims</h3>
                        </div>
                    </div>
                    <div class="tracking__btn-box">
                        <a href="{{ route('about') }}" class="thm-btn tracking__btn">Track Your Claim</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Tracking End-->

@endsection 