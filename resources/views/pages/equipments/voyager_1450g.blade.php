@extends('layouts.eq')
@section('product')
    <div class="product product_014">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    <span>Сканер штрих-кодов</span> HONEYWELL VOYAGER 1450G
                </h1>
                <div class="product__mob-image no-desk"></div>
                <p class="product__description">
                    Voyager 1450g — это исключительно выгодное приобретение для предприятий, которым нужны универсальные
                    системы двумерного сканирования для решения текущих и перспективных задач. Он может распознавать
                    некачественные штрих-коды, сканировать и обрабатывать данные купонов, электронных билетов, данные 
                    цифровых кошельков непосредственно с экранов мобильных телефонов, планшетов или мониторов.
                </p>

                <div class="row row_middle product__bottom">
                    <div class="col-grow product__price">
                        35 000 тг
                    </div>
                    <div class="col-auto">
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0014" data-caption="Купить товар: Сканер штрих-кодов Honeywell Voyager 1450G">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('table')
    <table>
        <tr><th colspan="2">Основные характеристики</th></tr>
        <tr><td>Вид сканера</td><td>2D</td></tr>
        <tr><td>Скорость сканирования</td><td>До 10 см/сек</td></tr>
        <tr><td>Дальность сканирования</td><td>От 2,8 до 26,0 см</td></tr>
        <tr><th colspan="2">Габариты</th></tr>
        <tr><td>Размеры</td><td>62 x 169 x 82 мм</td></tr>
        <tr><td>Вес</td><td>130 г</td></tr>
        <tr><th colspan="2">Производитель</th></tr>
        <tr><td>Брэнд</td><td>HONEYWELL</td></tr>
        <tr><td>Страна-производитель</td><td>СОЕДИНЕННЫЕ ШТАТЫ АМЕРИКИ</td></tr>
    </table>
@endsection

