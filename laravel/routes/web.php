<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WorkersController@index')
    -> name('home');

Route::get('show/{id}', 'WorkersController@show')
    -> name('show');

Route::get('destroy/{id}', 'WorkersController@destroy')
    -> name('destroy');

Route::get('edit/{id}', 'WorkersController@edit')
    -> name('edit');
Route::post('update/{id}', 'WorkersController@update')
    -> name('update');

Route::get('create', 'WorkersController@create')
    -> name('create');
Route::post('store', 'WorkersController@store')
    -> name('store');