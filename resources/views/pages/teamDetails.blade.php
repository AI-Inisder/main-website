@extends('layout.layout')

@php
    $headTitle = 'Team Details';
    $title='Team Details';
    $subTitle = 'Team details';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Team Details Start-->
        <section class="team-details">
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-left">
                                <div class="team-details__top-img">
                                    <img src="{{ asset('assets/images/team/team-details-top-img.jpg') }}" alt="">
                                    <div class="team-details__big-text">jessica</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    <p class="team-details__top-title">Co founder & CEO</p>
                                    <h3 class="team-details__top-name">Jessica Brown</h3>
                                    <div class="team-details__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <p class="team-details__top-text-1">I help my clients stand out and they help me
                                        grow.</p>
                                    <p class="team-details__top-text-2">Lorem ipsum dolor sit amet, con adipiscing elit
                                        tiam convallis elit id impedie. Quisq commodo simply free ornare tortor.</p>
                                    <p class="team-details__top-text-3">If you are going to use a passage of Lorem
                                        Ipsum, you need to be sure there isn't anything simply free text embarrassing
                                        hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__bottom-left">
                                <h4 class="team-details__bottom-left-title">Personal Experience</h4>
                                <p class="team-details__bottom-left-text">If you are going to use a passage of Lorem
                                    Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__bottom-right">
                                <div class="team-details__progress">
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Consultation</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Insured</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="46%">
                                                <div class="count-text">46%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Dealing</h4>
                                        <div class="bar marb-0">
                                            <div class="bar-inner count-bar" data-percent="60%">
                                                <div class="count-text">60%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details End-->

        <!--Message One Start-->
        <section class="message-one">
            <div class="message-one-shape-1"
                style="background-image: url('{{ asset('assets/images/shapes/message-one-shape-1.png') }}')"></div>
            <div class="message-one-shape-2"
                style="background-image: url('{{ asset('assets/images/shapes/message-one-shape-2.png') }}')"></div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Contact us</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Feel free to get in touch <br> with experts</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="message-one__form">
                            <form action="assets/inc/sendemail" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Phone number" name="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Subject" name="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Send a
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Message One End-->
        
@endsection 