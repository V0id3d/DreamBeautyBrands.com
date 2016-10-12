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
    return view('public.index');
});
Route::get('about', function () {
    return view('public.about');
});

Route::get('/', ['as' => 'Public.Landing', 'uses' => 'PublicSite\PublicSiteController@index']);
Route::get('about', ['as' => 'Public.AboutUs', 'uses' => 'PublicSite\PublicSiteController@about']);
