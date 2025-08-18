@extends('layouts.eq')
@section('product')
    <div class="product product_007">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    <span>Принтер этикеток</span> Rongta RP-80VI USE
                </h1>
                <div class="product__mob-image no-desk">
                    <span class="product__mob-discount">-26%</span>
                </div>
                <p class="product__description">
                    Является оптимальным недорогим решением для этикетирования различной продукции. Рекомендуется к
                    применению на небольших складах, магазинах, аптеках, офисах, а также там, где необходима печатать
                    этикеток для маркировки товара с небольшим сроком хранения.
                </p>
                <div class="product__discount-tag">Особая цена - только до конца месяца</div>
                <div class="row row_middle product__bottom">
                    <div class="col-grow product__price">
                        <span class="product__price-old">53 000 тг</span>
                        39 000 тг
                    </div>
                    <div class="col-auto">
                        <div class="product__discount">
                            <span>-26%</span>
                        </div>
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0007"
                                data-caption="Купить товар: Принтер этикеток Rongta RP80VI-USE">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('table')
    <table>
        <tr><td>Технология печати</td><td>Прямая термопечать</td></tr>
        <tr><td>Разрешение</td><td>203 dpi</td></tr>
        <tr><td>Скорость печати</td><td>150 мм/c</td></tr>
        <tr><td>Макс. ширина печати</td><td>85 мм</td></tr>
        <tr><td>Автообрезчик</td><td>нет</td></tr>
        <tr><td>Интерфейс управления</td><td>USB+RS232+Ethernet</td></tr>
        <tr><td>Печатаемые штрих-коды</td><td>UPC-A/UPC-E/EAN8/EAN13/CODE39/ITF/CODABAR /CODE93/CODE128/PDF417/QRCODE</td></tr>
        <tr><td>Драйверы</td><td>Windows2000/XP/7/VISTA/8</td></tr>
        <tr><td>Тип бумаги</td><td>Термобумага в рулоне, специальные наклейки, термочувствительные этикетки и т.д.</td></tr>
        <tr><td>Ширина бумаги</td><td>24 ~ 82 мм</td></tr>
        <tr><td>Макс. диаметр рулона</td><td>85</td></tr>
        <tr><td>Габариты</td><td>146 х 237 х 130 мм</td></tr>
        <tr><td>Вес</td><td>1,5 кг</td></tr>
        <tr><td>Цвет</td><td>Черный</td></tr>
    </table>
@endsection

