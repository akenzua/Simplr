
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
        <div class="col-md-9 blank">
            <a href="/home/request"><img  class="img-responsive new" src="images/new-document.svg" alt="Job"></a>
            <p><a href="/home/request">Click here to start a new Job</a></p>

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection
