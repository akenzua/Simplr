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
        <div class="col-md-7">

         <form method="POST" action="{{url()->current()}}/submit" id="quest2" >
            {{ csrf_field() }}
            <fieldset>
            <legend>COMPANY</legend>

             
            
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="summary">Describe your company's profile, its activities and products/services that it supplies</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="summary">@if($old){{$old[0]['summary']}}@endif</textarea>
            </div>

            </div>


            <div class="form-group">            
            <label class="col-sm-12 control-label" for="objective">Provide a statement of business objectives of the company</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="objective">@if($old){{$old[0]['objective']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="strength">What are the key strengths of the company</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="strength">@if($old){{$old[0]['strength']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="advantage">What is the company's competitive advantage?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="advantage">@if($old){{$old[0]['advantage']}}@endif</textarea>
            </div>

            </div>
            
            
            

           


            </fieldset>

            <div class="form-group control-group">
            <button id="amount" type="submit" class="btn btn-default col-sm-2">Save</button>
            <div class="col-sm-8 btn-toolbar">
            <!-- Previous button -->
            <a href="/home/questionnaire/4/<?php jobId(); ?>" class="btn btn-info col-sm-3" role="button">Previous</a>
            
            </div>
            </div>
        </form>

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection