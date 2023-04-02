<?php

use App\Models\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ServiceController;
use App\Http\Controllers\user\BookingController;
use App\Http\Controllers\user\BarberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
Auth::routes();

Route::get('/', function () {
    return view('auth\login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::resource('user/services', ServiceController::class)->names('user.services');

Route::resource('user/bookings', BookingController::class)->names('user.bookings');

Route::resource('user/barbers', BarberController::class)->names('user.barbers');
