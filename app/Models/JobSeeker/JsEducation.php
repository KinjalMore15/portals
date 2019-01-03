<?php

namespace App\Models\JobSeeker;

use Illuminate\Database\Eloquent\Model;

class JsEducation extends Model
{
      protected $table = 'js_educations';

      protected $fillable = ['job_seeker_id','certificate_degree_name','major','institute_name','state','city','start_date','end_date','gaurd','created_at','updated_at'];
}
