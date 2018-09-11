




































<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cohort Technologies</title>

        {{-- Animation CSS --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
        integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
        crossorigin="anonymous">

        {{--  Fonts  --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src=""></script>

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                color: #fffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body{
                /* background-image: linear-gradient(to bottom, #063172, #575e94, #9090b6, #c8c6da, #ffffff); */
                background-image: linear-gradient(to bottom, #b3d4fc, #ccddfd, #e1e7fd, #f2f3fe, #ffffff);
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
                color: #b3d4fc;
                text-shadow: 3px 3px 3px #555555;
            }

            a {
                color: #b3d4fc;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover {
                color: #0000aa;
            }

            .coming-soon{
                color: #ffffff;
                text-shadow: 1px 1px 1px #555555;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="particles-js" class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                {{-- stats - count particles --}}
                <div class="count-particles">
                    <span class="js-count-particles"></span>
                </div>
                <div class="title m-b-md">
                    Welcome to Cohort Technologies
                </div>

                <div class="coming-soon  animated bounceIn delay-10s" style="text-align: center;">
                   <span style="font-size: 45px;">Coming Soon!!!</span> <br />
                   <span style="font-size: 25px;">Application is still being developed.</span>
                </div>

                <div class="links" style="text-align: center; margin: 50px;">
                   <span style="font-size: 25px;"><a href="/show">view inner pages</a></span>
                </div>
            </div>
        </div>
    </body>
</html>
