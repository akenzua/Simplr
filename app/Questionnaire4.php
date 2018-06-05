<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire4 extends Model
{
     protected $fillable = [
        'injection', 'amount', 'invested', 'extent', 'sought', 'type', 'offering', 'exitstrat', 'resources', 'job_id'
    ];
}
