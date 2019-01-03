<?php

namespace App\Models\JobSeeker;


use Illuminate\Database\Eloquent\Model;

class JsAdditionalDetail extends Model
{
    protected $table = 'js_additional_details';

    public $timestamps = true;

    protected $fillable = ['job_seeker_id','summary','languages','interest','certificates','fb_link','gmail_link','tweet_link','salary','keywords','created_at','updated_at'];



    
}
