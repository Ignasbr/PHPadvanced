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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('/admin')->middleware(['auth', 'role:Admin'])->as('admin.')->group(function(){

    Route::prefix('/posts')->as('posts.')->group(function(){
       Route::get('/', 'PostsController@index')->name('index');
       Route::get('/show{id}', 'PostsController@show')->name('show');
       Route::get('/edit{id}', 'PostsController@edit')->name('edit');
       Route::post('/edit{id}', 'PostsController@update')->name('update');
       Route::get('/delete{id}', 'PostsController@destroy')->name('delete');
       Route::get('/create', 'PostsController@create')->name('create');
       Route::post('/create', 'PostsController@store')->name('store');
    });

    Route::prefix('/roles')->as('roles.')->group(function(){
       Route::get('/', 'RolesController@index')->name('index');
    });

    Route::prefix('/users')->as('users.')->group(function(){
       Route::get('/', 'UsersController@index')->name('index');
       Route::get('/show{id}', 'UsersController@show')->name('show');
//       Route::get('/edit{id}', 'UsersController@edit')->name('edit');
       Route::post('/edit{id}', 'UsersController@update')->name('update');
    });
    Route::prefix('/comments')->as('comments.')->group(function(){
       Route::get('/', 'CommentsController@index')->name('index');
        Route::get('/show{id}', 'CommentsController@show')->name('show');
        Route::get('/edit{id}', 'CommentsController@edit')->name('edit');
        Route::post('/edit{id}', 'CommentsController@update')->name('update');
        Route::get('/delete{id}', 'CommentsController@destroy')->name('delete');

    });
    Route::prefix('/categories')->as('categories.')->group(function(){
       Route::get('/', 'CategoriesController@index')->name('index');
        Route::get('/show{id}', 'CategoriesController@show')->name('show');
        Route::get('/edit{id}', 'CategoriesController@edit')->name('edit');
        Route::post('/edit{id}', 'CategoriesController@update')->name('update');
        Route::get('/delete{id}', 'CategoriesController@destroy')->name('delete');
        Route::get('/create', 'CategoriesController@create')->name('create');
        Route::post('/create', 'CategoriesController@store')->name('store');


    });


});

Route::get('/messages', 'MessagesController@index')->name('messages');


