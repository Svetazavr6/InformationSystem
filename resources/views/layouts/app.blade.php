<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Styles 
    <link href="/css/app.css" rel="stylesheet">-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <!--
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        Информационная система врача
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/add_patient') }}">Добавление пациента</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/GlavOsmotr') }}">Осмотр главного врача</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/pervicka') }}">Первичка</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/ListNaznacheniy') }}">Лист назначений</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/Soglasie') }}">Согласие</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/dannie') }}">dannie</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
-->
        <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="/home">Информационная система лечащего врача</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">   <!--class="active"-->
        <li ><a href="/patients_vievs">Список пациентов</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Действия с пациентом<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/add_patient">Завести медицинскую карту пациента</a></li>
              <li class="divider"></li>
            <li><a href="/dannie">Заполнить данные пациента</a></li>
              <li class="divider"></li>
              <li><a href="/analizi">Анализы</a></li>
              <li class="divider"></li>
            <li><a href="/pervicka">Первичка</a></li>
            <li class="divider"></li>
            <li><a href="/GlavOsmotr">Осмотр главного врача</a></li>
            <li class="divider"></li>
            <li><a href="/ListNaznacheniy">ЛИСТ НАЗНАЧЕНИЙ №1</a></li>
            <li><a href="/ListNaznacheniy2">ЛИСТ НАЗНАЧЕНИЙ №2</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Ссылка</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Войти</a></li>
            <li><a href="#">Зарегистрироваться</a></li>
            <li><a href="#">Выйти</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
