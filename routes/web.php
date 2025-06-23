<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/beasiswadetail', function () {
    return view('beasiswadetail');
});

Route::get('/formpendaftaran', function () {
    return view('formpendaftaran');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});


