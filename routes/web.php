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


Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => []],function() {

    Route::resource('dashboard','DashboardController');
    Route::resource('client','ClientController');
    Route::resource('user','UserController');
    Route::resource('task','TaskController');
    Route::get('system/setting','SystemController@index')->name('system.setting');
    Route::post('system/setting','SystemController@update')->name('system.setting.update');

});
