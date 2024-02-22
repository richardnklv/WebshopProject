<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite('resources/css/app.css')
<body>
    <div id="app">

        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

@vite('resources/js/app.js')
</body>
