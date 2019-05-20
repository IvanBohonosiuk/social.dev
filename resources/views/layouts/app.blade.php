<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title>@yield('title')</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main Font -->
    <script src="{{ url('js/webfontloader.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>
    <script>
        window.Laravel = {'csrfToken': '{{csrf_token()}}' };
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-grid.css') }}">

    {{--<!-- Theme Styles CSS -->--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/theme-styles.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/blocks.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/fonts.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Lightbox popup script-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/magnific-popup.css') }}">

    @yield('styles')

</head>
<body>
    <div id="app">

        @if(Auth::check())
            <init :auth="{{ Auth::user() }}"></init>

            @include('parts.left_menu')
{{--            @include('parts.right_menu')--}}

        @endif

        @include('parts.header')

        <div class="header-spacer"></div>

        @include('parts.bottom_header')

        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>

        @include('parts.popups')

        @yield('popups')

    </div>


    <!-- jQuery first, then Other JS. -->
    <script src="{{ url('js/jquery-3.2.0.min.js') }}"></script>
    <!-- Js effects for material design. + Tooltips -->
    <script src="{{ url('js/material.min.js') }}"></script>
    <!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
    <script src="{{ url('js/theme-plugins.js') }}"></script>
    <!-- Init functions -->
    <script src="{{ url('js/main.js') }}"></script>

    <!-- Select / Sorting script -->
    <script src="{{ url('js/selectize.min.js') }}"></script>

    <!-- Lightbox popup script-->
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>

    @yield('scripts')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>