<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Unit;
use App\Models\User;
use App\Http\Requests\UnitRequest;
use App\Helpers\Uploader;
use App\Http\Requests\CourseRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
	public function courses () {
        $courses = Course::forTeacher();
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
            $save = $request->file("file")->store("", "google");
            if($save){
                $details = Storage::disk('google')->getMetadata($save);
                $extension = $details["extension"];
                $path = $details["path"];
                $unit = Unit::create([
                    "course_id" => $request["course_id"],
                    "title" => $request["title"],
                    "url" => "https://drive.google.com/file/d/$path/preview",
                    "path" => $path,
                    "file" => $save,
                    "unit_type" => $extension,
                    "unit_time" => $request["unit_time"],
                    "free" => $request["free"],
                    'status' => 1,
                ]);
                alert()->success('','Unidad Agregada Correctamente')->persistent('Cerrar')->autoclose(3500);
            }else{
                alert()->error('Intentalo de nuevo', 'Ocurrio un error');
            }
        }

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
        $response = Storage::disk('google')->delete($unit->path);
        $save = $request->file("file")->store("", "google");
        if($save){
            $details = Storage::disk('google')->getMetadata($save);
            $extension = $details["extension"];
            $path = $details["path"];
            $unit = $unit->fill([
                "course_id" => $request["course_id"],
                "title" => $request["title"],
                "url" => "https://drive.google.com/file/d/$path/preview",
                "path" => $path,
                "file" => $save,
                "unit_type" => $extension,
                "unit_time" => $request["unit_time"],
                "free" => $request["free"],
                'status' => 1,
            ])->save();
            alert()->success('','Unidad Agregada Correctamente')->persistent('Cerrar')->autoclose(3500);
        }else{
            alert()->error('Intentalo de nuevo', 'Ocurrio un error');
        }
        
        return redirect(route('teacher.units'));
    }

    public function destroyUnit(Unit $unit) {
        $response = Storage::disk('google')->delete($unit->path);
        $unit->status = 0;
        $unit->url = 0;
        $unit->path = 0;
        $unit->file = 0;
        $unit->save();
        alert()->error('Satisfactoriamente', 'Area Eliminada');
        return redirect(route('teacher.units'));
    }

    public function students (Course $course) {
		
        $students = User::join('course_students as cc','users.id','=','cc.user_id')->where("course_id", $course->id)->get();

		return view('teacher.courses.students', compact('students'));
    }

}
