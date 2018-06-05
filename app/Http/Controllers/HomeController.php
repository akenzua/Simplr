<?php

namespace App\Http\Controllers;

use App\User;

use App\Job;

use App\Questionnaire2;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use Redirect;


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
            
         // foreach ($user->jobs as $job){
         //    if(isset($job->payfirst)){
         //        $count = $job->count();
         //    }else{
         //        $count="";
         //    }
         // }
        
        return view('home', compact('user'));
    }



    public function prelim(){
        $user = Auth::user();
        return view('user.request', compact('user'));
    }

    public function submit(Request $request){

        $user = Auth::user();
        $id = $user->id;
        //Server side validation
        $this->validate($request, [

                'phone' => 'required',
                'address' => 'required',
                'city' => 'required',
                'business' => 'required',
                'industry' => 'required',
                'location' => 'required',
                'registration' => 'required',
                'startup'  => 'required',
                'service' => 'required',
                'category' => 'required',
                'agree' => 'required'
            ]);
        //Saving to database request form info
        $job = new Job;
        $job->phone = $request->phone;
        $job->address = $request->address;
        $job->city = $request->city;
        $job->business = $request->business;
        $job->industry = $request->industry;
        $job->location = $request->location;
        $job->registration = $request->registration;
        $job->startup = $request->startup;
        $job->service = $request->service;
        $job->category = $request->category;
        $job->user_id = $id;
        $job->save();
        
        //Saving jod id to session
        $lastInsertedId= $job->id;
        $request->session()->put('key', $lastInsertedId);

        //Saving amount to be paid to session
        if($request->location == 'Lagos'){
            $commission = 0;
        }else{
            $commission = 30000;
        }
        $amount = $commission + $request->category;
        $request->session()->put('amount', $amount);
        
        // dd($job);
        // return redirect('home/confirm');
        return view('user/confirm', compact('job'));
    }




    public function process(){
        $user = Auth::user();

        

        return view('user.processpayment');
    }

    public function pay(){
        $user = Auth::user();
        $id = $user->id;
      
       $user = User::find($id);
       //return $user;



        return view('user.pay', compact('user'));
    }
    public function receipt(){

        $user = Auth::user();
        $id = $user->id;
      
        
        

        return view('user/receipt');
    }


    public function questionnaire($id, $job){

         $user = Auth::user();
         $base = 'Questionnaire'.$id;
         $data = 'App\\' . $base;

         if($data::where('job_id', $job)->first()){
            $old = $data::where('job_id', $job)->get()->toArray();
                }else{

                $old="";
                
             }

         $work = \DB::table('jobs')->where('id', $job)->first();
         $view = 'user/questionnaire'.$id;
         
     

        return view($view, compact('user', 'old', 'work'));
    }



    public function save(Request $request, $id, $job){

        
        $base = 'Questionnaire'.$id;
        $data = 'App\\' . $base;
        $user = Auth::user();


        foreach($user->jobs as $lob){
        $confirm[] = $lob->id;
        }
        if (!in_array($job, $confirm)) {
             header("Location: /home");
             die();

        }
        
        if($data::where('job_id', $job)->first()){
           $data::where('job_id', $job)->update($request->all());
          
          return redirect()->back();

        }else{
        
        $questionnaire = new $data($request->all());
        $questionnaire->job_id = $job;
        $questionnaire->save();
        // $questionnaire->create($request->all());
        return redirect()->back();
        }
     

        
    }
}
