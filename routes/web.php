<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front-pages.landing');
});

Route::get('/front-pages/landing', function () {
    return view('front-pages.landing');
})->name('front-pages-landing');
