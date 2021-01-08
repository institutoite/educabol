<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Category::all();
        
        return view('home', compact('categorias'));
    }
}
