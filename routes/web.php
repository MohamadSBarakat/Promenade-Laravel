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
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


Route::resource('promos', 'PromoController');




  Route::get('/home', function () {
    return '<h1>Hello world</h1>';
});

Route::get('/about', function () {
    //return '<h1>About us Nous sommes WEB DEVELOPPEUR</h1>';
    return view('pages.about');
});

Route::get('/users/{id}', function($id) {
    //return '<h1>About us Nous sommes WEB DEVELOPPEUR</h1>';
    return 'This is user  ' .$id;
});

