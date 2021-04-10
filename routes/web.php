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

Auth::routes(['verify' => true]);
Route::get('/dashboard', [App\Http\Controllers\DasboardController::class, 'index'])->name('home');
Route::put('/profile/upload-profile-pix', [App\Http\Controllers\Profile\ProfileController::class, 'updateProfilePix']);
Route::get('/profile/upload-video-entry', [App\Http\Controllers\Profile\ProfileController::class, 'uploadVideoEntry']);
Route::get('/profile/view-entry', [App\Http\Controllers\Profile\ProfileController::class, 'viewEntry']);
Route::post('/profile/upload-video-entry', [App\Http\Controllers\Profile\ProfileController::class, 'store']);
Route::post('/profile/contact-update', [App\Http\Controllers\Profile\ProfileController::class, 'contactUpdate']);
Route::get('/profile/edit', [App\Http\Controllers\Profile\ProfileController::class, 'viewProfile']);
Route::post('/profile/update', [App\Http\Controllers\Profile\ProfileController::class, 'updateProfile']);