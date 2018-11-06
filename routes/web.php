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

Route::get('/','HomeController@indexoriginal')->name('index');

Route::get('/request','HomeController@frontForm')->name('frontForm');
Route::put('/request','HomeController@frontFormSubmit')->name('frontFormSubmit');
Route::get('/confirm/task/{task}/{client}','HomeController@confirmTask')->name('confirmTask');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','admin']],function() {

    Route::resource('dashboard','DashboardController');
    Route::resource('client','ClientController');
    Route::resource('user','UserController');
    Route::resource('task','TaskController');
    Route::resource('request','RequestController');
    Route::resource('requestCategory','RequestCategoryController');

    Route::get('inspection/edit/{id}','InspectionController@edit')->name('inspection.edit');
    Route::put('inspection/{id}','InspectionController@update')->name('inspection.update');
    Route::get('inspection/sendToClient/{id}','InspectionController@sendToClient')->name('inspection.sendToClient');

    Route::get('request/{id}/{states}','RequestController@status')->name('request.status');

    Route::get('system/setting','SystemController@index')->name('system.setting');
    Route::post('system/setting','SystemController@update')->name('system.setting.update');
    Route::get('system/setting/mail','SystemController@mailTemplate')->name('system.setting.mail.index');
    Route::put('system/setting/mail','SystemController@mailTemplateUpdate')->name('system.setting.mail.update');
    Route::get('system/setting/homehtml','SystemController@homeHTML')->name('homeHTML');
    Route::put('system/setting/homehtml','SystemController@homeHTMLUpdate')->name('homeHTMLUpdate');



});



Route::group(['as' => 'staff.','prefix' => 'staff','namespace' => 'Staff','middleware' => ['auth','staff']],function() {

    Route::get('dashboard','DashboardController@index')->name('dashboard.index');
    Route::get('task','TaskController@index')->name('task.index');
    Route::get('task/{task}','TaskController@show')->name('task.show');
    Route::put('/inspection/submit/{task}','InspectionController@submitForm')->name('inspection.submit');

});


Route::group(['as' => 'user.','prefix' => 'user','namespace' => 'User','middleware' => ['auth']],function() {
    Route::get('profile/{id?}','ProfileController@index')->name('profile');
    Route::get('settings/{id?}','ProfileController@settings')->name('settings');
    Route::put('settings/{id?}','ProfileController@settingsUpdate')->name('settings.update');

});


Route::group(['middleware' => ['auth']],function() {
    Route::get('attachment/count/{id}','AttachmentController@attachmentCount')->name('attachment.count');

    Route::get('attachment/list/{id}','AttachmentController@getList')->name('attachment.list');
    Route::post('attachment/upload/{id}','AttachmentController@upload')->name('attachment.upload');
    Route::post('attachment/delete/{id}','AttachmentController@delete')->name('attachment.delete');
});
