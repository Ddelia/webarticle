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

Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/about-us', 'HomeController@about_us')->name('about-us');

Route::get('/create-article', 'ArticleController@create')->name('create.article');
Route::post('/store-article', 'ArticleController@store')->name('store.article');
Route::get('/show-articles', 'ArticleController@show')->name('show.articles');
Route::get('/edit-article/{id}', 'ArticleController@edit')->name('edit.article');
Route::patch('/edit-article/{id}', 'ArticleController@update')->name('update.article');
Route::delete('/remove-article/{id}', 'ArticleController@remove')->name('remove.article');
