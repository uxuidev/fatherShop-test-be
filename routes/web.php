<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

//for testing
Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);