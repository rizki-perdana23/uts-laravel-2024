<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('profile', function () {
    return view('profile');
});


Route::get('produk', function () {
    return view('produk');
});
