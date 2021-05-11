<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MyproductController;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    session()->forget('user');
    return view('login');
});

Route::get('/regester', function () {
    return view('regester');
});

Route::post('/regester',[UserController::class,'regester']);


Route::post('/login',[UserController::class,'login']);
Route::get('/',[MyproductController::class,'index']);
Route::get('details/{id}',[ProductController::class,'details']);

Route::get('my/{id}',[MyproductController::class,'iindex']);
Route::get('addtocart',[MyproductController::class,'addtocart'])->name('addcart');
Route::get('cartlist',[MyproductController::class,'cartlist']);
Route::get('removeitem/{id}',[MyproductController::class,'removeitem']);
Route::get('ordernow',[MyproductController::class,'ordernow']);

Route::post('orderplace',[MyproductController::class,'orderplace']);


Route::get('myorder',[MyproductController::class,'myorder']);

Route::get('/de',[UserController::class,'de']);