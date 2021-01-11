<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show ($id) {
		
		$category = Category::find($id);

		$courses = Course::withCount(['students'])
		    ->with('category', 'teacher', 'reviews')
			->where('status', Course::PUBLISHED)
			->where('category_id', $id)
		    ->latest()
		    ->paginate(12);
            
        return view('category.index', compact(['category','courses']));
    }
}
