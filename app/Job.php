<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $guarded = ['payfirst', 'paylast'];

    public function user(){

    	return $this->belongsTo('App\User');
	}
}
