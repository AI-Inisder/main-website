@extends('layout.layout')

@php
    $headTitle = 'Make a Claim';
    $title='Make a Claim';
    $subTitle = 'Group & pension claims';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>'; 
@endphp

@section('content')

        <!--Make a claim Start-->
        <section class="make-a-claim">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="make-a-claim__left">
                            <h3 class="make-a-claim__title-1">Group & pension claims</h3>
                            <p class="make-a-claim__text-1">Neque porro est qui dolorem ipsum quia quaed inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis
                                enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry.</p>
                            <div class="make-a-claim__img-and-points-box">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="make-a-claim__img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/resources/make-a-claim-img-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="make-a-claim__points-box">
                                            <p class="make-a-claim__points-text">Neque porro est qui dolorem ipsum quia
                                                quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                explicabo.</p>
                                            <ul class="make-a-claim__points-list list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>There are many variations of passages of available but the
                                                            majority.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-check"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>We have suffered alteration in some form injected hum
                                                            randomised.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="make-a-claim__title-2">Procedure for maturity claims</h3>
                            <p class="make-a-claim__text-2">If your signature has changed over the years, please send us
                                your three specimen signatures of old and new styles Immediately on receipt of above
                                documents, we will process the case further for payment of amount due, if any, against
                                maturity claim under above policy.</p>
                            <div class="make-a-claim__procedure-box">
                                <div class="make-a-claim__procedure-shape-1">
                                    <img src="{{ asset('assets/images/update-10-02-2023/shapes/make-a-claim-procedure-shape-1.png') }}"
                                        alt="">
                                </div>
                                <ul class="make-a-claim__procedure list-unstyled">
                                    <li>
                                        <div class="make-a-claim__procedure-icon-box">
                                            <div class="make-a-claim__procedure-icon">
                                                <span class="insur-three-icon-documents"></span>
                                            </div>
                                            <div class="make-a-claim__procedure-icon-count"></div>
                                        </div>
                                        <div class="make-a-claim__procedure-content">
                                            <h4 class="make-a-claim__procedure-title">Original policy <br> document</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="make-a-claim__procedure-icon-box">
                                            <div class="make-a-claim__procedure-icon">
                                                <span class="insur-three-icon-id-card"></span>
                                            </div>
                                            <div class="make-a-claim__procedure-icon-count"></div>
                                        </div>
                                        <div class="make-a-claim__procedure-content">
                                            <h4 class="make-a-claim__procedure-title">Copy of <br> Identity card</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="make-a-claim__procedure-icon-box">
                                            <div class="make-a-claim__procedure-icon">
                                                <span class="insur-three-icon-referral-code"></span>
                                            </div>
                                            <div class="make-a-claim__procedure-icon-count"></div>
                                        </div>
                                        <div class="make-a-claim__procedure-content">
                                            <h4 class="make-a-claim__procedure-title">Maturity discharge <br> voucher
                                            </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="make-a-claim__procedure-faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4><span>?</span> Maecenas scelerisque nibh vitae turpis</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse
                                                    id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus
                                                    turpis, sit simply free text available in the market amet mattis
                                                    magna varius non.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4><span>?</span> Nulla fermentum leo nibh, a vestibulum</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse
                                                    id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus
                                                    turpis, sit simply free text available in the market amet mattis
                                                    magna varius non.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4><span>?</span> Quisque vel rutrum tortor, in rhoncus</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse
                                                    id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus
                                                    turpis, sit simply free text available in the market amet mattis
                                                    magna varius non.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="make-a-claim__right">
                            <div class="make-a-claim__claim-box">
                                <ul class="make-a-claim__claim-list list-unstyled">
                                    <li>
                                        <a href="{{ route('makeaClaimDeath') }}">Death Claim<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('makeaClaimMaturity') }}">Maturity Claims<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('makeaClaimGroup') }}">Group & Pension Claims<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('makeaClaimOther') }}">Other Claims<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('makeaClaimLoan') }}">Loan Against Insurance Policy<span
                                                class="icon-right-arrow1"></span></a>
                                    </li>
                                </ul>
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
                                    <a href="{{ route('tel:+9200368090">+92 (003) 68-090</a>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make a claim End-->

@endsection 