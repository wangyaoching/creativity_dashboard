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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/settings','AdminController@settings');
    Route::match(['get','post'],'/admin/update_pwd','AdminController@updatePassword');

    // 公告消息
    Route::get('/admin/news','NewsController@views');    
    Route::delete('/admin/news/{id}','NewsController@delete');    
    Route::get('/admin/news_insert','NewsController@insert'); 
    Route::post('/admin/news','NewsController@store');
    Route::get('/admin/news/{id}','NewsController@edit');	
    Route::patch('/admin/news/{id}','NewsController@update');

    // 校內消息
    Route::get('/admin/news2','NewsController@views2');

    // 活動資訊
    Route::get('/admin/event','EventController@views');    
    Route::delete('/admin/event/{id}','EventController@delete');
    Route::get('/admin/event_insert','EventController@insert'); 
    Route::post('/admin/event','EventController@store');
    Route::get('/admin/event/{id}','EventController@edit');	
    Route::patch('/admin/event/{id}','EventController@update');


    // 線上課程
    Route::get('/admin/youtube','YoutubeController@views');
    Route::delete('/admin/youtube/{id}','YoutubeController@delete');     
    Route::get('/admin/youtube_insert','YoutubeController@insert'); 
    Route::post('/admin/youtube','YoutubeController@store');
    Route::post('/admin/visibled/{id}','YoutubeController@visibled');

    // 相關檔案
    Route::get('/admin/file','FileController@views');    
    Route::delete('/admin/file/{id}','FileController@delete');
    Route::get('/admin/file_insert','FileController@insert'); 
    Route::post('/admin/file','FileController@store');
    Route::get('/admin/file/{id}','FileController@edit');	
    Route::patch('/admin/file/{id}','FileController@update');

    // 報名系統
    Route::get('/admin/sign_up','Sign_upController@views');
    Route::delete('/admin/sign_up/{id}','Sign_upController@delete');
    Route::get('/admin/sign_up_insert/{id}','Sign_upController@insert');
    Route::patch('/admin/sign_up/{id}','Sign_upController@store');
    
});

