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


    Route::get('/bulletinboard', 'Admin\Bulletin_boardController@add');
    Route::get('/question', 'Admin\QuestionController@add');
    Route::get('/review', 'Admin\ReviewController@add');


Route::get('/', 'Admin\HomeController@add');