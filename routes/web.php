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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('index');
});


//adminstrator Route
    Route::group(['middleware' => ['auth' => 'adminstrator'],'prefix' => 'admin','namespace'=>'adminstrator'], function () {
        Route::get('index', 'HomeController@index');
    });


//adminstrator Route

