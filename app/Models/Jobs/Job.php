<?php

namespace App\Models\Jobs;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use Searchable;

    
    //
    protected $table = 'jobs';

    protected $fillable = ['employer_id','company_id','industry_id','job_title','job_description','job_category_id','job_type','qualification','designation','experience','salary_currency','salary_type','min_salary','required_age','max_salary','is_pay','is_featured','zip','skills','state','city','country','last_date','created_date','nums_of_vacancy','created_at','updated_at'];

  
    public static $job_type = ['1' => 'Part Time','2' => 'Full Time','3' => 'Freelancer','4' => 'Temporary','5' => 'Contract','6'=> 'Internship','7'=> 'Commission','8'=> 'Volunteer','9'=> 'New-Grad','10'=> 'Other'];

    public static $qualification =['1'=>'Secondary(10th Pass)','2'=>'Higher Secondary(12th Pass)','3'=>'Diploma','4'=>'Bachelor' ,'5' => 'Bachelor' ,'6' =>'Doctorate'];

    public static $currancy =['1'=>'$','2'=>'Can$','3'=>'€' ];

    public static $salary_type =['1'=>'Annually','2'=>'Monthly','3'=>'Weekly','4'=>'Daily' ];

    public static $num_of_vacancy = ['1' => '1 hire', '2' => '2 - 4 hires', '3' => '5 - 10 hires','4' => '10+ hires','5' => 'I have an ongoing need to fill this role'];

    public function searchableAs()
    {
        return 'jobs_index';
    }
     public function toSearchableArray()
    {
    $array = $this->only('job_title', 'skills');

    //$related = $this->CompanyDetail->only('company_name');

    // Customize array...

    //return array_merge($array, $related);
    return $array;
    }

    public function CompanyDetail()
    {
     return $this->hasOne('App\Models\Company','id');
    }
    public function EmployeDetail()
    {
     return $this->hasOne('App\Models\Employer\Employer','id');
    }
  
}
