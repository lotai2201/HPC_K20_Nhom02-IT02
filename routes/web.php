<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PagesController;

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
//1 Truyền ID
Route::get('/vd/{name}',[PagesController::class,'changes']);

//2  Trang chủ 
Route::get('/',[PagesController::class,'index']);

//3 Đăng nhập 
Route::get('/login',[PagesController::class,'login']);

//4 Đăng ký 
Route::get('/register',[PagesController::class,'register']);

//5 Giới thiệu
Route::get('/gioithieu',[PagesController::class,'about']);

// Read-more

Route::get('/gioithieu',[PagesController::class,'about'])->name('read-more');

//Search


Route::get('/search',[PagesController::class,'index']);
Route::post('/search',[PagesController::class,'search']);


