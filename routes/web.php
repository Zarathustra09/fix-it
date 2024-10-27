<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAppointmentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('admin/appointment', [AdminAppointmentController::class, 'index'])->name('admin.appointment');
Route::get('admin/appointment/{id}', [AdminAppointmentController::class, 'edit'])->name('admin.appointment.edit');
Route::put('admin/appointment/{id}', [AdminAppointmentController::class, 'update'])->name('admin.appointment.update');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/guest/appointment', [GuestController::class, 'index'])->name('guest.index');
Route::patch('/appointment/{id}/cancel', [GuestController::class, 'cancelAppointment'])->name('appointment.cancel');
Route::patch('/appointment/{id}/pay', [GuestController::class, 'payAppointment'])->name('appointment.pay');

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




