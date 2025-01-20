@extends('layout.layout')

@php
    $headTitle = 'Policy Proposal';
    $title='Policy Proposal';
    $subTitle = 'Policy proposal';
    $counterone = 'false';
    $css = '<link rel="stylesheet" href="' . asset('assets/vendors/nice-select/nice-select.css') . '"/>';
    $script = '<script src="' . asset('assets/vendors/nice-select/jquery.nice-select.min.js') . '"></script>
               <script src="' . asset('assets/js/insur.js') . '"></script> '; 
@endphp

@section('content')

        <!--Policy Proposal Start-->
        <section class="policy-proposal">
            <div class="container">
                <div class="policy-proposal__inner">
                    <p class="policy-proposal__text-1">Please fill out and submit the form below. Our representative
                        will inform you about other requirements for <br> obtaining an insurance policy:</p>
                    <form action="assets/inc/sendemail" class="policy-proposal__form contact-form-validated">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Select City:</p>
                                    <div class="select-box">
                                        <select class="wide nice-select">
                                            <option data-display="Select city">Select city</option>
                                            <option value="1">Select city 01</option>
                                            <option value="2">Select city 02</option>
                                            <option value="3">Select city 03</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6"></div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Your Full Name:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Father’s/Husband’s Full Name:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Indentity No:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Date of Birth:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Residential Address:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Contact No:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="policy-proposal__input-box">
                                            <p class="policy-proposal__input-title">Fax:</p>
                                            <input type="text" placeholder="" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="policy-proposal__input-box">
                                            <p class="policy-proposal__input-title">Email:</p>
                                            <input type="text" placeholder="" name="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Your Occupation:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="policy-proposal__input-box">
                                    <p class="policy-proposal__input-title">Monthly Income:</p>
                                    <input type="text" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="policy-proposal__input-box">
                                            <p class="policy-proposal__input-title">Chose Plan:</p>
                                            <div class="select-box">
                                                <select class="wide nice-select">
                                                    <option data-display="Choose policy">Choose policy</option>
                                                    <option value="1">Choose policy 01</option>
                                                    <option value="2">Choose policy 02</option>
                                                    <option value="3">Choose policy 03</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="policy-proposal__input-box">
                                            <p class="policy-proposal__input-title">Chose Terms:</p>
                                            <div class="select-box">
                                                <select class="wide nice-select">
                                                    <option data-display="10">10</option>
                                                    <option value="1">10</option>
                                                    <option value="2">20</option>
                                                    <option value="3">30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="policy-proposal__messages-boxes">
                                    <div class="policy-proposal__message-one">
                                        <p class="policy-proposal__message-one-title">Do you have any physical
                                            impairment?
                                            If yes, please state its nature:</p>
                                        <div class="policy-proposal__textarea-one">
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="policy-proposal__message-two">
                                        <p class="policy-proposal__message-two-title">Do you now or ever had heart
                                            disease,
                                            diabetes, high blood pressure, TB, jaundice or liver, stomach, renal
                                            disease,
                                            cancer, asthma, epilepsy, nervous or psychological disorders? If so specify
                                            with
                                            dates:</p>
                                        <div class="policy-proposal__textarea-two">
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="policy-proposal__message-three">
                                        <p class="policy-proposal__message-three-title">Are you in good health? If not,
                                            describe the nature of ailment:</p>
                                        <div class="policy-proposal__textarea-three">
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="thm-btn policy-proposal__btn">Submit Proposal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Policy Proposal End-->
        
@endsection 