<?php

namespace App\Models\JobSeeker;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JobSeeker extends Authenticatable
{
    //
    protected $table = 'job_seekers';

    public $timestamps = true;

    protected $fillable = ['f_name','l_name','email','phone_number','password','gender','photo','state','city','dob','wrk_auth','sms_notification','email_notification','email_verification','reg_date','reg_ip','gmail_auth_code','lkd_auth_code','paid','is_active','is_annually','view_count','created_at','updated_at'];

    public function jsSeekerDetail()
    {
     return $this->hasOne(JsAdditionalDetail::class,'job_seeker_id');
    }
    public function jsSeekerWorkExperiances()
    {
     return $this->hasMany('App\Models\JobSeeker\JsExperience');
    }
    public function jsSeekerEducations()
    {
     return $this->hasMany('App\Models\JobSeeker\JsEducation');
    }
    public function jsAchievements()
    {
     return $this->hasMany('App\Models\JobSeeker\JsAchievement');
    }
    public function jsCertificates()
    {
     return $this->hasMany('App\Models\JobSeeker\jsCertificate');
    }
    public function VerifyJobSeeker()
    {
        return $this->hasOne('App\Models\JobSeeker\VerifyJobSeeker','job_seekers_id','id');
    }
    
}


