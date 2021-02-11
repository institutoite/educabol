<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;


class SolicitudeController extends Controller
{
    public function teacher () {
		$isTeacher = auth()->user()->isTeacher();
    	if ( !$isTeacher ) {
    		try {
				\DB::beginTransaction();
				$user = User::find($user->id);
				$user->role = User::TEACHER;
				$user->save();
				$user->assignRole('TEACHER');
			    $success = true;
		    } catch (\Exception $exception) {
    			\DB::rollBack();
    			$success = $exception->getMessage();
		    }

		    if ($success === true) {
    			\DB::commit();
    			auth()->logout();
                auth()->loginUsingId($user->id);
                alert()->success('Felicidades, ya eres instructor en la plataforma')->persistent('Cerrar')->autoclose(3500);
			    return back();
		    }

            alert()->error('Error', 'Algo ha fallado')->persistent('Cerrar')->autoclose(3500);
		    return back();
        }
        alert()->error('Error', 'Usted ya es un profesor')->persistent('Cerrar')->autoclose(3500);
	    return back();
       
    }

}
