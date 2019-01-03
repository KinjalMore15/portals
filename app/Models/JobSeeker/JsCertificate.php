<?php

namespace App\Models\JobSeeker;

use Illuminate\Database\Eloquent\Model;

class JsCertificate extends Model
{
    protected $table = 'js_certificates';

    protected $fillable = ['job_seeker_id','certificate_name','issu_Authority','year','description','created_at','updated_at'];

}
