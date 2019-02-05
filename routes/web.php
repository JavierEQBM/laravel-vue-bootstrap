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

Route::get('/', 'ViewsComponentsController@home');
Route::get('/home', 'ViewsComponentsController@home')->name('home');
Route::get('/alerts', 'ViewsComponentsController@alerts')->name('alerts');

Route::get('/dashboard', 'ViewsComponentsController@dashboard')->name('dashboard');

Route::apiResource('throughts', 'ThroughtController');

Auth::routes();
