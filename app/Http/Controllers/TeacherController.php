<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Course;

class TeacherController extends Controller
{
	public function courses () {
		$courses = Course::withCount(['students'])->with('category', 'reviews')
			->whereTeacherId(auth()->user()->teacher->id)->paginate(12);
		return view('teachers.courses', compact('courses'));
	}

    public function students () {
		$students = Student::with('user', 'courses.reviews')
			->whereHas('courses', function ($q) {
				$q->where('teacher_id', auth()->user()->teacher->id)->select('id', 'teacher_id', 'name')->withTrashed();
			})->get();

        return view('teachers.index',compact(['students']));
    }
}
