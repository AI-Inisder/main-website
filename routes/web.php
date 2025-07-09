<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemosController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;

Route::controller(DemosController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/specialist', 'specialist')->name('specialist');
    Route::get('/orders', 'orders')->name('orders');
    Route::get('/make-a-claim-death', 'makeaClaimDeath')->name('makeaClaimDeath');
});


Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index')->name('news.index');
    Route::get('/news/{slug}', 'show')->name('news.show');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/create', 'index')->name('orders.create');
    Route::post('/orders/create', 'store')->name('orders.store');
    Route::get('/orders/track/{identifier?}', 'track')->name('orders.track');
    Route::post('/orders/track', 'trackPost')->name('orders.track.post');
    Route::get('/orders/{identifier}/details', 'details')->name('orders.details');
    Route::get('/orders/search', 'search')->name('orders.search');
    Route::post('/orders/search', 'search');
    Route::get('/my-orders', 'userOrders')->name('orders.user');
});
