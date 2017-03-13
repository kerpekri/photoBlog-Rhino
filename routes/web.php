<?php

Route::resource('/', 'HomeController', ['only' => [
    'index'
]]);

Route::resource('/places', 'PlaceController', ['only' => [
    'index'
]]);

Route::resource('/persons', 'PersonController', ['only' => [
    'index'
]]);

Route::get('my-post', 'PostController@myPost');