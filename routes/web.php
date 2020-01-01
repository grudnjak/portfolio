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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PageController@index') ;
Route::get('/about', 'PageController@about');
Route::get('/portfolio', 'PageController@portfolio');
Route::get('/contact', 'PageController@contact');
Route::resource('galerija', 'GalerijaController'); 
