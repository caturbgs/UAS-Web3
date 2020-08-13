<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') &mdash; UAS Pemrograman Web 3</title>

  <!-- General CSS Files -->
  <link rel="icon" href="{{asset('assets/img/sma3.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('select2/css/select2.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert.css') }}"> --}}

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
          @include('layouts.navbar')
      </nav>
      <div class="main-sidebar sidebar-style-2">
          @include('layouts.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
          @yield('content')
      </div>
      <footer class="main-footer">
          @include('layouts.footer')
      </footer>
    </div>
  </div>

  @include('layouts.js')
</body>
</html>
