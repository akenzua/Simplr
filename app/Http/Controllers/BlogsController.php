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
        $blogCount = Blog::count();
        $lastCount = $blogCount - 5;
        $countArray=[];

        for($i=$lastCount; $i<=$blogCount; $i++){
            $countArray[]=$i;
        }
        $blogHome = Blog::find([
            $countArray[0], $countArray[1], $countArray[2], $countArray[3], $countArray[4], $countArray[5]
            ]);


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
        
        

        $category = \DB::table('categories')
        ->where('id', $blog->category_id)
        ->value('category'); //retrives blog category

        $authors = \DB::table('authors')->where('id', $blog->author_id)->get();
        return view('pages.show', compact('blog', 'category','authors', 'next', 'previous'));
    	
    }




    public function cat($slug){

        $cat = Category::where('slug', $slug)->firstOrFail();

        foreach($cat->blog as $blog){
            $blogId[]= $blog->id;
        }
        $main = Blog::find([
            end($blogId)
            ]);
      return view('pages.cat', compact('cat', 'main', 'categories'));
    }
}
