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

Route::get('xin-chao', function () {
    return ('Xin chao 2 tk ngu Chuc Nhan');
});

Route::get('xin-chao/{ten}/{namsinh}', function($ten, $namsinh){
    return ('Xin chao ban: ' . $ten . '<br> Nam sinh la: ' . $namsinh);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('xin-chao/{ten}', function($ten){
    return 'xinchao: ' . $ten;
})->where('ten', '[A-z][a-z]+');

Route::group(['prefix'=>'nhom'], function(){
    route::get('nhom1', function() {return "Bạn đang ở nhom/nhom1"; });
    route::get('nhom2', function() {return "Bạn đang ở nhom/nhom2"; });
    route::get('nhom3', function() {return "Bạn đang ở nhom/nhom3"; });
    route::get('nhom4', function() {return "Bạn đang ở nhom/nhom4"; });
    });
