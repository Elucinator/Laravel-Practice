<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'this is about page';
});

Route::get('/contact', function () {
    return 'this is contact page';
});

/* Using parameters/variables in routes */
Route::get('/post/{id}/{name}', function($id, $name) {
    return "post number: $id and post name: $name";
});
