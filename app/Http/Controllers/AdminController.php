<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Unit;
use App\Models\Order;
use App\Models\CourseStudent;
use App\Helpers\Uploader;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourseStatusMail;

class AdminController extends Controller
{
    public function categories () {
        $categories = Category::withCount("courses")->get();
		return view('admin.categories.index', compact('categories'));
    }

    public function createCategory() {
        $category = new Category;
        $title = __("Nueva categoria");
        $textButton = __("Crear categoria");
        $options = ['route' => ['admin.categories.store'], 'files' => true];
        return view('admin.categories.form', compact('title', 'category', 'options', 'textButton'));
    }

    public function storeCategory(Request $request) {
        $file = null;
        if ($request->hasFile("picture")) {
            $file = Uploader::uploadFile("picture", "categories");
        }

        $category = Category::create($this->categoryInput($file));

        alert()->success('','Categoria Agregada Correctamente')->persistent('Cerrar')->autoclose(3500);

        return redirect(route('admin.categories'));
    }

    public function editCategory(Category $category) {
        $title = __("Editar categoria :category", ["category" => $category->title]);
        $textButton = __("Actualizar categoria");
        $options = ['route' => [
            'admin.categories.update', ['category' => $category]], 'files' => true
        ];
        $update = true;
        return view(
            'admin.categories.form',
            compact('title', 'category', 'options', 'textButton', 'update')
        );
    }

    public function updateCategory(Request $request, Category $category) {
        $file = $category->picture;
        if ($request->hasFile('picture')) {
            if ($category->picture) {
                Uploader::removeFile("categories", $category->picture);
            }
            $file = Uploader::uploadFile('picture', 'categories');
        }

        $category->fill($this->categoryInput($file))->save();

        alert()->success('','Datos Actualizados')->persistent('Cerrar')->autoclose(3500);

        return redirect(route('admin.categories'));
    }
    
    protected function categoryInput(string $file = null): array {
        return [
            "name" => request("name"),
            "description" => request("description"),
            "picture" => $file,
        ];
    }
    
    public function pending () {
        $courses = Course::where('status', 2)->get();
		return view('admin.pending.index', compact('courses'));
    }

    public function show(Course $course) {
        $course->load("units");
        $title = __("Detalle del curso :course", ["course" => $course->title]);
        $textButton = __("Habilitar curso");
        return view('admin.pending.show', compact('title', 'course', 'textButton'));
    }

    public function download(Unit $unit) {

        return Storage::download('/units/'. $unit->file);
    }

    public function updateStatus(Request $request, Course $course) {
        
        
        switch($request->submitbutton) {

            case 'Rechazar Curso': 
                
                $details=[
                    'title' => $course->title,
                    'status' => ' ha sido rechazado',
                    'message'=> $request->textarea1
                ];
                //$email = $course->user->email;
                $course->status = 3;
                $course->save();
                //Mail::to($email)->send(new CourseStatusMail($details));
                $courses = Course::where('status', 2)->get();
                return view('admin.pending.index', compact('courses'));

            break;
        
            case 'Aceptar Curso': 
                
                $details=[
                    'title' => $course->title,
                    'status' => ' ha sido aceptado',
                    'message'=> $request->textarea1
                ];
                //$email = $course->user->email;
                $course->status = 1;
                $course->save();
                //Mail::to($email)->send(new CourseStatusMail($details));
                $courses = Course::where('status', 2)->get();
                return view('admin.pending.index', compact('courses'));

            break;
        }
    }

    public function receipt () {
        $orders = Order::where('status', 'pendiente')->get();
		return view('admin.receipt.index', compact('orders'));
    }

    public function processreceipt(Order $order) {
        return view('admin.receipt.process', compact('order'));
    }

    public function updateStatusReceipt(Request $request, Order $order) {

        switch($request->submitbutton) {

            case 'Rechazar Inscripcion': 
                
                $details=[
                    'title' => $order->order_number,
                    'status' => ' ha sido rechazado',
                    'message'=> $request->textarea1
                ];
                $email = $order->user->email;
                $order->status = 'cancelado';
                $order->save();
                Mail::to($email)->send(new CourseStatusMail($details));
                $orders = Order::where('status', 'pendiente')->get();
                return view('admin.pending.index', compact('orders'));

            break;
        
            case 'Aceptar Inscripcion': 
                $items = Order::join('order_items as oi','orders.id','=','oi.order_id')->where("order_id", $order->id)->get();

                $courseStudens = [];
                foreach ($items as $item) {
                    $courseStudens[] = [
                        "course_id" => $item->course_id,
                        "user_id" => $item->user_id,
                        "created_at" => now()
                    ];
                }
                CourseStudent::insert($courseStudens);

                $details=[
                    'title' => $order->order_number,
                    'status' => ' ha sido aceptado',
                    'message'=> $request->textarea1
                ];
                $email = $order->user->email;
                $order->status = 'completado';
                $order->save();
                Mail::to($email)->send(new CourseStatusMail($details));
                $orders = Order::where('status', 'pendiente')->get();
                return view('admin.receipt.index', compact('orders'));

            break;
        }
    }

}
