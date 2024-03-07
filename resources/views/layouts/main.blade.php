<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header');
    <main id='app'>
        <div class='container'>
            @yield('main-content')
        </div>
    </main>

</body>

</html>
