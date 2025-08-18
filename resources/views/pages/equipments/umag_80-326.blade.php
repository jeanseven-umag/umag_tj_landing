@extends('layouts.eq')
@section('product')
    <div class="product product_008">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    <span>Принтери чекҳо</span> Rongta RP-326
                </h1>
                <div class="product__mob-image no-desk">
                    <span class="product__mob-discount">-8%</span>
                </div>
                <p class="product__description">
                    Принтери универсалии чекӣ RP-326, дорои муносибати оптималии нарх ва сифат буда, бо таҷҳизот ва нармафзори гуногун мувофиқ аст.
                    Ҳузури ҳамаи портҳои маъмул барои пайваст кардани принтер ба компютер имкон медиҳад, ки онро ба инфрасохтори ҳар гуна корхонаи савдо ва соҳаи хизматрасонӣ ворид намоед.
                </p>
                <div class="overview play-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="48" height="48">
                        <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" style="fill: rgb(0, 0, 0);"></path>
                    </svg>
                    <h2>Шарҳи видеоиро бинед</h2>
                </div>
                <div class="product__discount-tag">Нархи махсус - танҳо то охири моҳ</div>

                <div class="row row_middle product__bottom">
                    <div class="col-grow product__price">
                        <span class="product__price-old">48 000 тг</span>
                        44 000 тг
                    </div>
                    <div class="col-auto">
                        <div class="product__discount">
                            <span>-8%</span>
                        </div>
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0008"
                                data-caption="Харидани мол: Принтери чекҳо UMAG 80-326 USL (80мм)">Харидан</button>
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
                dynamicEl: [{"src": 'https://www.youtube.com/watch?v=kTA4nfs461k'}]
            });
        });
    </script>
@endsection
@section('table')
    <table>
        <tr><td>Технологияи чоп</td><td>Чопи термӣ</td></tr>
        <tr><td>Қарор</td><td>203 dpi</td></tr>
        <tr><td>Суръати чоп</td><td>250 мм/с</td></tr>
        <tr><td>Макс. паҳнои чоп</td><td>72 мм</td></tr>
        <tr><td>Қатъкунандаи автоматӣ</td><td>нест</td></tr>
        <tr><td>Интерфейси идоракунӣ</td><td>Ethernet; USB; COM; Қуттии пул / Занг (RJ11, 24V)</td></tr>
        <tr><td>Штрих-кодҳои чопшаванда</td><td>UPC-A, UPC-C, EAN-13, EAN-8, CODE39, ITF, CODEBAR, CODE93, CODE128</td></tr>
        <tr><td>Драйверҳо</td><td>Windows 2000/Vista/XP/7, Linux ва дигарҳо</td></tr>
        <tr><td>Навъи коғаз</td><td>Коғази термӣ</td></tr>
        <tr><td>Паҳнои коғаз</td><td>79.5± 0.5 мм</td></tr>
        <tr><td>Макс. диаметри рулон</td><td>80 мм</td></tr>
        <tr><td>Ғафсии коғаз</td><td>0.06 то 0.07 мм</td></tr>
        <tr><td>Андозаҳо</td><td>192 х 140 х 148 мм</td></tr>
        <tr><td>Вазн</td><td>1,02 кг</td></tr>
        <tr><td>Ранг</td><td>Сиёҳ</td></tr>
    </table>
@endsection

