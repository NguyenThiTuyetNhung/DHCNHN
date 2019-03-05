<?php 


Route::middleware(['auth:admin'])->group(function(){

Route::resource('products', 'Admin\Product\ProductController');
Route::resource('distributions', 'Admin\Distribution\DistributionController');
Route::resource('users','Admin\User\UserController');
Route::resource('members','Admin\Admins\AdminsController');
Route::resource('orders','Admin\Order\OrderController');


Route::get('logout', 'Admin\Auth\LoginController@logout')->name('logout');

});


Route::get('login', 'Admin\Auth\LoginController@getLogin')->name('login');
Route::post('login', 'Admin\Auth\LoginController@postLogin')->name('postLogin');

