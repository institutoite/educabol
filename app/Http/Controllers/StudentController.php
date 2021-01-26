<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function courses() {
        $courses = auth()->user()->purchasedCourses();
        return view('student.courses.index', compact('courses'));
    }
}
