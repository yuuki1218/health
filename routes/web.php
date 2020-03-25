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
//   return view('welcome');
// });

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function () {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/index', 'Admin\ProfileController@index');
    Route::get('profile/test', 'Admin\ProfileController@test');
});

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function () {
    Route::get('calendar/record', 'Admin\CalendarController@record');
    Route::post('calendar/record', 'Admin\CalendarController@postrecord');
    Route::get('calendar/edit/{id}', 'Admin\CalendarController@edit');
    Route::post('calendar/edit', 'Admin\CalendarController@update');
    Route::get('calendar/record', 'Admin\CalendarController@deleterecord');
    Route::get('calendar/index', 'Admin\CalendarController@index');
    Route::get('/', 'Admin\CalendarController@home');
});

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function () {
    Route::get('diary/create', 'Admin\DiaryController@add');
    Route::post('diary/create', 'Admin\DiaryController@create');
    Route::get('diary/index', 'Admin\DiaryController@index');
    Route::get('diary/edit/{id}', 'Admin\DiaryController@edit');
    Route::post('diary/edit', 'Admin\DiaryController@update');
    Route::get('diary/delete', 'Admin\DiaryController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile', 'ProfileController@index');
Route::get('/calendar', 'CalendarController@index');
Route::get('/', 'CalendarController@home');
Route::get('/diary', 'DiaryController@index');
