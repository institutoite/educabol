<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');

Auth::routes();

Route::get('categoria/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');




Route::get('/{course}/inscribe', [App\Http\Controllers\CourseController::class, 'inscribe'])->name('courses.inscribe');

Route::get('/subscribed', [App\Http\Controllers\CourseController::class, 'subscribed'])->name('courses.subscribed');

Route::post('/add_review', [App\Http\Controllers\CourseController::class, 'addReview'])->name('courses.add_review');

Route::get('curso/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.detail');


Route::get('/add-to-cart/{course}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');


Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');


Route::get('/payment', function () {
    return view('cart.payment');
});

Route::get('/receipt', function () {
    return view('cart.receipt');
});

Route::post('/teacher', [App\Http\Controllers\SolicitudeController::class, 'teacher'])->name('solicitude.teacher');

Route::get('/courses', [App\Http\Controllers\TeacherController::class, 'courses'])->name('teacher.courses')->middleware('auth');
Route::get('/students', [App\Http\Controllers\TeacherController::class, 'students'])->name('teacher.students')->middleware('auth');

Route::resource('courses', App\Http\Controllers\CourseController::class);


