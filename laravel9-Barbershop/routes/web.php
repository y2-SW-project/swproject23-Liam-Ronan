<?php

use App\Models\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ServiceController as UserServiceController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;

use App\Http\Controllers\user\BookingController as UserBookingController;
use App\Http\Controllers\admin\BookingController as AdminBookingController;

use App\Http\Controllers\user\BarberController as UserBarberController;
use App\Http\Controllers\admin\BarberController as AdminBarberController;

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

Route::get('/', function () {
    return view('auth\login');
});

/* Other Pages */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


/* Admin routes */
Route::resource('admin/bookings', AdminBookingController::class)->middleware(['auth'])->names('admin.bookings');

Route::resource('admin/services', AdminServiceController::class)->middleware(['auth'])->names('admin.services');

Route::resource('admin/barbers', AdminBarberController::class)->middleware(['auth'])->names('admin.barbers');


/* User Routes */
Route::resource('user/services', UserServiceController::class)->middleware(['auth'])->names('user.services');

Route::resource('user/bookings', UserBookingController::class)->middleware(['auth'])->names('user.bookings');

Route::resource('user/barbers', UserBarberController::class)->middleware(['auth'])->names('user.barbers');


/* This code defines a GET method that allows a user to view the details of a service type from the appointments page. */
Route::get('/services/{id}', [App\Http\Controllers\user\ServiceController::class, 'showService'])->name('user.services.show');

Route::get('/barbers/{id}', [App\Http\Controllers\user\BarberController::class, 'showBarber'])->name('user.barbers.show');

Auth::routes();