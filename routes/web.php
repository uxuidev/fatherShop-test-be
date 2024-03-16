<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('/hello', function () {
    return 'Hello, World!';
});
