<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World<h1>'
    
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'this is user ' . $name. ' with the id '. $id;
});
//with order here the id is first so first value entered in url is id then second value is name.
*/


Route::get('/', 'PagesController@index');
Route::get('/status', 'PagesController@status');
Route::get('/guests', 'PagesController@guests');
Route::get('/rooms', 'PagesController@rooms');
Route::get('/nextCheckouts', 'PagesController@nextCheckouts');
Route::get('/admin', 'PagesController@admin');




