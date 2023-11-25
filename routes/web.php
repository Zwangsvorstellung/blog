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

require __DIR__.'/auth.php';

Route::get('/', 'ArticleController@home')->name('articles');
Route::get('/article/{id}', 'ArticleController@show')->name('showArticle');
Route::get('/create', 'ArticleController@create')->name('createArticle');
Route::post('/article/store', 'ArticleController@store')->name('storeArticle');
Route::get('/article/update/{id}', 'ArticleController@edit')->name('editArticle');
Route::post('/article/update', 'ArticleController@update')->name('updateArticle');
Route::get('/article/destroy/{id}', 'ArticleController@destroy')->name('destroyArticle');

Route::post('/article/comment/add', 'ArticleController@addCommentArticle')->name('addComment');



Route::get('/dashboard', 'DashboardController@home')->middleware(['auth'])->name('dashboard');





