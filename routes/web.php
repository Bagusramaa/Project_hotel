<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffDepartment;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BerandaController;

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

Route::get('/',[BerandaController::class, 'beranda']);
Route::get('/contact',[PageController::class, 'contact']);

Route::get('/hello', [HelloController::class, 'index']);

//Admin login
Route::get('/home/adminlogin', [AdminController::class, 'adminlogin']);
Route::post('/home/adminlogin', [AdminController::class, 'check_login']);
Route::get('/home/logout', [AdminController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/login', [CustomerController::class, 'login']);
Route::post('/customer/login', [CustomerController::class, 'customer_login']);
Route::get('/register', [CustomerController::class, 'register']);
Route::get('/logout', [CustomerController::class, 'logout']);

//RoomType
Route::get('/home/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('/home/roomtype', RoomtypeController::class);

//Room
Route::get('/home/rooms/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('/home/rooms', RoomController::class);

//Customer
Route::get('/home/customer/{id}/delete', [CustomerController::class, 'destroy']);
Route::resource('/home/customer', CustomerController::class);

//Department
Route::get('/home/department/{id}/delete', [StaffDepartment::class, 'destroy']);
Route::resource('/home/department', StaffDepartment::class);

//Staff
Route::get('/home/staff/{id}/delete', [StaffController::class, 'destroy']);
Route::resource('/home/staff', StaffController::class);

//Booking
Route::get('/home/booking/{id}/delete', [BookingController::class, 'destroy']);
Route::get('/home/booking/available-rooms/{checkin_date}', [BookingController::class, 'available_rooms']);
Route::resource('/home/booking', BookingController::class);

Route::get('/booking', [BookingController::class, 'front_booking']);
