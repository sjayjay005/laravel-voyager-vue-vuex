<!DOCTYPE html>
<html lang="es_MX">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @yield('meta')

  {{-- DNS Prefetch --}}
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="dns-prefetch" href="//ajax.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//themes.googleusercontent.com">
  <link rel="dns-prefetch" href="//maps.gstatic.com">
  <link rel="dns-prefetch" href="//maps.google.com">
  <link rel="dns-prefetch" href="//maps.googleapis.com">
  <link rel="dns-prefetch" href="//mt0.googleapis.com">
  <link rel="dns-prefetch" href="//mt1.googleapis.com">
  <link rel="dns-prefetch" href="//use.fontawesome.com">
  <link rel="dns-prefetch" href="//cdn.polyfill.io">

  {{-- Google Font --}}
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" lazyload async defer>

  {{-- Font Awesome --}}
  {{-- <script src="https://use.fontawesome.com/releases/v5.0.1/js/all.js" async defer></script> --}}

  {{-- Polyfill --}}
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js" async defer></script>

  {{-- Local Styles --}}
  <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">

  {{-- APP --}}
  @yield('window-scripts')

</head>
<body>

  {{-- Vue App --}}
  <div id="app"></div>
  {{-- /Vue App --}}

  <script src="{{ asset(mix('js/manifest.js')) }}"></script>
  <script src="{{ asset(mix('js/vendor.js')) }}"></script>
  <script src="{{ asset(mix('js/app.js')) }}"></script>

  @yield('more-scripts')

</body>
</html>
