<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Jobs\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer\Employer;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      
        switch ($guard) {
            case "jobseeker":
                if(Auth::guard($guard)->check()){
                    return redirect()->to('job-seeker/profile');
                }
                break;
            case "employer":
                if(Auth::guard($guard)->check()){ 
                    
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

                    return redirect()->to('employer/employer_register');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }
        return $next($request);
    }
}
