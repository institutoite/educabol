<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Course;

class CourseIndex extends Component
{
    public function render()
    {
        $courses = Course::where('status', 3)->lastest()->paginate(8);

        return view('livewire.course-index',compact('courses'));
    }
}
