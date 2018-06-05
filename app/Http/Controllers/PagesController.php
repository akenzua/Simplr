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

        // last 6 blog items
        $blogHome = Blog::orderBy('id', 'desc')->take(6)->get();
        
        // All items in how it works
        $works = Work::all();

        return view('pages.home', compact('blogHome', 'category', 'works'));

    }

    public function verify(){
        return view('pages.verify');
    }


    public function confirm(){
            return view('pages.confirm');
        }

        
    public function services(){

        return view('pages.services');
    }
}
