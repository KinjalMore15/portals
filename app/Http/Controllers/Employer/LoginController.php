<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesEmployers;
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

    use AuthenticatesEmployers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/employer/dashboard';
    protected function redirectTo()
    {  
             $user = Auth::guard($guard)->user();
                  
                    switch ($user) {
                    case (empty($user->name) || empty($user->phone_number)):
                        return redirect()->route('employer.employer_register');
                    break;
                    case ( empty($user->Jobs->first()) ):
                        return redirect()->route('employer.job_register');
                    break;
                    case ( ($user->paid === 0) ):
                        return redirect()->route('employer.job_register');
                    break;
                    default:
                        return redirect()->route('employer.dashboard');
                    break;
                    }      
   
       //return route('employer.dashboard');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {

         $this->middleware('guest:employer')->except('logout');
    }
    public function showLoginForm()
    {
        return view('web.employers.login');
    }
    protected function guard()
    {
        return Auth::guard('employer');
    }
}
