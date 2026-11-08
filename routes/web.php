<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PageController;
Route::get('/',[TaskController::class,'today'])->name('home');
Route::get('/tasks',[TaskController::class,'index'])->name('tasks');
Route::get('/profile',[PageController::class,'profile'])->name('profile');
Route::get('/about',[PageController::class,'about'])->name('about');
