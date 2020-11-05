<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #464647;
                color: #f0f0f0;
                font-family: 'Short Stack', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            h1 {
                font-family: 'DM Mono', monospace;
                font-size: 84px;
            }

            .links > a {
                color: #f0f0f0;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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

            <div class="content">
                <h1>bubble0h7</h1>

                <div class="links">
                    <a href="{{route('shop')}}">Shop</a>
                    <a href="{{route('portfolio')}}">Portfolio</a>
                    <a href="https://www.instagram.com/bubble0h7_art/" target="_blank">Instagram</a>
                    <a href="https://twitter.com/bubble0h7_art" target="_blank">Twitter</a>
                    <a href="https://www.redbubble.com/people/bubble0h7" target="_blank">Redbubble</a>
                </div>
            </div>
        </div>
    </body>
</html>
