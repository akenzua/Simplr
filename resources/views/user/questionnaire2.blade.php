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

        @php
        foreach($user->jobs as $job){
        $confirm[] = $job->id;
        
        }
        if (!in_array(redAlert(), $confirm)) {
             header("Location: /home");
             die();

             }
        @endphp

         <form method="POST" action="{{url()->current()}}/submit" id="quest2" >
            {{ csrf_field() }}
            <fieldset>
            <legend>OPPORTUNITY/PRODUCT</legend>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="need">What need does your business idea satisfy?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="need">@if($old){{$old[0]['need']}}@endif</textarea>
            </div>

            </div>
            
            <div class="form-group">            
            <label class="col-sm-12 control-label" for="exist">Why does the need(s)/opportunities exist?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="exist">@if($old){{$old[0]['exist']}}@endif</textarea>

            </div>

            </div>


            <div class="form-group">            
            <label class="col-sm-12 control-label" for="current">What is wrong with current way of doing things?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="current">@if($old){{$old[0]['current']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="satisfy">How will your business satisfy the need?</label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="satisfy">@if($old){{$old[0]['satisfy']}}@endif</textarea>
            </div>

            </div>

            <div class="form-group">            
            <label class="col-sm-12 control-label" for="differentiate">How will your company differentiate its product/service? (what is special about your solution?) </label>
            <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="differentiate">@if($old){{$old[0]['differentiate']}}@endif</textarea>
            </div>

            </div>
            <div class="form-group">
            <label class="col-sm-12 control-label" for="intellectual">Are there any proprietary rights or intellectual property on the product?</label>
                        <div class="col-sm-12">
                         <select class="form-control"  id="intellectual" name="intellectual">
                         <option value="@if($old){{$old[0]['intellectual']}}@else{{''}}@endif"> @if($old){{$old[0]['intellectual']}}@endif</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                          
                          </select>
                        </div>
            </div>
            <div class="form-group">
            <label class="col-sm-12 control-label" for="whatintellectual">If yes, which?</label>
                        <div class="col-sm-12">
                         <select class="form-control"  id="whatintellectual" name="whatintellectual">
                         <option value="@if($old){{$old[0]['whatintellectual']}}@else{{''}}@endif">@if($old){{$old[0]['whatintellectual']}}@endif </option>
                          <option value="Copyright">Copyright</option>
                          <option value="Patent">Patent</option>
                          <option value="Trade Secret">Trade Secret</option>
                          <option value="Trademark">Trademark</option>
                         
                          </select>
                        </div>
            </div>
            <div class="form-group">
            <label class="col-sm-12 control-label" for="soughtintellectual">If no, is any being sought?</label>
                        <div class="col-sm-12">
                         <select class="form-control"  id="soughtintellectual" name="soughtintellectual">
                         <option value="@if($old){{$old[0]['whatintellectual']}}@else{{''}}@endif">@if($old){{$old[0]['whatintellectual']}}@else{{''}}@endif</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                         
                          </select>
                        </div>
            </div>
            <div class="form-group">
            <label class="col-sm-12 control-label" for="licence">Is there any regulation or licensing in your industry?</label>
                        <div class="col-sm-12">
                         <select class="form-control"  id="licence" name="licence">
                         <option value="@if($old){{$old[0]['licence']}}@else{{''}}@endif">@if($old){{$old[0]['licence']}}@else{{''}}@endif</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                         
                          </select>
                        </div>
            </div>

        


            </fieldset>

            <div class="form-group">
            <button id="amount" type="submit" class="btn btn-default col-sm-2">Save</button>
            <div class="col-sm-8 btn-toolbar">
            <!-- Previous button -->
            <a href="/home/questionnaire/1/<?php jobId(); ?>" class="btn btn-info col-sm-3" role="button">Previous</a>
            <!-- Next button -->
            <a href="/home/questionnaire/3/<?php  jobId(); ?>" class="btn btn-info col-sm-3" role="button">Next</a>
            </div>
            </div>
        </form>
        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection