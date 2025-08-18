@extends('layouts.eq')
@section('product')
<div class="product product_001">
    <div class="container sides-padding-40">
        <div class="row col-50 col-mob-100">
            <span class="product__title"><span>POS-моноблок </span>UMAG T310</span>
            <div class="product__mob-image no-desk">
                <span class="product__mob-discount">-30%</span>
            </div>
            <span class="product__description">
                POS UMAG T310 - бесшумный и пыленепроницаемый, с простым и выдержанным дизайном моноблок. Идеально подходит для розничной торговли.
            </span>
            <div class="overview play-button">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="48" height="48">
                    <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80  c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176  c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57  S349.156,266.641,344.48,269.57z" style="fill: rgb(0, 0, 0);"></path>
                </svg>
                <h2>Посмотреть обзор</h2>
            </div>
            <div class="product__discount-tag">Особая цена - только до конца месяца</div>
            <div class="row row_middle product__bottom">
                <div class="col-grow product__price">
                    <span class="product__price-old">169 000 тг</span>
                    119 000 тг
                </div>
                <div class="col-auto">
                    <div class="product__discount">
                        <span>-30%</span>
                    </div>
                    <button type="button" class="button-product-buy" data-open-modal="#equipment-modal" data-type="PRODUCT_0001" data-caption="Купить товар: POS-моноблок UMAG T310">Купить</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('table')
    <table>
        <tr><td>Процессор</td><td>Intel Celeron J1900 2,0 ГГц, (Quad Core)</td></tr>
        <tr><td>Память</td><td>2 ГБ DDR3, расширяемая до 8 ГБ</td></tr>
        <tr><td>Дисплей</td><td>15,6" TFT LCD, разрешение 1024 x 768, 1366 x 768</td></tr>
        <tr><td>Сенсорная панель</td><td>Резистивного типа, USB-интерфейс</td></tr>
        <tr><td>Устройство хранения данных</td><td>Жесткий диск SATA SSD, 32 ГБ</td></tr>
        <tr><td>Варианты установки</td><td>Настольная</td></tr>
        <tr><td>Поддержка операционных систем</td><td>Windows XP, Windows 7</td></tr>
        <tr><td>Порты ввода/вывода</td><td>1x VGA, 1x RS-232 (3х DB9), 6x USB, 1x Ethernet, 1x линейный аудиовыход, 1x микрофон</td></tr>
        <tr><td>Цвет корпуса</td><td>Черный</td></tr>
        <tr><td>Считыватель магнитных карт</td><td>Опция: считыватель магнитных карт на 3 дорожки</td></tr>
        <tr><td>Производитель</td><td>Elanda (Китай)</td></tr>
    </table>
@endsection

