<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/chat', ['App\Http\Controllers\ChatController', 'generateImage']);
Route::get('/download-image', ['App\Http\Controllers\ChatController', 'downloadImage']);
Route::post('/generate-pdf', [PdfController::class, 'generatePdf']);

Auth::routes();
Route::middleware('auth')->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/profile/update', [ChatController::class, 'updateProfile'])->name('profile.update');
Route::post('/password/update', [ChatController::class, 'updatePassword'])->name('password.update');
});
