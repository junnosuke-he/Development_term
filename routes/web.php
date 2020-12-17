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
    Route::get('/bulletin_board', 'Admin\BulletinBoardController@add');
    Route::get('bulletin_board/create', 'Admin\BulletinBoardController@create');
    Route::post('bulletin_board/create', 'Admin\BulletinBoardController@create');
    Route::get('/question', 'Admin\QuestionController@add');
    Route::get('/review', 'Admin\ReviewController@add');
    Route::get('/profile','Admin\ProfileController@add');
    Route::post('/profile','Admin\ProfileController@create');
    Route::get('/', 'Admin\HomeController@add');