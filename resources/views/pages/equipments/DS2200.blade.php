@extends('layouts.eq')
@section('product')
<div class="product product_002">
    <div class="container sides-padding-40">
        <div class="row col-50 col-mob-100">
            <h1 class="product__title">
                <span>Сканери штрих-кодҳо</span> ZEBRA DS2200
            </h1>
            <div class="product__mob-image no-desk"></div>
            <p class="product__description">
                Таносуби беҳтарини нарх ва сифат барои қонеъ кардани талаботи сарфакорона - бе зарар ба
                самаранокӣ ва функсионалӣ, ки барои савдои чакана зарур аст.
            </p>
            <div class="overview play-button">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="48" height="48">
                    <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" style="fill: rgb(0, 0, 0);"></path>
                </svg>
                <h2>Шарҳи видеоиро бинед</h2>
            </div>
            <div class="row row_middle product__bottom">
                <div class="col-grow product__price">
                    35 000 тг
                    <!-- change price to tajik some when need -->
                </div>
                <div class="col-auto">
                    <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0002"
                            data-caption="Харидани мол: Сканери штрих-кодҳо Zebra DS2200">Харидан</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.play-button').click(function() {
        $(this).lightGallery({
            youtubePlayerParams: {
                autoplay: 0,
                controls: 1
            },
            dynamic: true,
            dynamicEl: [{"src": 'https://www.youtube.com/watch?v=_IBEXeW7dFA'}]
        })
    });
</script>
@endsection
@section('table')
    <table>
        <tr><th colspan="2">Хусусиятҳои асосӣ</th></tr>
        <tr><td>Навъи сканер</td><td>Лазерӣ</td></tr>
        <tr><td>Суръати сканеркунӣ</td><td>100 скан/с</td></tr>
        <tr><td>Масофаи сканеркунӣ</td><td>420 мм</td></tr>
        <tr><td>Индикатсия</td><td>Индикатсияи садоӣ</td></tr>
        <tr><td>Зидди зарба ҳангоми афтидан</td><td>Афтидан аз баландии 1,5 м</td></tr>
        <tr><th colspan="2">Андозаҳо</th></tr>
        <tr><td>Андозаҳо</td><td>152 x 60,4 x 80,5 мм</td></tr>
        <tr><td>Вазн</td><td>146 г</td></tr>
    </table>
@endsection

