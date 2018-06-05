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
            <legend>INVESTMENT</legend>

             
            
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="injection">Why do you need capital injection?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="injection">@if($old){{$old[0]['injection']}}@endif</textarea>
            </div>

            </div>


            <div class="form-group">            
            <label class="col-sm-12 control-label" for="amount">How much is required?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="2" name="amount">@if($old){{$old[0]['amount']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="invested">How much has been invested till date</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="2" name="invested">@if($old){{$old[0]['invested']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="extent">What is the extent of your involvement in the running of the business? </label>
            <div class="col-sm-12">
                         <select class="form-control"  id="extent" name="extent">
                         <option value="@if($old){{$old[0]['extent']}}@endif">@if($old){{$old[0]['extent']}}@endif</option>
                          <option value="Passive Partner / Investor">Passive Partner / Investor</option>
                          <option value="Managing Partner">Managing Partner</option>
                         
                          </select>
                        </div>

            </div>
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="sought">Have sought funding from other sources? </label>
            <div class="col-sm-12">
                         <select class="form-control"  id="sought" name="sought">
                         <option value="@if($old){{$old[0]['sought']}}@endif">@if($old){{$old[0]['sought']}}@endif</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                         
                          </select>
                        </div>

            </div>
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="type">If yes, what type of funding? </label>
            <div class="col-sm-12">
                         <select class="form-control"  id="type" name="type">
                         <option value="@if($old){{$old[0]['type']}}@endif">@if($old){{$old[0]['type']}}@endif</option>
                          <option value="Equity">Equity</option>
                          <option value="Debt">Debt</option>
                         
                          </select>
                        </div>

            </div>
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="offering">What are you offering the investors?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="2" name="offering">@if($old){{$old[0]['offering']}}@endif</textarea>
            </div>

            </div>
            
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="exitstrat">Specify your planned exit strategy for the investors</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="2" name="exitstrat">@if($old){{$old[0]['exitstrat']}}@endif</textarea>
            </div>

            </div>
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="resources">Apart from financial resources, are there any other resources that would facilitate the success of your company?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="2" name="resources">@if($old){{$old[0]['resources']}}@endif</textarea>
            </div>

            </div>
           


            </fieldset>

            <div class="form-group control-group">
            <button id="amount" type="submit" class="btn btn-default col-sm-2">Save</button>
            <div class="col-sm-8 btn-toolbar">
            <!-- Previous button -->
            <a href="/home/questionnaire/3/<?php jobId(); ?>" class="btn btn-info col-sm-3" role="button">Previous</a>
            <!-- Next button -->
            <a href="/home/questionnaire/5/<?php jobId(); ?>" class="btn btn-info col-sm-3" role="button">Next</a>
            
            </div>
            </div>
        </form>
            

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection