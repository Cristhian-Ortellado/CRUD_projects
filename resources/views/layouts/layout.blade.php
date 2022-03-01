<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title','My App')</title>
</head>

<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between">
    <header>
        @include('layouts.nav')
        @include('layouts.validation-errors')
        @include('layouts.session-status')
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-white text-center py-3 shadow text-black-50">
         {{ config('app.name') }} | Copyright @ {{ date('Y') }}
    </footer>
</div>
</body>
</html>
