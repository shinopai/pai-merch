<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config("app.name", "Laravel") }}</title>

  <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

  <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>

<body>
  <!-- header -->
  @include('partial._header')

  <main class="main wrap">
    @yield('content')
  </main>
</body>

</html>
