<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Webtheory') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('css')



</head>
<body>
    <div id="app" class="bg-gray-200">

        <x-navigation></x-navigation>

        <main>
            @yield('content')
        </main>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    
    @auth
        <script>
            var userId = '{{ Auth::user()->id }}';
            Echo.private('App.User.' + userId)
                .notification((notification) => {
                    console.log(notification.type);
                    // flash({type: 'success', message: 'Message: ' + notification.message + '\r\nAction: ' + notification.action});
            });
        </script>
    @endauth

    @yield('scripts')

</body>
</html>
