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
//リダイレクト
 Route::get('/', function () {
     return redirect('/login');
 });

// Front Controller
// Route::get('/login', 'Auth\LoginController@login');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('/index', 'Front\IndexController@index');
    Route::get('/question', 'Front\IndexController@contact');
    Route::post('/question/save', 'Front\IndexController@save');
    Route::get('/question/complete', 'Front\IndexController@complete');
    Route::post('/point/save', 'Front\UserController@pointSave');
    Route::get('/user_point', 'Front\UserController@point');
    Route::get('/user_info', 'Front\UserController@info');
    Route::get('/item_detail/{item_id}', 'Front\ProductController@detail');
    Route::get('/cart', 'Front\CartController@index');
    Route::post('/cart/add', 'Front\CartController@itemToCart');
    Route::post('/cart/edit', 'Front\CartController@edit');
    Route::get('/cart_order', 'Front\OrderController@orderConfirm');
    Route::post('/order', 'Front\OrderController@order');
    Route::post('/cart/delete','Front\CartController@delete');
    Route::get('/home', 'Front\HomeController@index')->name('home');
    Route::get('/admin_index', 'Admin\UserController@index');
    Route::get('/admin_question', 'Admin\QuestionController@index');
    Route::post('/user_create', 'Admin\UserController@create');
    Route::get('/item_create', 'Admin\ItemController@create');
    Route::post('/admin_question/delete', 'Admin\QuestionController@delete');
    Route::get('/user_create', 'Admin\UserController@add');
});