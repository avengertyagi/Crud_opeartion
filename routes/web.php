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
Route::get('/forget','HomeController@Reset')->name('Forget');

Route::get('/Home', 'HomeController@index')->name('Home');

Route::get('/Product','CrudsController@save');
Route::post('/addimage','CrudsController@store')->name('addimage');

Route::get('pagination/fetch_data','Crudscontroller@search');
Route::get('/index','CrudsController@index');
    
Route::delete('/delete/{id}', 'CrudsController@destroy')->name('delete.destroy');

Route::get('/editimage/{id}','CrudsController@show');
Route::put('/updateimage/{id}','CrudsController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*----------Header----------------*/
Route::get('/header','Crudscontroller@Dyanmic')->name('header');
Route::get('Show','Crudscontroller@view');