<?php
use Illuminate\Support\Facades\Route;


Route::get('/admin','AdminController@index')->name('admin');

//-----------articles routes -----------
Route::post('/admin/article', 'ArticleController@store')->name('article.store');
Route::get('/admin/article/create', 'ArticleController@create')->name('article.create');
Route::get('/admin/article/{article_id}', 'ArticleController@delete')->name('article.delete');
Route::get('/admin/article/{article_id}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('admin/article/article_num={article_id}', 'ArticleController@update')->name('article.update');



Route::resource('tag','TagController',['except' => ['create']]);


