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
    return view('welcome');
});

Route::group(['namespace'=>'\App\Http\Controllers\Shop'],function(){
    Route::resource('products','ProductController')->names('products');
    Route::resource('categories','CategoryController')->names('categories');
    Route::resource('orders','OrderController')->names('orders');

}); 
