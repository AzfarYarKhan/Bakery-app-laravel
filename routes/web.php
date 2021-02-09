<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
| Web Routes
*/


Route::get('/', 'HomeController@index');
Route::get('/cart', 'CartController@index');
Route::get('/login', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@create');
Route::get('/addto-cart/{id}', 'CartController@additem');


Auth::routes();

