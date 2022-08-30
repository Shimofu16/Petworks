<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Mail;
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
Route::get('/guidlines', [HomeController::class, 'guidlines'])->name('guidlines.index');
Route::get('/appointment', [HomeController::class,'appointment']) -> name('appointment.index');
Route::get('/existing', [HomeController::class,'existing']) -> name('existing.index');

/* ADMIN */
Route::get('/admin', [AdminController::class,'index']) -> name('admin.index');

/* APPOINTMENT */
Route::get('admin/appointment', [AppointmentController::class,'index']) -> name('admin.appointment.index');
Route::post('admin/appointment/store', [AppointmentController::class,'store']) -> name('admin.appointment.store');
Route::delete('admin/confirm/delete/{id}', [ConfirmController::class,'destroy']) -> name('admin.confirm.destroy');

/* CONFIRM */
Route::get('admin/confirm', [ConfirmController::class,'index']) -> name('admin.confirm.index');
Route::post('admin/confirm/update/{id}', [ConfirmController::class,'update']) -> name('admin.confirm.update');


/* OWNER */
Route::get('admin/owner', [OwnerController::class,'index']) -> name('admin.owner.index');
Route::get('admin/owner/{id}', [OwnerController::class,'show']) -> name('admin.owner.show');
Route::put('admin/owner/comment/{id}', [OwnerController::class,'update']) -> name('admin.owner.update');

/* CONTACTS */
Route::get('admin/contact', [ContactController::class,'index']) -> name('admin.contact.index');
Route::post('admin/contact/store', [ContactController::class,'store']) -> name('admin.contact.store');
Route::post('admin/reply', [MailController::class, 'reply'])->name('contact.reply');


/* RECORDS */
Route::get('admin/records', [RecordController::class,'index']) -> name('admin.records.index');
