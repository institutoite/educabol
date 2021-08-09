<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    Route::get('/{course}/learn', [App\Http\Controllers\CourseController::class, 'learn'])->name('learn')->middleware('can_access_to_course');
    Route::get('/{course}/review', [App\Http\Controllers\CourseController::class, 'createReview'])->name('reviews.create');
    Route::post('/{course}/review', [App\Http\Controllers\CourseController::class, 'storeReview'])->name('reviews.store');

    Route::get('/category/{category}', [App\Http\Controllers\CourseController::class, 'byCategory'])->name('category');
});

Route::group(['prefix' => 'teacher', 'as' => 'teacher.','middleware' => ['permission:teacher.courses|teacher.units|teacher.students']], function () {
    Route::get('/courses', [App\Http\Controllers\TeacherController::class, 'courses'])->name('courses');
    Route::get('/courses/create', [App\Http\Controllers\TeacherController::class, 'createCourse'])->name('courses.create');
    Route::post('/courses/store', [App\Http\Controllers\TeacherController::class, 'storeCourse'])->name('courses.store');
    Route::get('/courses/{course}', [App\Http\Controllers\TeacherController::class, 'editCourse'])->name('courses.edit');
    Route::put('/courses/{course}', [App\Http\Controllers\TeacherController::class, 'updateCourse'])->name('courses.update');

    Route::get('/units', [App\Http\Controllers\TeacherController::class, 'units'])->name('units');
    Route::get('/units/create', [App\Http\Controllers\TeacherController::class, 'createUnit'])->name('units.create');
    Route::post('/units/store', [App\Http\Controllers\TeacherController::class, 'storeUnit'])->name('units.store');
    Route::get('/units/{unit}', [App\Http\Controllers\TeacherController::class, 'editUnit'])->name('units.edit');
    Route::put('/units/{unit}', [App\Http\Controllers\TeacherController::class, 'updateUnit'])->name('units.update');
    Route::get('/units/{unit}/destroy', [App\Http\Controllers\TeacherController::class, 'destroyUnit'])->name('units.destroy');


    Route::get('/courses/{course}/students', [App\Http\Controllers\TeacherController::class, 'students'])->name('courses.students');

    Route::get('/profits', [App\Http\Controllers\TeacherController::class, 'profits'])->name('profits');
    
});

Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/courses', [App\Http\Controllers\StudentController::class, 'courses'])->name('courses');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['permission:admin.categories|admin.pending']], function () {
    Route::get('/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('categories');
    
    Route::get('/categories2', [App\Http\Controllers\AdminController::class, 'categories2'])->name('categories2');

    Route::get('/categories/create', [App\Http\Controllers\AdminController::class, 'createCategory'])->name('categories.create');
    Route::post('/categories/store', [App\Http\Controllers\AdminController::class, 'storeCategory'])->name('categories.store');
    Route::get('/categories/{category}', [App\Http\Controllers\AdminController::class, 'editCategory'])->name('categories.edit');
    Route::put('/categories/{category}', [App\Http\Controllers\AdminController::class, 'updateCategory'])->name('categories.update');
    Route::get('/categories/{category}/destroy', [App\Http\Controllers\AdminController::class, 'destroyCategory'])->name('categories.destroy');

    Route::get('/pending', [App\Http\Controllers\AdminController::class, 'pending'])->name('pending');
    Route::get('/courses/{course}', [App\Http\Controllers\AdminController::class, 'show'])->name('pending.show');
    Route::get('/download/{unit}', [App\Http\Controllers\AdminController::class, 'download'])->name('pending.download');
    Route::put('/courses/{course}', [App\Http\Controllers\AdminController::class, 'updateStatus'])->name('course.status');

    Route::get('/receipt', [App\Http\Controllers\AdminController::class, 'receipt'])->name('receipt');
    Route::get('/receipt/{order}', [App\Http\Controllers\AdminController::class, 'processreceipt'])->name('receipt.process');
    Route::put('/receipt/{order}', [App\Http\Controllers\AdminController::class, 'updateStatusReceipt'])->name('receipt.status');
});

Route::group(['prefix' => "solicitude"], function() {
    Route::post('/teacher', [App\Http\Controllers\SolicitudeController::class, 'teacher'])->name('solicitude.teacher');
});


Route::get('/add-to-cart/{course}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');

Route::get('/send-email', [App\Http\Controllers\MailController::class, 'sendEmail'])->name('send-email');

Route::get('/payment', function () {
    return view('cart.payment');
});

Route::resource('orders', App\Http\Controllers\OrderController::class);

