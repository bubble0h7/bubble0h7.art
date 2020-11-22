<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="Online store by bubble0h7_art">
        <meta name="keywords" content="artist, illustrator, nz, prints, stickers, magnets, mousepads">

        <title>bubble0h7.art</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('js/ecwid-customisation.js') }}"></script>
    </head>
    <body>
        <script data-cfasync="false" 
            data-cols="5"
            type="text/javascript" 
            src="https://app.ecwid.com/script.js?39913012&data_platform=code" 
            charset="utf-8">
        </script>
        <script>Ecwid.init();</script>

        <nav>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('shop')}}"><img id="header_logo" src="{{ asset('img/logo-2020-transparent.png') }}" alt="bubble0h7"/></a>
                </div>
                <div class="col-sm-6">
                        <ul id="category_nav">
                            <li>
                                <div id="my-search-39913012"></div>
                                <div>
                                    <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?39913012&data_platform=code&data_date=2020-11-22" charset="utf-8"></script>
                                    <script type="text/javascript"> xSearch("id=my-search-39913012"); </script>
                                </div>
                            </li>
                            <li>
                                    <div id="my-cart-39913012" 
                                            data-custom-icon-url="https://fay.geek.nz/uploads/files/custom-bag-icon.png" 
                                            data-layout="BIG_ICON_TITLE_SUBTOTAL"
                                            data-responsive="FALSE" 
                                            data-show-buy-animation="TRUE" 
                                            class="ec-cart-widget">
                                        <script 
                                            data-cfasync="false" 
                                            type="text/javascript" 
                                            src="https://app.ecwid.com/script.js?39913012&data_platform=code&data_date=2020-11-22" charset="utf-8"></script>
                                        <script type="text/javascript">Ecwid.init();</script>
                                    </div>
                            </li>
                            <li>
                                <a href="{{route('shop.category.all')}}" title="All Products" data-catid="64746322">< <span class="hover_text_red text_white">all products</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('shop.category.prints')}}" title="Prints" data-catid="64743537">< <span class="hover_text_orange text_white">prints</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('shop.category.magnets')}}" title="Magnets" data-catid="64743533">< <span class="hover_text_yellow text_white">magnets</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('shop.category.stickers')}}" title="Stickers" data-catid="64743532">< <span class="hover_text_green text_white">stickers</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('shop.category.other')}}" title="Other" data-catid="64742798">< <span class="hover_text_lightblue text_white">other</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('shop.category.limited')}}" title="Last Chance!" data-catid="66208540">< <span class="hover_text_purple text_white">last chance</span> /></a>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        @yield('content')
        
        <footer>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('shop')}}"><img id="footer_logo" src="{{ asset('img/logo-2020-transparent.png') }}" alt="bubble0h7"/></a>
                </div>
                <div class="col-sm-6">
                        <ul id="footer_nav">
                            <li>
                                All prices are in <a href="https://www.xe.com/currencyconverter/convert/?Amount=1&From=NZD&To=USD" target="_blank" title="Covert NZD"><span class="hover_text_red text_white">NZD</span></a>.
                            </li>
                            <li>
                                <a href="{{route('shop.about')}}" title="About">< <span class="hover_text_orange text_white">about</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('shop.faq')}}" title="FAQ">< <span class="hover_text_yellow text_white">faq</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('links')}}" title="Social Media + Links">< <span class="hover_text_green text_white">social media + links</span> /></a>
                            </li>
                            <li>
                                <a href="{{route('tipjar')}}" title="Tip Jar">< <span class="hover_text_lightblue text_white">tip jar</span> /></a>
                            </li>
                            <li>
                                Contact me: <a href="mailto:bubble0h7.art@gmail.com" title="bubble0h7.art@gmail.com"><span class="hover_text_purple text_white">bubble0h7.art@gmail.com</span></a>
                            </li>
                        </ul>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}">
        
        </body>          
</html>
