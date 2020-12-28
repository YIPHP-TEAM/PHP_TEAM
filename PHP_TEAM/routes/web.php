<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Front Controller
Route::get('/login', 'Auth\LoginController@login');
Route::get('/index', 'Front\IndexController@index');
Route::get('/question', 'Front\IndexController@contact');
Route::get('/user_point', 'Front\UserController@point');
Route::get('/user_info', 'Front\UserController@info');
Route::get('/item_detail', 'Front\ProductController@detail');
Route::get('/cart', 'Front\CartController@index');
Route::get('/cart_edit', 'Front\CartController@edit');
Route::get('/cart_order', 'Front\OrderController@order');