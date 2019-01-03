<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $table = 'skills';
      use Searchable;
}
