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

Route::view('/', 'welcome')->name('main');
Route::view('/about', 'about')->name('about');
Route::view('/technologies', 'technologies')->name('technologies');
Route::view('/people', 'people')->name('people');
Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/services', 'services')->name('services');
Route::view('/news', 'news')->name('news');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/career', 'career')->name('career');
