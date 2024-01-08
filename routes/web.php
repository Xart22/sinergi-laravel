<?php

use App\Http\Controllers\BadanUsaha;
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


Route::get('/', [BadanUsaha::class, 'index'])->name('home');
Route::post('/create', [BadanUsaha::class, 'store'])->name('create');
Route::get('/badan-usaha/{id}', [BadanUsaha::class, 'show'])->name('badan-usaha.show');
Route::get('/badan-usaha/{id}/edit', [BadanUsaha::class, 'edit'])->name('badan-usaha.edit');
Route::post('/badan-usaha/{id}/update', [BadanUsaha::class, 'update'])->name('badan-usaha.update');
Route::get('/badan-usaha/{id}/delete', [BadanUsaha::class, 'destroy'])->name('badan-usaha.delete');




Route::get('/get-data', [BadanUsaha::class, 'getBadanUsaha'])->name('get-data');
Route::post('/send-email', [SendEmail::class, 'sendEmail'])->name('send-email');
Route::get('/reset-email', [SendEmail::class, 'resetEmail'])->name('reset-email');
