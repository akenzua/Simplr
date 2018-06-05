<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" type="image/png" href="/images/favicon-16X16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">  
    <link rel="icon" type="image/png" href="/images/favicon-96x96.png" sizes="96x96">
    <link rel="apple-touch-icon" href="older-iPhone.png">  
    <link rel="apple-touch-icon" sizes="180x180" href="iPhone-6-Plus.png">  
    <link rel="apple-touch-icon" sizes="152x152" href="iPad-Retina.png">  
    <link rel="apple-touch-icon" sizes="167x167" href="iPad-Pro.png"> 

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://use.fontawesome.com/fb6da2cd8d.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/app.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title_and_meta')

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navigation">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
              <!--   <a class="navbar-brand" href="{{ url('/') }}#featured">
                    {{ config('app.name', 'Simplr') }}
                    <span class="subhead"> business planning</span>&nbsp; 
                &nbsp;
                </a> -->
                <a href="#" class="navbar-left navbar-brand"><img src="/images/logo6.gif"></a>
                <!-- /images/logo.gif -->

            </div><!--navbar-header-->

            <div class="collapse navbar-collapse" id="collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="/">HOME</a></li>
                      <li> <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><a href="/#aboutId">ABOUT</a></li>
                      <li><span class="glyphicon glyphicon glyphicon-briefcase" aria-hidden="true"></span><a href="/services">SERVICES</a></li>
                      <li><span class="glyphicon glyphicon glyphicon-hourglass" aria-hidden="true"></span><a href="/#workId">HOW WE WORK</a></li>
                      <li><span class="glyphicon glyphicon glyphicon-blackboard" aria-hidden="true"></span><a href="/blogs" class="dropdown-toggle"
                      data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOGS
                      <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="/growthstrat">Growth Strategies</a></li>
                          <li><a href="/startups">Start Up</a></li>
                          <li><a href="/tech">Technology</a></li>
                          <li><a href="/legal">Legal</a></li>
                          <li><a href="/finance">Finance</a></li>
                          <li><a href="/mns">Marketing & Sales</a></li>
                      </ul>
                      </li>

                        
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" id="authenticate">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li class="pull-right"><a href="{{ url('/register') }}">Register</a></li>
                    @else

                        <li class="dropdown" id="owner">
                            <a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- Auth for mobile -->
                        <div id="mobile">

                            <div>
                                    <a  class="logout" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        LOG OUT
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>

                            <a href="{{ url('/home') }}" >
                                {{ Auth::user()->name }} 
                            </a>

                            <div role="menu">
                                
                            </div>
                        </div>
                        <!-- Auth for mobile ends -->
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
    @yield('content')

    <!-- jQ uery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <script src=" https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="/js/form-validation.js"></script>
    

</body>
</html>
