<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function comments(){

    	return $this->hasMany('App\Comment');
    }

    public function category(){

    	return $this->belongsTo('App\Category');
    }

    public function author(){
        
                return $this->belongsTo('App\Author');
            }
}
