<?php

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
    return redirect()->route('blog');
});

Auth::routes();

Route::get('/blog', 'Web\PageController@blog')->name('blog');

Route::get('blog/{slug}', 'web\PageController@post')->name('post');
