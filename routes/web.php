<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;

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


Route::get('/',[useController::class,'home']);

Route::get('/man',[useController::class,'man']);

Route::get('/women',[useController::class,'women']);

Route::get('/gadget',[useController::class,'gadget']);

Route::get('/bag',[useController::class,'bag']);

Route::get('/kids',[useController::class,'kids']);

Route::get('/skincare',[useController::class,'skincare']);
