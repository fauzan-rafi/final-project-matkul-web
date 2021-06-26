<?php

use Illuminate\Support\Facades\Route;


// ------------------ for dashboard -------------------------------------
Route::middleware('auth')->group(function () {
      // routes for dashboard 
      Route::get('/dashboard', 'StoreController@dashboard');

      // for insert item
      Route::get('/admin/create', 'StoreController@create');
      Route::post('/admin/store', 'StoreController@store');

      // for edit item
      Route::get('/admin/{store:slug}/edit', 'StoreController@edit');
      Route::patch('/admin/{store:slug}/edit', 'StoreController@update');

      // for delete item
      Route::delete('/admin/{store:slug}/delete', 'StoreController@destroy');
});
// --------------------------------------------------------------------------


// ---------------------For landing page ----------------------------
// routes for views
Route::get('/','StoreController@index')->name('store.index');

// for show detail about product
Route::get('/show/{store:slug}','StoreController@show');

// for show category
Route::get('product/', 'CategoryController@index')->name('store.product');
Route::get('product/{category:slug}', 'CategoryController@show');

// for show tags product
Route::get('tags/{tag:slug}', 'TagController@show');

// ---------------------------------------------------------------------




// ---------------------- just additional--------------------------
// for show contact
Route::view('contact','store.contact');
// for show teams
Route::get('about', 'TeamController@index');
// -----------------------------------------------------------------



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
