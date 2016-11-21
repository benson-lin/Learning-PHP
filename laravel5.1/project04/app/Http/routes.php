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

Route::controllers([
'auth' => 'Auth\AuthController',
'password' => 'Auth\PasswordController',
]);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/helloworld', function(){
	return "Hello World";  //使用字符串直接渲染在浏览器上
});//还有post, put, delete

// 兼容多种请求类型
Route::match(['get','post'],'/multiple',function(){
	return "GET OR POST";
});


// 在URL中添加参数
// 路由参数不能包含 - 字符。用下划线 (_) 替换
Route::get('user/1/{id}',function($id){
	return "User ".$id;
});
Route::get('posts/{post}/comments/{comment}', function($postId,$commentId){
	return $postId.",".$commentId;
});
// 可选参数(参数后面加上?, 可以在function中设置默认值)
Route::get('user/2/{name?}',function($name='bensonlin'){
	return $name;
});
// 正则表达式限制where，不符合将跳转到404页面，可以将自定义的404页面写在/resources/views/errors/404.blade.php中
Route::get('user/3/{id}/{name}', function ($id, $name) {
    return $id.",".$name;
})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// fail
// prefix是URL前缀，namesapace是在App\Http\Controllers\下添加的文件夹
// http://localhost:8000/admin/1/a
Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function(){
	
	// App\Http\Controllers\Admin\AdminControlle
	Route::get('/test', 'AdminController@test');

});




// 添加中间件, 这里是登录中间件
// Route::group(['middleware'=>'auth', 'prefix'=>'admin'],function(){

// 	Route::get('/profile', function () {
//         // 使用 Auth 中间件
//     });
// });