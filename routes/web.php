<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarBeasiswa;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\PendaftaranBeasiswa;
use App\Http\Middleware\RedirectIfAdmin;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

// Halaman Umum
Route::get('/', fn() => view('/auth/login'));
Route::get('/home', fn() => view('home'));
Route::get('/contact', fn() => view('contact'));
Route::get('/about', fn() => view('about'));
Route::get('/formpendaftaran/{beasiswa}', [PendaftaranBeasiswa::class, 'formpendaftaran']);
Route::get('/beasiswa', [DaftarBeasiswa::class, 'beasiswa']);
Route::get('/beasiswa/{beasiswa}', [DaftarBeasiswa::class, 'detail']);


// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::post('/pendaftaran/{id}', [PendaftaranBeasiswa::class, 'daftar'])->name('pendaftaran');


 Route::get('/user/dashboard', [DashboardController::class, 'index'])->middleware(Authenticate::class,RedirectIfAdmin::class);


