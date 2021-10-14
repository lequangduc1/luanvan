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
    return view('backend/trangchu/daboad');
});
Route::get('/list_sanpham','App\Http\Controllers\sanpham_controller@list_sanpham');
route::get('getxoa/{MaSP}','App\Http\Controllers\sanpham_controller@getxoa');
route::post('post_EditProduct','App\Http\Controllers\sanpham_controller@post_EditProduct');
