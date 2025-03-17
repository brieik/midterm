<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FeaturesController;

Route::resource('features', FeaturesController::class);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/EmpleoJohnrey', 'App\Http\Controllers\FeaturesController@index');