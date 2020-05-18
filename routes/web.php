<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('site.index');
});


Route::resource('products', 'ProductsController');
Route::post('/products/{slug}', 'ProductsController@show')->name('products.show');

Route::resource('catalogues', 'CataloguesController');
Route::post('/catalogues/{slug}', 'CataloguesController@show')->name('catalogues.show');

Route::resource('brands', 'BrandsController');
Route::post('/brands/{slug}', 'BrandsController@show')->name('brands.show');

Route::resource('articles', 'ArticlesController');
Route::post('/articles/{slug}', 'ArticlesController@show')->name('articles.show');


Route::resource('site', 'SiteController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
