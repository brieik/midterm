<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
Route::resource('categories', CategoryController::class);
Route::get('/', function () {
    return view('welcome');
});

Route::get( '/login', 'App\Http\Controllers\LoginController@index'); 
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');