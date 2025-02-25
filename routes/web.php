<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

// Welcome page
Route::get('/', [ToDoController::class, 'index'])->name('test.index');
// Home Page
Route::get('/test', [ToDoController::class, 'home'])->name('test.home');

// Create Page
Route::get('/test/create', [ToDoController::class, 'create'])->name('test.create');

// Show Page
Route::get('/test/{id}', [ToDoController::class, 'show'])->name('test.show');

// Create Tasks
Route::post('/test/create', [ToDoController::class, 'store'])->name('test.store');

// Delete Tasks
Route::delete('/test/{tasks}', [ToDoController::class, 'destroy'])->name('test.destroy');

// Edit Tasks
Route::get('/test/{id}/{title}', [ToDoController::class, 'edit'])->name('test.edit');

// Update Tasks
Route::put('/test/{id}', [ToDoController::class, 'update'])->name('test.update');

// Mark as Completed
Route::put('/test/{id}/complete', [ToDoController::class, 'complete'])->name('test.complete');