<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');

Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');

Route::get('/services', function () {
    return view('frontend.services');
})->name('frontend.services');

Route::get('/offres', function () {
    return view('frontend.offres');
})->name('frontend.offres');

Route::get('/news', function () {
    return view('frontend.news');
})->name('frontend.news');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('frontend.shop');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
