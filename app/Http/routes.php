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



Route::get('auth/login', ['as'=>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('auth/register', ['as'=>'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('scaais_collection/index', ['as' => 'collection.index', 'uses' => 'ScaaiCollectionController@getIndex']);
Route::get('scaais_collection/show/{id?}', ['as' => 'collection.show', 'uses' => 'ScaaiCollectionController@getShow'])id->('id');

Route::get('users', ['as' => 'pages.users', 'uses' => 'PagesController@getUsers']);
Route::get('ideas', ['as' => 'pages.ideas', 'uses' => 'PagesController@getIdeas']);
Route::get('about', ['as' => 'pages.about', 'uses' => 'PagesController@getAbout']);
Route::get('/', ['as' => 'pages.welcome', 'uses' => 'PagesController@getIndex']);
Route::resource('scaais', 'ScaaisController');



