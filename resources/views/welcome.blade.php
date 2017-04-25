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
            #hat{
                padding: 50px 0 50px 0;
                background-color: rgba(0, 0, 0, 0.3);
                width: 100wv;
                vertical-align: text-bottom;
                color: white;
                border-radius: 15px;
                text-shadow: #2266ff 0 0 4px;
            }
            #hat div{
                 vertical-align: middle;
            }
            #main .links{
                margin: 15px;
            }
            #main .links a{
                border-bottom: 4px solid transparent;
                padding: 10px;
            }
            #main .links a:hover{
                border-bottom-color: #4499ff;
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
                <div id="hat">
                    <h1><big>Информационная система лечащего врача</big></h1>
                </div>

                <div class="links">
                    <a href="/patients_vievs">Список пациентов</a>
                    <a href="/dannie">Данные</a>
                    <a href="/klin_razbor">Клинический разбор</a>
                    <a href="/GlavOsmotr">Осмотр главного врача</a>
                              
                </div>
                <div class="links">
                    <a href="/pervicka">Первичка</a>
                    <a href="/palati">Палаты</a>   
                    <a href="/ListNaznacheniy">Лист назначений №1</a>
                    <a href="/ListNaznacheniy2">Лист назначений №2</a>
                </div>
                <div class="links">    
                    <a href="/operacia">Назначение операции</a>
                    <a href="/Gistologiya">Гистология</a>
                    <a href="/add_patient">Создать карту пациента</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
