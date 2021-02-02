<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Unit;
use App\Http\Requests\UnitRequest;
use App\Helpers\Uploader;
use App\Http\Requests\CourseRequest;
use DB;

class TeacherController extends Controller
{
	public function courses () {
        $courses = Course::forTeacher()->sortByDesc('id');
		return view('teacher.courses.index', compact('courses'));
    }
    
    public function createCourse() {
        $course = new Course;
        $title = __("Crear un nuevo curso");
        $textButton = __("Dar de alta el curso");
        $options = ['route' => ['teacher.courses.store'], 'files' => true];
        return view('teacher.courses.form', compact('title', 'course', 'options', 'textButton'));
    }

    public function storeCourse(CourseRequest $request) {
        try {
            DB::beginTransaction();
            $file = null;
            if ($request->hasFile('picture')) {
                $file = Uploader::uploadFile('picture', 'courses');
            }

            $course = Course::create($this->courseInput($file));
            $course->categories()->sync(request("categories"));

            DB::commit();
            session()->flash("message", ["success", __("Curso creado satisfactoriamente")]);
            return redirect(route('teacher.courses.edit', ['course' => $course]));
        } catch (\Throwable $exception) {
            session()->flash("message", ["danger", $exception->getMessage()]);
            return back();
        }
    }

	public function editCourse(Course $course) {
        $course->load("units");
        $title = __("Editar el curso :course", ["course" => $course->title]);
        $textButton = __("Actualizar curso");
        $options = ['route' => ['teacher.courses.update', ["course" => $course]], 'files' => true];
        $update = true;
        return view('teacher.courses.form', compact('title', 'course', 'options', 'textButton', 'update'));
    }

    public function updateCourse(CourseRequest $request, Course $course) {
        try {
            DB::beginTransaction();

            $file = $course->picture;
            if ($request->hasFile('picture')) {
                if ($course->picture) {
                    Uploader::removeFile("courses", $course->picture);
                }
                $file = Uploader::uploadFile('picture', 'courses');
            }
            $course->fill($this->courseInput($file, $course->featured))->save();
            $course->categories()->sync(request("categories"));
            $this->updateOrderedUnits();

            DB::commit();
            session()->flash("message", ["success", __("Curso actualizado satisfactoriamente")]);
            return back();
        } catch (\Throwable $exception) {
            DB::rollBack();
            dd($exception->getMessage());
            session()->flash("message", ["danger", $exception->getMessage()]);
            return back();
        }
    }

    protected function courseInput(string $file = null, bool $featured = false): array {
        return [
            "title" => request("title"),
            "description" => request("description"),
            "price" => request("price"),
            "picture" => $file,
            "featured" => $featured
        ];
    }

    protected function updateOrderedUnits() {
        if (request("orderedUnits")) {
            $data = json_decode(request("orderedUnits"));
            foreach($data as $unit) {
                Unit::whereId($unit->id)->update(["order" => $unit->order]);
            }
        }
    }

	public function units() {
        $units = Unit::forTeacher()->where('status',1);
        return view('teacher.units.index', compact('units'));
	}
	
	public function createUnit() {
        $title = __("Nueva Unidad");
        $textButton = __("Crear unidad");
        $courses = Course::forTeacher();
        $unit = new Unit;
        $options = ['route' => ['teacher.units.store'], 'files' => true];
        return view('teacher.units.form', compact('title', 'courses', 'unit', 'options', 'textButton'));
	}
	
	public function storeUnit(UnitRequest $request) {
        $file = null;
        if ($request->hasFile("file")) {
            $file = Uploader::uploadFile("file", "units");
        }

        $unit = Unit::create($this->unitInput($file));

        alert()->success('','Unidad Agregada Correctamente')->persistent('Cerrar')->autoclose(3500);

        return redirect(route('teacher.units'));
    }

    public function editUnit(Unit $unit) {
        $title = __("Editar unidad :unit", ["unit" => $unit->title]);
        $textButton = __("Actualizar unidad");
        $courses = Course::forTeacher();
        $options = ['route' => [
            'teacher.units.update', ['unit' => $unit]], 'files' => true
        ];
        $update = true;
        return view(
            'teacher.units.form',
            compact('title', 'courses', 'unit', 'options', 'textButton', 'update')
        );
    }

    public function updateUnit(UnitRequest $request, Unit $unit) {
        $file = $unit->file;
        if ($request->hasFile('file')) {
            if ($unit->file) {
                Uploader::removeFile("units", $unit->file);
            }
            $file = Uploader::uploadFile('file', 'units');
        }

        $unit->fill($this->unitInput($file))->save();

        alert()->success('','Datos Actualizados')->persistent('Cerrar')->autoclose(3500);

        return redirect(route('teacher.units'));
    }

    public function destroyUnit(Unit $unit) {
        $unit->status = 0;
        $unit->save();
        alert()->error('Satisfactoriamente', 'Area Eliminada');
        return redirect(route('teacher.units'));
    }

    protected function unitInput(string $file = null): array {
        return [
            "course_id" => request("course_id"),
            "title" => request("title"),
            "content" => request("content"),
            "file" => $file,
            "unit_type" => request("unit_type"),
            "unit_time" => request("unit_time"),
            "free" => request("free"),
            'status' => 1,
        ];
    }

    public function profits() {
        return view('teacher.profits.index');
    }

}
