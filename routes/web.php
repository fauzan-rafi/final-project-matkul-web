<?php

use Illuminate\Support\Facades\Route;


// routes for dashboard 

// for view dashboard
Route::get('/dashboard','StoreController@dashboard');

// for insert item
Route::get('/admin/create','StoreController@create');
Route::post('/admin/store','StoreController@store');

// for edit item
Route::get('/admin/{store:slug}/edit','StoreController@edit');
Route::patch('/admin/{store:slug}/edit','StoreController@update');

// for delete item
Route::delete('/admin/{store:slug}/delete', 'StoreController@destroy');

// routes for views
Route::get('/','StoreController@index');

Route::get('/show/{store:slug}','StoreController@show');

Route::get('about','TeamController@index');

Route::get('product/', 'CategoryController@index');
Route::get('product/{category:slug}', 'CategoryController@show');

Route::view('contact','store.contact');




