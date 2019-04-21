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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','Website\WebsiteController@homepage')->name('homepage');
Route::get('/product-list','Website\WebsiteController@getProductPage')->name('product.page');
Route::get('/contact','Website\WebsiteController@getContact')->name('product.contact');
Route::get('/login','Website\WebsiteController@getLogin')->name('product.login');
Route::post('/login','Website\WebsiteController@postLogin')->name('product.login.post');
Route::post('/register','Website\WebsiteController@postRegister')->name('registerpost');//đăng kí người dùng
Route::get('/product-detail/{id}','Website\WebsiteController@getProductDetail')->name('product.detail');
Route::get('/size/{id}','Website\WebsiteController@getSize')->name('product.size');

Route::get('/cart', 'Website\CartController@cart')->name('orders.cart');
Route::post('/add-to-cart/{id}', 'Website\CartController@addToCart')->name('orders.addToCart');
Route::post('/add-to-oder/{id}', 'Website\CartController@addAddress')->name('orders.addAddress');
Route::get('/delete-cart/{id}', 'Website\CartController@deleteCart')->name('orders.delete-cart');
Route::get('/update-cart/{id}', 'Website\CartController@updateCart')->name('orders.updateCart');
Route::post('/add_cart_order', 'Website\CartController@addOrder')->name('orders.adđ');