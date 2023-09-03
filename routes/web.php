<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ToDoController::class, 'index'])->name("todo.home");

// Create ToDo route->view
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

// Create ToDo route->store
Route::post('/create', [ToDoController::class,'store'])->name("todo.store");

// Delete ToDo route->store
Route::get('/delete/{id}', [ToDoController::class,'destroy'])->name("todo.destroy");

// Edit ToDo route->view
Route::get('/edit/{id}', [ToDoController::class, 'edit'])->name("todo.edit");

// Update ToDo route->store
Route::post('/update', [ToDoController::class, 'update'])->name("todo.update");
