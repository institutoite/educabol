<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;


class SolicitudeController extends Controller
{
    public function teacher () {
        $user = auth()->user();
    	if ( ! $user->teacher) {
    		try {
				\DB::beginTransaction();
				$user = User::find($user->id);
				$user->role_id = Role::TEACHER;
				$user->save();
			    Teacher::create([
			    	'user_id' => $user->id
			    ]);
			    $success = true;
		    } catch (\Exception $exception) {
    			\DB::rollBack();
    			$success = $exception->getMessage();
		    }

		    if ($success === true) {
    			\DB::commit();
    			auth()->logout();
                auth()->loginUsingId($user->id);
                alert()->success('Bienvenido !', 'Oficialmente eres instructor en la plataforma')->persistent('Cerrar')->autoclose(3500);
			    return back();
		    }

            alert()->error('Error', 'Algo ha fallado')->persistent('Cerrar')->autoclose(3500);
		    return back();
        }
        alert()->error('Error', 'Usted ya es un profesor')->persistent('Cerrar')->autoclose(3500);
	    return back();
       
    }

}
