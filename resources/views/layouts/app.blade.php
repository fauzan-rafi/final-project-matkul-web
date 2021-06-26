<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

      <title>{{ $title ?? ''}}</title>

      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fauzan_logo.png') }}" />

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Expos') }}</title>

      <!-- Bootstrap core CSS -->
      <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
      @yield('costum-css')



</head>

<body>

      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
            <div class="jumper">
                  <div></div>
                  <div></div>
                  <div></div>
            </div>
      </div>
      <!-- ***** Preloader End ***** -->

      <!-- Header -->
      @include('layouts.navigation')
      <!-- End header -->

      <!-- Page Content -->
      <div class="">
            @yield('content')
      </div>
      <!-- End page Content -->


      <footer>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="inner-content">
                                    
                                    <p>Was Created By Fauzan</p>
                              </div>
                        </div>
                  </div>
            </div>
      </footer>



      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



      <!-- Additional Scripts -->
      <script src="{{ asset('assets/js/custom.js') }}"></script>
      <script src="{{ asset('assets/js/owl.js') }}"></script>
      <script src="{{ asset('assets/js/slick.js') }}"></script>
      <script src="{{ asset('assets/js/isotope.js') }}"></script>
      <script src="{{ asset('assets/js/accordions.js')}}"></script>




      <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) { //declaring the array outside of the
                  if (!cleared[t.id]) { // function makes it static and global
                        cleared[t.id] = 1; // you could use true and false, but that's more typing
                        t.value = ''; // with more chance of typos
                        t.style.color = '#fff';
                  }
            }
      </script>




</body>

</html>