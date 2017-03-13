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
//     return view('index');
// });

Route::resource('home/switch','adminSwitchController');
// Route::resource('home/switch','soba');

Route::get('/','IndexSwitchController@index');
Route::get('detail/{id}','IndexSwitchController@detail');
Route::post('search','IndexSwitchController@search');
Route::get('map/{id}','IndexSwitchController@map');

Auth::routes();

Route::get('/home', 'HomeController@index');
