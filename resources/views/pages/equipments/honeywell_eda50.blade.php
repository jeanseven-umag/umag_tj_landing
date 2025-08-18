@extends('layouts.eq')
@section('product')
    <div class="product product_009">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    <span>Терминал сбора данных</span> Honeywell EDA50
                </h1>
                <div class="product__mob-image no-desk">
                    <span class="product__mob-discount">-9%</span>
                </div>
                <p class="product__description">
                    Терминал сбора данных – это мобильный компьютер нового поколения, разработанный на базе ОС Android.
                    Устройство идеально подходит для решения таких задач, как ревизия, инвентаризация, оприходование
                    товаров, приёмка товаров и управление складскими запасами.
                </p>
                <div class="overview play-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="48" height="48">
                        <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" style="fill: rgb(0, 0, 0);"></path>
                    </svg>
                    <h2>Посмотреть обзор</h2>
                </div>
                <div class="product__discount-tag">Особая цена - только до конца месяца</div>
                <div class="row row_middle product__bottom">
                    <div class="col-grow product__price">
                        <span class="product__price-old">186 000 тг</span>
                        169 000 тг
                    </div>
                    <div class="col-auto">
                        <div class="product__discount">
                            <span>-9%</span>
                        </div>
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0009"
                                data-caption="Купить товар: Терминал сбора данных Honeywell EDA50">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.play-button').on('click', function() {
        $(this).lightGallery({
            youtubePlayerParams: {
                autoplay: 1,
                controls: 1
            },
            dynamic: true,
            dynamicEl: [{"src": 'https://www.youtube.com/watch?v=4zai_8qDFv0'}]
        })
    });
    </script>
@endsection
@section('table')
    <table>
        <tr><th colspan="2">Основные характеристики</th></tr>
        <tr><td>Экран</td><td>Цветной, тачскрин, HD(1280 × 720)</td></tr>
        <tr><td>Сканер</td><td>1D, 2D , HI2D Imager</td></tr>
        <tr><td>Поддержка</td><td>Wi-fi, Bluetouth</td></tr>
        <tr><td>Аккумулятор</td><td>Li-Ion, 3.8V, 4000mAh</td></tr>
        <tr><td>RAM / ROM</td><td>2 ГБ / 8 ГБ</td></tr>
        <tr><td>Время работы</td><td>12 часов</td></tr>
        <tr><th colspan="2">Габариты</th></tr>
        <tr><td>Размеры</td><td>164 x 73 x 24,5 мм</td></tr>
        <tr><td>Вес</td><td>300 г</td></tr>
    </table>
@endsection

