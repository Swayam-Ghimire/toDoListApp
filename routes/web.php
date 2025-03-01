<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\AuthController;

// Welcome page
Route::get('/', [ToDoController::class, 'index'])->name('test.index');

Route::middleware('auth')->controller(ToDoController::class)->group(function(){
    // Home Page
    Route::get('/test', 'home')->name('test.home');
    
    // Create Page
    Route::get('/test/create', 'create')->name('test.create');
    
    // Show Page
    Route::get('/test/{id}', 'show')->name('test.show');
    
    // Create Tasks
    Route::post('/test/create', 'store')->name('test.store');
    
    // Delete Tasks
    Route::delete('/test/{tasks}', 'destroy')->name('test.destroy');
    
    // Edit Tasks
    Route::get('/test/{id}/{title}', 'edit')->name('test.edit');
    
    // Update Tasks
    Route::put('/test/{id}', 'update')->name('test.update');
    
    // Mark as Completed
    Route::put('/test/{id}/complete', 'complete')->name('test.complete');
});

Route::middleware('guest')->controller(AuthController::class)->group(function(){
    // Register Page
    Route::get('/auth/register', 'authRegister')->name('auth.register');
    
    // Login Page
    Route::get('/auth/login', 'authLogin')->name('auth.login');
    
    
    // Register Submission
    Route::post('/auth/register', 'register')->name('register');
    
    // Login Submission
    Route::post('/auth/login', 'login')->name('login');
});
// Logout
Route::post('/auth/logout', [AuthController::class, 'authLogout'])->name('auth.logout');
