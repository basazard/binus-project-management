<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('projects')->group(function (){
        Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
        Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/update/{project}', [ProjectController::class, 'update'])->name('projects.update');
        Route::get('/{project}', [ProjectController::class, 'show'])->name('projects.show');
        Route::post('/store', [ProjectController::class, 'store'])->name('projects.store');
    });

    Route::prefix('tasks')->group(function (){
        Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
        Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
        Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
        Route::put('/update/{task}', [TaskController::class, 'update'])->name('tasks.update');
        Route::get('/{task}', [TaskController::class, 'show'])->name('tasks.show');
        Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
    });

    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
});

require __DIR__.'/auth.php';
