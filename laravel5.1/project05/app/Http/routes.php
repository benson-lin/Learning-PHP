<?php


// 添加中间件, 这里是登录中间件
Route::group(['middleware'=>'login', 'prefix'=>'admin'],function(){

	Route::get('/', function () {
        return view('admin.welcome');
    });
});


Route::get('/login', ['as' => 'login', function(){
	return view('login');
}]);

Route::post('/login', 'LoginController@login');
