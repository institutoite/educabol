<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelController;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('levels', LevelController::class)->names('levels');

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->name('courses.approved');

Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation');

Route::post('courses/{course}/reject', [CourseController::class, 'reject'])->name('courses.reject');