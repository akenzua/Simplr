<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{
    public function show(){

    	return view('pages.blogs');
    }
}
