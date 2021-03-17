<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    @include('layouts.navbar')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('layouts.footer')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>