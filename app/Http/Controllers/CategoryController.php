<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show ($id) {
		$courses = Course::withCount(['students'])
		    ->with('category', 'teacher', 'reviews')
			->where('status', Course::PUBLISHED)
			->where('category_id', $id)
		    ->latest()
		    ->paginate(12);
            
            
        return view('courses.index', compact('courses'));
    }
}
