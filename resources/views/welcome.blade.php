<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="{{asset('css/topnav.css')}}">
    </head>
    <body>
    <div class="topnav">

        <ul>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register')}}">Register</a></li>
        </ul>

    </div>
    </body>

</html>