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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'AdminController@index')->name('users');
Route::get('/add_user', 'AdminController@add_user')->name('add_user');
Route::post('/create_user', 'AdminController@create_user')->name('create_user');
Route::get('/edit_user/{id}', 'AdminController@edit_user')->name('edit_user');
Route::post('/update_user/{id}', 'AdminController@update_user')->name('update_user');
Route::get('/delete_user/{id}', 'AdminController@delete_user')->name('delete_user');
Route::get('/trainings', 'AdminController@trainings')->name('trainings');
Route::get('/add_training', 'AdminController@add_training')->name('add_training');
Route::post('/create_training', 'AdminController@create_training')->name('create_training');
Route::get('/edit_training/{id}', 'AdminController@edit_training')->name('edit_training');
Route::post('/update_training/{id}', 'AdminController@update_training')->name('update_training');
Route::get('/delete_training/{id}', 'AdminController@delete_training')->name('delete_training');
Route::get('/sessions/{id}', 'AdminController@sessions')->name('sessions');

Route::get('/trainings', 'TeacherController@index')->name('trainings');
Route::get('/sessions/{id}', 'TeacherController@sessions')->name('sessions');





