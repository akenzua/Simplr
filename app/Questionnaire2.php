<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire2 extends Model
{
    protected $fillable = [
        'need', 'exist', 'current', 'satisfy', 'differentiate', 'intellectual', 'whatintellectual', 'soughtintellectual', 'licence', 'job_id'
    ];
}
