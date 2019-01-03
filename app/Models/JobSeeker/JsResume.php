<?php

namespace App\Models\Jobseeker;

use Illuminate\Database\Eloquent\Model;

class JsResume extends Model
{
     protected $table = 'js_resumes';

      protected $fillable = ['job_seeker_id','is_uploaded_resume','file_name','resume_name','date','is_default_resume','created_at','updated_at'];
}
