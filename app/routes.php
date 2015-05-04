<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });
// Route::group(array('before' => 'auth'), function(){
	Route::get('admin',array('as'=>'admin','uses'=>'HomeController@showAdmin'));
	Route::get('admin/user/roles/list',array('as'=>'roles/list','uses'=>'UserController@showRole'));
	Route::post('admin/user/roles/add',array('as'=>'admin/user/roles/add','uses'=>'UserController@addRole'));
	Route::get('admin/user/roles/delete/{id}',array('as'=>'admin/user/roles/delete','uses'=>'UserController@deleteRole'));
	Route::get('admin/user/roles/list/{id}',array('as'=>'admin/user/roles/edit','uses'=>'UserController@showEditRole'));
	Route::get('admin/user/list',array('as'=>'admin/user/list','uses'=>'UserController@showUser'));
	Route::get('admin/user/add',array('as'=>'admin/user/add','uses'=>'UserController@addUser'));
	Route::post('admin/user/add',array('as'=>'admin/user/add','uses'=>'UserController@createUser'));
	Route::get('admin/user/edit/{id}',array('as'=>'admin/user/edit','uses'=>'UserController@editUser'));
	Route::post('admin/user/edit',array('as'=>'admin/user/edit','uses'=>'UserController@updateUser'));
	Route::get('admin/category/add',array('as'=>'admin/categories/add','uses'=>'CategoryController@addCategory'));
	Route::post('admin/category/add',array('as'=>'admin/categories/add','uses'=>'CategoryController@createCategory'));
	Route::get('admin/category/list',array('as'=>'admin/categories/list','uses'=>'CategoryController@showCategory'));
	Route::get('admin/category/edit/{id}',array('as'=>'admin/categories/edit','uses'=>'CategoryController@editCategory'));
	Route::post('admin/category/edit',array('as'=>'admin/categories/edit','uses'=>'CategoryController@updateCategory'));
	//post
	Route::get('admin/post/add',array('as'=>'admin/post/add','uses'=>'PostController@addPost'));
	Route::post('admin/post/add',array('as'=>'admin/post/add','uses'=>'PostController@createPost'));
	Route::get('admin/post/list/{id}',array('as'=>'admin/post/list','uses'=>'PostController@showPost'));
	Route::get('admin/post/edit/{id}',array('as'=>'admin/posts/edit','uses'=>'PostController@editPost'));
	Route::post('admin/post/edit',array('as'=>'admin/posts/edit','uses'=>'PostController@updatePost'));
	Route::get('admin/post/delete/{id}',array('as'=>'admin/posts/delete','uses'=>'PostController@deletePost'));
	//slider
	Route::get('admin/slider/list',array('as'=>'admin/slider/list','uses'=>'SliderController@showSlider'));
	Route::post('admin/slider/add',array('as'=>'admin/slider/add','uses'=>'SliderController@addSlider'));
// });
//front
Route::get('/',array('as'=>'home','uses'=>'HomeController@showIndex'));
Route::get('/contact',array('as'=>'/contact','uses'=>'HomeController@showContant'));
Route::post('contact',array('as'=>'/contact','uses'=>'HomeController@sendContant'));
//login
Route::get('login',array('as'=>'login','uses'=>'UserController@showPageLogin'));
Route::post('login',array('as'=>'login','uses'=>'UserController@login'));
//register
Route::post('register',array('as'=>'register','uses'=>'UserController@register'));
Route::get('/active/{code}',array('as'=>'active-account','uses'=>'UserController@getActive'));
//forgot password

// Route::get('forgetpassword',array('as'=>'forgetpassword','uses'=>'RemindersController@getRemind'));
Route::post('forgetpassword',array('as'=>'forgetpassword','uses'=>'RemindersController@postRemind'));
Route::get('/password/reset/{token}',array('as'=>'password/reset','uses'=>'RemindersController@getReset'));
Route::post('resetpassword',array('as'=>'resetpassword','uses'=>'RemindersController@postReset'));