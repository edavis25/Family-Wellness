<!DOCTYPE html>
<html lang="{{ config('app.locale') ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#4C8BE1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    {{-- Styles --}}
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>
        @section('title')
            {{ config('app.name') }}
        @show
    </title>
</head>
<body>
    <div id="app">
        {{-- Navbar --}}
        @section('navbar')
            @include('layout.navbar')
        @show

        {{-- Hero --}}
        @yield('hero')

        {{-- Body --}}
        <section>
            @yield('content')
        </section>

        {{-- Footer --}}
        @include('layout.footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('jsEmbed')
</body>
</html>
