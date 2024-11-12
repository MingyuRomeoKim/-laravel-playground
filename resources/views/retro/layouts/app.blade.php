<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Default Title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/retro/bootstrap.css'])

</head>
<body>
    <style>
        body {
            min-width: 900px;
        }

        .bordered {
            color: #ffffff;
            padding: 8.5px 13px 8.5px 14px;
            margin: 8.5px 4px 8.5px 3px;
            background-color: transparent;
            border: 2px solid #bbbbbb;
        }

        .app-icon {
            -webkit-filter: grayscale(1) saturate(9.4);
        }

        .app-icon-pixelated {
            image-rendering: pixelated;
            width: 20px;
            height: 20px;
        }

        .categories-list li:hover {
            background-color: #00aaaa;
            color: white;
        }

        .app-line div:hover {
            background-color: #00aaaa;
        }

        .navbar-collapse {
            padding: 0px;
        }

        .right-border {
            color: #ffffff;
            border-right: 2px solid #bbbbbb;
        }

        .item-list {
            padding: 0px;
            height: 24px;
            overflow: hidden;
        }

        .navbar-fixed-bottom {
            height: 24px;
            color: black;
            padding: 2px;
            padding-right: 20px;

        }

        .navbar-fixed-bottom a {
            color: black;
        }

        .main-container {
            padding-bottom: 30px;
            padding-top: 30px;
        }

        a:first-letter {
            color: #fefe54 !important;
        }

    </style>

    <nav id="wrapper">

        <!-- Fixed navbar -->
        @include('retro/layouts/navbar')


        <!-- /.search-row -->
        <div class="main-container">
            @yield('content')
        </div>
        <!-- /.main-container -->


        <!-- Modal sharing -->
        @include('retro/modals/sharing')

        <!-- Modal about -->
        @include('retro/modals/about')

        <nav class="navbar navbar-default navbar-fixed-bottom text-right">


            &copy; <strike>1970</strike> 2024 <a href="http://appstor.io">AppStorio</a>


        </nav>
        <!-- /.footer -->

        <!-- Le javascript
        ================================================== -->

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//appstor.io/static/maintheme/assets/bootstrap/js/bootstrap.min.js"></script>


        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-2422930-57', 'auto');
            ga('send', 'pageview');

        </script>
    </nav>
</body>
</html>
