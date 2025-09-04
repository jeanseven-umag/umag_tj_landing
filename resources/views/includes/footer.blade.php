<div class="{{ Request::path() == 'start'  ? 'franz' : ''}}">
    <button title="Заказать обратный звонок" type="button" class="fixed-phone" data-open-modal="#lead-catcher-modal"
            data-lead-catcher-switcher><span class="fixed-phone__icon"></span></button>
    <div id="lead-catcher-modal" class="lead-catcher-modal" style="display:none" data-close-modal="#lead-catcher-modal">
        <div class="lead-catcher-modal__box" data-modal-box>
            <form id="lead-catcher-form" method="post" action="" class="lead-catcher-form">
                <input type="hidden" name="type" value="Пойманный лид"/>
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value=""/>
                <span title="Закрыть" class="lead-catcher-form__close" data-close-modal="#lead-catcher-modal"></span>
                <p class="lead-catcher-form__caption"> Шумо савол доред? </p>
                <p class="lead-catcher-form__lead"> Рақами телефони худро гузоред, мо бо шумо тамос мегирем
                    <br/> ва ба ҳама саволҳои шумо ҷавоб медиҳем! </p>
                <label for="lead-catcher-modal__phone">Рақами телефонро ворид кунед</label>
                <div class="row row_nowrap mob-row_wrap sides-margin-minus-10">
                    <div class="col-auto col-mob-100 sides-padding-10">
                        <select title="Ваш город" name="city" class="lead-catcher-form__input"
                                id="lead-catcher__input-select">
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
                        </select>
                    </div>
                    <div class="col-auto col-mob-100 sides-padding-10">
                        <input id="lead-catcher-modal__phone" type="text" name="phone" class="lead-catcher-form__input"
                               placeholder="Телефон" disabled/>
                    </div>
                    <div class="col-auto col-mob-100 sides-padding-10">
                        <input type="submit" value="Позвонить мне" class="lead-catcher-form__btn"></div>
                </div>
                <span class="lead-catcher-form__error-message" data-error-message style="display:none">Хато! Ҳамаи майдонҳоро пур кунед.</span>
                <span class="lead-catcher-form__error-message" data-error-message-cache style="display:none">Ин рақам аллакай фиристода шудааст</span>
                <span class="lead-catcher-form__info-message" data-info-message style="display:none">Дархост бомуваффақият фиристода шуд!</span>
            </form>
        </div>
    </div>
    <div id="equipment-modal" class="modal" style="display:none" data-close-modal="#equipment-modal">
        <div class="modal__box" data-modal-box>
            <form id="modal-form" method="post" action="" class="modal-form">
                <input id="modal-form__type" type="hidden" name="type" value=""/>
                <input id="modal-form__token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                <input id="modal-form__select" class="modal-form__select_option" type="hidden" name="region" value=""/>
                <p id="modal-form__caption" class="modal-form__caption"></p>
                <span class="modal-form__error-message" data-error-message style="display:none">Хато! Ҳамаи майдонҳоро пур кунед.</span>
                <span class="modal-form__info-message" data-info-message
                      style="display:none">Дархост бомуваффақият фиристода шуд!</span>
                <div class="margin-20">
                    <select title="Ваш город" name="city" class="modal-form__input" id="modal-form__input-select">
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
                    </select>
                </div>
                <div class="margin-20">
                    <input id="modal-form-modal__phone" type="text" name="phone" class="modal-form__input"
                           placeholder="Телефон" disabled>
                </div>
                <div class="g-recaptcha margin-20" data-sitekey="6LeWia4rAAAAAHa1TtGamM-BrmVTHiaqyEK6o_yi"
                     data-callback="onRecaptchaSuccess2"></div>
                <input type="submit" value="@lang('contact.submit')" class="modal-form__btn" disabled></form>
        </div>
    </div>
    <script type="text/javascript">
        let sub_btn = document.querySelector('.modal-form__btn')

        function onRecaptchaSuccess2() {
            sub_btn.removeAttribute('disabled');
        }
    </script>
    <script>
        $.mask.definitions['9'] = false;
        $.mask.definitions['5'] = "[0-9]";
        const modalSelectCity = $("#modal-form__input-select");
        const modalInputPhone = $("#modal-form-modal__phone");
        modalSelectCity.change(function () {
            modalInputPhone.prop('disabled', false);
            if ($(this).val() === "BSH") {
                modalInputPhone.placeholder='+992 (__) ___ __ __';
                modalInputPhone.mask("+992 (00) 000-00-00");
            } else if ($(this).val() === "TAJ") {
                modalInputPhone.placeholder='+992 (__) ___ __ __';
                modalInputPhone.mask("+992 (00) 000-00-00");
            } else {
                modalInputPhone.placeholder = '+7 (___) ___ __ __';
                modalInputPhone.mask("+7 (555) 555 55 55");
            }
        });
        const leadSelectCity2 = $("#lead-catcher__input-select");
        const leadInputPhone2 = $("#lead-catcher-modal__phone");
        leadSelectCity2.change(function () {
            leadInputPhone2.prop('disabled', false);
            if ($(this).val() === "BSH") {
                leadInputPhone2.placeholder = '+992 (__) ___ __ __';
                leadInputPhone2.mask("+992 (00) 000-00-00");
            } else if ($(this).val() === "TAJ") {
                leadInputPhone2.placeholder = '+992 (__) ___ __ __';
                leadInputPhone2.mask("+992 (00) 000-00-00");
            } else {
                leadInputPhone2.placeholder = '+7 (___) ___ __ __';
                leadInputPhone2.mask("+7 (555) 555 55 55");
            }
        });
    </script>
    <footer class="footer">
        <div class="footer-bottom">
            <div class="container row sides-padding-40">
                <div class="col-auto col-mob-100 svg-wrap">
                    <a target="_blank" href="https://itunes.apple.com/kz/app/umag/id1279696123?mt=8">
                        <div class="appstore-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="292.973" height="89.49"
                                 viewBox="0 0 292.973 89.49">
                                <g id="Group_778" data-name="Group 778" transform="translate(-139.5 -4788.752)">
                                    <g id="Group_145" data-name="Group 145" transform="translate(140 4789.252)">
                                        <path id="Path_177" data-name="Path 177"
                                              d="M.523,12.64c0-6.267,5.506-11.347,12.3-11.347H280.2c6.792,0,12.3,5.08,12.3,11.347v65.8c0,6.267-5.506,11.347-12.3,11.347H12.821c-6.792,0-12.3-5.08-12.3-11.347Z"
                                              transform="translate(-0.523 -1.293)" fill="none" stroke="#fff"
                                              stroke-width="1"></path>
                                        <g id="Group_144" data-name="Group 144" transform="translate(22.808 15.772)">
                                            <path id="Path_178" data-name="Path 178"
                                                  d="M56.659,41.863A12.057,12.057,0,0,1,62.4,31.746a12.342,12.342,0,0,0-9.724-5.257c-4.091-.43-8.058,2.448-10.143,2.448-2.125,0-5.335-2.406-8.792-2.335a12.95,12.95,0,0,0-10.9,6.647c-4.712,8.158-1.2,20.148,3.317,26.743,2.258,3.229,4.9,6.836,8.351,6.708,3.38-.14,4.642-2.155,8.721-2.155,4.042,0,5.226,2.155,8.749,2.074,3.627-.059,5.911-3.244,8.091-6.5a26.709,26.709,0,0,0,3.7-7.535,11.651,11.651,0,0,1-7.113-10.719Z"
                                                  transform="translate(-20.605 -13.651)" fill="#fff"></path>
                                            <path id="Path_179" data-name="Path 179"
                                                  d="M47.438,23.685a11.872,11.872,0,0,0,2.716-8.5,12.078,12.078,0,0,0-7.815,4.044,11.3,11.3,0,0,0-2.787,8.19,9.988,9.988,0,0,0,7.886-3.729Z"
                                                  transform="translate(-18.037 -15.18)" fill="#fff"></path>
                                            <g id="Group_143" data-name="Group 143"
                                               transform="translate(61.157 15.939)">
                                                <path id="Path_180" data-name="Path 180"
                                                      d="M91.6,55.973h-10.3L78.818,63.28H74.453l9.76-27.034h4.535l9.76,27.034H94.07ZM82.36,52.6h8.168L86.5,40.743h-.113Z"
                                                      transform="translate(-74.453 -35.802)" fill="#fff"></path>
                                                <path id="Path_181" data-name="Path 181"
                                                      d="M116.414,52.586c0,6.125-3.278,10.06-8.225,10.06a6.682,6.682,0,0,1-6.2-3.448h-.093V68.96H97.848V42.729h3.916v3.278h.074a6.992,6.992,0,0,1,6.276-3.485C113.117,42.523,116.414,46.478,116.414,52.586Zm-4.158,0c0-3.991-2.062-6.614-5.21-6.614-3.09,0-5.17,2.679-5.17,6.614,0,3.971,2.08,6.631,5.17,6.631,3.147,0,5.21-2.6,5.21-6.631Z"
                                                      transform="translate(-71.278 -34.951)" fill="#fff"></path>
                                                <path id="Path_182" data-name="Path 182"
                                                      d="M135.513,52.582c0,6.125-3.28,10.06-8.227,10.06a6.682,6.682,0,0,1-6.2-3.448h-.093v9.763h-4.047V42.725h3.916V46h.075a6.992,6.992,0,0,1,6.276-3.485C132.214,42.519,135.513,46.474,135.513,52.582Zm-4.16,0c0-3.991-2.061-6.614-5.208-6.614-3.091,0-5.17,2.679-5.17,6.614,0,3.971,2.078,6.631,5.17,6.631C129.292,59.212,131.353,56.608,131.353,52.582Z"
                                                      transform="translate(-68.685 -34.951)" fill="#fff"></path>
                                                <path id="Path_183" data-name="Path 183"
                                                      d="M146.411,55.808c.3,2.681,2.9,4.441,6.463,4.441,3.409,0,5.863-1.76,5.863-4.178,0-2.1-1.479-3.355-4.982-4.216l-3.5-.844c-4.964-1.2-7.269-3.521-7.269-7.288,0-4.664,4.065-7.868,9.834-7.868,5.715,0,9.631,3.2,9.763,7.868H158.5c-.244-2.7-2.475-4.326-5.734-4.326s-5.489,1.648-5.489,4.046c0,1.911,1.424,3.036,4.909,3.9l2.979.731c5.547,1.312,7.849,3.54,7.849,7.494,0,5.058-4.026,8.225-10.434,8.225-6,0-10.043-3.093-10.3-7.983Z"
                                                      transform="translate(-65.248 -35.855)" fill="#fff"></path>
                                                <path id="Path_184" data-name="Path 184"
                                                      d="M169.055,38.594v4.664H172.8v3.2h-3.749V57.328c0,1.688.751,2.475,2.4,2.475a12.66,12.66,0,0,0,1.331-.094v3.185a11.124,11.124,0,0,1-2.248.187c-3.99,0-5.547-1.5-5.547-5.321v-11.3h-2.865v-3.2h2.865V38.594Z"
                                                      transform="translate(-62.553 -35.484)" fill="#fff"></path>
                                                <path id="Path_185" data-name="Path 185"
                                                      d="M173.434,52.587c0-6.2,3.653-10.1,9.347-10.1,5.715,0,9.351,3.9,9.351,10.1,0,6.219-3.616,10.1-9.351,10.1S173.434,58.805,173.434,52.587Zm14.575,0c0-4.254-1.949-6.765-5.228-6.765s-5.228,2.53-5.228,6.765c0,4.271,1.95,6.763,5.228,6.763s5.228-2.492,5.228-6.763Z"
                                                      transform="translate(-61.018 -34.955)" fill="#fff"></path>
                                                <path id="Path_186" data-name="Path 186"
                                                      d="M192.828,42.721h3.859v3.355h.093a4.7,4.7,0,0,1,4.741-3.561,6.244,6.244,0,0,1,1.387.151V46.45a5.659,5.659,0,0,0-1.818-.244,4.078,4.078,0,0,0-4.216,4.535V62.431h-4.045Z"
                                                      transform="translate(-58.386 -34.952)" fill="#fff"></path>
                                                <path id="Path_187" data-name="Path 187"
                                                      d="M220.256,56.652c-.544,3.578-4.028,6.034-8.486,6.034-5.734,0-9.293-3.842-9.293-10,0-6.182,3.578-10.192,9.122-10.192,5.453,0,8.883,3.746,8.883,9.722V53.6H206.56v.245a5.134,5.134,0,0,0,5.3,5.583,4.459,4.459,0,0,0,4.552-2.772Zm-13.676-5.883h9.855a4.741,4.741,0,0,0-4.835-5,4.991,4.991,0,0,0-5.02,5Z"
                                                      transform="translate(-57.076 -34.955)" fill="#fff"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=kz.umag.android" target="_blank">
                        <div class="google-play-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="291.747" height="89.49"
                                 viewBox="0 0 291.747 89.49">
                                <g id="Group_779" data-name="Group 779" transform="translate(-139.5 -4905.733)">
                                    <g id="Group_147" data-name="Group 147" transform="translate(140 4906.233)">
                                        <path id="Path_188" data-name="Path 188"
                                              d="M.523,12.542A11.347,11.347,0,0,1,11.87,1.2H279.925a11.346,11.346,0,0,1,11.346,11.347v65.8a11.346,11.346,0,0,1-11.346,11.347H11.87A11.347,11.347,0,0,1,.523,78.338Z"
                                              transform="translate(-0.523 -1.195)" fill="none" stroke="#fff"
                                              stroke-width="1"></path>
                                        <g id="Group_146" data-name="Group 146" transform="translate(93.529 29.893)">
                                            <path id="Path_189" data-name="Path 189"
                                                  d="M108.683,49.062a12.1,12.1,0,0,1-3.128,8.6,12.491,12.491,0,0,1-9.385,3.754,12.286,12.286,0,0,1-9.385-3.91,12.625,12.625,0,0,1-3.91-9.541,12.625,12.625,0,0,1,3.91-9.541,13.4,13.4,0,0,1,9.385-3.91,12.472,12.472,0,0,1,5.318,1.095,13.39,13.39,0,0,1,4.067,2.815l-2.191,2.19a8.677,8.677,0,0,0-7.038-2.972,10.068,10.068,0,0,0-7.039,2.815,9.556,9.556,0,0,0-2.972,7.351,9.556,9.556,0,0,0,2.972,7.351,10.068,10.068,0,0,0,7.039,2.815,9.91,9.91,0,0,0,7.195-2.815A7.852,7.852,0,0,0,105.711,50H96.327V46.872H108.84A11.869,11.869,0,0,0,108.683,49.062Z"
                                                  transform="translate(-82.875 -34.516)" fill="#fff"></path>
                                            <path id="Path_190" data-name="Path 190"
                                                  d="M109.338,44.339a8.861,8.861,0,0,1,6.413-2.659,8.367,8.367,0,0,1,6.413,2.659,9.206,9.206,0,0,1,2.5,6.726,9.456,9.456,0,0,1-2.5,6.726,8.859,8.859,0,0,1-6.413,2.659,8.367,8.367,0,0,1-6.413-2.659,9.21,9.21,0,0,1-2.5-6.726A10.2,10.2,0,0,1,109.338,44.339Zm2.5,11.262a5.667,5.667,0,0,0,8.134,0,6.843,6.843,0,0,0,0-9.072,5.667,5.667,0,0,0-8.134,0,6.839,6.839,0,0,0,0,9.072Z"
                                                  transform="translate(-79.623 -33.543)" fill="#fff"></path>
                                            <path id="Path_191" data-name="Path 191"
                                                  d="M126.264,44.339a8.86,8.86,0,0,1,6.413-2.659,8.363,8.363,0,0,1,6.412,2.659,9.207,9.207,0,0,1,2.5,6.726,9.457,9.457,0,0,1-2.5,6.726,8.858,8.858,0,0,1-6.412,2.659,8.365,8.365,0,0,1-6.413-2.659,9.205,9.205,0,0,1-2.5-6.726A9.457,9.457,0,0,1,126.264,44.339Zm2.5,11.262a5.666,5.666,0,0,0,8.133,0,6.839,6.839,0,0,0,0-9.072,5.666,5.666,0,0,0-8.133,0,6.258,6.258,0,0,0-1.721,4.536A5.681,5.681,0,0,0,128.767,55.6Z"
                                                  transform="translate(-77.325 -33.543)" fill="#fff"></path>
                                            <path id="Path_192" data-name="Path 192"
                                                  d="M149.354,68.11a8.1,8.1,0,0,1-5.162-1.564,10.269,10.269,0,0,1-2.815-3.6l2.972-1.251a4.52,4.52,0,0,0,1.876,2.346,5.285,5.285,0,0,0,3.129.938,5.22,5.22,0,0,0,4.223-1.564,5.8,5.8,0,0,0,1.564-4.38V57.317h-.156a8.7,8.7,0,0,1-2.5,2.19,6.857,6.857,0,0,1-3.6.938,8.081,8.081,0,0,1-5.943-2.659,9.205,9.205,0,0,1-2.5-6.726,9.457,9.457,0,0,1,2.5-6.726,8.081,8.081,0,0,1,5.943-2.659,9.279,9.279,0,0,1,3.6.782,6.869,6.869,0,0,1,2.5,2.19h.156v-2.5h3.129V58.881a8.592,8.592,0,0,1-8.916,9.228Zm.156-10.636a5.329,5.329,0,0,0,3.91-1.721,6.319,6.319,0,0,0,1.565-4.693,6.819,6.819,0,0,0-1.565-4.692,5.3,5.3,0,0,0-7.821,0,6.839,6.839,0,0,0,0,9.072A4.687,4.687,0,0,0,149.509,57.474Z"
                                                  transform="translate(-75.062 -33.544)" fill="#fff"></path>
                                            <path id="Path_193" data-name="Path 193"
                                                  d="M162.172,60.707h-3.285V35.055h3.285Z"
                                                  transform="translate(-72.558 -34.442)" fill="#fff"></path>
                                            <path id="Path_194" data-name="Path 194"
                                                  d="M172.5,60.449a8.363,8.363,0,0,1-6.412-2.659,9.206,9.206,0,0,1-2.5-6.726,9.952,9.952,0,0,1,2.346-6.569,7.661,7.661,0,0,1,6.257-2.815,7.918,7.918,0,0,1,6.257,2.5,9.664,9.664,0,0,1,2.345,6.882v.626H166.867a6.473,6.473,0,0,0,1.721,4.223,5.084,5.084,0,0,0,3.754,1.564,4.829,4.829,0,0,0,4.85-2.972l2.971,1.251a8.568,8.568,0,0,1-2.815,3.441A9.7,9.7,0,0,1,172.5,60.449Zm4.693-11.418a3.786,3.786,0,0,0-1.408-2.815,4.617,4.617,0,0,0-3.754-1.408A4.258,4.258,0,0,0,168.9,45.9a5.314,5.314,0,0,0-1.877,3.128Z"
                                                  transform="translate(-71.92 -33.543)" fill="#fff"></path>
                                            <path id="Path_195" data-name="Path 195"
                                                  d="M190.539,60.707h-3.285V35.055h8.759a8.2,8.2,0,0,1,5.631,2.19,7.559,7.559,0,0,1,0,10.949,8.2,8.2,0,0,1-5.631,2.19h-5.474Zm0-13.452h5.474a4.038,4.038,0,0,0,3.285-1.408,4.535,4.535,0,0,0,0-6.257,4.038,4.038,0,0,0-3.285-1.408h-5.474Z"
                                                  transform="translate(-68.707 -34.442)" fill="#fff"></path>
                                            <path id="Path_196" data-name="Path 196"
                                                  d="M207.211,60.707h-3.285V35.055h3.285Z"
                                                  transform="translate(-66.444 -34.442)" fill="#fff"></path>
                                            <path id="Path_197" data-name="Path 197"
                                                  d="M215.034,60.426a6.819,6.819,0,0,1-4.693-1.564,5.358,5.358,0,0,1-1.876-4.223,5.559,5.559,0,0,1,2.19-4.536,8.732,8.732,0,0,1,5.474-1.564,8.351,8.351,0,0,1,4.693,1.095v-.469a4.366,4.366,0,0,0-1.252-3.128,4.908,4.908,0,0,0-3.285-1.095,5.139,5.139,0,0,0-2.659.626,3.655,3.655,0,0,0-1.565,1.877l-2.971-1.251a8.2,8.2,0,0,1,2.346-2.972,7.6,7.6,0,0,1,4.692-1.408,8.062,8.062,0,0,1,5.631,2.033,7.179,7.179,0,0,1,2.19,5.631V60.113h-3.128v-2.5A7.191,7.191,0,0,1,215.034,60.426Zm.469-2.972a5.085,5.085,0,0,0,3.755-1.564,4.677,4.677,0,0,0,1.721-3.6,6.491,6.491,0,0,0-4.224-1.095,4.967,4.967,0,0,0-3.6,1.095,3.267,3.267,0,0,0-1.25,2.5A2.279,2.279,0,0,0,213,56.828,6.554,6.554,0,0,0,215.5,57.454Z"
                                                  transform="translate(-65.828 -33.525)" fill="#fff"></path>
                                            <path id="Path_198" data-name="Path 198"
                                                  d="M229.37,67.566h-3.441L230,58.65,222.8,42.227h3.6L231.56,54.9l5.162-12.67h3.6Z"
                                                  transform="translate(-63.882 -33.469)" fill="#fff"></path>
                                        </g>
                                        <path id="Path_208" data-name="Path 208"
                                              d="M20.8,43.42V18.8a3.6,3.6,0,0,1,.9-2.666c.3-.314.452-.314.753,0,5.27,5.645,10.691,11.291,15.962,16.936,3.463,3.607,6.927,7.37,10.39,10.977.3.314.3.471,0,.941l-25.3,26.345a.941.941,0,0,1-1.355.157,3.469,3.469,0,0,1-1.2-2.823V54.084C20.8,50.32,20.8,46.87,20.8,43.42Z"
                                              transform="translate(2.228 0.8)" fill="#fff"></path>
                                        <path id="Path_209" data-name="Path 209"
                                              d="M23.449,15.269a2.473,2.473,0,0,1,1.506.471C35.8,22.013,46.639,28.285,57.33,34.715c.452.314.452.47.151.784l-7.228,7.527c-.3.314-.452.471-.753,0-8.583-9.1-17.166-18.191-25.9-27.443C23.75,15.583,23.6,15.426,23.449,15.269Z"
                                              transform="translate(2.588 0.715)" fill="#fff"></path>
                                        <path id="Path_210" data-name="Path 210"
                                              d="M25.574,67.427C33.4,59.116,41.235,50.961,49.065,42.65c.452-.47.753-.47,1.2,0,1.958,2.2,4.066,4.234,6.023,6.43.3.314.452.47-.151.784-10.089,5.8-20.178,11.448-30.267,17.25Z"
                                              transform="translate(2.877 4.384)" fill="#fff"></path>
                                        <path id="Path_211" data-name="Path 211"
                                              d="M67.422,41.31a2.474,2.474,0,0,1-1.054,2.039c-.452.314-1.054.627-1.506.941-3.012,1.725-6.174,3.45-9.185,5.332-.452.314-.6.157-1.054-.157-2.108-2.352-4.367-4.7-6.475-6.9-.3-.314-.3-.471,0-.784,2.56-2.666,5.12-5.332,7.68-7.841.3-.314.452-.314.9-.157,3.012,1.725,6.023,3.45,9.035,5.332A2.194,2.194,0,0,1,67.422,41.31Z"
                                              transform="translate(5.91 3.214)" fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="footer-bottom__credits col-grow col-mob-100"> &copy; umag, 2025</div>
                <div class="col-auto col-mob-100">
                    <div class="social-svg-wrap">
                        <a target="_blank" href="https://www.youtube.com/c/umagmedia">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Group_132" data-name="Group 132" width="53"
                                 height="53" viewBox="0 0 53 53">
                                <rect id="Rectangle_45" data-name="Rectangle 45" width="53" height="53" rx="15"
                                      fill="red"></rect>
                                <g id="youtube" transform="translate(12.945 17.114)">
                                    <g id="Group_111" data-name="Group 111" transform="translate(0 0)">
                                        <path id="Path_20" data-name="Path 20"
                                              d="M26.049,81.8c-.738-1.313-1.539-1.554-3.169-1.646C21.251,80.046,17.155,80,13.606,80s-7.653.046-9.281.155c-1.627.094-2.43.333-3.175,1.648C.391,83.113,0,85.371,0,89.347v.014c0,3.958.391,6.234,1.151,7.531C1.9,98.2,2.7,98.442,4.324,98.553c1.629.1,5.727.151,9.282.151s7.645-.056,9.275-.15c1.631-.111,2.432-.349,3.169-1.661.767-1.3,1.155-3.572,1.155-7.531v-.014C27.206,85.371,26.818,83.113,26.049,81.8ZM10.2,94.453v-10.2l8.5,5.1Z"
                                              transform="translate(0 -80)" fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        {{--                        <a target="_blank" href="https://t.me/UmagHelpBot/?start">--}}
                        {{--                            <svg xmlns="http://www.w3.org/2000/svg" id="Group_134" data-name="Group 134" width="53.04" height="52.767" viewBox="0 0 53.04 52.767">--}}
                        {{--                                <g id="Group_133" data-name="Group 133">--}}
                        {{--                                    <path id="Path_176" data-name="Path 176" d="M17.771,0h17.5A17.771,17.771,0,0,1,53.04,17.771V35A17.771,17.771,0,0,1,35.269,52.767h-17.5A17.771,17.771,0,0,1,0,35V17.771A17.771,17.771,0,0,1,17.771,0Z" fill="#42bde9"></path>--}}
                        {{--                                </g>--}}
                        {{--                                <path id="telegram_1_" data-name="telegram (1)" d="M6.563,13.891l3.392,8.48,4.416-4.416,7.572,6.018L27.275,0,0,11.362ZM19.481,6.879l-8.349,7.615-1.04,3.919-1.921-4.8Zm0,0" transform="translate(11.97 14.763)" fill="#fff"></path>--}}
                        {{--                            </svg>--}}
                        {{--                        </a>--}}
                        <a target="_blank" href="https://www.instagram.com/umag.kz/">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Group_136" data-name="Group 136" width="53.04"
                                 height="52.767" viewBox="0 0 53.04 52.767">
                                <g id="Group_135" data-name="Group 135" transform="translate(0)">
                                    <g id="Group_133" data-name="Group 133">
                                        <path id="Path_176" data-name="Path 176"
                                              d="M17.771,0h17.5A17.771,17.771,0,0,1,53.04,17.771V35A17.771,17.771,0,0,1,35.269,52.767h-17.5A17.771,17.771,0,0,1,0,35V17.771A17.771,17.771,0,0,1,17.771,0Z"
                                              fill="#c53c74"></path>
                                    </g>
                                </g>
                                <g id="instagram" transform="translate(14.015 14.05)">
                                    <g id="Group_114" data-name="Group 114">
                                        <g id="Group_113" data-name="Group 113">
                                            <path id="Path_22" data-name="Path 22"
                                                  d="M17.086,0H7.766A7.767,7.767,0,0,0,0,7.766v9.32a7.767,7.767,0,0,0,7.766,7.766h9.32a7.767,7.767,0,0,0,7.766-7.766V7.766A7.767,7.767,0,0,0,17.086,0Zm5.436,17.086a5.442,5.442,0,0,1-5.436,5.436H7.766A5.442,5.442,0,0,1,2.33,17.086V7.766A5.442,5.442,0,0,1,7.766,2.33h9.32a5.442,5.442,0,0,1,5.436,5.436Z"
                                                  fill="#fff"></path>
                                        </g>
                                    </g>
                                    <g id="Group_116" data-name="Group 116" transform="translate(6.213 6.213)">
                                        <g id="Group_115" data-name="Group 115">
                                            <path id="Path_23" data-name="Path 23"
                                                  d="M134.213,128a6.213,6.213,0,1,0,6.213,6.213A6.213,6.213,0,0,0,134.213,128Zm0,10.1a3.883,3.883,0,1,1,3.883-3.883A3.889,3.889,0,0,1,134.213,138.1Z"
                                                  transform="translate(-128 -128)" fill="#fff"></path>
                                        </g>
                                    </g>
                                    <g id="Group_118" data-name="Group 118" transform="translate(18.277 4.919)">
                                        <g id="Group_117" data-name="Group 117">
                                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="0.828" cy="0.828" r="0.828"
                                                    fill="#fff"></circle>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/umagkz/">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Group_140" data-name="Group 140" width="53.04"
                                 height="52.767" viewBox="0 0 53.04 52.767">
                                <g id="Group_137" data-name="Group 137">
                                    <g id="Group_135" data-name="Group 135">
                                        <g id="Group_133" data-name="Group 133">
                                            <path id="Path_176" data-name="Path 176"
                                                  d="M17.771,0h17.5A17.771,17.771,0,0,1,53.04,17.771V35A17.771,17.771,0,0,1,35.269,52.767h-17.5A17.771,17.771,0,0,1,0,35V17.771A17.771,17.771,0,0,1,17.771,0Z"
                                                  fill="#3b5998"></path>
                                        </g>
                                    </g>
                                </g>
                                <g id="facebook" transform="translate(14.442 14.296)">
                                    <g id="Group_112" data-name="Group 112">
                                        <path id="Path_21" data-name="Path 21"
                                              d="M21.317,0H3.045A3.048,3.048,0,0,0,0,3.045V21.317a3.048,3.048,0,0,0,3.045,3.045h9.136V15.988H9.136V12.181h3.045V9.136a4.568,4.568,0,0,1,4.568-4.568h3.045V8.374H18.271c-.84,0-1.523-.079-1.523.761v3.045h3.807l-1.523,3.807H16.749v8.374h4.568a3.048,3.048,0,0,0,3.045-3.045V3.045A3.048,3.048,0,0,0,21.317,0Z"
                                              fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/company/23703854/admin/">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Group_139" data-name="Group 139" width="53.04"
                                 height="52.767" viewBox="0 0 53.04 52.767">
                                <g id="Group_138" data-name="Group 138" transform="translate(0)">
                                    <g id="Group_135" data-name="Group 135" transform="translate(0)">
                                        <g id="Group_133" data-name="Group 133">
                                            <path id="Path_176" data-name="Path 176"
                                                  d="M17.771,0h17.5A17.771,17.771,0,0,1,53.04,17.771V35A17.771,17.771,0,0,1,35.269,52.767h-17.5A17.771,17.771,0,0,1,0,35V17.771A17.771,17.771,0,0,1,17.771,0Z"
                                                  fill="#5081b9"></path>
                                        </g>
                                    </g>
                                </g>
                                <g id="linkedin-logo" transform="translate(14.278 14.296)">
                                    <path id="LinkedIn__x28_alt_x29_"
                                          d="M22.565,0H1.8A1.773,1.773,0,0,0,0,1.745v20.87a1.774,1.774,0,0,0,1.8,1.746H22.565a1.773,1.773,0,0,0,1.8-1.746V1.745A1.773,1.773,0,0,0,22.565,0ZM7.388,20.393H3.707v-11H7.388Zm-1.84-12.5H5.523a1.906,1.906,0,1,1,.048-3.8,1.907,1.907,0,1,1-.023,3.8Zm15.109,12.5h-3.68V14.508c0-1.479-.533-2.488-1.864-2.488a2.01,2.01,0,0,0-1.888,1.338,2.458,2.458,0,0,0-.123.891v6.144H9.423s.048-9.967,0-11H13.1v1.559a3.654,3.654,0,0,1,3.315-1.818c2.422,0,4.238,1.571,4.238,4.951v6.307Zm-7.577-9.4c.006-.01.015-.023.024-.035v.035Z"
                                          transform="translate(-0.002)" fill="#fff"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <a class="footer-bottom__offer offer" href="/legal/terms-of-use">ШАРТНОМАИ ЛИТСЕНЗИОНӢ-ОФЕРТА</a>
            <a class="footer-bottom__offer policy" href="/privacy-policy">Сиёсати махфият</a>
        </div>
        @if(!str_contains(url()->current(), '/start') && !str_contains(url()->current(), '/target'))
            <div class="start-for-free"><a href="/request-form" class="in-free">ройгон кӯшиш кунед</a></div>
        @endif
        <script type="text/javascript" src="/landing-resources/lib/modernizr-custom.js"></script>
        <script type="text/javascript" src="/js/index.js"></script>
        <script type="text/javascript" src="/landing-resources/lib/inputmask.js"></script>
        <script type="text/javascript" src="/landing-resources/lib/jquery.inputmask.js"></script>
        <script type="text/javascript">
            const ua = navigator.userAgent,
                iOS = /iPad|iPhone|iPod/.test(ua),
                iOS11 = /OS 11_0|OS 11_1|OS 11_2/.test(ua);
            $(".menu-item").hover(function () {
                $(this).find(".drop-active-menu").css("display", "block"), setTimeout(function () {
                    $(this).find(".drop-active-menu").css("opacity", "1")
                }.bind(this), 10), $(".drop-active-item").hover(function () {
                    $(this).find(".drop-sub-menu").css("display", "block"), setTimeout(function () {
                        $(this).find(".drop-sub-menu").css("opacity", "1")
                    }.bind(this), 10)
                }, function () {
                    $(this).find(".drop-sub-menu").css({
                        opacity: "0"
                    }), setTimeout(function () {
                        $(this).find(".drop-sub-menu").css("display", "none")
                    }.bind(this), 200)
                })
            }, function () {
                $(this).find(".drop-active-menu").css({
                    display: "none",
                    opacity: "0"
                })
            });
            var flag_accar = !0;
            $(".drop-no-desk-svg").click(function () {
                flag_accar ? ($("span.drop-no-desk-svg").css({
                    transform: "rotate(180deg)"
                }), $(".accar-hider").slideDown(), flag_accar = !1) : ($("span.drop-no-desk-svg").css({
                    transform: "rotate(0deg)"
                }), $(".accar-hider").slideUp(), flag_accar = !0)
            }), $(".menu-item>ul>li").click(function () {
                void 0 !== $(this).children("a").attr("href") && (window.location.href = $(this).children("a").attr("href"))
            });
            let overlayIsActive = !1;
            $("#burgerClick").click(function () {
                $("[data-menu]").animate({
                    right: 0
                }, 200), $("[data-menu-fade]").fadeIn()
            }), $("[data-close-menu]").click(function () {
                $(".new-sub-menu").css({"transform": "translateX(100%)", "opacity": "0"});
                $(".back-to-ul").css("display", "none");
                current_ul = [];

                let e = window.matchMedia("(max-width: 767px)").matches ? "-100%" : "-50%";
                $("[data-menu-fade]").fadeOut(), $("[data-menu]").animate({
                    right: e
                }, 200, function () {
                    iOS && iOS11 && $("body").removeClass("fixed"), $("body").removeClass("no-scroll").css({
                        "padding-right": ""
                    }), $(".header").css("right", ""), $(".fixed-phone").css("right", ""), overlayIsActive = !1
                })
            }), $("[data-menu-body]").click(function (e) {
                e.stopPropagation()
            });
            var current_ul = [];
            $('.mobile-menu__toggle').click(function () {
                current_ul.unshift($(this).parent().find("ul").first());
                console.log(current_ul);
                $(current_ul[0]).css({"transform": "translateX(0%)", "opacity": "1"});
                if (current_ul.length != 0) {
                    $(".back-to-ul").fadeIn(200);
                }
            });
            $(".without-link").click(function () {
                $(this).siblings(".mobile-menu__toggle").trigger("click");
            });
            $(".back-to-ul").click(function () {
                $(current_ul[0]).css({"transform": "translateX(100%)", "opacity": "0"});
                current_ul.splice(0, 1);
                if (current_ul.length == 0) {
                    $(".back-to-ul").fadeOut(200);
                }
                console.log(current_ul.length);
            });
            $(window).scroll(function () {
                $(window).scrollTop() >= $(document).height() - ($(window).height() + 50) ? $(".start-for-free").css({
                    backgroundColor: "#161a1f",
                    padding: "0 3rem"
                }) : $(".start-for-free").css({
                    backgroundColor: "#f9f9f9",
                    padding: "0 5rem"
                })
            });
            var toggler_flag = !1;

            function whiteHeader() {
                $(window).scrollTop() >= 400 ? $(".header-button").css("transform", "scale(1)") : $(".header-button").css("transform", "scale(0)")
            }

            function loadDeferredImages() {
                for (var e = document.querySelectorAll("[data-deferred-img]"), t = 0; t < e.length; t++) e[t].hasAttribute("srcset") ? e[t].setAttribute("srcset", e[t].getAttribute("data-deferred-img")) : e[t].setAttribute("src", e[t].getAttribute("data-deferred-img"))
            }

            function openModal(e) {
                var t = $(e);
                return t.fadeIn(400), t.addClass("show"), !0
            }

            function closeModal(e) {
                var t = $(e);
                t.removeClass("show"), t.fadeOut(400, function () {
                    $("body").removeClass("no-scroll").css({
                        "padding-right": ""
                    }), iOS && iOS11 && $("body").removeClass("fixed"), $(".header").css("right", ""), $(".fixed-phone").css("right", ""), overlayIsActive = !1
                })
            }

            function addEventListenerForm(e, type = '') {
                $(e).find("select").change(function () {
                    $(".modal-form__select_option").val($(e).find("select option:selected").text().replace("@lang('contact.your_city')", ""))
                }), e.on("submit", function (e) {
                    e.preventDefault();
                    let t = $(this),
                        o = t.find('[name="phone"]').val();
                    if (null !== t.find('[name="city"]').val() && o.replace(/[^+\d]/g, "").length > 11) {
                        let e = t.serialize();
                        t.find("[type='submit']").attr("disabled", !0);
                        let o = $.ajax({
                            url: "/lol",
                            type: "post",
                            data: e
                        });
                        return o.done(function (e, o, a) {
                            console.log(e), t.find('[name="phone"]').val(""), t.find('[name="name"]').val(""), t.find('[name="message"]').val(""), t.find("[data-error-message]").hide(), t.find("[data-error-message-cache]").hide(), t.find("[data-info-message]").show(), t.find("[type='submit']").attr("disabled"), Cookies.set("show-success", "1"), window.location.href = `${type === 'target' ? '/success-target' : '/success'}`
                        }), o.fail(function (e, o, a) {
                            console.log(e), e.status === 402 ? t.find("[data-error-message-cache]").show() : t.find("[data-error-message]").show(), t.find("[data-info-message]").hide(), console.error("The following error occurred: " + o, a)
                        }), !1
                    }
                    t.find("[data-error-message]").show()
                    t.find("[data-info-message]").hide()
                })
            }

            $(".sub_accardion").click(function () {
                (toggler_flag = !toggler_flag) ? $(this).css({
                    transform: "rotate(-180deg)"
                }) : $(this).css({
                    transform: "rotate(0)"
                }), $(".sub-drop-menu-mobile").slideToggle()
            }), setTimeout(() => {
                // null == Cookies.get("roistat_visit") && Cookies.set("roistat_visit", roistat.visit)
            }, 1e3), $(window).scroll(function () {
                whiteHeader()
            }), $(".header-button").click(function () {
                window.location.href = "/request-form"
            }), window.onload = function () {
                loadDeferredImages()
            }, $("[data-open-modal]").click(function () {
                openModal($(this).data("open-modal"))
            }), $("[data-close-modal]").click(function () {
                closeModal($(this).data("close-modal"))
            }), $("[data-modal-box]").click(function (e) {
                e.stopPropagation()
            }), $("[data-caption]").click(function () {
                var e = $(this).data("caption");
                $("#modal-form__caption").text(e), $("#modal-form__type").val("Дархости таҷҳизот: " + e.replace("Маҳсулот харед: ", ""))
            }), $("[data-phone-mask]").inputmask("+7 (999) 999 99 99"), addEventListenerForm($("#lead-catcher-form")), addEventListenerForm($("#request-form")), addEventListenerForm($("#modal-form")), addEventListenerForm($("#contact-form-target"), 'target'), addEventListenerForm($("#contact-form")), addEventListenerForm($("#complexForm"));
        </script>
        {{--        <script>--}}
        {{--            (function(w, d, s, l, i) {--}}
        {{--                w[l] = w[l] || [];--}}
        {{--                w[l].push({--}}
        {{--                    'gtm.start': new Date().getTime(),--}}
        {{--                    event: 'gtm.js'--}}
        {{--                });--}}
        {{--                var f = d.getElementsByTagName(s)[0],--}}
        {{--                    j = d.createElement(s),--}}
        {{--                    dl = l != 'dataLayer' ? '&l=' + l : '';--}}
        {{--                j.async = true;--}}
        {{--                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;--}}
        {{--                f.parentNode.insertBefore(j, f);--}}
        {{--            })(window, document, 'script', 'dataLayer', 'GTM-5MNJKGM');--}}
        {{--        </script>--}}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91096537-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'UA-91096537-2');
        </script>
    </footer>
</div>
