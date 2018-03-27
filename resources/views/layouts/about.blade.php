{{--  @extends('layouts.app')  --}}

<html lang="{{ app()->getLocale() }}">


        <head>


                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
        
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    padding: 100px 50px;
                    font-family: Montserrat, sans-serif;
                    text-align:center;
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
    
                .nav-item {
                    position: 
                }
    
                /* .m-b-md {
                    margin-bottom: 30px;
                } */
            </style> 
    </head>

    <body>

            
            {{--  <div class="flex-center position-ref full-height">  --}}
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{--  <a href="{{ url('/home') }}">Home</a>  --}}
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
                </div>
  --}}
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