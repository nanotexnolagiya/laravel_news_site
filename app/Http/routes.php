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

Route::get('/', 'SiteController@index');

Route::auth();

Route::get('/category/{id}', array('uses' => 'CategoryController@index', 'as' => 'getCategory'));
Route::get('/post/{id}', array('uses' => 'PostController@index', 'as' => 'getPost'));
Route::get('/search', 'SiteController@search');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin', 'Admin\SiteController@index');
	/*------------------------------------------------------------*/
	Route::get('/admin/category', array('uses' => 'CategoryController@show', 'as' => 'showCategory'));
	Route::get('/admin/category/edit/{id}', array('uses' => 'CategoryController@editTemp', 'as' => 'editCatTemp'));
	Route::post('/admin/category/edit', array('uses' => 'CategoryController@edit', 'as' => 'editCat'));
	Route::post('/admin/category/delete', array('uses' => 'CategoryController@delete', 'as' => 'deleteCat'));
	Route::get('/admin/category/add', array('uses' => 'CategoryController@createTemp', 'as' => 'createCatTemp'));
	Route::post('/admin/category/add', array('uses' => 'CategoryController@create', 'as' => 'createCat'));
	/*------------------------------------------------------------*/
	Route::get('/admin/post', array('uses' => 'PostController@show', 'as' => 'showPost'));
	Route::get('/admin/post/edit/{id}', array('uses' => 'PostController@editTemp', 'as' => 'editPostTemp'));
	Route::post('/admin/post/edit', array('uses' => 'PostController@edit', 'as' => 'editPost'));
	Route::post('/admin/post/delete', array('uses' => 'PostController@delete', 'as' => 'deletePost'));
	Route::get('/admin/post/add', array('uses' => 'PostController@createTemp', 'as' => 'createPostTemp'));
	Route::post('/admin/post/add', array('uses' => 'PostController@create', 'as' => 'createPost'));
});
