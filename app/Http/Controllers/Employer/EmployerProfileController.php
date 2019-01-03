<?php

namespace App\Http\Controllers\Employer;

use Auth;
use Carbon\Carbon;
use App\Models\zip;
use App\Models\Skill;
use App\Models\Company;
use App\Models\Jobs\Job;
use App\Models\Experiance;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Models\Employer\Employer;
use App\Http\Controllers\Controller;

class EmployerProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:employer');
    }
    public function showProfile(){
    	return view('employer.dashboard.index');

    }
    public function NewEmployer(){
        return view('employer.employer.add_employer');

    }
    public function CreateEmployer(Request $request){
        
        $request->validate([
            'emp_name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',       
            'emp_email' => 'required|email|unique:employers,email',
            'emp_password' => 'required',
            'phone_number' => 'required|regex:/[0-9]{10}/',
            'emp_zip' => 'required|numeric',
        ]);

      $comp_id = 2;

        $employer =Employer::create([
          'company_id'   =>$comp_id,
          'name' => $request->emp_name,
          'email' => $request->emp_email,
          'password' => $request->emp_password,
          'phone_number' => $request->phone_number,
          'zip' => $request->emp_zip, 
        ]); 

    	return view('employer.employer.listing');

    }
    public function empLists(Request $request){
    	return view('employer.employer.listing');

    }
    public function NewJob(Request $request){
 
      $experianc = new Experiance;
      $experiances = $experianc->all(); 

      $jobcategory = new JobCategory;
      $jobcategories = JobCategory::orderBy('id')->get();     
       $skills = Skill::orderBy('id')->get();


        return view('employer.employer.add_job')->with(['experiances' => $experiances, 'jobcategories'=> $jobcategories,'skills'=>$skills]);

    }
    public function getSkills(Request $request){
     
       $skills = Skill::where('skill_name', 'like', '%' . $request->get('skill') . '%' )->get()->pluck('skill_name', 'id');
       $data =$skills->map(function ($item, $key) {
                return  [
                  'id'  => $key,
                  'name' => $item];
                })->values();
       $skill_name =$data->filter()->take(10);
       
        return response()->json([         
          $skill_name
        ]);
    }
    public function CreateNewJob(Request $request){
  
      $request->validate([
        'job_title' => 'required|regex:/^[a-zA-Z ]+$/u|max:100',
        'job_category_id' => 'required|numeric|between:1,35',
        'job_description'    =>    'required|min:3|max:5000',
        'job_designation'    =>    'required|regex:/^[a-zA-Z ]+$/u|max:100',
        'experiance'    =>    'required|numeric|between:0.6,30',
        'num_of_vacancy'    =>    'required|integer|not_in:0',
        'job_type'    =>    'required|numeric',
        'job_qualification'    =>    'required|numeric',
        'last_date'    =>    'date',
        'skills'    =>    'required',
        'yesno'    =>    'required|in:1,0',
        'min_amount'  =>  'required|numeric|between:1,10000000',
        'max_amount'  =>  'required|numeric|between:1,10000000',
        'salary_currency'=> 'required|numeric',
        'salary_type'=> 'required|numeric',
        'zip'   =>  'required|numeric',
        'required_age'  =>  'required'
        ],
        [
         
        ]);
      $zip = new zip;
      $city_state = $zip->where('zip','=',$request->zip)->first();
      
       $job = Job::Create([
        'employer_id' =>  Auth::user()->id,
        'company_id'  =>  Auth::user()->company_id,
        'industry_id' =>  1, 
        'job_title' => $request->job_title,
        'job_category_id' =>  $request->job_category_id,
        'job_type' =>  $request->job_type,
        'job_description' => strip_tags( $request->job_description),
        'skills'    =>json_encode($request->skills),
        'qualification'   =>  $request->job_qualification,
        'experience'    =>  $request->experiance,
        'salary_currency'    =>  $request->salary_currency,
        'min_salary'  =>  $request->min_amount,
        'max_salary'  =>  $request->max_amount,
        'salary_type' =>  $request->salary_type,
        'designation' =>  $request->job_designation,
        'nums_of_vacancy' => $request->num_of_vacancy,
        'required_age'  =>  $request->required_age,
        'is_pay'  =>  $request->yesno,
        'zip' =>  $request->zip,
        'state' => $city_state->state,  
        'city'  =>  $city_state->city,
        'country'  =>  null,
        'created_date'  =>  Carbon::now(),
        'last_date' => $request->last_date,
       ]);

       flash('Job Created Successfully')->success();

      return redirect('employer/job_lists');
    }
    public function jobLists(Request $request){
      
      $job = new Job;
      $jobs = $job->where('employer_id',Auth::user()->id)->get();
     

      return view('employer.employer.job_listing')->with(['jobs'=>$jobs]);
    }
    public function JobShow($id)
    {
      $experianc = new Experiance;
      $experiances = $experianc->all(); 

      $jobcategory = new JobCategory;
      $jobcategories = JobCategory::orderBy('id')->get();     
      $skills = Skill::orderBy('id')->get();
      $job = new Job;
      $job_detail = Job::where('id','=',$id)->first();
        return view('employer.employer.edit_job')->with(['experiances' => $experiances, 'jobcategories'=> $jobcategories,'skills'=>$skills,'job_detail'=>$job_detail]);
    }
    public function JobEdit(Request $request)
    {
      $job_detail = Job::where('id','=',$request->job_id)->first();
       $zip = new zip;
      $city_state = $zip->where('zip','=',$request->zip)->first();
      
      $job = Job::Create([       
        'job_title' => $request->job_title,
        'job_category_id' =>  $request->job_category_id,
        'job_type' =>  $request->job_type,
        'job_description' => strip_tags( $request->job_description),
        'qualification'   =>  $request->job_qualification,
        'experience'    =>  $request->experiance,
        'salary_currency'    =>  $request->salary_currency,
        'min_salary'  =>  $request->min_amount,
        'max_salary'  =>  $request->max_amount,
        'salary_type' =>  $request->salary_type,
        'designation' =>  $request->job_designation,
        'nums_of_vacancy' => $request->num_of_vacancy,
        'required_age'  =>  $request->required_age,
        'is_pay'  =>  $request->yesno,
        'zip' =>  $request->zip,
        'state' => $city_state->state,
        'city'  =>  $city_state->city,
        'country'  =>  null,
        'created_date'  =>  Carbon::now(),
        'last_date' => $request->last_date,
       ]);
      flash('Job Created Successfully')->success();
         return \Redirect::to('employer/job_lists');
    }
    public function ChangeStatus(Request $request){
    
      $job_detail = Job::find($request->job_id);
      switch ($request->job_status) {
        case '1':
          $job_detail->job_status = 1;
          flash('Job Opne Successfully.')->success();  
          break;
        case '2':
        flash('Job Paused Successfully.')->warning();  
          $job_detail->job_status = 2;
          break;
        case '0':
          $job_detail->job_status = 0;
          flash('Job Deleted Successfully.')->error();  
          break;
        
        default:
           $job_detail->job_status = 1;
          break;
      }
      $job_detail->save();

      return \Redirect::to('employer/job_lists');
      
    }
    
}
