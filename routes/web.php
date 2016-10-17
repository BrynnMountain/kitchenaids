<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('/pages/about');
});

Route::get('/contact', function () {
    return view('/pages/contact');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/box/create', 'BoxController@create');
Route::post('/box/create', 'BoxController@store');
Route::get('/box/{id}/recipe/create', 'RecipeController@create');
Route::post('/recipe/create', 'RecipeController@store');
