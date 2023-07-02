<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controller::class , 'index']);

//Category Routes

Route::get('/categories', [CategoryController::class , 'index'])->name('categories');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

