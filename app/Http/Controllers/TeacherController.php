<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class TeacherController extends Controller
{
	public function courses () {
		$courses = Course::forTeacher();
		return view('teacher.courses.index', compact('courses'));
	}

	public function createCourse () {

	}
}
