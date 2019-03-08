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
    return view('frontend.index');
});

Route::post('/mail', 'frontend\SiteController@mail')->name('mail');

Route::get('/about', 'frontend\SiteController@about')->name('about');



Auth::routes();




Route::post('set-status','backend\AdminController@setStatus')->name('setStatus');


Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){
    Route::get('dashboard','backend\AdminController@dashboard')->name('dashboard');
    Route::get('contact-us','backend\AdminController@contactus')->name('contactus');
    Route::resources([
        'slider' => 'backend\SliderController',
        'about' => 'backend\AboutController',
        'testimonial' => 'backend\TestimonialsController',

    ]);
});