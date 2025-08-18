@extends('layouts.main')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/automation-page2.css?v=2.0122">
    <link rel="stylesheet" type="text/css" href="/landing-resources/lib/lightgallery/css/lightgallery.css" />
    <script src="/landing-resources/lib/lightgallery/js/lightgallery.min.js" type="text/javascript"></script>
    <script src="/landing-resources/lib/lightgallery/modules/lg-video.min.js" type="text/javascript"></script>
    @yield('topheader')
    <div class="row flat-container flat-container-new" id="umag_text_section">
        <div class="img-flex">
            <img src="/img/new/graf.png" alt="umag график">
        </div>
        <div class="text-flex">
            <div class="flex-info top-flex">
                <h3 class="green-h3">@lang('product_automation.manage_business')</h3>
                <p class="in-parag">@lang('product_automation.manage_business_desc')</p>
            </div>
            <div class="flex-info bottom-flex">
                <h3 class="green-h3">@lang('product_automation.watch_business')</h3>
                <p class="in-parag">@lang('product_automation.watch_business_desc')</p>
            </div>
        </div>
    </div>
    <div class="row flat-container flat-container-new" id="umag_form_section">
        <div class="contact-form-flex">
            <div class="form-block">
				<form id="request-form" action="" method="post">
                    <input type="hidden" name="type" value="Заявка на демо-доступ">
                    <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                    <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value="" />
                    <span class="request-form__error-message" data-error-message="" style="display:none">Хато! Ҳамаи майдонҳои формаро пур кунед.</span>
                    <span class="request-form__info-message" data-info-message="" style="display:none">Дархост бомуваффақият фиристода шуд!</span>
					<div class="input-group">
						<div class="select-icon"></div>
						<select title="Ваш город" name="city" class="input" id="input-form__input-select">
							<option value="" disabled selected>@lang('home.your_city')</option>
                            <option value="Dushanbe">Душанбе</option>
                            <option value="Tursunzoda">Турсунзода</option>
                            <option value="Vahdat">Ваҳдат</option>
                            <option value="Hisor">Ҳисор</option>
                            <option value="Norak">Норак</option>
                            <option value="Rogun">Роғун</option>
                            <option value="Khujand">Хуҷанд</option>
                            <option value="Istaravshan">Истаравшан</option>
                            <option value="Panjakent">Панҷакент</option>
                            <option value="Isfara">Исфара</option>
                            <option value="Konibodom">Конибодом</option>
                            <option value="Buston">Бустон</option>
                            <option value="Guliston">Гулистон</option>
                            <option value="Istiqlol">Истиқлол</option>
                            <option value="Bokhtar">Бохтар</option>
                            <option value="Kulob">Кӯлоб</option>
                            <option value="Farkhor">Фархор</option>
                            <option value="Jaloliddin_Balkhi">Ҷалолиддин Балхӣ</option>
                            <option value="Qubodiyon">Қубодиён</option>
                            <option value="Shahrtuz">Шаҳритус</option>
                            <option value="Levakan">Леваканд</option>
                            <option value="Nurobod">Нуробод</option>
                            <option value="Khorugh">Хоруғ</option>
                            <option value="Vanj">Ванҷ</option>
                            <option value="Rushon">Рушон</option>
                            <option value="Murghob">Мурғоб</option>
						</select>
					</div>
                    <div class="input-group">
                         <input id="input-form-modal__phone" type="text" name="phone" placeholder="@lang('home.your_telephone')" disabled>
                    </div>
                    <div class="g-recaptcha input-group" data-sitekey="6LcgFmckAAAAABxcpKPl3w0mPViVNYhsSieWkOr9" data-callback="onRecaptchaSuccess4"></div>

                    <div class="input-group">
						<button type="submit" class="shop-form__btn" disabled>@lang('product_automation.try_free')</button>

                    </div>
				</form>
			</div>
        </div>
        <script type="text/javascript">
            let submit = document.querySelector('.shop-form__btn')
            function onRecaptchaSuccess4 () {
                submit.removeAttribute('disabled');
            }
        </script>
        <script>
          $.mask.definitions['9'] = false;
          $.mask.definitions['5'] = "[0-9]";
          const GroupSelectCity = $("#input-form__input-select");
          const GroupInputPhone = $("#input-form-modal__phone");
          GroupSelectCity.change(function () {
              GroupInputPhone.prop('disabled', false);
              if ($(this).val() === "BSH") {
                  GroupInputPhone.placeholder='+996 (___) ___ ___';
                  GroupInputPhone.mask("+996 (555) 555 555");
              } else
              if ($(this).val() === "UZB") {
                  GroupInputPhone.placeholder='+998 (__) ___ __ __';
                  GroupInputPhone.mask("+998 55 555 55 55");
              } else {
                  GroupInputPhone.placeholder='+7 (___) ___ __ __';
                  GroupInputPhone.mask("+7 (555) 555 55 55");
              }
          });
        </script>
        <div class="green-flex">
            <div class="flex-green left-flex">
            <picture class="green__img"> <source type="image/webp" srcset="/img/home-page/nout.webp" media="(max-width: 767px)"> <source type="image/png" srcset="/img/home-page/nout.png" media="(max-width: 767px)"> <source type="image/png" srcset="/img/new/comp.png" media="(min-width: 767px)"> <source type="image/webp" srcset="/img/new/comp.webp" media="(min-width: 767px)"> <img src="/img/home-page/comp.png" alt="Скриншот программы"> </picture>
            </div>
            <div class="flex-green right-flex">
                <h3 class="green-h3">@lang('product_automation.possibilities')</h3>
                <a href="/vozmozhnosti-programmy-umag" class="learn-more__arrow"></a>
            </div>
        </div>
    </div>
    <div class="review-wrap">
        <div class="review-flex">
            <h1 class="green-h1">@lang('product_automation.review')</h1>
            @yield('review')
        </div>
        <div class="review-flex iframe-flex">
            @yield('iframe')
        </div>
    </div>
    <div class="controls">
        <h1 class="green-h1">@lang('product_automation.day_customer')</h1>
        <div class="control">
            <div class="control-left-side">
                <span class="decript">Мольдир Телембаева</span>
                <span class="decript">Шахр: Алматы</span>
                <span class="decript">@lang('product_automation.grocery_store'): «Орхан»</span>
            </div>
            <div class="control-right-side">
                <div class="buttons-next-prev">
                    <div class="control-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58.934" height="58.934" viewBox="0 0 58.934 58.934">
                            <g id="Group_1020" data-name="Group 1020" transform="translate(-867.165 -3354)">
                                <circle id="Ellipse_10" data-name="Ellipse 10" cx="28.467" cy="28.467" r="28.467" transform="translate(925.099 3411.934) rotate(180)" fill="none" stroke="#cbcbcb" stroke-width="2"/>
                                <path id="Path_716" data-name="Path 716" d="M596.434,72.965l-7.5,7.5,7.5,7.5" transform="translate(303 3303)" fill="none" stroke="#cbcbcb" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                    <div class="control-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58.934" height="58.934" viewBox="0 0 58.934 58.934">
                            <g id="Group_1021" data-name="Group 1021" transform="translate(-945.762 -3354)">
                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="28.467" cy="28.467" r="28.467" transform="translate(946.762 3355)" fill="none" stroke="#cbcbcb" stroke-width="2"/>
                                <path id="Path_715" data-name="Path 715" d="M669.428,72.965l7.5,7.5-7.5,7.5" transform="translate(303 3303)" fill="none" stroke="#cbcbcb" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="img-box">
                    <img src="/img/automation-page/7-20-min.jpg" alt="">
                </div>
                <div class="text-box">
                    <span class="clock">@lang('product_automation.shift_report')</span>
                    <p class="history">
                        @lang('product_automation.shift_report_info')
                    </p>
                </div>
            </div>
            <div class="swiper-slide mob-act" >
                <div class="img-box">
                    <img src="/img/automation-page/7-40-min.jpg" alt="">
                </div>
                <div class="text-box">
                    <span class="clock">@lang('product_automation.conversation')</span>
                    <p class="history">
                        @lang('product_automation.conversation_info')
                    </p>
                </div>
            </div>
            <div class="swiper-slide" style="opacity: 0.5">
                <div class="img-box">
                    <img src="/img/automation-page/9-00-min.jpg" alt="">
                </div>
                <div class="text-box">
                    <span class="clock">@lang('product_automation.work_office')</span>
                    <p class="history">
                        @lang('product_automation.work_office_info')
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="img-box">
                    <img src="/img/automation-page/13-00-min.jpg" alt="">
                </div>
                <div class="text-box">
                    <span class="clock">@lang('product_automation.business_lunch')</span>
                    <p class="history">
                        @lang('product_automation.business_lunch_info')
                    </p>
                </div>
            </div>
            <div class="swiper-slide loll">
                <div class="img-box">
                    <img src="/img/automation-page/20-00-min.jpg" alt="">
                </div>
                <div class="text-box">
                    <span class="clock">@lang('product_automation.checking_indicators')</span>
                    <p class="history">
                        @lang('product_automation.checking_indicators_info')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .lg-backdrop{z-index: 9999; background: #000000f2}
        .lg-outer {z-index: 999999}
    </style>
    <script>
        $(document).ready(function(){
            var harr, he;
            setTimeout(() => {
                harr = [];
                var he = document.querySelectorAll(".text-box");
                for(var y = 0; y<he.length; y++ ){
                    harr.push(he[y].offsetHeight);
                }
                harr = harr.sort();
                console.log(harr);
                $(".text-box").outerHeight(harr[harr.length-1]+'px');
            }, 300);
            $('.play_col').on('click', function() {
                var video_id = $(this).data("video");
                $(this).lightGallery({
                    youtubePlayerParams: {
                        autoplay: 1,
                        controls: 1
                    },
                    dynamic: true,
                    dynamicEl: [{"src": 'https://www.youtube.com/watch?v='+video_id}]
                })
            });
        });
        var slide_count = null, per_index = null;
        if (window.matchMedia("(min-width: 767px)").matches) {
            slide_count = 2.5; per_index = 2;
        } else {
            slide_count = 1.2; per_index = 1;
        }
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal',
            slidesPerView: slide_count,
            loop: false,
            updateOnWindowResize : true,
            effect: 'slide',
            navigation: {
                nextEl: '.control-button-next',
                prevEl: '.control-button-prev',
            },
        });
        mySwiper.on('slideChange', function () {
            var activeSlide = mySwiper.activeIndex;
            for(var i = 0; i < mySwiper.slides.length; i++){
                $(mySwiper.slides[i]).css({"opacity":"1"});
            }
            setTimeout(() => {
                $(mySwiper.slides[mySwiper.activeIndex+per_index]).css({"opacity": "0.5"});
            }, 1);
        });
        mySwiper.on('transitionEnd', function () {
            var width = document.querySelector(".swiper-container").getBoundingClientRect().right, elem = document.querySelector(".loll");
            console.log(elem.getBoundingClientRect().right, width+10);
            if(elem.getBoundingClientRect().right < (width+10) ){
                setTimeout(() => {
                    $(mySwiper.slides[mySwiper.activeIndex]).css({"opacity": "0.5"});
                    $(mySwiper.slides[mySwiper.activeIndex+per_index]).css({"opacity": "1"});
                }, 2);
            }else{
                setTimeout(() => {
                    $(mySwiper.slides[mySwiper.activeIndex]).css({"opacity": "1"});
                    $(mySwiper.slides[mySwiper.activeIndex+per_index]).css({"opacity": "0.5"});
                }, 2);                }
        });
        var vh = parseFloat($('.review-flex.iframe-flex').css('width')) / parseFloat(1.777);
        $('.review-flex.iframe-flex').css('height', vh+'px');
    </script>
@stop
