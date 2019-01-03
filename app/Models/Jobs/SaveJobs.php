<?php

namespace App\Models\Jobs;

use Illuminate\Database\Eloquent\Model;

class SaveJobs extends Model
{
    protected $table = 'save_jobs';

    protected $fillable = ['job_seeker_id','job_id','created_at','updated_at'];

    public function Job()
    {
     return $this->hasOne('App\Models\Jobs\Job','id','job_id');
    }
}
