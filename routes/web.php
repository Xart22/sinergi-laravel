<?php

use App\Http\Controllers\BadanUsaha;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\SendEmail;
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


Route::get('/', [CompanyProfileController::class, 'index'])->name('landing.home');
Route::get('/about', [CompanyProfileController::class, 'about'])->name('landing.about');
Route::get('/contact', [CompanyProfileController::class, 'contact'])->name('landing.contact');
Route::get('/service/skk', [CompanyProfileController::class, 'skk'])->name('landing.service.skk');
Route::get('/service/k3', [CompanyProfileController::class, 'k3'])->name('landing.service.k3');
Route::get('/service/iso', [CompanyProfileController::class, 'iso'])->name('landing.service.iso');
Route::get('/service/sertifikasi/iso/{slug}', [CompanyProfileController::class, 'sertifikasiIso'])->name('landing.service.iso.slug');
Route::get('/service/sertifikasi/{slug}', [CompanyProfileController::class, 'service'])->name('landing.service.sertifikasi.show');

Route::prefix('badan-usaha')->group(function () {
    Route::get('/', [BadanUsaha::class, 'index'])->name('home');
    Route::post('/create', [BadanUsaha::class, 'store'])->name('create');
    Route::get('/badan-usaha/{id}', [BadanUsaha::class, 'show'])->name('badan-usaha.show');
    Route::get('/badan-usaha/{id}/edit', [BadanUsaha::class, 'edit'])->name('badan-usaha.edit');
    Route::post('/badan-usaha/{id}/update', [BadanUsaha::class, 'update'])->name('badan-usaha.update');
    Route::get('/badan-usaha/{id}/delete', [BadanUsaha::class, 'destroy'])->name('badan-usaha.delete');




    Route::get('/get-data', [BadanUsaha::class, 'getBadanUsaha'])->name('get-data');
    Route::post('/send-email', [SendEmail::class, 'sendEmail'])->name('send-email');
    Route::get('/reset-email', [SendEmail::class, 'resetEmail'])->name('reset-email');
});
