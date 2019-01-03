<?php

namespace App\Models\Jobs;

use Illuminate\Database\Eloquent\Model;

class ApplyJobs extends Model
{
    protected $table = 'apply_jobs';

    protected $fillable = ['seeker_id','job_id','cover_later','ip_address','dated','is_active','created_at','updated_at'];

  	public function Job()
    {
     return $this->hasOne('App\Models\Jobs\Job','id','job_id');
    }
}
