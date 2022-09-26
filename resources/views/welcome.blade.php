<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand bg-light navbar-light">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link menu-link menu-link__active"
                               href="#">Главная страница</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link"
                               href="#">Каталог статей</a>
                        </li>
                    </ul>
                    <a class="d-flex justify-content-end " href="https://github.com/programcuser">
                        <i class="bi bi-github" style="font-size: 2rem; color: #000000;"></i>
                    </a>
                </div>
            </nav>
            <div class="hero" style="background-image: url(/img/lorenzo-herrera.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero__content text-center">
                                <div class="hero__content-tag">
                                    <a href="#">Разработчик PHP - Laravel</a>
                                </div>
                                <h2><a href="#">Тестовое задание</a></h2>

                                <div class="hero__content-tag">
                                    <a href="#">Udemy.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- @yield('hero')
            @yield('content')
            @yield('vue') -->
        </div>
    </body>
</html>
