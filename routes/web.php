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

Route::view('/', 'welcome')->name('main');
Route::view('/about', 'about')->name('about');
Route::view('/technologies', 'technologies')->name('technologies');
Route::view('/people', 'people')->name('people');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{portfolio}', 'PortfolioController@show')->name('portfolio.detail');

Route::get('/service', 'ServicesController@index')->name('service.index');
Route::get('/service/{service}', 'ServicesController@show')->name('service.detail');

Route::get('/career', 'JobController@index')->name('career');

Route::get('/contacts', 'ContactsController@show')->name('contacts');
Route::post('/contacts', 'ContactsController@store')->name('contacts.store');

Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/{news}', 'NewsController@show')->name('news.detail');

