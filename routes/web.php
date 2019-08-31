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

Route::get('/', 'HomeController@index');

Route::get('/gop-chup/{slug}', 'GoiChupController@show')->name('goichup');

Route::get('/tin-tuc', 'TinTucController@cat')->name('tintuc');

Route::get('/tin-tuc/{slug}', 'TinTucController@show')->name('tintuc.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
