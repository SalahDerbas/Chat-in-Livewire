<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHAT Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->  
            <link rel="icon" type="image/jpg" href="{{asset('images/icons/Logo SD1.jpg')}}"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('vendor/countdowntime/flipclock.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <!--===============================================================================================-->
         

        
    </head>


    <body class="antialiased">
    <!--     <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 
        </div> -->




















        <div class="bg-img1 size1 overlay1 p-t-24" style="background-image: url('images/bg01.jpg');">
        <div class="flex-w flex-sb-m p-l-80 p-r-74 p-b-175 respon5">

            @if (Route::has('login'))
            <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top container">
          <div class="container">
            <a class="navbar-brand" href="#">
                  <img src="images/icons/Logo SD1.jpg" alt="SD" width="60" height="40"> &nbsp; CHAT  APPLICATION
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
               @auth
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('/home') }}">Home
                            <span class="sr-only">(current)</span>
                          </a>
                    </li>
                @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif


               @endauth
              </ul>
            </div>
          </div>
        </nav>

         @endif





            
        </div>

        <div class="flex-w flex-sa p-r-200 respon1">
            <div class="p-t-34 p-b-60 respon3">
                <p class="l1-txt1 p-b-10 respon2 container text-center">
                    Our website is
                </p>

                <h3 class="l1-txt2 p-b-45 respon2 respon4 container text-center">
                CHAT APPLICATION  
                </h3>
                    <br><br><br><br><br>
                <div class="col-ms-4 container text-center" style="width: 1000px; margin-left: 120px;"  >

                    <img src="images/111111.jpg" width="300" height="250">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="images/22222.jpg" width="300" height="250">
                    
                <br><br><br><br><br>

            <!-- footer start  -->

        <footer class="bg-dark text-center text-white container text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
  <div class="flex-w m-t-10 m-b-10  container">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
                    <i class="fa fa-facebook"></i>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
                    <i class="fa fa-twitter"></i>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>© 2021  Software Engineering | Design by <a href="#Home" target="_blank">SalahDrbas</a> | All rights Reserved.</p>
    <a class="text-blue" href="https:///">salahdrbas1@gmail.com</a>
  </div>
  <!-- Copyright -->
</footer>


<!-- footer end  -->


                </div>

            </div>

        
        </div>
    </div>





<!--===============================================================================================-->  
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/countrdowntime/flipclock.min.js')}}"></script>
    <script src="{{asset('vendor/countdowntime/moment.min.js')}}"></script>
    <script src="{{asset('vendor/countdowntime/moment-timezone.min.js')}}"></script>
    <script src="{{asset('vendor/countdowntime/moment-timezone-with-data.min.js')}}"></script>
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    
<!--===============================================================================================-->
    <script src="{{asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>


</body>
</html>
