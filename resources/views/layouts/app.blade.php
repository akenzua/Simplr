<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://use.fontawesome.com/fb6da2cd8d.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/app.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

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
                <a class="navbar-brand" href="{{ url('/') }}#featured">
                    {{ config('app.name', 'Simplr') }}
                    <span class="subhead"> business planning</span>&nbsp; 
                &nbsp;
                </a>

            </div><!--navbar-header-->

            <div class="collapse navbar-collapse" id="collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="/">HOME</a></li>
                      <li><a href="/#aboutId">ABOUT</a></li>
                      <li><a href="/services">SERVICES</a></li>
                      <li><a href="/#workId">HOW WE WORK</a></li>
                      <li><a href="/blogs" class="dropdown-toggle"
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
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
    @yield('content')

</body>
</html>
