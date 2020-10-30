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

Route::get('/', 'TodolistController@index');
Route::get('/todolist', 'TodolistController@index');
Route::get('/todolist/create', 'TodolistController@create');
Route::post('/todolist', 'TodolistController@store');
Route::get('/todolist/{id}', 'TodolistController@show');
Route::get('/todolist/{id}/edit', 'TodolistController@edit');
Route::put('/todolist/{id}', 'TodolistController@update');
Route::delete('/todolist/{id}', 'TodolistController@destroy');

