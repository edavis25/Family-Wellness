<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
                background-color: #f2f2f2;
            }
            .wrapper {
                padding: 20px;
                display: block;
                max-width: 700px;
                margin-left: auto;
                margin-right: auto;
                background-color: #fff;
            }
        </style>
        @yield('styles')
    </head>
    <body>
        <div class="wrapper">
            @yield('content')
        </div>
    </body>
</html>