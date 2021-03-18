<?php

use App\Http\Controllers\PagesController;

use App\Http\Controllers\TodosController;

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


//tell laravel explicitly where to look for the controller 
Route::get("/","App\Http\Controllers\PagesController@index");

Route::get("/about","App\Http\Controllers\PagesController@about");


Route::get('/todos','App\Http\Controllers\TodosController@index');

Route::get('/create','App\Http\Controllers\TodosController@create');

Route::post('/todos','App\Http\Controllers\TodosController@store'); 

Route::get('/todos/{id}','App\Http\Controllers\TodosController@show');

Route::get('/todos/{id}/edit','App\Http\Controllers\TodosController@edit');

Route::put('/todos/{id}','App\Http\Controllers\TodosController@update');

Route::delete('/todos/{id}','App\Http\Controllers\TodosController@destroy');

