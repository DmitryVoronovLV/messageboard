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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::redirect('/', 'country/');

Route::get('country/', 'CountryController@index');
Route::get('country/delete/{id}','CountryController@destroy');
Route::get('country/new/', 'CountryController@new');
Route::get('country/insert/{name}/{code}', 'CountryController@store');
Route::get('country/edit/{id}', 'CountryController@edit');
Route::get('country/update/{id}/{name}/{code}', 'CountryController@update');
Route::get('city/{id}', 'CityController@index');
Route::get('city/new/{id}', 'CityController@new');
Route::get('city/insert/{id}/{name}', 'CityController@store');
Route::get('city/edit/{id}', 'CityController@edit');
Route::get('city/update/{id}/{name}', 'CityController@update');
Route::get('city/delete/{id}','CityController@destroy');
Route::get('search/','CountryController@search');
Route::get('search/results/{option}/{searchString}','CountryController@searchResults');

Route::get('/home', 'HomeController@index')->name('home');
