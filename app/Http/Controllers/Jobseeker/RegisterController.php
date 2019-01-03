<?php

namespace App\Http\Controllers\Jobseeker;

use Mail;
use Carbon\Carbon;
use App\Mail\VerifySeeker;
use App\Models\Jobseeker\JsResume;
use App\Models\Jobseeker\Jobseeker;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Jobseeker\VerifyJobSeeker;
use Illuminate\Support\Facades\Validator;
use App\Models\Jobseeker\JsAdditionalDetail;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
   

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/job-seeker/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:jobseeker');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
        'f_name' => 'required|string|max:255',
        'l_name' => 'required|string|max:255',
        'email' =>  'required|unique:jobseekers,email',
        'confirm_password'  =>  'required',
        'zip'   =>  'required|numeric',
        'phone_number'  =>  'required',
        'wrk_auth'  =>  'required',
        ],
        [
            'f_name.required'   => 'First Name is Required.',
            'l_name.required'   =>  'Last Name is Required.',
            'email.required'    =>  'Email is Required.',
            'zip.required'  =>  'Zip code is Required.',
            'wrk_auth.required' =>  'Work Authorization is Required.',          

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         # code...
        if (!empty($data['file_name'])) {
        $uniqueFileName = uniqid() . $data['file_name']->getClientOriginalName() . '.' . $data['file_name']->getClientOriginalExtension();
        $data['file_name']->move(base_path() . '/public/pdf/', $uniqueFileName );     

        $js_resume = JsResume::create([
            'job_seeker_id' => 1012,
            'is_uploaded_resume' => 1,
            'file_name' => $data['file_name'],
            'resume_name' =>  $uniqueFileName,
            'date' => Carbon::now(),
            'is_default_resume' => 1,
        ]);
       

       }

        $seeker = Jobseeker::create([
        'f_name' => $data['f_name'],
        'l_name' => $data['l_name'],
        'email' => strtolower($data['email']),
        'password'  =>bcrypt( $data['confirm_password']),
        'phone_number' => $data['phone_number'],
        'wrk_auth' => $data['wrk_auth']
       ]); 

        $seeker_detail = JsAdditionalDetail::create([
        'job_seeker_id' => $seeker->id,
        ]);
        $verifyjobseeker = VerifyJobSeeker::create([
            'job_seeker_id' => $seeker->id,
            'new_email' => $seeker->email,
            'token' => str_random(40)
        ]);           
        
        $data = [
        'name' => $seeker->f_name.$seeker->l_name,
        'email'  => $seeker->email,
        'token'   =>  $verifyjobseeker->token      
        ];
        
         Mail::send('emails.welcome', ["data"=>$data], function($message) use ($data)
            {
                $message->from('kinjaljadhav92@gmail.com', "OPTnation");
                $message->subject("Welcome to site name");
                $message->to($data['email']);
            });

        return $seeker;
    }

  
}
