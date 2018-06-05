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
            <legend>MARKET</legend>

             <div class="form-group">
            <label class="col-sm-12 control-label" for="research">Have you ever conducted any market research in this regard?</label>
                        <div class="col-sm-12">
                         <select class="form-control"  id="research" name="research">
                         <option value="@if($old){{$old[0]['research']}}@endif">@if($old){{$old[0]['research']}}@endif</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                         
                          </select>
                        </div>
            </div>
            
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="characteristics">What characteristics define your target market?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="characteristics">@if($old){{$old[0]['characteristics']}}@endif</textarea>
            </div>

            </div>


            <div class="form-group">            
            <label class="col-sm-12 control-label" for="location">What is the primary location of your target market?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="location">@if($old){{$old[0]['location']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="size">State your idea of the size of the tartget market and its growth potential</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="size">@if($old){{$old[0]['size']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="drivers">Describe the market drivers that make it an attractive sector </label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="drivers">@if($old){{$old[0]['drivers']}}@endif</textarea>
            </div>

            </div>
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="risk">Describe the special risk factors in the market </label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="risk">@if($old){{$old[0]['risk']}}@endif</textarea>
            </div>

            </div>
            
            
            

            


            </fieldset>

            <div class="form-group control-group">
            <button id="amount" type="submit" class="btn btn-default col-sm-2">Save</button>
            <div class="col-sm-8 btn-toolbar">
            <!-- Previous button -->
            <a href="/home/questionnaire/2/<?php jobId(); ?>" class="btn btn-info col-sm-3" role="button">Previous</a>
            <!-- Next button -->
            <a href="/home/questionnaire/4/<?php jobId(); ?>" class="btn btn-info col-sm-3" role="button">Next</a>
            </div>
            </div>
        </form>
            

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection