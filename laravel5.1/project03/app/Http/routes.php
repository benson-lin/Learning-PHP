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
    return view('testcrud');
});


Route::get('/testInsert', 'EloquentController@insert');
Route::get('/testUpdate', 'EloquentController@update');
Route::get('/testDelete', 'EloquentController@delete');
Route::get('/testSelectAll', 'EloquentController@selectAll');
Route::get('/testSelectOne', 'EloquentController@selectOne');
Route::get('/testSelectOneColumn', 'EloquentController@selectOneColumn');
Route::get('/testCount', 'EloquentController@count');
Route::get('/testMax', 'EloquentController@max');
Route::get('/testAvg', 'EloquentController@avg');