<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire5 extends Model
{
    protected $fillable = [
        'summary', 'objective', 'strength','advantage', 'job_id'
    ];
}
