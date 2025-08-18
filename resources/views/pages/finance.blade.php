@extends('layouts.main')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/finance.css">
    <div class="finance-page">
        <div class="row row_middle finance-content">
            <h1 class="title">
                Khan Finance (B2B)
            </h1>
            <p class="sub-title">
                Молиягузории бизнеси хурд
            </p>
            <p class="info-text">
                Эксклюзиван барои шарикони umag.kz хатти қарзии барқароршаванда ба маблағи 6 млн танга то 3 сол аз МФО solva.kz кушода мешавад.
                Метавонед тамоми маблағро истифода баред, ё қисман. Пардохти пеш аз муҳлат бе ҷарима дар ҳар вақт.
                Эҳтимолияти баланди тасдиқ барои шарикони Umag.
            </p>
            <ul class="list-group">
                <li>
                    <p class="list-title">Пул ба суратҳисоб ё корти бонкӣ</p>
                    <p>Пул ба корти бонкӣ ё суратҳисоби ҳар бонк дар Қазоқистон бе ташриф ба офис тавассути кабинети шахсӣ дар
                        давоми 15 дақиқа.</p>
                </li>
                <li>
                    <p class="list-title">Пардохти қулай</p>
                    <p>Пардохтҳоро ворид кунед ё қарзро пеш аз муҳлат бо ҳар роҳе, ки барои шумо қулай аст — бо корти бонкӣ, онлайн, дар
                        банкоматҳо ё филиалҳо.</p>
                </li>
                <li>
                    <p class="list-title">Барои ҳама мақсадҳо</p>
                    <p>Молиягузорӣ барои ҳалли ҳама масъалаҳо: рушди бизнес, пур кардани маблағҳои гардишӣ ё
                        камбуди касса.</p>
                </li>
                <li>
                    <p class="list-title">Бе гарав ва кафилон</p>
                    <p>Пулро бе гарав ва кафилон гиред. Маҳз вақте, ки бештар лозим аст.</p>
                </li>
            </ul>
            <p class="sub-title">Шартҳо оид ба % ва мисолҳо:</p>
            <img src="/img/finance/table.png" alt="" class="table-img">
            <p style="margin-bottom: 0">Мисол: Шумо 1 млн танга (аз 6 млн имконпазир) барои як моҳ мегиред. Агар қарзро пас аз як моҳ баргардонед, пас пардохти иловагӣ
                37750 танга мешавад. Агар барои 3 рӯз, пас пардохти иловагӣ 3699 танга мешавад.</p>
            <p class="sub-title sub-title--mr">
                Чӣ тавр кор мекунад?
            </p>
            <ul class="list-group simple-list">
                <li>Дархост пешниҳод кунед.</li>
                <li>Тасдиқро интизор шавед.</li>
                <li>Пулро гиред.</li>
            </ul>
            <div class="accord-block">
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item__btn">Пас аз гирифтани микрокредит, пул чӣ қадар зуд мерасад?</div>
                        <div class="accordion-item__body">
                            <div class="accordion-item__body__content">Пул ба корти шумо дар 15 дақиқа мерасад, агар дархост тасдиқ шавад ва шумо муваффақона идентификатсия гузаред.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item__btn">Оё комиссия барои гирифтани микрокредит ё пардохти пеш аз муҳлат вуҷуд дорад?</div>
                        <div class="accordion-item__body">
                            <div class="accordion-item__body__content">Нест.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item__btn">Чӣ тавр пардохт кардан мумкин?</div>
                        <div class="accordion-item__body">
                            <div class="accordion-item__body__content">
                                <ul>
                                    <li>Дар барномаи Halyk</li>
                                    <li>Дар барномаи Бонки ЦентрКредит</li>
                                    <li>Тавассути интиқоли бонкӣ</li>
                                    <li>Тавассути терминали Бонки ЦентрКредит</li>
                                    <li>Тавассути терминали PAYDALA</li>
                                    <li>Тавассути терминали YURTA</li>
                                    <li>Дар барномаи Kaspi.kz. Бо комиссия.</li>
                                    <li>Бо корти бонкӣ. Бо комиссия.</li>
                                    <li>Тавассути терминали QIWI. Бо комиссия.</li>
                                    <li>Тавассути ҳамёни QIWI. Бо комиссия.</li>
                                    <li>Тавассути терминали KASSA 24. Бо комиссия.</li>
                                    <li>Тавассути кассаи шахсии KASSA 24. Бо комиссия.</li>
                                    <li>Аз суратҳисоби ҶСК «Қазпочта». Бо комиссия.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item__btn">Чӣ қадар ҷарима барои пардохти дер мешавад?</div>
                        <div class="accordion-item__body">
                            <div class="accordion-item__body__content">Ҷарима ба маблағи 5 000 танга барои ҳар як вайрон кардани шартҳои шартнома ва фоиз ба андозаи 0.5% аз маблағи иҷронашуда барои ҳар рӯзи таъхир.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
@stop
