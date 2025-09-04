@extends('layouts.main')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/request-form-page.css?v=2.0125">
    <div class="block-1 block-banner row">
        <div class="col-50 col-mob-100 block-1__left">
            <div class="container_half-left sides-padding-40">
            <h5>
                Пешниҳоди эксклюзивӣ аз Umag ва Visa!
            </h5>
            <p class="text">
                Танҳо то охири соли 2024, ҳангоми пардохти обунаи Umag бо кортҳои Visa Business, Visa Platinum Business ё Visa Signature Business, шумо тахфифи 10% мегиред 🌟
            </p>
            <p class="text">
                Ҳама чиз осон аст:
            </p>
            <ul>
                <li> Навъи обунаи мувофиқро интихоб кунед.</li>
                <li> Онро бо яке аз кортҳои зикршуда: Visa Business, Visa Platinum Business ё Visa Signature Business пардохт намоед.</li>
            </ul>
            <p class="text">Максимум тахфиф бо назардошти аксия 9 000 танга мебошад.</p>
            </div>
        </div>
        <div class="col-50 col-mob-100 block-1__right">
            <div class="container_half-right">
            <form id="request-form" method="post" action="" class="request-form">
                <input type="hidden" name="type" value="Дархост барои дастрасии демо" />
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
                <span data-info-message="" class="request-form__info-message" style="display:none">Дархост бо муваффақият фиристода шуд!</span>
                <span data-error-message="" class="request-form__error-message" style="display:none">Хато! Ҳамаи майдонҳоро пур кунед.</span>
                <div class="margin-20">
                <div class="select-icon"></div>
                <select title="шаҳри шумо" name="city" class="request-form__input"
                    id="request-form__input-select" onchange="getValueSelect()">>
                    <option value="" disabled selected>@lang('contact.your_city')</option>
                    <option value="DUS">Душанбе</option>
                    <option value="TRS">Турсунзода</option>
                    <option value="VHD">Ваҳдат</option>
                    <option value="GSR">Ҳисор</option>
                    <option value="NRK">Норак</option>
                    <option value="RGN">Роғун</option>
                    <option value="KHD">Хуҷанд</option>
                    <option value="ISR">Истаравшан</option>
                    <option value="PNJ">Панҷакент</option>
                    <option value="ISF">Исфара</option>
                    <option value="KNB">Конибодом</option>
                    <option value="BST">Бустон</option>
                    <option value="GLS">Гулистон</option>
                    <option value="IST">Истиқлол</option>
                    <option value="BHT">Бохтар</option>
                    <option value="KLB">Кӯлоб</option>
                    <option value="FRH">Фархор</option>
                    <option value="JLB">Ҷалолиддин Балхӣ</option>
                    <option value="KBD">Қубодиён</option>
                    <option value="SHT">Шаҳритус</option>
                    <option value="LVK">Леваканд</option>
                    <option value="NRB">Нуробод</option>
                    <option value="KRG">Хоруғ</option>
                    <option value="VND">Ванҷ</option>
                    <option value="RSH">Рушон</option>
                    <option value="MRG">Мурғоб</option>
                    <option value="U11">Аксай ЗКО</option>
                    <option value="AKU">Актау</option>
                    <option value="AKT">Актобе</option>
                    <option value="ALA">Алматы</option>
                    <option value="ATR">Атырау</option>
                    <option value="U10">Аягоз</option>
                    <option value="BXH">Балхаш</option>
                    <option value="U05">Жанаозен</option>
                    <option value="U09">Жаркент</option>
                    <option value="ZHE">Жезказган</option>
                    <option value="U01">Жетысай</option>
                    <option value="U08">Капчагай</option>
                    <option value="KAR">Караганда</option>
                    <option value="KOK">Кокшетау</option>
                    <option value="KOS">Костанай</option>
                    <option value="U06">Кульсары</option>
                    <option value="KYZ">Кызылорда</option>
                    <option value="U04">Лисаковск</option>
                    <option value="AST">Астана</option>
                    <option value="PAV">Павлодар</option>
                    <option value="PET">Петропавловск</option>
                    <option value="U03">Рудный</option>
                    <option value="KGF">Сатпаев</option>
                    <option value="PLX">Семей</option>
                    <option value="TAL">Талдыкорган</option>
                    <option value="TAR">Тараз</option>
                    <option value="U07">Темиртау</option>
                    <option value="HSA">Туркестан</option>
                    <option value="URA">Уральск</option>
                    <option value="UKK">Усть-Каменогорск</option>
                    <option value="U02">Шардара</option>
                    <option value="CIT">Шымкент</option>
                    <option value="EKB">Экибастуз</option>
                    <option value="UZB">Ташкент (Узбекистон)</option>
                    <option value="UZB">Самарканд (Узбекистон)</option>
                    <option value="NUK">Нукус (Узбекистон)</option>
                    <option value="BSH">Бишкек (Қирғизистон)</option>
                    <option value="OSH">Ош (Қирғизистон)</option>
                </select>
                </div>
                <div class="margin-20">
                <input title="Телефон" type="text" name="phone" class="request-form__input"
                       id="request-form__input-input" placeholder="Телефон" disabled/>
                </div>
                <input type="submit" value="@lang('contact.submit')" class="request-form__btn"/>
            </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let submit = document.querySelector('.request-form__btn')
        function onRecaptchaSuccess1 () {
            submit.removeAttribute('disabled');
        }
    </script>
    <script type="text/javascript">
        $.mask.definitions['9'] = false;
        $.mask.definitions['5'] = "[0-9]";
        const selectCity = $("#request-form__input-select");
        const inputPhone = $("#request-form__input-input");
        selectCity.change(function () {
            inputPhone.prop('disabled', false);
            if ($(this).val() === "TAJ") {
                inputPhone.placeholder='+992 (__) ___ __ __';
                inputPhone.mask("+992 (00) 000-00-00");
            } else {
                inputPhone.placeholder='+7 (___) ___ __ __';
                inputPhone.mask("+7 (555) 555 55 55");
            }
        });
    </script>
@stop
