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
Route::domain('{account}.tsbs.com.br')->group(function () {
    Route::get('/', function ($account) {
        return $account;
    });

});

Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/posts', 'SiteController@posts')->name('site.posts');

Route::get('/post/{slug}', 'SiteController@show')->name('post.site.show');
Route::get('/especialistas/{slug}', 'SiteController@especialistas')->name('especialista.site.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')
        ->group(function () {
    Route::resource('/admin/author','Admin\AuthorController');
    Route::resource('/admin/post','Admin\PostController');
    Route::resource('/admin/category','Admin\CategoryController');
      Route::resource('/admin/specialist','Admin\SpecialistController');

});

//Route::get('/links', 'SiteController@postsLinks' );

