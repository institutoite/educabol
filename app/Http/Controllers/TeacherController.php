<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Course;

class TeacherController extends Controller
{
    public function students () {
		$students = Student::with('user', 'courses.reviews')
			->whereHas('courses', function ($q) {
				$q->where('teacher_id', auth()->user()->teacher->id)->select('id', 'teacher_id', 'name')->withTrashed();
			})->get();

        return view('profile.index',compact(['students']));
    }
}
