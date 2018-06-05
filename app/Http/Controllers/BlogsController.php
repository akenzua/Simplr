<?php

namespace App\Http\Controllers;

use App\Blog;

use App\Category;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{ 
	public function index(){
		 $blogs = Blog::all();
		// return $blogs;
         // last 6 blog items
         $blogHome = Blog::orderBy('id', 'desc')->take(6)->get();


        $growth = Blog::where('category_id', 1)->take(3)->orderBy('created_at', 'desc')->get();
        $start = Blog::where('category_id', 2)->take(3)->orderBy('created_at', 'desc')->get();
        $tech = Blog::where('category_id', 3)->take(3)->orderBy('created_at', 'desc')->get();
        $legal = Blog::where('category_id', 4)->take(3)->orderBy('created_at', 'desc')->get();
        $finance = Blog::where('category_id', 5)->take(3)->orderBy('created_at', 'desc')->get();
        $mns = Blog::where('category_id', 6)->take(3)->orderBy('created_at', 'desc')->get();

		return view('pages.blogs', compact('blogs', 'blogHome', 'growth', 'start', 'tech', 'legal', 'finance', 'mns'));
	}



    public function show($url){
 
    	$blog = Blog::where('url', $url)->firstOrFail();
        $id = $blog->id;
        $nextId = $id + 1;
        $next = Blog::find([$nextId]);
        $previousId = $id - 1;
        $previous = Blog::find([$previousId]);
        
        // dd($blog);

        
        return view('pages.show', compact('blog', 'next', 'previous'));
    	
    }




    public function cat($slug){

        $cat = Category::where('slug', $slug)->get();

        $category = $cat[0]->id;

        $main = Blog::where('category_id', $category)->orderBy('created_at', 'asc')->take(1)->get();
        // foreach($main as $main){
        //     $main = $main->blogs;
        //     return end($main);
        // }

        // $main = array_values(array_slice($main, -1))[0];

        // return $main;

        foreach($cat as $cat){
            $cat = $cat->blogs;
        }
        
        
      return view('pages.cat', compact('cat', 'main'));
    }
}
