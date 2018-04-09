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
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://lsapp.dev/student-login">Student</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="http://lsapp.dev/tutor-login" data-toggle="modal" data-target="#myModal">Tutor</a>
                                                </li>
                                    </nav>
                                    <br>
                                    <div class="container">
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h4 class="modal-title">Student Login</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

            </body>
            </html>