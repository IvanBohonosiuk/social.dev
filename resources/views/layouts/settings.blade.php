<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <title>Your Account - Settings</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main Font -->
    <script src="/js/webfontloader.min.js"></script>
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
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">

    <!-- Theme Styles CSS -->
    {{--<link rel="stylesheet" type="text/css" href="css/theme-styles.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="css/blocks.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="css/fonts.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">


    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="/css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-select.css">


</head>
<body>

    <div id="app">

        @if(Auth::check())
            <init :auth="{{ Auth::user() }}"></init>

            @include('parts.left_menu')
            {{--@include('parts.right_menu')--}}

        @endif

        @include('parts.header')

        <div class="header-spacer header-spacer-small"></div>

        @include('parts.bottom_header_settings')

        <div class="container">
            <div class="row">

                @yield('content')

                @include('parts.settings_left_menu')

            </div>
        </div>

        @if(Session::has('success'))
            <nots :message="{{ Session::get("success") }}"></nots>
        @endif
    </div>

    <!-- jQuery first, then Other JS. -->
    <script src="/js/jquery-3.2.0.min.js"></script>
    <!-- Js effects for material design. + Tooltips -->
    <script src="/js/material.min.js"></script>
    <!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
    <script src="/js/theme-plugins.js"></script>
    <!-- Init functions -->
    <script src="/js/main.js"></script>

    <!-- Select / Sorting script -->
    <script src="/js/selectize.min.js"></script>

    <!-- Datepicker input field script-->
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.min.js"></script>

    <script>
        jQuery( document ).ready(function ($) {
            $(".js-sidebar-open").on('click', function () {
                $(this).toggleClass('active');
                $(this).closest($('.fixed-sidebar')).toggleClass('open');
                return false;
            } );
        });
    </script>


    <script src="{{ mix('js/app.js') }}"></script>

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.4.1/jquery.noty.js" type="text/javascript"></script>--}}


</body>
</html>