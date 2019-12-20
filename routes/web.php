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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{slug}', 'HomeController@product')->name('product');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blogs/blog{id}', 'HomeController@blog')->name('blog');
Route::get('/addOne', 'HomeController@addOne')->name('addOne');
Route::get('/deleteItemFromCart', 'HomeController@deleteItemFromCart')->name('deleteItemFromCart');
Route::get('/deleteFromCartPage', 'HomeController@deleteFromCartPage')->name('deleteFromCartPage');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::post('/mail', 'HomeController@mail')->name('mail');
Route::post('/search', 'HomeController@search')->name('search');
Route::get('/category/{category_id}', 'HomeController@category')->name('category');
Route::get('/like/{id}', 'HomeController@like')->name('like');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');

