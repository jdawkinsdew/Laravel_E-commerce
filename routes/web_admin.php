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

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');

    Route::get('/dashboard/orders', 'AdminController@orders')->name('orders');


    Route::get('/dashboard/customers', 'AdminController@customers')->name('customers');


    Route::get('/dashboard/setting', 'AdminController@setting')->name('setting');
    Route::post('/dashboard/editbannersetting', 'AdminController@editbannersetting')->name('editbannersetting');

    Route::get('/dashboard/news', 'AdminController@news')->name('news');
    Route::post('/dashboard/addnews', 'AdminController@addnews')->name('addnews');
    Route::post('/dashboard/deletenews', 'AdminController@deleteNews')->name('deletenews');

    Route::get('/dashboard/products', 'AdminController@products')->name('products');
    Route::post('/dashboard/addproduct', 'AdminController@addProduct')->name('addProduct');
    Route::post('/dashboard/selectproduct', 'AdminController@selectProduct')->name('selectProduct');
    Route::post('/dashboard/editproduct', 'AdminController@editProduct')->name('editProduct');
    Route::post('/dashboard/deleteproduct', 'AdminController@deleteProduct')->name('deleteProduct');
});
