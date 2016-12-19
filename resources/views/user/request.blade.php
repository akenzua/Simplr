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
        <form method="POST" action="/home/pay" id="request" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you agree with Simplr Consulting Terms of Service and Privacy Policy'); return false; }">
        {{ csrf_field() }}
            <fieldset>
                  <legend>Personal Information</legend>

                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="firstName">Name</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="firstName" name="firstName" type="text" placeholder="{{$user->name}}" readonly>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="email">Email</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="email" name="email" type="text" placeholder="{{$user->email}}" readonly>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label"  for="phoneNumber">Phone</label>
                      <div class="col-sm-10">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                      </div>
                  </div>

                     <!-- Text input-->
                      <div class="form-group">
                      <label class="col-sm-2 control-label" for="address">Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="address"></textarea>
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="city">City</label>
                        <div class="col-sm-4">
                          <input type="text" placeholder="City" id="city" name="city" class="form-control">
                        </div>

                        <label class="col-sm-2 control-label" for="textinput">Country</label>
                        <div class="col-sm-4">
                          <input class="form-control" id="country" name="country" type="text" placeholder="Nigeria" readonly>
                        </div>
                      </div>

            </fieldset> <!-- First -->


            <fieldset>
                <legend>Business Information</legend>

                 <div class="form-group">
                        <label class="col-sm-2 control-label" for="business">Business</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Business Name" name="business" class="form-control">
                        </div>
                 </div>


                 <div class="form-group">
                      <label class="col-sm-2 control-label" for="firstName">Industry</label>
                      <div class="col-sm-4">
                        <select class="form-control">
                          <option>Industry</option>
                          <option>Aviation</option>
                          <option>Real Estate</option>
                          <option>I.T</option>
                          <option>Electronics</option>
                        </select>
                      </div>

                      <label class="col-sm-2 control-label" for="firstName">Location</label>
                      <div class="col-sm-4">
                        <select class="form-control" id="location">
                           <option value="" selected="selected">- Select -</option>
                              <option value="Abuja FCT">Abuja FCT</option>
                              <option value="Abia">Abia</option>
                              <option value="Adamawa">Adamawa</option>
                              <option value="Akwa Ibom">Akwa Ibom</option>
                              <option value="Anambra">Anambra</option>
                              <option value="Bauchi">Bauchi</option>
                              <option value="Bayelsa">Bayelsa</option>
                              <option value="Benue">Benue</option>
                              <option value="Borno">Borno</option>
                              <option value="Cross River">Cross River</option>
                              <option value="Delta">Delta</option>
                              <option value="Ebonyi">Ebonyi</option>
                              <option value="Edo">Edo</option>
                              <option value="Ekiti">Ekiti</option>
                              <option value="Enugu">Enugu</option>
                              <option value="Gombe">Gombe</option>
                              <option value="Imo">Imo</option>
                              <option value="Jigawa">Jigawa</option>
                              <option value="Kaduna">Kaduna</option>
                              <option value="Kano">Kano</option>
                              <option value="Katsina">Katsina</option>
                              <option value="Kebbi">Kebbi</option>
                              <option value="Kogi">Kogi</option>
                              <option value="Kwara">Kwara</option>
                              <option value="Lagos">Lagos</option>
                              <option value="Nassarawa">Nassarawa</option>
                              <option value="Niger">Niger</option>
                              <option value="Ogun">Ogun</option>
                              <option value="Ondo">Ondo</option>
                              <option value="Osun">Osun</option>
                              <option value="Oyo">Oyo</option>
                              <option value="Plateau">Plateau</option>
                              <option value="Rivers">Rivers</option>
                              <option value="Sokoto">Sokoto</option>
                              <option value="Taraba">Taraba</option>
                              <option value="Yobe">Yobe</option>
                              <option value="Zamfara">Zamfara</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Registration</label>
                        <div class="col-sm-4">
                         <select class="form-control">
                          <option value="not registered">Not Registered</option>
                          <option value="enterprise">Business Name</option>
                          <option value="partnership">Partnership</option>
                          <option value="public limited">Public Limited Liability </option>
                          <option value="private limited">Private Limited Liability</option>
                          <option value="private limited">Unlimited Limited Liability </option>
                          <option value="nonprofit">Non Profit Making</option>
                          </select>
                        </div>

                        <label class="col-sm-2 control-label" for="textinput">Is it a Startup?</label>
                        <div class="col-sm-4">
                          <select class="form-control">
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          
                          </select>
                        </div>
                      </div>


            </fieldset>

                
            <fieldset>
                <legend>Job Requested</legend>
                <label class="col-sm-2 control-label" for="textinput">Service Required</label>
                        <div class="col-sm-4">
                         <select class="form-control"  id="job">
                         <option value="">Select Services</option>
                          <option value="busplan">Business Plan</option>
                          <option value="busplanR">Business Plan Review</option>
                          <option value="pitch">Pitch Deck Design</option>
                          <option value="market">Market Research </option>
                          <option value="feasible">Feasibility Study</option>
                          </select>
                        </div>

                        <label class="col-sm-2 control-label" for="textinput">Category</label>
                         <div class="col-sm-4">
                        <select class="form-control" id="category">
                            <option value="">Select a Category </option>
                        </select>
                        </div>
                    
            </fieldset>
            <div class="pricing">
                <p><input type="checkbox" name="checkbox" value="check" id="agree" />&nbsp; &nbsp; I agree to Simplr Consulting Terms of Service and Privacy Policy</p>

                <p>
                    Kindly note that the price comprises 60% of the charges and an additional &#x20A6;30,000 for business location outside Lagos. Please check the <a href="/services">service page</a> for a list of all our services &amp; prices.
                </p>


            </div>

            <button id="amount" type="submit" class="btn btn-default">Pay &#x20A6;XXX</button>

        </form>
        

        </div>
        
    </div> <!-- row -->
</div> <!-- container -->
@include('footer')
@endsection