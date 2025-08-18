<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:title" content="UMAG - Система автоматизации торговли №1 в Казахстане"/>
    <meta property="og:description" content="Простая и понятная программа учета товаров и продаж. Начать бесплатно!"/>
    <meta property="og:image" content="/img/social_umag_logo.png"/>
    <meta property="og:url" content="https://umag.kz/"/>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    @yield('page-css-link')
    <style>
        .container-nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .container-nav:before, .container-nav:after  {
            display: none;
        }
        .is-invalid {
            border: 1px solid #f00;
        }
        ul.navbar-menu--list{
            display: flex;
            align-items: center;
            justify-content: space-between;
            line-height: inherit;
            list-style-type: none;
            padding: 0;
            margin: auto;
            font-size: 14px;
        }
        li.navbar-menu--item{
            margin-right: 10px;
        }
        li.navbar-menu--item:last-child{
            margin-right: 0;
        }
        a.navbar-menu--link{
            color: #9d9d9d;
        }
        a.navbar-menu--link:hover, a:focus, a:active{
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>

@if (Auth::check())
<nav class="navbar navbar-inverse">
    <div class="container container-nav">
        <a class="navbar-brand" href="{{ URL::previous() }}">UmagAdmin</a>
        <ul class="navbar-menu--list">
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/faq-panel">Саволҳо-ҷавобҳо</a></li>
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/knowledge-panel">Дастурамал</a></li>
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/video-panel">Дарсҳои видеоӣ</a></li>
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/amo">Мизоҷони AmoCRM</a></li>
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/amo/queries">Дархостҳои AmoCRM</a></li>
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/article-integration">Боти Telegram</a></li>
            <li class="navbar-menu--item"><a class="navbar-menu--link" href="/kontakty/table">Ширкатҳо</a></li>
        </ul>
        <a class="btn btn-primary" href="/logout">Баромадан</a>
    </div>
</nav>
@endif
<main class="container">
    @yield('content')
</main>
@yield('page-js-files')
@yield('page-js-script')
</body>
</html>
