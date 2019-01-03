<?php

namespace App\Http\Controllers\Employer;

use Mail;
use App\Models\zip;
use App\Models\Company;
use App\Models\Industry;
use App\Models\Employer\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersEmployers;

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
    use RegistersEmployers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'employer/employer_register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
        {
            //$this->middleware('auth:employer');
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
            'company_name'  =>  'required|string|max:15',
            'employer_email'    =>   'required|unique:employers,email|email|max:50',   
            'employer_password'    =>   'required|min:6|max:12',
            'company_slug'    =>   'required|string|max:30',   
            'ind_name'    =>   'required',   
            'company_number'    =>   'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',   
            'zip'    =>   'required|numeric',   
            'website'    =>   'required',
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
        $zip = new zip;
        $city_state = $zip->where('zip','=',$data['zip'])->first();
        $industries = new Industry;
        $industry_id = Industry::where('name','=',$data['ind_name'])->first();
       
        if(!empty($industry_id)){
            $ind_id =$industry_id->id;
        }else{
            $ind_id =0;
        }
        /*Create Company */
        $company = Company::create([
          'industry_id' => $ind_id,
          'company_name' => $data['company_name'],
          'company_slug' => $data['company_slug'],          
          'website' => $data['website'],
          'company_phone' =>$data['company_number'],
          'company_zip' => $data['zip'],
          'company_state' => $city_state->state,
          'company_city' => $city_state->city,
        ]);

        $employer = Employer::create([
          'company_id'   => $company->id,         
          'email' => $data['employer_email'],
          'password' => bcrypt($data['employer_password'])
          ]); 

        $data = [
        'name' => $company->name,
        'email'  => $employer->email,
        'token'   =>  str_random(40)     
        ];
        Mail::send('emails.welcome', ["data"=>$data], function($message) use ($data)
            {
                $message->from('kinjaljadhav92@gmail.com', "OPTnation");
                $message->subject("Welcome to site name");
                $message->to($data['email']);
            });

        return $employer;
    }
}
