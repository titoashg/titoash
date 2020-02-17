<?php
Route::pattern('id', '[0-9]+');
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

        /* Flight Route */
        Route::get('flight', 'FlightController@index')->name('flight');

        Route::get('addflight', 'FlightController@addflight')->name('addflight');
        Route::post('addflightpost', 'FlightController@addflight');

        Route::get('allcompany', 'FlightController@allcompany')->name('allcompany');
        Route::get('addcompany', 'FlightController@addcompany')->name('addcompany');
        Route::post('addcompany', 'FlightController@addcompanypost');
        Route::get('allcompany/{id}/delete', 'FlightController@deletecompany');
        Route::get('allcompany/{id}/edit', 'FlightController@editcompany');
        Route::post('allcompany/{id}', 'FlightController@editcompanypost');


        Route::get('allairport', 'FlightController@allairport')->name('allairport');
        Route::get('addairport', 'FlightController@addairport')->name('addairport');
        Route::post('addairport', 'FlightController@addairportpost');
        Route::get('allairport/{id}/delete', 'FlightController@deleteairport');
        Route::get('allairport/{id}/edit', 'FlightController@editairport');
        Route::post('allairport/{id}', 'FlightController@editairportpost');

        /* Flight Route */

    });


//adminstrator Route

