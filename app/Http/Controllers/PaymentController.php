<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Mail\Thanks;
use Auth;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $user = Auth::user();

        // dd($user->jobs);
        foreach($user->jobs as $jobs){
            $job = $jobs;
        }
         
        if($paymentDetails['data']['status']==='success'){
            $job->rrr === $paymentDetails['data']['reference'];
            $job->save();
            dd($job);
        }
        // $shipping = Shipping::where('email', $paymentDetails['data']['customer']['email'])->orderBy('id', 'desc')->first();;
        
        // $order = Order::find($shipping->order_id);

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        return view('user.returns', ['payment' => $paymentDetails]);

        
    }
}
