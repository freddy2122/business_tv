<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'envoyerEmail'])->name('envoyer.email');
Route::get('/about',[UserController::class,'about'])->name('about');
Route::get('/blog',[UserController::class,'blog'])->name('blog');
