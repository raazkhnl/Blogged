<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blogged') }}</title>
    {{-- Icon --}}
    <link rel="icon" href="../storage/Images/BloggedLogo.png" type="image/gif" sizes="30x30">
    <script src="https://kit.fontawesome.com/7d5e5f5fa1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="resources\css\app.css">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

<!-- Main Footer -->
<div class="row container-fluid mx-auto pb-1 text-light" style="background-color: rgb(51, 36, 36)">
    <!-- 1st Column -->
    <div class="col-md-2 mx-auto col-12 custom-padding pb-4  pt-1">
        <img class="img-fluid" src="{{ asset('storage\Images\BloggedLogo.png') }}" style="width: 55px; " alt="Logo" />
        <p style="font-size: small;">Generate outside the box thinking with the possibility to target the low.</p>
        <div class="d-flex justify-content-between custom-social pt-1" style="font-size: x-large;">
            <i class="fa-brands fa-facebook mx-1"></i>
            <i class="fa-brands fa-google mx-1"></i>
            <i class="fa-brands fa-apple mx-1"></i>
            <i class="fa-brands fa-instagram mx-1"></i>
        </div>
    </div>
    <!-- 2nd Column -->
  <div class="col-md-2 mx-auto col-6  pt-3">
    <ul class="list-unstyled">
      <h4 style="font-weight: bolder;">SERVICES</h4>
      <li>Cloud Computing</li>
      <li>Cybersecurity</li>
      <li>Data Analytics</li>
      <li>IT Consulting</li>
      <li>Software Development</li>
    </ul>
  </div>
  <!-- 3rd Column -->
  <div class="col-md-2 mx-auto col-6  pt-3">
    <ul class="list-unstyled">
      <h6 style="font-weight: bolder;">RESOURCES</h6>
      <li>Case Studies</li>
      <li>Whitepapers</li>
      <li>Webinars</li>
      <li>eBooks</li>
      <li>Documentation</li>
    </ul>
  </div>
  <!-- 4th Column -->
  <div class="col-md-2 mx-auto col-6  pt-3">
    <ul class="list-unstyled">
      <h6 style="font-weight: bolder;">COMPANY</h6>
      <li>About Us</li>
      <li>Leadership Team</li>
      <li>Careers</li>
      <li>News & Events</li>
      <li>Contact Us</li>
    </ul>
  </div>
  <!-- 5th Column -->
  <div class="col-md-2 mx-auto col-6  pt-3">
    <ul class="list-unstyled">
      <h6 style="font-weight: bolder;">SUPPORT</h6>
      <li>Help Center</li>
      <li>Community Forum</li>
      <li>Technical Support</li>
      <li>System Status</li>
      <li>FAQs</li>
    </ul>
  </div>
        <div class="container-fluid text-center p-2">
            <p>&copy; 2023 RaaZ Khanal.  All Rights Reserved.</p>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>








</html>