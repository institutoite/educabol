<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use DB;

class CourseController extends Controller
{
	public function index() {
        $courses = Course::filtered();
        return view('learning.courses.index', compact('courses'));
    }

    public function search() {
        session()->remove('search[courses]');
        if (request('search')) {
            session()->put('search[courses]', request('search'));
            session()->save();
        }
        return redirect(route('courses.index'));
    }

    public function show(Course $course) {
        $course->load("units", "students", "reviews.author");
        return view('learning.courses.show', compact('course'));
    }

    public function learn(Course $course) {
        $course->load("units");
        return view('learning.courses.learn', compact('course'));
    }

    public function createReview(Course $course) {
        return view("learning.courses.reviews.form", compact("course"));
    }

    public function storeReview(Course $course) {
        $reviewed = $course->reviews->contains('user_id', auth()->id());
        if ($reviewed) {
            return redirect(route("courses.learn", ["course" => $course]))
                ->with("message", ["danger", __("No puedes valorar este curso, ya lo has hecho antes")]);
        }

        $this->validate(request(), [
            "review" => "required|string|min:5",
            "stars" => "required"
        ]);

        $review = Review::create([
            "user_id" => auth()->id(),
            "course_id" => $course->id,
            "stars" => (int) request("stars"),
            "review" => request("review"),
            "created_at" => now()
        ]);

        alert()->success('','Muchas gracias por valorar el curso')->persistent('Cerrar')->autoclose(3000);;

        return redirect(route("courses.learn", ["course" => $course]));
    }

    public function byCategory(Category $category) {
        //$courses = Course::join('category_course as cc','courses.id','=','cc.course_id')->where("status", Course::PUBLISHED)->where("category_id", $category->id)->paginate();

        $courses = Course::filtered($category);

        return view('learning.courses.by_category', compact('courses', 'category'));
    }

}
