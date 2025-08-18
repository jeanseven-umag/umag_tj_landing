@extends('layouts.eq')
@section('product')
    <div class="product product_004">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    <span>Весы с печатью этикеток</span> Rongta RLS 1000
                </h1>

                <div class="product__mob-image no-desk">
                    <span class="product__mob-discount">-23%</span>
                </div>

                <p class="product__description">
                    Удобные торговые весы с печатью этикеток, успешно могут использоваться в магазинах, в супермаркетах
                    и на фасовке, они не только могут взвешивать товар, но и производить полную калькуляцию покупки.
                </p>

                <div class="product__discount-tag">Особая цена - только до конца месяца</div>

                <div class="row row_middle product__bottom">
                    <div class="col-grow product__price">
                        <span class="product__price-old">180 000 тг</span>
                        139 000 тг
                    </div>
                    <div class="col-auto">
                        <div class="product__discount">
                            <span>-23%</span>
                        </div>
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0004"
                                data-caption="Купить товар: Весы с печатью этикеток Rongta RLS1000">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('table')
    <table>
        <tr><td>Максимальный вес</td><td>15 кг</td></tr>
        <tr><td>Минимальный вес</td><td>40 г</td></tr>
        <tr><td>Дисплей</td><td>Двухлинейный LCD 256*32</td></tr>
        <tr><td>Клавиатура</td><td>Кнопки на полиэфирной пленке. 140 кнопок (28 функциональных кнопок и 112 горячих клавиш)</td></tr>
        <tr><td>Запоминающее устройство для хранения данных</td><td>Вмещает 10000 ПЛУ</td></tr>
        <tr><td>Скорость печати</td><td>80 мм/сек</td></tr>
        <tr><td>Интерфейсы</td><td>RS232 или TCP/IP опционально</td></tr>
        <tr><td>Питание</td><td>100-240V AC и 50/60Hz</td></tr>
        <tr><td>Размеры</td><td>437 x 372 x 523 мм</td></tr>
        <tr><td>Размер этикеток</td><td>30-60 мм. Максимальный внешний диаметр: 100 мм. Максимальный внутренний диаметр: 40 мм</td></tr>
    </table>
@endsection

