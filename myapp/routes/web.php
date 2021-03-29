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
Route::get("/","App\Http\Controllers\PagesController@home");
Route::get("/about","App\Http\Controllers\PagesController@about");



Route::get('/todos', [TodosController::class, 'index']);
Route::get('/todos/create', [TodosController::class, 'create']);
Route::post('/todos', [TodosController::class, 'store']);
Route::get('/todos/{post}/edit', [TodosController::class, 'edit']);
Route::put('/todos/{post}', [TodosController::class, 'update']);
Route::get('click_delete/{post}', [TodosController::class, 'delete']);
//Route::delete('/todos/{post}', [TodosController::class, 'destroy']);