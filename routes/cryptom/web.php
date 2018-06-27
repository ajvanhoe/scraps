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

Route::resource('/tasks', 'TaskController');
Route::resource('/exchanges', 'ExchangeController');
Route::resource('/coins', 'CoinController');

Route::get('/coin', function () {
    return view('coin');
});

/*
Route::get('/exchanges/create', function () {
    return view('create');
});

Route::get('/tasks', function () {
    return view('tasks');
});
*/

/*
Route::post('/exchanges', 'ExchangeController@store');
Route::get('/exchanges',  'ExchangeController@index')->name('exchanges');
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('create');





