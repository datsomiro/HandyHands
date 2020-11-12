<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('welcome');


// // });
// Route::get('/home', function () {
//     dd(\Illuminate\Support\Facades\Auth::user());
// });

Route::get('/home', 'HomeController@index');
Route::get('/post', 'HomeController@ReactComponent')->name('single-post')->where('path','.*');

Route::post('/password-reset' , 'UserController@update');
Route::post('/password-update' , 'UserController@update');

//Route::post()

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');


Route::post('/users', 'UserController@store');
Route::get('/users/{id}', 'UserController@show');

Route::post('/register', 'Auth\RegisterController@store')->middleware(['guest']);










