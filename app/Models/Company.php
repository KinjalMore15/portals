<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companies';

    protected $fillable = ['industry_id','company_name','company_slug','company_email','ceo_name','owner_type','company_description','num_of_office','website','established_in','company_type','company_fax','company_phone','company_logo','company_folder','company_zip','company_state','company_city','created_at','updated_at'];


    public static $owner_type = ['1' => 'Owner','2' => 'Partnership','3' => 'Private Corporation'];
}
