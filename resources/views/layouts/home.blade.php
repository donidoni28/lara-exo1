<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="antialiased">
    @include('partials.header')
    <div class="container mx-auto">
        @include('partials.path')
        @yield('content')
    </div>
    @include('partials.footer')
</body>

</html>
