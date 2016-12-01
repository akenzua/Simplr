<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

use App\Category;

use App\Work;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){

    	// Array of Blog Listing on Homepage
    	$blogCount = Blog::count();
    	$lastCount = $blogCount - 5;
		$countArray=[];

    	for($i=$lastCount; $i<=$blogCount; $i++){
    		$countArray[]=$i;
    	}
    	$blogHome = Blog::find([
    		$countArray[0], $countArray[1], $countArray[2], $countArray[3], $countArray[4], $countArray[5]
    		]);

        $works = Work::all();
       
         

    	// Array of Blog Listing on Homepage Ends

    	return view('pages.home', compact('blogHome', 'category', 'works'));

    	
    }


    public function services(){

        return view('pages.services');
    }
}
