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

Route::get('/dashboard', [App\Http\Controllers\DasboardController::class, 'index'])->name('home');

Route::prefix('profile')->group(function () {

    Route::put('/upload-profile-pix', [App\Http\Controllers\Profile\ProfileController::class, 'updateProfilePix']);
    Route::get('/upload-video-entry', [App\Http\Controllers\Profile\ProfileController::class, 'uploadVideoEntry']);
    Route::get('/view-entry', [App\Http\Controllers\Profile\ProfileController::class, 'viewEntry']);
    Route::post('/upload-video-entry', [App\Http\Controllers\Profile\ProfileController::class, 'store']);
    Route::post('/contact-update', [App\Http\Controllers\Profile\ProfileController::class, 'contactUpdate']);
    Route::get('/edit', [App\Http\Controllers\Profile\ProfileController::class, 'viewProfile']);
    Route::post('/update', [App\Http\Controllers\Profile\ProfileController::class, 'updateProfile']);
});

Route::prefix('admin')->group(function () {

    Route::get('/login', [App\Http\Controllers\Admin\AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'loadDashboard'])
                        ->name('admin.dashboard')->middleware('admin');
});


Auth::routes(['verify' => true]);