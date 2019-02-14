<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Orbiter</title>
        <link rel="shortcut icon" href="/favicon.ico">
        <link href="/main.26c8eed4e5bf0211a5a8.css" rel="stylesheet">



    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div id="app"></div>
                <script type="text/javascript" src="/main.dde06e74f53d38b2cd83.js"></script>
        </div>
    </body>
</html>
