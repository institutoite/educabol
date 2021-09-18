<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\Section;
use Livewire\Component;

class CoursesCurriculum extends Component
{
    public $course, $section;

    protected $rules = [
        'section.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->section = new Section();
    }

    public function render()
    {
        return view('livewire.instructor.courses-curriculum')->layout('layouts.instructor');
    }

    public function edit(section $section){
        $this->section = $section;
    }

    public function update(){

        $this->validate();

        $this->section->save();
        $this->section = new Section();

        $this->course = Course::find($this->course->id);
    }

}
