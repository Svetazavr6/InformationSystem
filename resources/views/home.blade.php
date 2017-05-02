<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                padding: 0;
                margin: 0;
                background-image: url("images/bg1.jpg");
                background-size: cover;
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
                margin: 0;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .my_links > a{
                color: #fff;
                font-size: 12px;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                background-color: rgba(1);
            }
            #main .my_links{
                margin: 2px;
            }
            #main .my_links a div{
                padding: 10px;
                display: inline-block;
                width: 20%;
                height: 100px;
                outline: 1px solid red;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div id="main" class="content">

                <div class="my_links">
                    <a href="/palati"><div style="background-image: url('/images/normal_999.jpg');">Палаты</div></a>
                    <a href="/klin_razbor"><div>Клинический разбор</div></a>
                    <a href="/GlavOsmotr"><div>Осмотр заведующего отделением</div></a>          
                </div>
                <div class="my_links">
                    <a href="/patients_vievs"><div>Список пацикентов</div></a>     
                    <a href="/Gistologiya"><div>Гистология</div></a>
                    <a href="/add_patient"><div style="background-image: url(/images/286-300x199.jpg);">Создать карту пациента</div></a>  
                </div>
            </div>
        </div>
    </body>
</html>
