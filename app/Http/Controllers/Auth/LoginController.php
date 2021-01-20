<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        if(auth()->user()->isTeacher() ){
            return Redirect()->intended('/teacher/courses');
        }
            
        return Redirect()->intended('/');
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(Request $request)
    {
        if ($request->has('redirect_to')) {
            session()->put('redirect_to', $request->input('redirect_to'));
        }
    
        return view('auth.login');
    }
    
    public function redirectTo()
    {
        if (session()->has('redirect_to'))
            return session()->pull('redirect_to');
    
        $url = action([HomeController::class, 'index']);
        return $url;
    }
}
