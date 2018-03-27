<!doctype html>

<html lang="{{ app()->getLocale() }}">
      

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

          <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .jumbotron {
                background-color: #311c27;
                color: #fff;
                padding: 70px 50px;
                font-family: Montserrat, sans-serif;
                text-align:center;
                margin-bottom: 0%;
            }

            .container-fluid {
                padding: 60px 50px;
            }

            .bg-grey {
                background-color: #f6f6f6;
            }

             h2 {
                font-size: 24px;
                text-transform: uppercase;
                color: #303030;
                font-weight: 600;
                margin-bottom: 30px;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .navbar {
                margin-top: 0%;
            }

            
        </style> 
    </head>
    <body>
         {{--   <div class="flex-center position-ref full-height">   --}}
             @if (Route::has('login')) 
                <div class="top-right links">
                    @auth
                        {{--   <a href="{{ url('/home') }}">Home</a>   --}} 
                    @else  
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif  

            <div class="jumbotron">
                {{--  <div class="title m-b-md">  --}}
                        <div class="title">
                            Laravel
                    
                </div>

                {{--  <div class="links">
                    <a href="http://lsapp.dev/">Home</a>
                    <a href="http://lsapp.dev/about">About</a>
                    <a href="http://lsapp.dev/services">Services</a>
                    <a href="http://lsapp.dev/projects">Projects</a>
                    <a href="http://lsapp.dev/contact">Contact Us</a>
                </div>  --}}

                @guest
                   {{--   <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>  --}}
                @else
                    <span class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
            
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    
                @endguest
            
            </div>
        </div> 

                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <!-- Brand -->
                    <a class="navbar-brand" href="#">Logo</a>

                        <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="http://lsapp.dev">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://lsapp.dev/about">About</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="http://lsapp.dev/services">Services</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="http://lsapp.dev/projects">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="http://lsapp.dev/contact">Contact Us</a>
                                            </li>
    
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                </ul>
            </nav>
            <br>


        <!-- Container (About) -->
        <div id="about" class="container-fluid">
                <div class="row">
                  <div class="col-sm-8">
                    <h2>About Us</h2>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    
                  </div>
                  {{--  <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                  </div>  --}}
                </div>
              </div>

         <div class="container-fluid bg-grey">
                 <div class="row">
                    <div class="col-sm-4">
                    <span style="font-size:25em;" class="glyphicon glyphicon-globe logo slideanim"></span>
                      </div>
                      <div class="col-sm-8">
                        <h2>Our Values</h2><br>
                        <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                        <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                </div>
            </div>

        <!-- Container (Services Section) -->
        <div id="services" class="container-fluid text-center">
                <h2>SERVICES</h2>
                <h4>What we offer</h4>
                <br>
                <div class="row slideanim">
                <div class="col-sm-4">
                    <span style="font-size:4em;" class="glyphicon glyphicon-off logo-large"></span>
                    <h4>POWER</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span style="font-size:4em;" class="glyphicon glyphicon-heart logo-small"></span>
                    <h4>LOVE</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span style="font-size:4em;" class="glyphicon glyphicon-lock logo-small"></span>
                    <h4>JOB DONE</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                </div>
                <br><br>
                <div class="row slideanim">
                <div class="col-sm-4">
                    <span style="font-size:4em;" class="glyphicon glyphicon-leaf logo-small"></span>
                    <h4>GREEN</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span style="font-size:4em;" class="glyphicon glyphicon-certificate logo-small"></span>
                    <h4>CERTIFIED</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <span style="font-size:4em;" class="glyphicon glyphicon-wrench logo-small"></span>
                    <h4 style="color:#303030;">HARD WORK</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                </div>
            </div>

            <div class="jumbotron text-center" style="margin-bottom:0">
                <p>Footer</p>
              </div>

             
    </body>
</html>
