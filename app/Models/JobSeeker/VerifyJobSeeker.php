<?php

namespace App\Models\JobSeeker;

use Illuminate\Database\Eloquent\Model;

class VerifyJobSeeker extends Model
{
    protected $table = 'verify_job_seekers';

    protected $guarded = [];

    protected $fillable = ['job_seekers_id', 'new_email','token','created_at','updated_at'];
    
    public function JobSeeker()
    {
        return $this->belongsTo('App\Models\JobSeeker\JobSeeker', 'job_seekers_id');
    }
}
