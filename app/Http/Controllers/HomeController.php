<?php

namespace App\Http\Controllers;

use App\City;
use App\Models\Zip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCityStateZip(Request $request){

        if (!empty($request->city)) {
            
           $zip = new Zip;        
            $location_datas = $zip->where('city', 'LIKE', '%' . $request->city . '%')->limit(10)->get();
            
            return response()->json($location_datas);

        }else{
            
            return response()->json('Location is not Found');
        }
    }   
    public function index()
    {
        session()->put('success','Item created successfully.');
        return view('home');
    }
     public function jobSeekerRegistetr()
    {
        return view('web.jobseekers.register');
    }
    public function jobSeekerListing()
    {
        return view('web.jobseekers.listing');
    }
    public function jobSeekerDetail()
    {
        return view('web.jobseekers.detail');
    }
    public function employerRegistetr()
    {
        return view('web.employers.register');
    }
    public function popover()
    {
        return view('web.jobseekers.popover');
    }
    public function seekerview()
    {
        return view('seeker.employer.listing');
    }
    public function skemployer()
    {
        return view('seeker.dashboard.index');
    }
    public function dashboard()
    {
        $type = 'JS_DASHBOARD';
        dd($type);
        return view('seeker.dashboard.index');
    }
    public function jobs()
    {
        
        return view('web.jobs.index');
    }
    public function jobsListing()
    {
        
        return view('web.jobs.lists');
    }
    public function jobDetails()
    {
        
        return view('web.jobs.detail');
    }
    public function companyDetails()
    {
        
        return view('web.company.detail');
    }
    public function candidateProfile()
    {
        
        return view('web.profile.profile_detail');
    }
    public function dataModel()
    {
        
        return view('web.profile.data_model');
    }
    public function postJobs()
    {
        
        return view('web.employers.emp_jobs');
    }
    public function register()
    {
        
        return view('web.employers.emp_register');
    }
    public function plan()
    {
        
        return view('web.employers.pay_plan');
    }

}
