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

//  FOR THE BLOGS
// Route::get('/loginx', 'App\Http\Controllers\BlogController@loginx'); //custome login not used

Route::get('/', 'App\Http\Controllers\BlogController@index')->middleware('auth');
Route::get('/posts', 'App\Http\Controllers\BlogController@details')->middleware('auth');

// FOR POST make user go to profile and add and delete or edit their posts

Route::get('/profile', 'App\Http\Controllers\BlogController@profile')->middleware('auth');
Route::get('/posts/create', 'App\Http\Controllers\BlogController@create')->middleware('auth');
Route::post('/profile', 'App\Http\Controllers\BlogController@store')->middleware('auth');
Route::get('/posts/delete', 'App\Http\Controllers\BlogController@destroy')->middleware('auth');


// AUTH
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
