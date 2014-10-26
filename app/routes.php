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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('login', ['as' => 'login', 'uses' => 'AuthorizationController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthorizationController@destroy']);
Route::model('snippet', 'Snippet');
Route::resource('snippet', 'SnippetsController');
Route::model('user', 'User');
Route::resource('user', 'UsersController');
Route::model('comment', 'Comment');
Route::resource('comment', 'CommentsController');
Route::get('snippet/{id}/up', ['as' => 'vote.up', 'uses' => 'VotesController@up']);
Route::get('snippet/{id}/down', ['as' => 'vote.down', 'uses' => 'VotesController@down']);
