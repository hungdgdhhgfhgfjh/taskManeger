<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MakeController;
use Illuminate\Http\Request;
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

Route::prefix("product")->group(function(){
// lấy danh sách hiển thị product
Route::get('/',[ProductController::class,'index'])->name("product.index");

Route::get('/edit/{id}',[ProductController::class,'getProduct'])->name("product.getProduct");
Route::post('/edit/{id}',[ProductController::class,'update']);
Route::get('/add',[ProductController::class,'getAdd'])->name("product.getAdd");
// xử lý thêm sản phẩm
Route::post('/add',[ProductController::class,'handgetAdd']);
Route::delete('/delete/{id}',[ProductController::class,'detroy'])->name("product.detroy");
});
Route::prefix("file")->group(function(){
Route::get('/',[MakeController::class,'index']);
Route::resource('/admin', AdminController::class);
});
Route::post('/check-email', [MakeController::class, 'validationEmail'])->name('checkEmail');
Route::get("index",function(){
return view("checkEmail");
});
Route::get('/caculator', [MakeController::class,'caculator']);