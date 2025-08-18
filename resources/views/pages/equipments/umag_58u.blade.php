@extends('layouts.eq')
@section('product')
    <div class="product product_003">
        <div class="container sides-padding-40">
            <div class="row col-50 col-mob-100">
                <h1 class="product__title">
                    <span>Принтер чеков</span> Rongta RP-58
                </h1>
                <div class="product__mob-image no-desk">
                    <span class="product__mob-discount">-14%</span>
                </div>
                <p class="product__description">
                    Модель RP58 характеризуется эргономичным расположением кнопок, простым и в то же время компактным
                    дизайном, небольшим весом и высокой надежностью. Идеально подходит для розничной торговли.
                </p>
                <div class="product__discount-tag">Особая цена - только до конца месяца</div>
                <div class="row row_middle product__bottom">
                    <div class="col-grow product__price">
                        <span class="product__price-old">22 000 тг</span>
                        19 000 тг
                    </div>
                    <div class="col-auto">
                        <div class="product__discount">
                            <span>-14%</span>
                        </div>
                        <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0003"
                                data-caption="Купить товар: Принтер чеков UMAG 58U (58мм)">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('table')
    <table>
        <tr><td>Технология печати</td><td>Линейная точечная термопечать</td></tr>
        <tr><td>Разрешение</td><td>203 dpi</td></tr>
        <tr><td>Скорость печати</td><td>100 мм/с</td></tr>                 
        <tr><td>Макс. ширина печати</td><td>48 мм</td></tr>
        <tr><td>Автообрезчик</td><td>нет</td></tr>                  
        <tr><td>Интерфейс управления</td><td>USB; Ethernet; USB + Bluetooth</td></tr>
        <tr><td>Печатаемые штрих-коды</td><td>125, UPC-A, UPC-E, EAN-8, EAN-13, Codebar, Code39, Code93, Code128, Code11, MSI</td></tr>               
        <tr><td>Драйверы</td><td>Windows 2000, Windows XP, Windows Vista, Windows 7, Windows 8, iOS SDK, Android SDK</td></tr>
        <tr><td>Тип бумаги</td><td>Термобумага</td></tr>       
        <tr><td>Ширина бумаги</td><td>57,5 мм</td></tr>
        <tr><td>Макс. диаметр рулона</td><td>80 мм</td></tr>
        <tr><td>Толщина бумаги</td><td>60–80 мкм</td></tr>
        <tr><td>Габариты</td><td>210 х 135 х 130 мм</td></tr>
        <tr><td>Вес</td><td>1,2 кг</td></tr>
        <tr><td>Цвет</td><td>Черный</td></tr>
    </table>
@endsection

