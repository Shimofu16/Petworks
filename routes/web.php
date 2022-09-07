<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RecordController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/guidlines', [HomeController::class, 'guidlines'])->name('guidlines.index');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment.index');
Route::get('/existing', [HomeController::class, 'existing'])->name('existing.index');
Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login/form', [HomeController::class, 'form'])->name('user.login.form');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('user.login');
    Route::middleware(['isAdmin'])->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');
        /* ADMIN */
        Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
        /* APPOINTMENT */
        Route::prefix('appointment')->name('appointment.')->controller(AppointmentController::class)->group(function () {
            Route::get('/',  'index')->name('index');
            Route::post('/store',  'store')->name('store');
        });

        /* CONFIRM */
        Route::prefix('confirm')->name('confirm.')->controller(ConfirmController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/update/{id}', 'update')->name('update');
            Route::delete('/delete/{id}', 'destroy')->name('destroy');
            Route::post('/pending/{id}',  'reply')->name('reply');
        });
        /* OWNER */
        Route::prefix('owner')->name('owner.')->controller(OwnerController::class)->group(function () {
            Route::get('/',  'index')->name('index');
            Route::get('/{id}',  'show')->name('show');
            Route::put('/comment/{id}',  'update')->name('update');
        });
        /* CONTACTS */
        Route::prefix('contact')->name('contact.')->controller(ContactController::class)->group(function () {
            Route::get('/',  'index')->name('index');
            Route::post('/store',  'store')->name('store');
            Route::post('/reply',  'reply')->name('reply');
            Route::delete('/{id}',  'destroy')->name('destroy');
        });
        /* RECORDS */
        Route::prefix('records')->name('records.')->controller(RecordController::class)->group(function () {
            Route::get('/', [RecordController::class, 'index'])->name('index');
        });

        Route::prefix('contact')->name('contact.')->controller(ContactController::class)->group(function () {
        });
    });
});
