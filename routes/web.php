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
    return view('samples');
});
Route::resource('plots', "plotController");
Route::get('/addPlot', "plotController@create");
Route::get('/plot/store', "plotController@store");
Route::get('plotTransfer', "plotController@show");
Route::get('plotBooking', "plotController@show");

Route::get('addCoustomers', "customerController@create");
Route::resource('coustomers', "customerController");

Route::resource('files', "fileController");
Route::get('addFile', "fileController@create");
Route::resource('filesTransfer', "fileController");

// Route::resource('/plot/creates', "plotController@store");
// Route::resource('/plot/data', "plotController@allfiles");

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
