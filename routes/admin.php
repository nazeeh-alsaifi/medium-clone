<?php
use Illuminate\Support\Facades\Route;


Route::get('/admin','AdminController@index')->name('admin');

//-----------articles routes -----------
Route::post('/admin/article', 'ArticleController@store')->name('article.store');
Route::get('/admin/article/create', 'ArticleController@create')->name('article.create');



Route::resource('tag','TagController');


