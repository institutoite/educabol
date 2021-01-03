<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cursos = Course::withCount(['students'])
        ->with('category', 'teacher', 'reviews')
        ->where('status', Course::PUBLISHED)
        ->latest()
        ->paginate(12);

        return view('home.index', compact('cursos'));
    }
}
