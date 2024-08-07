<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AdminController::class, 'login'])->name('account.login');
Route::post('login', [AdminController::class, 'authenticate'])->name('account.authenticate');

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('account.dashboard');
Route::get('banner/slider', [HomeController::class, 'bannerSlider'])->name('account.slider');
Route::get('add-slider', [HomeController::class, 'addSlider'])->name('account.addSlider');
Route::post('add-slider-process', [HomeController::class, 'addsliderProcess'])->name('account.addsliderProcess');
