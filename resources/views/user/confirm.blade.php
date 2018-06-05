@extends('layouts.app')

@section('content')
<br>
            <br>
            <br>
            <br>
<div class="container">
    <div class="row">
        
        <div class="col-xs-offset-2 col-xs-8">
        <h1 class="summary_head">Order Summary</h1>

        <h3>Business Information</h3>
            <div class="summary_details">
                <p>{{$job->user->name}},</p>
                <p>{{$job->business}},</p>
                <p>{{$job->address}},</p>
                <p>{{$job->city}},</p>
                <p>{{$job->location}}.</p>
            </div>
        

        <h3>Service Ordered</h3>
        <div class="summary_details"><p>{{$job->service}}</p></div>
        

        <h3>Initial Amount Payable</h3>
        <div class="summary_details"><p>{{$job->category}}</p></div>
        

       
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="col-xs-12" role="form">
           <input type="hidden" name="first_name" value="">
                        <input type="hidden" name="last_name" value="{{$job->user->name}}">
                        <input type="hidden" name="orderID" value="{{$job->id}}">
                        
                       <input type="hidden" name="email" value="{{$job->user->email}}">
                        
                        <input type="hidden" name="amount" value="{{$job->category*100}}"> 
                        <input type="hidden" name="quantity" value="">
                        
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> 

                        {{ csrf_field() }}


                       
                        <button class="pull-right col-xs-offset-4 col-xs-4 btn btn-primary btn-lg pay-now" type="submit" value="Pay Now!">
                        <i class=""></i> Pay Now
                        </button>
  
           </form>
 

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@endsection