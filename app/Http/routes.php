<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('Student','StudentController@index');
Route::get('wenz','CeshiController@wenz');
Route::get('biaod','CeshiController@biaod');

Route::get('zhuye','CeshiController@zhuye');

Route::get('dengl','CeshiController@dengl');
Route::get('lieb','CeshiController@lieb');
Route::any('goin','CeshiController@goin');








