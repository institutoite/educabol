<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
	public function index()
    {
        $courses = Course::withCount(['students'])
		    ->with('category', 'teacher', 'reviews')
		    ->where('status', Course::PUBLISHED)
		    ->latest()
		    ->paginate(12);
        
        return view('courses.index', compact('courses'));
	}
	
    public function show (Course $course) {
		$course->load([
			'category' => function ($q) {
				$q->select('id', 'name');
			},
			'goals' => function ($q) {
				$q->select('id', 'course_id', 'goal');
			},
			'level' => function ($q) {
				$q->select('id', 'name');
			},
			'requirements' => function ($q) {
				$q->select('id', 'course_id', 'requirement');
			},
			'reviews.user',
			'teacher'
		])->get();

		$related = $course->relatedCourses();

		return view('courses.detail', compact('course', 'related'));
    }
    
}
