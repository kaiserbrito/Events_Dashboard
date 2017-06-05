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

Route::get('/', 'EventController@getIndex')->name('event.index');

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('profile');

Route::get('/add-to-dash/{id}', 'DashboardController@getConfirmPresence')->name('event.addToDash');

Route::get('/dashboard', 'DashboardController@getDash')->name('user.dashboard');

Route::get('/about', 'EventController@getAbout')->name('about');

Route::get('contact', 'ContactController@create')->name('contact');

Route::post('contact', 'ContactController@store')->name('contact_store');

Route::get('/search', 'EventController@getSearch')->name('event.search');


