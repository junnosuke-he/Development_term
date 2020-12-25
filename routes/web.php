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
    Route::get('/bulletin_board/create', 'Admin\BulletinBoardController@add');
    Route::post('bulletin_board/create', 'Admin\BulletinBoardController@create');
    Route::get('/bulletin_board', 'Admin\BulletinBoardController@index');
    
    Route::get('/question/create', 'Admin\QuestionController@add');
    Route::post('/question/create', 'Admin\QuestionController@create');
    Route::get('/question', 'Admin\QuestionController@index');
    
    Route::get('/review/create', 'Admin\ReviewController@add');
    Route::post('/review/create', 'Admin\ReviewController@create');
    Route::get('/review', 'Admin\ReviewController@index');
    
    Route::get('/profile','Admin\ProfileController@add');
    Route::post('/profile','Admin\ProfileController@create');
    Route::get('/', 'Admin\HomeController@add');