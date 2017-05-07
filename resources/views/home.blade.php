<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv='Content-Language' content='ru-RU'/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

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
                display: inline-block;
                vertical-align:middle;
                color: #fff;
                font-size: 22px;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
                padding: 10px;
                min-height: 230px;
                border-radius: 5px;
                border: 2px solid rgb(0, 180, 225);
                background-color: rgba(0, 180, 225, 0.1);
            }
            .my_links > a:hover{
                background-color: rgba(0, 180, 225, 0.5);
            }
            #main .my_links{
                margin: 2px;
            }
            #main .my_links a div{
                background-repeat: no-repeat;
                margin: auto;
                background-size: cover;
                border: 2px solid #333;
                width: 140px;
                height: 140px;
                border-radius: 70px;
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
                    <a href="/palati" class="col-xs-12 col-sm-6 col-md-4">
                        <div style="background-image: url('images/icons/Q2jPe8af_jE.jpg');"></div>
                        Палаты
                    </a>
                    <a href="/klin_razbor" class="col-xs-12 col-sm-6 col-md-4">
                        <div style="background-image: url('images/icons/medical-04_icon-icons.com_73919.png');"></div>
                        Клинический разбор
                    </a>
                    <a href="/GlavOsmotr" class="col-xs-12 col-sm-6 col-md-4">
                        <div style="background-image: url('images/icons/medical-29_icon-icons.com_73943.png');"></div>
                        Осмотр заведующего отделением
                    </a>          
                    <a href="/patients_vievs" class="col-xs-12 col-sm-6 col-md-4">
                        <div style="background-image: url('images/icons/medical-06_icon-icons.com_73937.png');"></div>
                        Список пацикентов
                    </a>     
                    <a href="/Gistologiya" class="col-xs-12 col-sm-6 col-md-4">
                        <div style="background-image: url('images/icons/elastic-cartilage-400x.jpg');"></div>
                        Гистология
                    </a>
                    <a href="/add_patient" class="col-xs-12 col-sm-6 col-md-4">
                        <div style="background-image: url('images/icons/medical-12_icon-icons.com_73944.png');"></div>
                        Создать карту пациента
                    </a>  
                </div>
            </div>
        </div>
    </body>
</html>
