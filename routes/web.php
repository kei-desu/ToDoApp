<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;

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

// home
Route::get('/folder/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

// create
Route::get('/folder/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folder/create', [FolderController::class, 'create']);