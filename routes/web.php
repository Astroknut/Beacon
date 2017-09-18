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

/*************
PAGE ROUTES
*************/	
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
	return view('layouts.about');
});

Auth::routes();


/*************
POST ROUTES
*************/	
Route::get('/home', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

/*************
COMMENTS ROUTES
*************/
Route::post('/posts/{post}/comments', 'CommentsController@store');	
