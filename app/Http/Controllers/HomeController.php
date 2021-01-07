<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;


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
        $categorias = Category::all();
        
        return view('home', compact('categorias'));
    }

    public function back()
    {
        echo URL::current();
    }

    public function show($id)
    {
        
        return view('/auth');
    }
    
    public function redirectTo()
    {
        if (session()->has('redirect_to'))
            return session()->pull('redirect_to');
    
        return $this->redirectTo;
    }

}
