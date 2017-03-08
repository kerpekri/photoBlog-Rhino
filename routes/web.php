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

Route::resource('person', 'PersonController', [
	'except' => ['edit', 'create', 'destroy', 'update']
]);

Route::resource('person', 'PersonController', [
	'except' => ['edit', 'create', 'destroy', 'update']
]);

#Route::pattern('id', '\d+');
#Route::get('users/{id}', 'UserController@getProfile');