<!Doctype html>
<html>
    <head>
        @include('includes.head1')
    </head>
    <body>
        <div class="container">
            <header>
                @include('includes.header')
            </header>
            <div id="main" class="row">
                @yield('content')
            </div>
            <footer>
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>