<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/popular', [HomeController::class, 'popular'])->name('popular');
Route::get('/writer', [HomeController::class, 'writer'])->name('writer');

Route::get('/courses/{id}', [CourseController::class, 'course'])->name('course');
Route::get('/course/{id}', [CourseController::class, 'view'])->name('view');
Route::get('/writercourse/{id}', [CourseController::class, 'viewwriter'])->name('viewwriter');