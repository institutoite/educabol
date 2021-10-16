<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Lesson;
use Livewire\Component;

use Livewire\WithFileUploads;

class LessonResources extends Component
{
    public $lesson;

    public function mount(Lesson $lesson){
        $this->lesson = $lesson;
    }

    public function render()
    {
        return view('livewire.instructor.lesson-resources');
    }
}
