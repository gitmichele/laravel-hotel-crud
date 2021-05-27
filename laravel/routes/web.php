<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WorkersController@index')
    -> name('home');

Route::get('show/{id}', 'WorkersController@show')
    -> name('show');