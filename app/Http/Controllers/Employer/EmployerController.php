<?php

namespace App\Http\Controllers\Employer;

use Auth;
use App\Models\Zip;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\Employer\Employer;
use App\Models\Jobs\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class EmployerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:employer');

    }
    public function index()
    {
        return view('web.employer.emp_jobs');
    }
    public function Register(Request $request)
    { 
        /*show Job Seeker Registration View*/
        return view('web.employer.register');
    	
    }
    public function createCompany(Request $request)
    { 


      $zip = new zip;
      $city_state = $zip->where('zip','=',$request->zip)->first();
        /*Create Company */
        $company = Company::create([
          'industry_id' => $request->ind_id,
          'company_name' => $request->company_name,
          'company_slug' => $request->company_slug,          
          'website' => $request->website,
          'company_phone' => $request->company_number,
          'company_zip' => $request->zip,
          'company_state' => $city_state->state,
          'company_city' => $city_state->city,
        ]);

        $employer = Employer::create([
          'company_id'   => $company->id,         
          'email' => $request->emp_email,
          'password' => $request->emp_password
          ]);  

        $company_id = Crypt::encrypt($company->id);

       return \Redirect::to('employer/employer_register/'.$company_id);   
    }
    public function showEmployer(Request $request)
    { 
      $company_id =Auth::user()->company_id;
      $company_detail = Auth::user();
      
      return view('web.employers.employer_register')->with(['company_id'=>$company_id,'company_detail'=>$company_detail]);
    }
    public function createEmployer(Request $request)
    { 
      

      $request->validate([
        'company_id' => 'required',
        'emp_name' => 'required|regex:/^[a-zA-Z ]+$/u|max:255', 
        'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',
        'emp_zip' => 'required|numeric',
        ]);

      $company_id =Auth::user()->company_id;    
      
        /*Create Employer */
        $employer =Employer::create([
          'company_id'   =>$company_id,
          'name' => $request->emp_name,         
          'phone_number' => $request->phone_number,
          'zip' => $request->emp_zip,   
        ]);
      
        return \Redirect::to('employer/job_register');   
      
      
    }
    public function showJobs(){
      $company_id = Auth::user()->company_id;
      $employer_id = Auth::user()->id;
      $job_categories = JobCategory::all();
        return view('web.employers.jobposts_register')->with(['company_id'=>$company_id,'employer_id'=>$employer_id,'job_categories'=>$job_categories]);
    }
    public function createJobs(Request $request){
     
      $request->validate([
        'company_id' => 'required',
        'employer_id' => 'required',
        'job_titel' => 'required|string|max:50',
       
        'job_category' => 'required|numeric',
        'zip' => 'required|numeric',  
        'min_salary' => 'required|numeric',
        'max_salary' => 'required|numeric',
    ]);
      /*Create Jobs */
      $emp_comp_id  =  Auth::user()->company_id;
      $emp_id       =  Auth::user()->id;
      
        $job =Job::create([
          'company_id'   =>$emp_comp_id,
          'employer_id' => $emp_id,          
          'job_title' => $request->job_titel,
          'job_description' => $request->job_description,
          'job_category_id' => $request->job_category,
          'zip' => $request->salary, 
          'min_salary' => $request->min_salary, 
          'max_salary' => $request->max_salary, 
        ]);

        return\Redirect::to('employer/job_pay_plan');   
    }
    public function showPayPlan(){     
      
        return view('web.employers.pay_plan');
    }
    public function PayPlanStatus(Request $request){

    $employer = Employer::find(Auth::user()->id);
    $employer->is_paid = $request->payment_status;
    $employer->save();
   
        return\Redirect::to('employer/dashboard');   
    
    }

    public function showSeekerProfile(Request $request){

       
      $id =Auth::user()->id;
      $seeker = new JobSeekers;
      $industries = new Industry;
      $seeker_detail = $seeker->with('jsSeekerDetail')->where('id','=',$id)->first();
      
      
      return view('web.profile.profile_detail')->with(['seeker_detail'=>$seeker_detail,'industries'=>$industries->all()]);
    }
    public function editContact(Request $request){

    $id =Auth::user()->id;
    $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();
      $seeker_detail->email = $request->email;
      $seeker_detail->phone_number = $request->phone_number;
      $seeker_detail->save();
      return \Redirect::back();

    }

}
