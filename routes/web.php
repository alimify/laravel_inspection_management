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

Route::get('/','HomeController@frontForm')->name('index');
Route::put('/','HomeController@frontFormSubmit')->name('frontFormSubmit');


Auth::routes();

Route::get('/home', 'HomeController@frontForm')->name('home');


Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','admin']],function() {

    Route::resource('dashboard','DashboardController');
    Route::resource('client','ClientController');
    Route::resource('user','UserController');
    Route::resource('task','TaskController');
    Route::resource('request','RequestController');
    Route::get('request/{id}/{states}','RequestController@status')->name('request.status');

    Route::get('system/setting','SystemController@index')->name('system.setting');
    Route::post('system/setting','SystemController@update')->name('system.setting.update');

});



Route::group(['as' => 'staff.','prefix' => 'staff','namespace' => 'Staff','middleware' => ['auth','staff']],function() {

    Route::get('dashboard','DashboardController@index')->name('dashboard.index');
    Route::get('task','TaskController@index')->name('task.index');
    Route::get('task/{task}','TaskController@show')->name('task.show');
    Route::put('/inspection/formOne/{task}','InspectionController@formOne')->name('inspection.formOne');

});
