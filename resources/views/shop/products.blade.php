@extends('layout.layout')

@php
    $headTitle = 'Product';
    $title='Shop';
    $subTitle = 'Products';
    $counterone = 'false';
    $css = '<link rel="stylesheet" href="' . asset('assets/vendors/nice-select/nice-select.css') . '"/>';
    $script = '<script src="' . asset('assets/vendors/nice-select/jquery.nice-select.min.js') . '"></script>
               <script src="' . asset('assets/js/insur.js') . '"></script> ';
@endphp

@section('content')

        <!--Product Start-->
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="product__sidebar">
                            <div class="shop-search product__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                </form>
                            </div>
                            <div class="product__price-ranger product__sidebar-single">
                                <h3 class="product__sidebar-title">Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Life Insurance</a></li>
                                    <li class="active"><a href="#">Health</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Home Insurance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="product__items">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__showing-result">
                                        <div class="product__showing-text-box">
                                            <p class="product__showing-text">Showing 1–9 of 12 results</p>
                                        </div>
                                        <div class="product__showing-sort">
                                            <div class="select-box">
                                                <select class="wide nice-select">
                                                    <option data-display="Sort by popular">Sort by popular</option>
                                                    <option value="1">Sort by popular</option>
                                                    <option value="2">Sort by Price</option>
                                                    <option value="3">Sort by Ratings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__all">
                            <div class="row">
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-1.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Classic
                                                    Chair</a></h4>
                                            <p class="product__all-price">$33.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-2.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Comfy
                                                    Chair</a></h4>
                                            <p class="product__all-price">$46.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-3.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Boss
                                                    Chair</a></h4>
                                            <p class="product__all-price">$58.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-4.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Sofa
                                                    Chair</a></h4>
                                            <p class="product__all-price">$23.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-5.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Wooden
                                                    Stool</a></h4>
                                            <p class="product__all-price">$63.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-6.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Comfortable
                                                    Sofa</a></h4>
                                            <p class="product__all-price">$78.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-7.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Round
                                                    Chair</a></h4>
                                            <p class="product__all-price">$88.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-8.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Big
                                                    Stool</a></h4>
                                            <p class="product__all-price">$29.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                                <!--Product All Single Start-->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('assets/images/shop/shop-product-1-9.jpg') }}" alt="">
                                            <div class="product__all-btn-box">
                                                <a href="{{ route('cart') }}" class="thm-btn product__all-btn">Add to
                                                    Cart</a>
                                            </div>
                                        </div>
                                        <div class="product__all-content">
                                            <h4 class="product__all-title"><a href="{{ route('productDetails') }}">Classic
                                                    Chair</a></h4>
                                            <p class="product__all-price">$36.00</p>
                                            <div class="product__all-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Product All Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product End-->

@endsection 