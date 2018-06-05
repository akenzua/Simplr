<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire3 extends Model
{
     protected $fillable = [
        'research', 'characteristics', 'location', 'size', 'drivers', 'risk', 'job_id'
    ];
}
