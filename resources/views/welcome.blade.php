<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Wedding Booking App</title>

  <link href="{{ asset('build/bundle.css') }}" rel="stylesheet" />

  <!-- <link href="http://localhost:3000/build/bundle.css" rel="stylesheet"> -->
  <script src="{{ asset('build/bundle.js') }}" defer></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <noscript>
    <strong>We're sorry but notus-svelte doesn't work properly without
      JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div id="app" token_name="{{ csrf_token() }}"></div>
</body>

</html>