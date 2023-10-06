<!DOCTYPE html>
<html lang="en">

  <head>
    @include('includes.head')
  </head>

  <body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">

      @include('includes.header')
      <!-- /.search form -->
      @yield('content')

      @include('includes.footer')