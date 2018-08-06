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
Route::match(['get','post'],'/admin','AdminController@login');


Route::get('/logout','AdminController@logout');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/settings','AdminController@settings');
    Route::match(['get','post'],'/admin/update_pwd','AdminController@updatePassword');

    // 最新消息
    Route::get('/admin/news','NewsController@views');    
    Route::delete('/admin/news/{id}','NewsController@delete');
    
    // 活動資訊
    Route::get('/admin/event','EventController@views');

    // 線上課程
    Route::get('/admin/youtube','YoutubeController@views');

    // 報名系統
    Route::get('/admin/news','NewsController@views');



    
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
