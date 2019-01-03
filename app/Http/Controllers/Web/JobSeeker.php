<?php

namespace App\Http\Controllers\Web;

use Auth;
use Mail;
use Redirect;
use Carbon\Carbon;
use App\Models\zip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\JobSeeker\JsCertificate;
use App\Models\JobSeeker\JsExperience;
use App\Models\JobSeeker\JsEducation;
use App\Models\JobSeeker\JsAchievement;
use App\Models\JobSeeker\VerifyJobSeeker;
use App\Models\JobSeeker\JobSeeker as JobSeekers;
use App\Models\JobSeeker\JsAdditionalDetail as JsAdditionalDetail;
use App\Models\JobSeeker\JsResume as JsResumes;
use Illuminate\Support\Facades\Storage;


class JobSeeker extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth:jobseeker');

    }
    public function index()
    {
        return view('web.profile.profile_detail');
    }
    public function Register(Request $request)
    { 
        /*show Job Seeker Registration View*/
        return view('web.jobseekers.register');
        
    }
    public function Sendverification(Request $request)
    { 
     
       $data = [
        'name' => Auth::user()->f_name,
        'email'  => Auth::user()->email,
        'token'   =>  str_random(40)     
        ];
     
       Mail::send('emails.welcome', ["data"=>$data], function($message) use ($data)
            {
                $message->from('kinjaljadhav92@gmail.com', "OPTnation");
                $message->subject("Welcome to site name");
                $message->to($data['email']);
            });
        return \Redirect::to('job-seeker/profile');
        
    }

    public function createSeeker(Request $request)
    { 
        /*Create Job seeker user*/
        $request->validate([
        'f_name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
        'l_name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
        'email'    =>    'required|email|unique:employers,email',
        'zip'    =>    'required|numeric',
        'phone_number'    =>    'required|numeric',
        'wrk_auth'    =>    'required|numeric',
        ],
        [
            'f_name.required'    => 'First Name is Required.',
            'l_name.required'    =>    'Last Name is Required.',
            'email.required'    =>    'Email is Required.',
            'zip.required'    =>    'Zip code is Required.',
            'wrk_auth.required'    =>    'Work Authorization is Required.',            

        ]);

        $zip = new zip;
        $city_state = $zip->where('zip','=',$request->zip)->first();

       $jobseekers_data = JobSeekers::create([
        'f_name' => $request->f_name,
        'l_name' => $request->l_name,
        'email' => $request->email,
        'state' => $city_state->state,
        'city' => $city_state->city,
        'phone_number' => $request->phone_number,
        'wrk_auth' => $request->wrk_auth
       ]);
       
       
       return \Redirect::to('job-seeker/profile');      
       
        
    }
    public function showSeekerProfile(Request $request){
   
      $id =Auth::user()->id;
      $seeker = new JobSeekers;
      $industries = new Industry;
      $jsexperience = new JsExperience;
      $jseducation = new JsEducation;
      $jsachivement = new JsAchievement;
      $seeker_detail = $seeker->with(['jsSeekerDetail','jsSeekerWorkExperiances','jsSeekerEducations','jsAchievements','jsCertificates'])->where('id','=',$id)->first();
    if ($seeker_detail->email_verification == null ||  $seeker_detail->email_verification == 0) {
      session()->put('error',"Your Email is not verified. Please Verified <a href='_blank'>llkkkkk</a> ");
    }
      
     
      return view('web.jobseekers.profile.profile_dashboard')->with(['seeker_detail'=>$seeker_detail,'industries'=>$industries->all()]);
    }

    /*show Contact Detail*/
    public function ContactDetail()
    {
      $id =Auth::user()->id;

      $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();
     
      return view('web.jobseekers.profile.contact_detail')->with('seeker_detail',$seeker_detail);
    }
    public function showProfileDetail()
    {
     
      $id =Auth::user()->id;
     
      $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();
      if (Auth::user()->email_verification) {
        $message ='Your email id is not verified.';
      }
     
      return view('web.jobseekers.profile.profile_detail')->with(['seeker_detail'=>$seeker_detail,'error'=>$message]);
    }
    public function editProfileDetail(Request $request)
    {

      $id =Auth::user()->id;
      $seeker = new JobSeekers;
      if(!empty($request->file('photo'))){

      $file = $request->file('photo');
      $name = $file->getClientOriginalName();
      $seeker_detail->photo = $name;
      $request->photo->storeAs('photos', $request->photo->getClientOriginalName());
     
      }      
      
      $seeker_detail = $seeker->where('id','=',$id)->first();
      $seeker_detail->f_name = $request->f_name;
      $seeker_detail->l_name = $request->l_name;
      $seeker_detail->save();
                
     
      return \Redirect::back();
    }

    /*edit Contact Detail*/
    public function editContact(Request $request){
      $contact_detail = Validator::make($request->all(), [
      'email' =>  'required|unique:employers,email|',   
      'phone_number'  =>  'required|numeric',
      ]);
              
      
      if ($contact_detail->fails()== true) {         
        flash('Contact Detail not updated. Please Enter proper Detail')->warning();
      return redirect()->back(); //change this to your desired    
      }

      if ($contact_detail->passes()) {
      $id =Auth::user()->id;

      $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();    
      $seeker_detail->phone_number = $request->phone_number;
      $seeker_detail->save();


      if(!empty($request->email)){

      $verifyseeker = new VerifyJobSeeker;
      $verifyseeker_detail = $verifyseeker->where('job_seekers_id','=',$id)->first();
      
      $verifyseeker_detail->new_email = $request->email;
      $verifyseeker_detail->token = str_random(40);
      $verifyseeker_detail->save();

      $data = [
        'name' => $seeker_detail->f_name.$seeker_detail->l_name,
        'email'  => $verifyseeker_detail->new_email,
        'token'   =>  $verifyseeker_detail->token      
        ];

       Mail::send('emails.welcome', ["data"=>$data], function($message) use ($data)
            {
                $message->from('kinjaljadhav92@gmail.com', "OPTnation");
                $message->subject("Welcome to OPTnation");
                $message->to($data['email']);
            });
      flash('Please verified your mail');
      } 
     return redirect()->to('/job-seeker');
        }  
     
    }

    /*show website Detail*/
    public function WebsiteDetail()
    {

      $id =Auth::user()->id;
      $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();
        return view('web.jobseekers.profile.Website_detail')->with('seeker_detail',$seeker_detail);
    }
    /*edit Website detail*/
    public function editWebsite(Request $request){

    $seeker = new JobSeekers;
    $id =Auth::user()->id;
    $seeker_detail = $seeker->with('jsSeekerDetail')->where('id','=',$id)->first();
      if (!empty($seeker_detail->jsSeekerDetail)) {

        $seeker_detail->jsSeekerDetail->fb_link = $request->fb_link;
        $seeker_detail->jsSeekerDetail->gmail_link = $request->gmail_link;
        $seeker_detail->jsSeekerDetail->tweet_link = $request->tweet_link;
        $seeker_detail->jsSeekerDetail->save();

      }else{

        $js_Details= JsAdditionalDetail::create([
          'job_seeker_id' =>  $id,  
          'fb_link' =>  $request->fb_link,
          'gmail_link'  =>  $request->gmail_link,
          'tweet_link'  =>  $request->tweet_link]);
        
      }     
    
      return \Redirect::back();
    }
    public function SummaryDetail()
    {
      $id =Auth::user()->id;      
      $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();
        return view('web.jobseekers.profile.summary_detail')->with('seeker_detail',$seeker_detail);
    } 

    public function editSummary(Request $request){

    $seeker = new JobSeekers;
    $id =Auth::user()->id;
    $seeker_detail = $seeker->with('jsSeekerDetail')->where('id','=',$id)->first();

      if (!empty($seeker_detail->jsSeekerDetail)) {

        $seeker_detail->jsSeekerDetail->summary = $request->summary;
      
        $seeker_detail->jsSeekerDetail->save();

      }else{

        $js_Details= JsAdditionalDetail::create([
          'job_seeker_id' =>  $id,  
          'summary' =>  $request->summary
         ]);

      }     
    return \Redirect::back();
    }
    public function WorkexpNew()
    {
      $id =Auth::user()->id;      
      $industry = new Industry;
      $industries = $industry->all();
     
        return view('web.jobseekers.profile.workexp_detail')->with('industries',$industries);
    }
  

    public function createWorkExperiance(Request $request){
   
    $experience = JsExperience::Create([
                  'job_seeker_id' =>  Auth::user()->id,
                  'statrt_date' =>  $request->statrt_date,
                  'end_date'  =>  $request->end_date,
                  'industry_type' =>  $request->industry_id,
                  'job_title' =>  $request->job_title,
                  'compnay_name'=>  $request->compnay_name,
                  'summary' =>  $request->summary,
                  ]);

    return \Redirect::back();

    }   
    public function showWorkExperiance($exp_id){

      $experiences = new JsExperience;
      $experience = $experiences->where('id','=',$exp_id)->first();
    
      $industry = new Industry;
      $industries = $industry->all();
    return view('web.jobseekers.profile.edit_wrkexp')->with(['industries'=> $industries,'experience'=> $experience]);

    }
    public function editWorkExperiance(Request $request){    

      $experiences = new JsExperience;
      $experience = $experiences->where('id','=',$request->exp_id)->first();
      $experience->statrt_date = $request->statrt_date; 
      $experience->end_date = $request->end_date;
      $experience->job_title = $request->job_title;
      $experience->compnay_name = $request->compnay_name;
      $experience->industry_type = $request->industry_type;
      $experience->summary = $request->summary;
      $experience->save();      
      return \Redirect::back();
    }  
    public function EducationNew()
    {         
     
        return view('web.jobseekers.profile.education_detail');
    }
    public function createEducation(Request $request)
    {
      $education = JsEducation::create([
                  'job_seeker_id'=> Auth::user()->id,
                  'certificate_degree_name' =>  $request->certificate_degree_name,
                  'major' =>  $request->major,
                  'institute_name'  =>  $request->institute_name,
                  'summary' =>  $request->summary,
                  'start_date'  => $request->start_date,
                  'end_date'  =>  $request->end_date
                  ]);
     
        return \Redirect::back();
    }
    public function showEducationDetail($edu_id){
      
      $educations = new JsEducation;
      $education = $educations->where('id','=',$edu_id)->first();
    
      $industry = new Industry;
      $industries = $industry->all();
    return view('web.jobseekers.profile.edit_education')->with(['industries'=> $industries,'education'=> $education]);

    }
    public function editEducation(Request $request){    

      $educations = new JsEducation;
      $education = $educations->where('id','=',$request->edu_id)->first();
      $education->start_date = $request->start_date; 
      $education->end_date = $request->end_date;
      $education->certificate_degree_name = $request->certificate_degree_name;
      $education->major = $request->major;
      $education->institute_name = $request->institute_name;
      $education->summary = $request->summary;
      $education->save();      
      return \Redirect::back();
    }  
    public function Achivement()
    {  

        return view('web.jobseekers.profile.add_achivments');
    }
    public function CreateAchivment(Request $request)
    {  

      $user_id = Auth::user()->id;  
      $achivments = JsAchievement::create([
                    'job_seeker_id' => $user_id,
                    'achievement' =>  $request->achievement]);

        return \Redirect::back();
    }
    public function DetailAchivement($achv_id)
    {  
      $achivements = new JsAchievement;
      $achivement = $achivements->where('id','=',$achv_id)->first();     
     
    return view('web.jobseekers.profile.edit_achivement')->with(['achivement'=> $achivement]);

    }
    
    public function CertificatesNew()
    {  

        return view('web.jobseekers.profile.add_certificates');
    }
    public function createCertificate(Request $request)
    {  

      $user_id = Auth::user()->id;  
      $certificates = JsCertificate::create([
                    'job_seeker_id' => $user_id,
                    'certificate_name' =>  $request->certificate_name,
                    'issu_Authority' =>  $request->aurthority_name,
                    'year' =>  $request->year,
                    'description' =>  $request->description,
                  ]);

        return \Redirect::back();
    }
     public function showCertificate($cet_id){
      
      $certificates = new JsCertificate;
      $certificate = $certificates->where('id','=',$cet_id)->first();    
   
     return view('web.jobseekers.profile.edit_certificates')->with(['certificate'=> $certificate]);

    }
    public function editCertificate(Request $request)
    {  

      $achivements = new JsAchievement;
      $achivement = $achivements->where('id','=',$request->achv_id)->first();
      $achivement->achievement = $request->achievement; 
      $achivement->save();
        return \Redirect::back();
    }
    public function VerifyToken($token, $email)
    { 
        $verifyUser = VerifyJobSeeker::where('token', $token)->with('JobSeeker')->first();
        dd($verifyUser);
        if(!empty($verifyUser->JobSeeker) ){
            $user = $verifyUser->JobSeeker;

            if ($user->email != $verifyUser->new_email) {

                $verifyUser->JobSeeker->email = $email;              
             
            }
              $verifyUser->JobSeeker->email_verification = 1;
              $verifyUser->JobSeeker->save();
            flash("Email Verified SuccessFully .")->success();
        }else{
            flash("Sorry your email cannot be identified.")->warning();
            return redirect('/job-seeker');
        }

        return redirect('/job-seeker');
    }

    
    public function editExpContact(Request $request){
       $id =Auth::user()->id;
      $seeker = new JobSeekers;
      $seeker_detail = $seeker->where('id','=',$id)->first();
    
      return view('web.profile.edit_contact');
    }
    
    
}

