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

Route::get('/','restaurantController@allRestaurant' );

Route::get('allRestaurant', 'restaurantController@allRestaurant')->name('allRestaurant');
Route::get('restaurants', 'restaurantController@newRestaurant')->name('restaurants');
Route::post('/restaurant-added', 'restaurantController@restaurantAdded');
