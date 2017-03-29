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


Route::get('users', ['as' => 'pages.users', 'uses' => 'PagesController@getUsers']);
Route::get('ideas', ['as' => 'pages.ideas', 'uses' => 'PagesController@getIdeas']);
Route::get('about', ['as' => 'pages.about', 'uses' => 'PagesController@getAbout']);
Route::get('/', ['as' => 'pages.welcome', 'uses' => 'PagesController@getIndex']);
Route::resource('scaais', 'ScaaisController');



Route::auth();

Route::get('/home', 'HomeController@index');
