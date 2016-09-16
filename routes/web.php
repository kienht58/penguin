<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




Route::get('/login','LoginController@login');

/* Posts */

Route::get('/posts','PostsController@index');
Route::get('/listgames','PostsController@listall');
Route::get('/posts/new','PostsController@new');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/make','PostsController@create_by_steam');
Route::get('/posts/{post_id}/edit','PostsController@edit');
Route::patch('/posts/{post_id}','PostsController@update');
Route::get('/posts/{post_id}','PostsController@detail');
Route::get('/','PagesController@index');
Route::post('/crawl','PostsController@crawl');
Route::resource('posts','PostsController');

Route::get('/livesearch','PostsController@livesearch');