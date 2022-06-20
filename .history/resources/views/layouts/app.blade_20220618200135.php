<html>
    @include ('common.header')
    <head>
        <title>@yield('title')</title>
    </head>
    <body>


        <div class="container">
            @yield('content')
        </div>
    </body>
</html>