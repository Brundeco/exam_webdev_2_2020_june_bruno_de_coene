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

Route::get('/', 'PageController@home')->name('home');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/blog', 'BlogController@getIndex')->name('blog');
Route::get('/blog/{id}', 'BlogController@getShow')->name('blog_detail');

Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('posts', 'PostsController@getIndex')->name('projects');
// Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
