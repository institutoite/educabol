<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class AdminController extends Controller
{
    public function categories () {
        $categories = Category::withCount("courses")->get();
		return view('admin.categories.index', compact('categories'));
    }

    public function createCategory() {
        $title = __("Nueva categoria");
        $textButton = __("Crear categoria");
        $courses = Course::forTeacher();
        $category = new Category;
        $options = ['route' => ['admin.categories.store'], 'files' => true];
        return view('admin.categories.form', compact('title', 'courses', 'category', 'options', 'textButton'));
    }

    public function storeCategory(CourseRequest $request) {
       
    }
    
}
