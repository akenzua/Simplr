@extends('layouts.app')

@section('content')
<div class="intro">
    <div class="sub-intro">
<div class="container" style="padding-top: 90px;">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Login</div> -->

                @include('partials.flash')

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-6">E-Mail Address</label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4">Password</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group pull-left">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" id="amount" class="btn btn-primary col-xs-12">
                                    Login
                                </button>
                                <div class="col-xs-8 col-xs-offset-2">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 welcome">

        <h2>Welcome back,</h2>
        <p>we believe we have made some good <span class="grey">impression</span> on you. Kindly avail us all necessary information to help you get the required <span class="grey">funding</span> for your <span class="grey">business</span>.</p><p>If you are not yet our client, kindly <span class="yellow"><a href="/register">sign up</span></p>
        </div>
    </div>
</div>
</div>


@endsection



