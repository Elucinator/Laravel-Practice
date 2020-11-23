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

//Route::get('/contact', function () {
//    return 'this is contact page';
//});

/* Using parameters/variables in routes */
Route::get('/post/{id}/{name}', function($id, $name) {
    return "post number: $id and post name: $name";
});

/* Naming Routes */

/* Creating a name for url which can be used in code instead of writing whole url. */
Route::get('/admin/test/long/url', array('as' => 'short.url', function() {
        $url = route('short.url');
        return "this url is: " . $url;
    }));

/* Routing data from route to controller index method */
//Route::get('/post/{id}', 'postController@index');

/* Creating routes for resource postController */
Route::resource('posts', 'postController');

Route::get('contact/{name}/{age}/{education}', 'postController@show_contact_page');
