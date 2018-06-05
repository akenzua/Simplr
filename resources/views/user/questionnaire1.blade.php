@extends('layouts.app')

@section('content')
<br>
            <br>
            <br>
            <br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        @include('user.dashmenu')


        </div>
        <div class="col-md-9">

        <div class="col-md-9 dashboard">
        <p>Your 
                <!-- Project -->
                @if($work -> service == "busplan")
                Business Plan
                @elseif($work -> service == "busplanR")
                Business Plan Review
                @elseif($work -> service == "pitch")
                Pitch Deck
                @endif
        Order with ID <b>{{$work -> order_id}}</b>  was received 
        @if($work -> code == "1" ||$work -> code == "0")
        and your payment was successful.
        Remita Retrieval Reference is  <b>{{$work -> rrr}}</b></p>
        <p> 
        One of our consultants will contact you soon if you have not been contacted already. Meanwhile, you may proceed to provide us with information that will guide us in preparing a world class business document for you.
        </p>
        @if($work -> service == "busplan")
                <!-- Business Plan Page -->
                 <ul id="servList" class="fa-ul">
                  <li><i class="fa-li fa fa-check-square"></i><a href="/home/questionnaire/2/{{$work -> id}}">Product</a></li>
                  <li><i class="fa-li fa fa-check-square"></i><a href="/home/questionnaire/3/{{$work -> id}}">Market</a></li>
                  <li><i class="fa-li fa fa-check-square"></i><a href="/home/questionnaire/4/{{$work -> id}}">Investment</a></li>
                  <li><i class="fa-li fa fa-check-square"></i><a href="/home/questionnaire/5/{{$work -> id}}">Company</a></li>
                </ul> 
                <p>You do not have to complete all the forms at once, you can always come back to complete/edit the forms. However, the forms must be completed within stipulated time to allow for early completion of your project.</p>
                <p>As your project unfolds, it might be necessary for you to have a face to face meeting with our consultant, however, if all information can be provided online, such meeting might be unnecessary. You will able to follow along with the preview link in the dashboard menu. This will allow you to contribute and measure progress.</p>
                <!-- Business Plan Page Ends -->     
                @elseif($work -> service == "busplanR")
                Business Plan Review
                @elseif($work -> service == "pitch")
                Pitch Deck
                @endif




        @elseif($work -> code == "21" )
        and your Remita Retrieval Reference is <b>{{$work -> rrr}}</b> but unfortunately your payment with remita was not successful. Kindly contact remita with your payment details to
        rectify the issue. We will be glad to be of assistance. You can contact us at enquiries@simplr.ng for further support.
        </p>
        @endif
        
            
           
            </div>
            

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection