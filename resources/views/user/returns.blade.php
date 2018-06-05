
@extends('layouts.app')

@section('content')
    
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 confirm-payment">
                <p>Thank you for doing business with us at Simplr Consulting</p>
                @if(!empty($payment))
                    @if($payment['data']['status']==='success')
                    <span>Your Payment of <del>N</del>{{$payment['data']['amount']/100}} was successful</span><br>
                    <span>Your payment reference is {{$payment['data']['reference']}}</span>
                    <br>
                    <span>One of our consultants will contact you shortly to set up a briefing session with you</span>
                    <div class="action col-sm-12">
                                                    <a href="/home" class=""><i class="fas fa-arrow-circle-left"></i>  Go to your Dashboard</a>
                                                    
                    </div>
                    @elseif($payment['data']['status']!=='success')
                    <span>Whoops! Something went wrong. We cannot confirm your payment at this time</span><br>
                    <span>Your payment reference is {{$payment['data']['reference']}}</span>
                    <br>
                    <span>Kindly confirm with or one of our contact customer support agents on 01-2674-177 with your authorization code.</span>
                    <div class="action col-sm-12">
                                                    <a href="/home" class=""><i class="fas fa-arrow-circle-left"></i> Go to your Dashboard</a>
                                                    
                    </div>
                    @endif
                @else

                
                
                <span>One of our consultants will contact you shortly to set up a briefing session with you</span>
                <div class="action col-sm-12">
                                                <a href="" class=""><i class="fas fa-arrow-circle-left"></i> Continue Shopping</a>
                                                 
                </div>

                @endif
                
            </div>
        </div>
    </div>
    @endsection