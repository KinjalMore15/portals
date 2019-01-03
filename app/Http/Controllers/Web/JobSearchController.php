<?php

namespace App\Http\Controllers\Web;

use Redirect;
use Auth;
use App\Models\Jobs\Job;
use App\Models\Jobs\ApplyJobs;
use App\Models\Jobs\SaveJobs;
use App\Models\JobSeeker\JobSeeker as JobSeekers;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSearchController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth:jobseeker',['only'=>['seekerJobApply']]);

    }
    //show all jobs
    public function jobsListing() 
    {
      
      $job = new Job;
      $jobs = job::paginate(5);
      
      return view('web.jobs.lists')->with(['jobs'=>$jobs]);       
        
    }
    public function SaveJobs($job_id){
    
      $save_jobs = new SaveJobs;
      $save_jobs->job_seeker_id = auth('jobseeker')->id();
      $save_jobs->job_id = $job_id;
      $save_jobs->save();
    }
    public function ViewSaveJobs(){ 

      $save_job = new SaveJobs;
      $save_jobs = $save_job->with('Job')->where('job_seeker_id','=',auth('jobseeker')->id())->paginate(5);
   
      return view('web.jobs.save_jobs')->with(['save_jobs'=>$save_jobs]);       
    }
    public function jobs($jobs)
    {

      return $this->joblocationsearch($jobs,$location = null);        
    }
    public function location($location)
    {     
      return $this->joblocationsearch($jobs = null,$location);        
    }

    
    public function joblocationsearch($jobs = '',$location = ''){
      if(empty($location)){
        $jobs = job::search($jobs)->paginate(5)
                  ->withPath(($jobs.'-jobs'));
                
      return view('web.jobs.lists')->with(['jobs'=>$jobs]);
      }
      if (empty($jobs)) {

         $jobs = job::search($location)->paginate(5)
                  ->withPath(('-jobs'.$location));
        return view('web.jobs.lists')->with(['jobs'=>$jobs]);

      }
      if (!empty($location) && !empty($jobs)) {
        return ($jobs ." ". $location);
      }
    }
    public function JobSearch(Request $request){
      
      if (!empty($request->search)) {
      
      return redirect(str_slug($request->search).'-jobs')->with( ['jobs' => $request->search] );
      }
      if (!empty($request->location)) {
      return redirect('jobs-in-'.str_slug($request->location))->with( ['location' => $request->location] );
      }

    }

    // public function JobSearch($search){

    //   dd($equest->search);

    //   if (!empty($request->search)) {

    //       $jobs = job::search($request->search)->paginate(2);
      
    //   return view('web.jobs.lists')->with(['jobs'=>$jobs]);
    //   }elseif ($request->query) {
    //     $jobs = job::search($request->query)->paginate(2);
      
    //   return view('web.jobs.lists')->with(['jobs'=>$jobs]);
    //   }else{

    //       $jobs = job::paginate(5);
    //       return view('web.jobs.lists')->with(['jobs'=>$jobs]);
    //   }

    // }
    public function jobsDetail($job_id){ 
         
      $job_detail = Job::with('CompanyDetail','EmployeDetail')->get()->find($job_id);
      $job_seeker_id = auth('jobseeker')->user();
      if (!empty($job_seeker_id)) {
        $apply_jobs = new ApplyJobs; 
        $appled = $apply_jobs->where('job_id','=',$job_id)->where('seeker_id','=',$job_seeker_id->id)->first();
      
        if (!empty($appled->id)) {
         $is_appled = true;
        }else{
            $is_appled = false;
        }
      }else{
        $is_appled = false;
      }
        
      return view('web.jobs.detail')->with(['job_detail'=>$job_detail,'job_type' => Job::$job_type,'is_appled'=> $is_appled]);        

    }
    public function jobsDetailLogin(){ 

      return view('web.jobs.apply_popup');
    }
    public function applyJobs($job_id){ 

      return view('web.jobs.apply_jobs')->with(['job_id'=>$job_id]);
    }
    public function seekerJobApply(Request $request){ 
    
      $applyjobs = new ApplyJobs;
      $applyjobs->seeker_id = Auth::id();
      $applyjobs->job_id = $request->job_id;
      $applyjobs->cover_later = $request->coverletter;
      $applyjobs->ip_address = file_get_contents('https://api.ipify.org');
      $applyjobs->dated = \Carbon::now()->format("Y-m-d h:i:s");
      $applyjobs->is_active = 1;
      $applyjobs->save();

   
       return view('web.jobs.save_jobs')->with(['save_jobs'=>$save_jobs]);       
    }

    public function ViewseekerJobApply(){

      $job_applys = ApplyJobs::with('Job')->where('seeker_id','=',auth('jobseeker')->id())->paginate(5);

   
       return view('web.jobs.applyed_jobs')->with(['job_applys'=>$job_applys]);       
    }

    public function CompanyDetail($company_id){  

      $company_detail = Company::find($company_id);   

      return view('web.company.detail')->with(['company_detail'=>$company_detail,'owner_type' => Company::$owner_type  ]);        

    }
}
