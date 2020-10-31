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
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'TodolistController@index');
Route::get('/todolist', 'TodolistController@index');
Route::get('/todolist/create', 'TodolistController@create');
Route::post('/todolist', 'TodolistController@store');
Route::get('/todolist/{id}', 'TodolistController@show');
Route::get('/todolist/{id}/edit', 'TodolistController@edit');
Route::put('/todolist/{id}', 'TodolistController@update');
Route::delete('/todolist/{id}', 'TodolistController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
