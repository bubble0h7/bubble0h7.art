<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>bubble0h7.art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <a href="{{route('home')}}"><img id="links_logo" src="{{ asset('img/logo-2020-transparent.png') }}" alt="bubble0h7"/></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="links">
                        <ul id="link_nav">
                                <li>
                                    <a href="{{route('shop')}}" title="Shop">< <span class="hover_text_red text_white">shop</span> /></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bubble0h7_art/" title="Instagram">< <span class="hover_text_orange text_white">instagram</span> /></a>
                                </li>
                                <li>
                                     <a href="https://twitter.com/bubble0h7_art" title="Twitter">< <span class="hover_text_yellow text_white">twitter</span> /></a>
                                </li>
                                <li>
                                    <a href="{{route('tipjar')}}" title="Tip Jar">< <span class="hover_text_green text_white">tip jar</span> /></a>
                                </li>
                                <li>
                                    <a href="https://forms.gle/ErABnRJWtWL9Lv9L6" title="Commission Enquiry Form">< <span class="hover_text_lightblue text_white">commissions</span> /></a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
