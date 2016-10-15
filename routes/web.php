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

Route::get('/', ['as' => 'Public.Landing', 'uses' => 'PublicSite\PublicSiteController@index']);
Route::get('about', ['as' => 'Public.AboutUs', 'uses' => 'PublicSite\PublicSiteController@about']);
Route::get('contact', ['as' => 'Public.ContactUs', 'uses' => 'PublicSite\PublicSiteController@contact']);
Route::post('contact', ['as' => 'Public.SendMessage', 'uses' => 'PublicSite\PublicSiteController@sendMail']);
Route::group(['prefix' => 'product'], function(){
    Route::get('shampoo', ['as' => 'Product.Shampoo', 'uses' => 'PublicSite\ProductController@shampoo']);
    Route::get('conditioner', ['as' => 'Product.Conditioner', 'uses' => 'PublicSite\ProductController@conditioner']);
    Route::get('masks', ['as' => 'Product.Masks', 'uses' => 'PublicSite\ProductController@masks']);
    Route::get('styling', ['as' => 'Product.Styling', 'uses' => 'PublicSite\ProductController@styling']);
    Route::get('finishing', ['as' => 'Product.Finishing', 'uses' => 'PublicSite\ProductController@finishing']);
    Route::get('tools', ['as' => 'Product.Tools', 'uses' => 'PublicSite\ProductController@tools']);
});