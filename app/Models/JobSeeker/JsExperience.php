<?php

namespace App\Models\JobSeeker;

use Illuminate\Database\Eloquent\Model;

class JsExperience extends Model
{
    //
     protected $table = 'js_experiences';

      protected $fillable = ['job_seeker_id','statrt_date','end_date','job_title','compnay_name','industry_type','summary','zip','city','State','created_at','updated_at'];
}
