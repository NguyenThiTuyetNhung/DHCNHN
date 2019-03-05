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
Route::get('/product-detail','Website\WebsiteController@getProductDetail')->name('product.detail');

