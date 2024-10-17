<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/service/data-recovery', function () {
    return view('service.data');
})->name('data');

Route::get('/service/computer-repair', function () {
    return view('service.computer-repair');
})->name('computer-repair');

Route::get('/service/network-solution', function () {
    return view('service.network-solution');
})->name('network-solution');

Route::get('/about', function () {
    return view('about');
})->name('about');




