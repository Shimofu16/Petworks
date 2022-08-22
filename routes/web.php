<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']) -> name('home.index');
Route::get('/appointment', [HomeController::class,'appointment']) -> name('appointment.index');

/* ADMIN */
Route::get('/admin', [AdminController::class,'index']) -> name('admin.index');

/* APPOINTMENT */
Route::get('admin/appointment', [AppointmentController::class,'index']) -> name('admin.appointment.index');
Route::post('admin/appointment/store', [AppointmentController::class,'store']) -> name('admin.appointment.store');

/* CONTACTS */
Route::get('admin/contact', [ContactController::class,'index']) -> name('admin.contact.index');
Route::post('admin/contact/store', [ContactController::class,'store']) -> name('admin.contact.store');
