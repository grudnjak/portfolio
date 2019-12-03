<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    

 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  
  <!-- Icon Font CSS -->
  <link rel="stylesheet" href="{{ asset('/css/fontawesome.min.css') }}">
  
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('/css/plugins.css') }}">
  
  <!-- Helper CSS -->
  <link rel="stylesheet" href="{{ asset('/css/helper.css') }}">
  
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  
  <!-- Modernizer JS -->
  <script src="{{ asset('/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    
  
</head>
<body>
    
        <div class="main-wrapper">
                
        @include('inc.navbar')
       
        @yield('content')

       
        @include('inc.footer')
    
    </div>


    <!-- jQuery JS -->
<script  src="/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script  src="/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script  src="/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="/js/plugins.js"></script>
<!-- Main JS -->
<script  src="/js/main.js"></script>

</body>
</html>
