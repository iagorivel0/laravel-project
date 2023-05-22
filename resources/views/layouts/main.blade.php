<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="./css/styles.css">

        <!-- Scripts -->
        <script src="./js/scripts.js"></script>
    </head>
    <body class="antialiased">
      @yield('content')
      <footer>
        <p>HDC Events &copy; 2023</p>
      </footer>
    </body>
</html>
