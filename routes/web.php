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

Route::get('/', function () {
    return view('backend.blog.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

include_once __DIR__.'/frontend/frontend.php';
include_once __DIR__.'/backend/bakcend.php';


