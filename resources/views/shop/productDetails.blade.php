@extends('layout.layout')

@php
    $headTitle = 'Product Details';
    $title='Shop';
    $subTitle = 'Product details';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>
               <script src="' . asset('assets/vendors/nice-select/jquery.nice-select.min.js') . '"></script>    ';
@endphp

@section('content')

        <!--Product Details Start-->
        <section class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__img">
                            <img src="{{ asset('assets/images/shop/product-details-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__top">
                            <h3 class="product-details__title">Comfy Chair <span>$46.00</span> </h3>
                        </div>
                        <div class="product-details__reveiw">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>2 Customer Reviews</span>
                        </div>
                        <div class="product-details__content">
                            <p class="product-details__content-text1">Aliquam hendrerit a augue insuscipit. Etiam
                                aliquam massa quis des mauris commodo venenatis ligula commodo leez sed blandit
                                convallis dignissim onec vel pellentesque neque.</p>
                            <p class="product-details__content-text2">REF. 4231/406 <br>
                                Available in store</p>
                        </div>

                        <div class="product-details__quantity">
                            <h3 class="product-details__quantity-title">Choose quantity</h3>
                            <div class="quantity-box">
                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                <input type="number" id="1" value="1">
                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>


                        <div class="product-details__buttons">
                            <div class="product-details__buttons-1">
                                <a href="{{ route('cart') }}" class="thm-btn">Add to Cart</a>
                            </div>
                            <div class="product-details__buttons-2">
                                <a href="{{ route('productDetails') }}" class="thm-btn">Add to Wishlist</a>
                            </div>
                        </div>
                        <div class="product-details__social">
                            <div class="title">
                                <h3>Share with friends</h3>
                            </div>
                            <div class="product-details__social-link">
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-facebook"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product Details End-->

        <!--Product Description Start-->
        <section class="product-description">
            <div class="container">
                <h3 class="product-description__title">Description</h3>
                <p class="product-description__text1">Lorem ipsum dolor sit amet sectetur adipiscin elit cras feuiat
                    antesed ces condimentum viverra duis autue nim convallis id diam vitae duis egety dictum erosin
                    dictum sem. Vivamus sed molestie sapien aliquam et facilisis arcu dut molestie augue suspendisse
                    sodales tortor nunced quis cto ligula posuere cursus keuis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecated cupidatat non
                    proident sunt in culpa qui officia deserunt mollit anim id est laborum ivamus sed molestie sapien.
                </p>
                <p class="product-description__tex2">Aliquam et facilisis arcuut olestie augue. Suspendisse sodales
                    tortor nunc quis auctor ligula posuere cursus duis aute irure dolor in reprehenderit in voluptate
                    velit esse cill doloreeu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt
                    in culpa qui officia deserunt mollit anim id est laborum. Vivaus sed delly molestie sapien. Aliquam
                    et facilisis arcuut molestie augue.</p>
            </div>
        </section>
        <!--Product Description End-->

        <!--Review One Start-->
        <section class="review-one">
            <div class="container">
                <div class="comments-area">
                    <div class="review-one__title">
                        <h3>2 reviews</h3>
                    </div>
                    <!--Start Comment Box-->
                    <div class="comment-box">
                        <div class="comment">
                            <div class="author-thumb">
                                <figure class="thumb"><img src="{{ asset('assets/images/shop/review-1-1.jpg') }}" alt="">
                                </figure>
                            </div>

                            <div class="review-one__content">
                                <div class="review-one__content-top">
                                    <div class="info">
                                        <h2>Kevin Martin <span>20 Sep, 2023 . 4:00 pm</span></h2>
                                    </div>
                                    <div class="reply-btn">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>

                                <div class="review-one__content-bottom">
                                    <p>Aliquam et facilisis arcuut olestie augue. Suspendisse sodales tortor nunc quis
                                        auctor ligula posuere cursus duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cill doloreeu fugiat nulla pariatur excepteur sint. Vivaus sed delly
                                        molestie sapien. Aliquam et facilisis arcuut molestie augue. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Comment Box-->

                    <!--Start Comment Box-->
                    <div class="comment-box">
                        <div class="comment">
                            <div class="author-thumb">
                                <figure class="thumb"><img src="{{ asset('assets/images/shop/review-1-2.jpg') }}" alt="">
                                </figure>
                            </div>

                            <div class="review-one__content">
                                <div class="review-one__content-top">
                                    <div class="info">
                                        <h2>Sarah Albert <span>20 Sep, 2023 . 4:00 pm</span></h2>
                                    </div>
                                    <div class="reply-btn">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>

                                <div class="review-one__content-bottom">
                                    <p>Aliquam et facilisis arcuut olestie augue. Suspendisse sodales tortor nunc quis
                                        auctor ligula posuere cursus duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cill doloreeu fugiat nulla pariatur excepteur sint. Vivaus sed delly
                                        molestie sapien. Aliquam et facilisis arcuut molestie augue. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Comment Box-->
                </div>
            </div>
        </section>
        <!--Review One End-->

        <!--Start Review Form-->
        <section class="review-form-one">
            <div class="container">
                <div class="review-form-one__inner">
                    <h3 class="review-form-one__title">Add a review</h3>
                    <div class="review-form-one__rate-box">
                        <p class="review-form-one__rate-text">Rate this Product?</p>
                        <div class="review-form-one__rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <form action="assets/inc/sendemail" class="review-form-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="review-form-one__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="review-form-one__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="review-form-one__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <button type="submit" class="thm-btn review-form-one__btn">Submit Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Review Form-->

@endsection 