<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Volt::route('/', 'welcome');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::middleware('auth')->group(function () {
    Volt::route('project', 'project.index')->name('project.index');
    Volt::route('project/create', 'project.create')->name('project.create');
    Volt::route('project/{project}', 'project.show')->name('project.show');
    Volt::route('project/{project}/edit', 'project.show')->name('project.edit');
    Volt::route('project/{project}', 'project.show')->name('project.destroy');
});

Route::middleware('auth')->group(function () {
    Volt::route('task', 'task.task')
        ->name('task.index');
});

Route::resource('/projects', ProjectController::class);

require __DIR__ . '/auth.php';


//todo https://www.youtube.com/watch?v=kZOgH3-0Bko

