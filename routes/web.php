<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemosController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsController;

Route::controller(DemosController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index')->name('news.index');
    Route::get('/news/{slug}', 'show')->name('news.show');
});
