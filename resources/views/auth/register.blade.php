
    @extends('layouts.app')

@section('content')
<div class="intro">
    <div class="sub-intro">
<div class="container" style="padding-top: 90px;">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Register</div> -->
                @include('partials.flash')

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <!-- <label for="name" class="col-md-6">Name</label> -->

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-6">E-Mail Address</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter a valid email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-6">Password</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <!-- <label for="password-confirm" class="col-md-6">Confirm Password</label> -->

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary col-xs-12">
                                    Register
                                </button>
                                <span  class="col-xs-12 regBtn">
                                
                                By clicking "Register", you agree to our <a href="#">terms of service</a> and <a href="#">privacy policy</a>.
                               
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 welcome">

        <h2>Yes, you are at the right place</h2>
        <p>we will transform your business <span class="grey">ideas</span> to <span class="grey">investors'</span> delight.</p>
        </div>
    </div>
</div>
</div>
</div>
@endsection


  
