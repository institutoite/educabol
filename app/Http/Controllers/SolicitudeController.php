<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Teacher;


class SolicitudeController extends Controller
{
    public function teacher () {
        \SweetAlert::message('Robots are working!');
    	return back();
    }

}
