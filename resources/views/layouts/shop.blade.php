@extends('layouts.main')
@section('content')
    <script type="text/javascript" src="/landing-resources/lib/jquery.paroller.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="/css/automation-page.css">
    <link rel="stylesheet" type="text/css" href="/landing-resources/lib/lightgallery/css/lightgallery.css" />
    <script src="/landing-resources/lib/lightgallery/js/lightgallery.min.js" type="text/javascript"></script>
    <script src="/landing-resources/lib/lightgallery/modules/lg-video.min.js" type="text/javascript"></script>
    @yield('topheader')
    <div class="row flat-container flat-container-first" id="umag-advantages">
        <div class="col-50">
            <div class="flat-container__left-side">
                <div class="title">Тиҷорати худро идора кунед <br class="desk-only">дар низоми вақти воқеӣ</div>
                <div class="text">
                    Лозим нест интизори ҳисоботҳои охири рӯз бошед — <br class="desk-only">дар ҳар вақт ба кабинети шахсӣ дароед, <br class="desk-only">то фурӯшҳо, анбор ва <br class="desk-only">бисёр чизҳои дигарро донед
                </div>
            </div>
        </div>
        <div class="col-50">
            <div class="flat-container__right-side">
        <div class="ch-box">
            <img src="/img/ch/ch1.png" alt="">    
        </div>
    </div>
        </div>
    </div>
    <div class="row flat-container flat-container-second">
        <div class="col-50">
            <div class="flat-container__right-side">
        <div class="ch-box">
            <img src="/img/ch/ch2.png" alt="">    
        </div>
    </div>
        </div><div class="col-50">
            <div class="flat-container__left-side">
                <div class="title">Фурӯшҳои мағозаро <br class="desk-only">фаҳмед</div>
                <div class="text">
                    Бубинед, ки фурӯшҳо дар ин ҳафта чӣ гуна буданд ва чӣ фарқ дорад аз ҳафтаи гузашта, моҳи гузашта ё <br class="desk-only">шаш моҳ пеш. <br class="desk-only"> <span class="vyyast">Фаҳмед, ки чаро ва чӣ гуна фурӯшҳои шумо зиёд ё кам мешаванд</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row flat-container flat-container-third">
        <div class="col-50">
            <div class="flat-container__left-side">
                <div class="title">Бизнеси худро <br class="desk-only">аз ҳар куҷои ҷаҳон назорат кунед</div>
                <div class="text">
                    Шумо метавонед дар ҳар вақт ба кабинети шахсии худ <br class="desk-only">бо барномаи мобилӣ (iOS / Android) ё мустақиман <br class="desk-only">аз браузери смартфон, компютер <br class="desk-only">ё планшет ворид шавед
                </div>
            </div>
        </div>
        <div class="col-50">
            <div class="flat-container__right-side">
    <div class="ch-box">
            <img src="/img/ch/ch3.png" alt="">    
        </div>
    </div>
        </div>
    </div>
    <div class="row flat-container flat-container-fourth" id="umag-revision">
        <div class="row col-50">
            <div class="title">Ревизияи муфассал, <br>бе бастани мағоза</div>
            <div class="text">
                Мо кӯмак мекунем, ки ревизияи касбӣ гузаронед. <br class="desk-only">
                Нишон медиҳем, ки чӣ гуна онро бе бастани мағоза <br class="desk-only">
                анҷом додан мумкин аст, инчунин <br class="desk-only">
                <span>усулҳои муосири инвентаризатсияро</span> <br class="desk-only">
                меомӯзем, то минбаъд осон <br class="desk-only">
                ва назорат кардани кори нуқтаи савдои худро <br class="desk-only">
                имконпазир бошад
            </div>
            <div class="flat-container-fourth-button">
                <a href="/request-form" class="button button-order-revision">Ревизияро фармоиш диҳед</a>
            </div>
        </div>
    </div>
    <div class="row flat-container flat-container-fifth" id="umag-one-day">
        <div class="col-40">
            <div class="flat-container__left-side">
                <div class="blog-title">Як рӯз аз ҳаёти муштарии Umag</div>
                <div class="blog-content">
                    <div class="blog-customer">Молдир <br>Телембаева</div>
                    <div class="blog-city">
                        <div class="blog-customer-city">Шаҳр</div>
                        <div class="blog-customer-city-name">Алмато</div>
                    </div>
                    <div class="blog-store">
                        <div class="blog-store-name">Мағозаи “Орхан”</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-60">
            <div class="flat-container__right-side"></div>
        </div>
        <div class="block-mob"></div>
        <div class="block-center">
            <div class="blog-swiper-container">
                <div class="blog-swiper">
                    <div class="owl-carousel">
                        <div class="owl-element owl-element-1" id="owl-element-1">
                            <span class="title">7:20 - Ҳисобот барои навбатдори шабона</span>
                            <span class="text">Рӯзи худро бо тайёр кардани наҳорӣ барои фарзандон оғоз мекунад ва, вақте ки фарзандон хӯрок мехӯранд, Молдир бо як пиёла қаҳва ҳисоботи навбатдори шабонаро месанҷад</span>
                        </div>
                        <div class="owl-element owl-element-2" id="owl-element-2">
                            <span class="title">7:40 - Сӯҳбат бо администратори мағоза</span>
                            <span class="text">Ӯ аллакай фарзандонро ба мактаб мебарад ва ҳамзамон бо администратори мағоза сӯҳбат мекунад. Онҳо нақшаҳои кориро барои рӯз муҳокима мекунанд</span>
                        </div>
                        <div class="owl-element owl-element-3" id="owl-element-3">
                            <span class="title">9:00 - Дар кор дар офис</span>
                            <span class="text">Молдир инчунин кори дуюм дорад, ӯ дар ширкати консалтингӣ кор мекунад. Бо ёрии системаи автоматикунонии UMAG ӯ метавонад кори асосии офисии худро ва идоракунии мағозаро якҷоя кунад</span>
                        </div>
                        <div class="owl-element owl-element-4" id="owl-element-4">
                            <span class="title">13:00-14:00 - Бизнес-ланч бо ҳамкор</span>
                            <span class="text">Дар вақти хӯроки нисфирӯзӣ Молдир қабулҳои молро барои субҳ мебинад ва инчунин ба администратори мағоза супориш медиҳад, то ки ӯ саривақт фармоишҳоро иҷро кунад ва бо таъминкунандагон шартнома кунад</span>
                        </div>
                        <div class="owl-element owl-element-5" id="owl-element-5">
                            <span class="title">20:00-21:00 - Санҷиши нишондиҳандаҳо барои рӯз</span>
                            <span class="text">Дар охири рӯз дар муҳити хонагӣ бо ноутбук нишондиҳандаҳои рӯзро месанҷад, боқимондаи анборро мебинад, фоида ҳисоб мекунад ва хулосаҳои дурустро дар асоси маълумотҳои кабинети шахсии UMAG мегирад</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="/landing-resources/lib/OwlCarousel2-2.3.4/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/landing-resources/lib/OwlCarousel2-2.3.4/owl.theme.default.min.css">
    <script type="text/javascript" src="/landing-resources/lib/OwlCarousel2-2.3.4/owl.carousel.min.js" ></script>
    <script>
        const screen = $(window).width();
    if(screen >= 768) {
        $('.owl-carousel').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop:false,
            margin:10,
            nav:true,
            navText: ["<img src='/img/automation-page/owl-prev.svg'>","<img src='/img/automation-page/owl-next.svg'>"],
            responsive:{
                0:{ items:1 },
                600:{ items:1 },
                1000:{ items:1 }
            }
        });
    } else {
        $('.owl-carousel').owlCarousel({
            animateOut:false,
            animateIn:false,
            loop:false,
            margin:10,
            nav:true,
            navText: ["<img src='/img/automation-page/owl-prev.svg'>","<img src='/img/automation-page/owl-next.svg'>"],
            responsive:{
                0:{ items:1 },
                600:{ items:1 },
                1000:{ items:1 }
            }
        });
    }

    // Owl onChange
    $('.owl-carousel').on('changed.owl.carousel', function(event) {
        if(event.relatedTarget.current() === 0) {
            $('.col-60').addClass('bg1');
            $('.col-60').removeClass('bg2 bg3 bg4 bg5');
        }
        if(event.relatedTarget.current() === 1) {
            $('.col-60').addClass('bg2');
            $('.col-60').removeClass('bg1 bg3 bg4 bg5');
        }
        if(event.relatedTarget.current() === 2) {
            $('.col-60').addClass('bg3');
            $('.col-60').removeClass('bg1 bg2 bg4 bg5');
        }
        if(event.relatedTarget.current() === 3) {
            $('.col-60').addClass('bg4');
            $('.col-60').removeClass('bg1 bg2 bg3 bg5');
        }
        if(event.relatedTarget.current() === 4) {
            $('.col-60').addClass('bg5');
            $('.col-60').removeClass('bg1 bg2 bg3 bg4');
        }
    });
    </script>
@stop