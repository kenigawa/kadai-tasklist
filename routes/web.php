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

Route::get('/', 'TasksController@index');


Route::post('tasks', 'TasksController@store')->name('tasks.store');
Route::put('tasks/{id}', 'TasksController@update')->name('tasks.update');
Route::delete('tasks/{id}', 'TasksController@destroy')->name('tasks.destroy');

// index: showの補助ページ
Route::get('tasks', 'TasksController@index')->name('tasks.index');

// create: 新規作成用のフォームページ
Route::get('tasks/create', 'TasksController@create')->name('tasks.create');

// edit: 更新用のフォームページ
Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');

Route::get('tasks/{id}', 'TasksController@show')->name('tasks.show');
