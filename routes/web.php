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

Route::get('/home','MainPageController@show')->name('mainpage');
Route::get('/register','MainPageController@create')->name('register');
Route::get('/welcome','MainPageController@postLogin')->name('welcome');