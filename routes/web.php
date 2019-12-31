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

Auth::routes(['verify' => true]);
/*
Route::get('/register_seller', function () {
    return view('seller/registerasseller');
})->middleware('verified');
*/



Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::resource('/register_seller','sellerController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*Route::get('/register_seller', 'seller@register');
Route::post('payment', 'seller@order');
*/

