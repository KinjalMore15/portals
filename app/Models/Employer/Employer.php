<?php

namespace App\Models\Employer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    //
    protected $table = 'employers';

    public $timestamps = true;

    protected $fillable = ['company_id','name','email','password','phone_number','zip','state','city','remember_token'];

    public function Jobs()
    {
     return $this->hasMany('App\Models\Jobs\Job');
    }
}
