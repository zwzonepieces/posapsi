<!DOCTYPE html>
<!-- © 2022 Copyright: RizkiLutfiandi -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/logo.png" type="image/png">

        <title>POS UBSI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Ubuntu:ital,wght@1,300&family=Zen+Loop&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-size: cover;
                background-image: url("/img/ubsi.png");
                color: #636b6f;
                font-family: 'Macondo', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

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
                color: #ffff;
                opacity: .50;
                padding: 0 20px;
                font-family: 'Macondo', sans-serif;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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

                </div>

                <div class="links">
                    <a href="https://instagram.com/onerltf">Rlutfi</a>
                    <a href="https://instagram.com/hotchoco_27">Chelsean</a>
                    <a href="https://instagram.com/eeeciqarsaaaaa">Meisy</a>
                    <a href="https://instagram.com/Rsklynii">Riska</a>
                    <a href="https://instagram.com/nvdea.agdptri">Novadea</a>
                    <a href="https://instagram.com/soniafaradella_27">SoniaF</a>
                </div>
            </div>
        </div>
    </body>
</html>
<!-- © 2022 Copyright: RizkiLutfiandi -->
