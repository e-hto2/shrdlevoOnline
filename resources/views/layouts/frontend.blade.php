<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- https://s1463002.github.io/     -->
    <meta charset="UTF-8">
    <title>Web Game For Studying Language Evolution.</title>
    @yield('header-section')
</head>
<body>
@yield('content')
@yield('footer-section')
</body>
</html>