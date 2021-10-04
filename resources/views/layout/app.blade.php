<html>
    <head>
        <title>My Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style>
            body{
                background-color: rgb(255, 255, 255);
            }
            .menu{
                padding: 0px;
                margin: 0px;
                display: flex;
                justify-content: space-between;
                background: #cecece;
            }
            a{
                text-decoration: none;
                color: inherit;
            }
            .menu li:hover {
                background: red;
                color: #fff;
            }
            .menu li {
                display: inline;
                padding: 20px 30px;
                color: #4f4f4f;
                font-size: 20px;
                cursor: pointer;
            }
            header{
                margin:  0px auto;
                width: 50%;
            }
            footer{
                margin: 0px auto;
                width: 50%;
            }

            section{
                margin: 50px 0px;
                display: flex;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <header>
            <nav>
                <ul class="menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </header>

        <div class="col-md-5 mt-5 mx-auto">
            <div class="mt-2">
                @if ( $message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                @if ( $message = Session::get('error'))
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @endif

            </div>
            @yield('content')
        </div>

        <footer>
            <ul class="menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </footer>
    </body>
</html>
