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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
    Route::get('/', [App\Http\Controllers\CourseController::class, 'index'])->name('index');
    Route::post('/search', [App\Http\Controllers\CourseController::class, 'search'])->name('search');
    Route::get('/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function () {
    Route::get('/courses', [App\Http\Controllers\TeacherController::class, 'courses'])->name('courses');
    Route::get('/courses/create', [App\Http\Controllers\TeacherController::class, 'createCourse'])->name('courses.create');
    Route::get('/courses/{course}', [App\Http\Controllers\TeacherController::class, 'editCourse'])->name('courses.edit');
    Route::put('/courses/{course}', [App\Http\Controllers\TeacherController::class, 'updateCourse'])->name('courses.update');

    Route::get('/units', [App\Http\Controllers\TeacherController::class, 'units'])->name('units');
    Route::get('/units/create', [App\Http\Controllers\TeacherController::class, 'createUnit'])->name('units.create');
    Route::post('/units/store', [App\Http\Controllers\TeacherController::class, 'storeUnit'])->name('units.store');
    Route::get('/units/{unit}', [App\Http\Controllers\TeacherController::class, 'editUnit'])->name('units.edit');
    Route::put('/units/{unit}', [App\Http\Controllers\TeacherController::class, 'updateUnit'])->name('units.update');
    Route::get('/units/{unit}/destroy', [App\Http\Controllers\TeacherController::class, 'destroyUnit'])->name('units.destroy');
    
});

Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/courses', [App\Http\Controllers\StudentController::class, 'courses'])->name('courses');
});


Route::get('/add-to-cart/{course}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');


/*Route::get('categoria/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

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

Route::get('/dashmin', function () {
    return view('layouts.dashmin');
});

Route::get('/courses', [App\Http\Controllers\TeacherController::class, 'courses'])->name('teacher.courses')->middleware('auth');
Route::get('/students', [App\Http\Controllers\TeacherController::class, 'students'])->name('teacher.students')->middleware('auth');



Route::resource('course', App\Http\Controllers\CourseController::class);*/