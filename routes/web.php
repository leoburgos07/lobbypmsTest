<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bookings', [App\Http\Controllers\SaleController::class, 'create'])->name('bookings');
Route::get('/makeBooking/{bedroom}',[App\Http\Controllers\SaleController::class, 'make'])->name('makeBooking');
Route::post('/storeBooking',[App\Http\Controllers\SaleController::class, 'store'] )->name('storeBooking');
Route::get('/listBookings',[App\Http\Controllers\SaleController::class, 'index'])->name('listBookings');
Route::delete('bookings/{id}',[App\Http\Controllers\SaleController::class, 'destroy'])->name('cancelBooking');

/******** Admin routes ************/
Route::prefix('admin')->group(function () {
    Route::get('/bookings',[App\Http\Controllers\AdminController::class, 'index'])->name('adminBooking');
});
