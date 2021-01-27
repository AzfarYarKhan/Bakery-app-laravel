<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
| Web Routes
*/


Route::get('/', 'HomeController@index');
Route::get('/cart', 'CartController@index');
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::get('/update-cart', 'CartController@update');

