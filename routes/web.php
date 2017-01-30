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

Route::get('/', 'PersonController@index');
Route::singularResourceParameters();
// model route binding.
Route::model('person', App\Person::class);
Route::model('language', App\Language::class);
Route::resource('person','PersonController');
Route::resource('language','LanguageController');