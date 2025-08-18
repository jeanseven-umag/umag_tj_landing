@extends('layouts.shop')
@section('topheader')
    <div class="top-header-container">
        <div class="top-header-content">
            <div class="container sides-padding-40">
                <div class="header-content-left">
                    <div class="header-content-left-top">
                        <div class="title" id="title">Мощные <br>инструменты для управления <br>Вашим <span class="dropdown" id="dropdown">продуктовым </span>магазином</div>
                    </div>
                    <div>
                        <div class="sticky-request-btn-wrap">
                            <a href="/request-form" class="sticky-request-btn" data-sticky-btn>Начать бесплатно</a>
                        </div>
                    </div>
                </div>
                <div class="header-content-right">
                    <div class="play-button"></div>
                    <div class="header-content-right-bar">
                        <div class="quote-text">До UMAG мы работали на калькуляторе <br>и это было не удобно во всех отношениях</div>
                        <div class="quote-author">— Айгуль Идиришова<br><span>Магазин “Султан” г. Алматы</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.play-button').on('click', function() {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [{"src": 'https://www.youtube.com/watch?v=S9bEN6fDQwk'}]
            })
        });
    </script>
@endsection