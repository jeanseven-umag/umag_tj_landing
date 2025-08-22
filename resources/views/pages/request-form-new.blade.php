@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/request-form-page.css?v=2.0125">
<link rel="stylesheet" type="text/css" href="/css/request-form-success-page.css?v=2.2101">

<div class="block-1 row">
    <div class="col-50 col-mob-100 block-1__left">
            <div class="container_half-left sides-padding-40">
                <h1>
                    @lang('contact.leave_phone')
                </h1>
                <p class="text">
                    @lang('contact.auto_business')
                </p>
            </div>
    </div>
    <!-- new-->
<div class="col-50 col-mob-100 block-1__right">
    <div id="form-container" class="container_half-right">
        <form id="request-form-new" method="POST" action="{{ route('contact.store') }}" class="request-form-new">
            @csrf
            <input type="hidden" name="type" value="Дархости дастрасии намоишӣ" />
            
            <!-- Error and success messages -->
            <div class="error-messages">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><span class="request-form__error-message">{{ $error }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="margin-20">
                <select title="шаҳри шумо" name="city" class="request-form__input" required id="request-form__input-select">
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
                    <option value="U11">Аксаи ЗКО</option>
                    <option value="AKU">Актау</option>
                    <option value="AKT">Актобе</option>
                    <option value="ALA">Алмато</option>
                    <option value="ATR">Атирау</option>
                    <option value="U10">Аягоз</option>
                    <option value="BXH">Балхаш</option>
                    <option value="U05">Жанаозен</option>
                    <option value="U09">Жаркент</option>
                    <option value="ZHE">Жезказган</option>
                    <option value="U01">Жетисой</option>
                    <option value="U08">Капчағай</option>
                    <option value="KAR">Қарағанда</option>
                    <option value="KOK">Кокшетау</option>
                    <option value="KOS">Костанай</option>
                    <option value="U06">Кулсари</option>
                    <option value="KYZ">Қизилорда</option>
                    <option value="U04">Лисаковск</option>
                    <option value="AST">Астана</option>
                    <option value="PAV">Павлодар</option>
                    <option value="PET">Петропавловск</option>
                    <option value="U03">Рудний</option>
                    <option value="KGF">Сатпаев</option>
                    <option value="PLX">Семей</option>
                    <option value="TAL">Талдикорган</option>
                    <option value="TAR">Тараз</option>
                    <option value="U07">Темиртау</option>
                    <option value="HSA">Туркистон</option>
                    <option value="URA">Уралск</option>
                    <option value="UKK">Уст-Каменогорск</option>
                    <option value="U02">Шардара</option>
                    <option value="CIT">Шимкент</option>
                    <option value="EKB">Экибастуз</option>
                    <option value="UZB">Ташкент (Узбекистан)</option>
                    <option value="UZB">Самарканд (Узбекистан)</option>
                    <option value="NUK">Нукус (Узбекистан)</option>
                    <option value="BSH">Бишкек (Кыргызстан)</option>
                    <option value="OSH">Ош (Кыргызстан)</option>
                </select>
            </div>

            <div class="margin-20">
                <input title="Телефон" type="text" name="phone" class="request-form__input"
                placeholder="Телефон" required id="request-form__input-input"/>
            </div>

            <div class="g-recaptcha margin-20" data-sitekey="6LeWia4rAAAAAHa1TtGamM-BrmVTHiaqyEK6o_yi" data-callback="onRecaptchaSuccess1"></div>
            
            <input type="submit" value="@lang('contact.submit')" class="request-form__btn" disabled/>
        </form>
    </div>

    <!-- Success message block (hidden initially) -->
    <div id="success-message" class="container sides-padding-40 sucess-wrap" style="display: none;">
        <p class="succes_svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="67.501" height="61.874" viewBox="0 0 67.501 61.874">
                <!-- SVG content -->
            </svg>
        </p>
        <h1>Дархости шумо қабул шуд!</h1>
        <p>Ташаккур, мо ба шумо баъд аз муддате тамос мегирем.</p>
    </div>
</div>

<!-- end new -->
</div>    
<div class="block-2">
    <div class="container row sides-padding-20">
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_1">
                @lang('contact.control_money')
            </p>
        </div>
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_2">
                @lang('contact.detailed_analytics')
            </p>
        </div>
        <div class="col-33-3 col-mob-100 sides-padding-20">
            <p class="feature feature_3">
                @lang('contact.control_employees')
            </p>
        </div>
    </div>
</div>
<section class="block-3">
    <div class="container sides-padding-40">
        <div class="row">
            <div class="col-50 col-mob-100">
                <div class="benefit">
                    <div class="row row_middle">
                        <span class="benefit__big-text col-auto col-mob-100">+27%</span>
                        <span class="benefit__text col-auto col-mob-100">@lang('contact.sales_growth')</span>
                    </div>
                </div>
            </div>
            <div class="col-50 col-mob-100">
                <div class="benefit row row_middle">
                    <div class="row row_middle">
                        <span class="benefit__big-text col-auto col-mob-100">-18%</span>
                        <span class="benefit__text col-auto col-mob-100">@lang('contact.reduction_costs')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    let submit = document.querySelector('.request-form__btn')
    function onRecaptchaSuccess1 () {
        submit.removeAttribute('disabled');
    }

  $.mask.definitions['9'] = false;
  $.mask.definitions['5'] = "[0-9]";
  const selectCity = $("#request-form__input-select");
  const inputPhone = $("#request-form__input-input");
  selectCity.change(function () {
    inputPhone.prop('disabled', false);
    if ($(this).val() === "BSH") {
      inputPhone.mask("+996 (555) 555 555");
    } else if ($(this).val() === "UZB") {
        inputPhone.placeholder='+998 (__) ___ __ __';
        inputPhone.mask("+998 55 555 55 55");
      } else {
          inputPhone.placeholder='+7 (___) ___ __ __';
          inputPhone.mask("+7 (555) 555 55 55");
        }
    });
</script>

<script type="text/javascript">
    $('#request-form-new').on('submit', function(event) {
        event.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Hide the form and show the success message
                $('#form-container').hide();
                $('#success-message').show();
            },
            error: function(xhr) {
                let errorHtml = '<span class="request-form__error-message">Хато! Ҳамаи майдонҳои формаро пур кунед.</span>';
                $('.error-messages').html(errorHtml);
            }
        });
    });
</script>
@stop