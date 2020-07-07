<?php

use Illuminate\Support\Facades\Route;
use unisharp\laravelfilemanager\Lfm;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();});

Route::get('/home', 'HomeController@index')->name('home');

//-----------articles routes -----------
Route::post('/article', 'ArticleController@store')->name('article.store');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
