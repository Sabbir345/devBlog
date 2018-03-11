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



Auth::routes();


Route::group(['middleware' => ['web']], function () {

	Route::get('/home', 'PostController@index')->name('home');
	Route::get('/post/create', 'PostController@create')->name('create');
	Route::post('post/save', 'PostController@store')->name('store');
	Route::get('edit/{id}', 'PostController@edit')->name('edit');
	Route::post('update/{id}', 'PostController@update')->name('update');
	Route::delete('delete/{id}' , 'PostController@delete')->name('delete');

	Route::get('blog/{id}' , 'PostController@show')->name('singleshow');

	//for comment 

	Route::post('blog/{post_id}', 'CommentController@store')->name('comment.save');
	// Route::get('comments/{post_id}/edit', 'CommentController@edit')->name('comment.edit');
	// Route::delete('delete/{id}' , 'CommentController@delete')->name('comment.delete');




});



