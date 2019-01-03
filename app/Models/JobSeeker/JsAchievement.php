<?php

namespace App\Models\JobSeeker;

use Illuminate\Database\Eloquent\Model;

class JsAchievement extends Model
{
    protected $table = 'js_achievements';

    protected $fillable = ['id','job_seeker_id','achievement','created_at','updated_at'];

}
