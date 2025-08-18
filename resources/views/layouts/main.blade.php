<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="sHaPx1B9u1cK90kL592_-3d367nfaAJskdCPwkGM8XU"/>
    <meta name="yandex-verification" content="78156ab336769e4f"/>
    <meta name="facebook-domain-verification" content="yt9mj5tmtoxg2hc339xkhtbbakijzs" />
    <meta property="og:title" content="UMAG - Низоми автоматиксозии савдо №1 дар Қазоқистон"/>
    <meta property="og:description" content="Барномаи оддӣ ва фаҳмо барои ҳисоби мол ва фурӯш. Оғоз кунед ройгон!"/>
    <meta property="og:image" content="/img/social_umag_logo.png"/>
    <meta property="og:url" content="https://umag.kz/"/>
    <meta name="description" content="Барномаи оддӣ ва фаҳмо барои ҳисоби мол ва фурӯш. Оғоз кунед ройгон!"/>
    <title>UMAG - Низоми автоматиксозии савдо №1 дар Қазоқистон</title>
    <link rel="canonical" href="https://umag.kz/">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css?v2.512195" />
    <link rel="stylesheet" type="text/css" href="/css/layout.css?v2.012014" />
    <link rel="stylesheet" type="text/css" href="/css/normalize.css?v2.012" />
    <link rel="stylesheet" type="text/css" href="/css/knowledge-base-page.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?hl=ru" async defer></script>
    @stack('head')
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MS349KQ7');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS349KQ7"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/landing-resources/lib/swiper-4.5.0/js/swiper.min.js"></script>
    <script type="text/javascript" src="/landing-resources/lib/js.cookie.js"></script>
    <script type="text/javascript" src="/landing-resources/lib/jquery.maskedinput.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidebarBtn').click(function(){
                $('.header-sidebar ul').toggleClass('active');
                $('.sidebarBtn').toggleClass('toggle')
            })
        })
    </script>
</head>
<body style="visibility: hidden;">
    <script type="text/javascript">$(document).ready(function(){document.body.style.visibility='visible';});</script>
    <script async>window.roistatCookieDomain = 'umag.kz';</script>
    @if(!isset($side))
        <?php $side = 'mag';?>
    @endif
    @include('includes.header')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
    @include('includes.modal')
    <script type="text/javascript" src="/js/knowledge-base.js"></script>
    @stack('body')
</body>
</html>