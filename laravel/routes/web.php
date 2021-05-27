<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WorkersController@index')
    -> name('home');