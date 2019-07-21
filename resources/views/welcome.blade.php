<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyUTAR LKC FES ANNOUCMENT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background: #1e7a90;*/
                /*background: #0078a4;*/
                background: #00c17f;
                color: #fff;
                font-family: "Oswald", Arial, sans-serif;
                text-align: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                width: 90%;
                margin: 0 auto;
                display: inline-block;
  vertical-align: top;
  width: 100px;
  height: 34px;
  line-height: 36px;
  text-transform: uppercase;
  text-decoration: none;
  color: #fff;
  letter-spacing: 0.1em;
  text-align: center;
  font-size: 0.8rem;
  margin: 10px;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to MyUTAR LKC FES ANNOUCMENT WEBSITE
                </div>

                <div class="links">
                    <a href="{{ url('/admin') }}">Enter</a>
                </div>
            </div>
        </div>
    </body>
</html>
