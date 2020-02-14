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

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function()
    {
        Route::get('profile/create' , 'Admin\ProfileController@add');
        Route::get('profile/edit' , 'Admin\ProfileController@edit');
        Route::post('profile/create' , 'Admin\ProfileController@create');
        Route::post('profile/edit' , 'Admin\ProfileController@update');
        Route::get('profile/record' , 'Admin\CalendarController@record');
        Route::post('profile/record' , 'Admin\CalendarController@postrecord');
        Route::get('profile/index' , 'Admin\CalendarController@index');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
