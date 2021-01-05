<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id){
        
        $course = Course::find($id);
        
        \Cart::session(auth()->id())->add(array(
            'id' => $course->id,
            'name' => $course->name,
            'price' => $course->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $course
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $error = false;    
    
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.checkout', compact('cartItems','error'));
    }

    public function destroy($itemId)
    {

        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }
}
