<html>
    @include ('common.header')
    <head>
        <title>@yield('title')</title>
    </head>
    <body>



            @yield('content')


        @include('common.footer')
    </body>
</html>