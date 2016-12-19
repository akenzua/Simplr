<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
            $user = Auth::user();
        }

        
        return view('home', compact('user'));
    }



    public function prelim(){
        $user = Auth::user();
        return view('user.request', compact('user'));
    }

    public function pay(){


        
        return view('user.pay');
    }
}
