<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValenController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\ToDoListController;

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

// Route::get('/', [ValenController::class, 'index']);
Route::resource('/', \App\Http\Controllers\CobaController::class);

Route::get('/', [ToDoListController::class, 'index'])->name('webpro_master');

Route::get('/create', [ToDoListController::class, 'create']);

Route::post('/store', [ToDoListController::class, 'store']);

Route::get('/edit/{id}', [ToDoListController::class, 'edit']);

Route::post('/update', [ToDoListController::class, 'update']);

Route::delete('/delete/{id}', [ToDoListController::class, 'delete']);

Route::resource('grade', \App\Http\Controllers\GradeController::class);

