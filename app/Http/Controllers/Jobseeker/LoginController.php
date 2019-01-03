<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use App\Models\Jobseeker\VerifyJobSeeker;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'job-seeker/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $isFromLoginPage = str_contains(url()->previous(), '/' . trans('job-seeker'));
        if(!$isFromLoginPage)
        {
        $this->redirectTo =url()->previous(); 
        } 
        $this->middleware('guest:jobseeker')->except('logout');
    }
    public function showLoginForm()
    {
        return view('web.jobseekers.login');
    }
    protected function guard()
    {
        return Auth::guard('jobseeker');
    }

}

