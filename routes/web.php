<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\AuthController;

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

Route::get('/gudang',[GudangController::class,'index']);
Route::get('/gudang/create',[GudangController::class,'create']);
Route::post('/gudang/store',[GudangController::class,'store']);
Route::get('/gudang/{id}/edit',[GudangController::class,'edit']);
Route::put('/gudang/{id}/',[GudangController::class,'update']);
Route::delete('/gudang/{id}/',[GudangController::class,'destroy']);
Route::group(['middleware' => 'guest'],function(){
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController:: class, 'registerPost'])->name('register');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/welcome', [HomeController::class, 'welcome']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});