<header>
    <div class="header">
        <div class="container row row_middle sides-padding-40">
            <div class="header-sidebar">
                <div class="td-header-sp-logo">
                    <a title="На главную" href="/" class="logo__link">
                        <span class="logo__img-white"></span>
                        <span class="logo__img-colored"></span>
                    </a>
	            </div>
                <ul media="(min-width: 767px)">
                @if(Route::currentRouteName() == 'post.index' OR 
                        Route::currentRouteName() == 'post.show' OR 
                        Route::currentRouteName() == 'post.search'OR 
                        Route::currentRouteName() == 'post.chapter')
                            <span class="your-shop-type">@lang('knowledge-base.choose_section')</span>
                            <li class="base-menu active-menu-1"> <a href="/knowledge-base/priemka">@lang('knowledge-base.acceptance')</a> </li>
                            <li class="base-menu active-menu-2"> <a href="/knowledge-base/revisia">@lang('knowledge-base.revision')</a> </li>
{{--                            <li class="base-menu active-menu-3"> <a href="/knowledge-base/otshety">@lang('knowledge-base.reports')</a> </li>--}}
                            <li class="base-menu active-menu-4"> <a href="/knowledge-base/sysloyal">@lang('knowledge-base.loyalty_system')</a> </li>
                            <li class="base-menu active-menu-5"> <a href="/knowledge-base/podpiska">@lang('knowledge-base.subscription')</a> </li>
                            <li class="base-menu active-menu-6"> <a href="/knowledge-base/nomenklatura">Номенклатура</a> </li>
                            <li class="base-menu active-menu-7"> <a href="/knowledge-base/finance">@lang('knowledge-base.finance')</a> </li>
                            <li class="base-menu active-menu-8"> <a href="/knowledge-base/product">@lang('knowledge-base.goods')</a> </li>
{{--                            <li class="base-menu active-menu-9"> <a href="/knowledge-base/sales">@lang('knowledge-base.sales')</a> </li>--}}
                            <li class="base-menu active-menu-10"> <a href="/knowledge-base/directory">@lang('knowledge-base.directory')</a> </li>
                            <li class="base-menu active-menu-11"> <a href="/knowledge-base/cassa">@lang('knowledge-base.cash_register')</a> </li>
                            <li class="base-menu active-menu-12"> <a href="/knowledge-base/cabinet">@lang('knowledge-base.cabinet_sale')</a> </li>
{{--                            <li class="base-menu active-menu-12"> <a href="/knowledge-base/androidcassa">Android Касса</a> </li>--}}
                        @elseif($side=='mag')
                            <span class="your-shop-type">@lang('home.what_store')</span>
                            <li class="for-active for-active-1"> <a href="/produktovyj-magazin">@lang('menu.grocery')</a> </li>
                            <li class="for-active for-active-2"> <a href="/magazin-kosmetiki">@lang('menu.cosmetics')</a> </li>
                            <li class="for-active for-active-4"> <a href="/apteka">@lang('menu.pharmacy')</a> </li>
                            <li class="for-active for-active-3"> <a href="/magazin-odezhdy">@lang('menu.clothing')</a> </li>
                            <li class="for-active for-active-5"> <a href="/magazin-spirtnyh-napitkov">@lang('menu.liquor')</a> </li>
                            <li class="for-active for-active-6"> <a href="/magazin-igrushek">@lang('menu.toy')</a></li>
                            <li class="for-active for-active-7"> <a href="/magazin-aksessuarov">@lang('menu.accessories')</a> </li>
                            <li class="for-active for-active-8"> <a href="/magazin-optiki">@lang('menu.optics')</a> </li>
                            <li class="for-active for-active-9"> <a href="/vozmozhnosti-programmy-umag">@lang('menu.other')</a> </li>
                    @else
                        <span class="your-shop-type">@lang('menu.equipment')</span>
                        <li class="for-active for-active-0"> <span data-value="0" class="eq_select_sidebar eq_select_sidebar0">@lang('equipment.all_equipment')</span> </li>
                        @foreach ($types as $type)
                            @if( isset($type_id) && $type_id==$type->id )
                                <?php $style = 'color: #2dbe60;';?>
                            @else
                                <?php $style = "";?>
                            @endif
                                @if ($type->id === 1)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.monoblock') </span> </li>
                                @elseif ($type->id === 2)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.barcode_scanner') </span> </li>
                                @elseif ($type->id === 3)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.receipt_printer') </span> </li>
                                @elseif ($type->id === 4)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.label_printer') </span> </li>
                                @elseif ($type->id === 5)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> ТСД </span> </li>
                                @elseif ($type->id === 6)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.scales') </span> </li>
                                @elseif ($type->id === 7)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.accessories') </span> </li>
                                @elseif ($type->id === 9)
                                    <li class="for-active for-active-{{$type->id}}" > <span style="{{$style}}" data-value="{{$type->id}}" class="eq_select_sidebar eq_select_sidebar{{ $type->id }}"> @lang('equipment.smart_terminal') </span> </li>
                                @endif



                        @endforeach
                    @endif
                    <span id="sideCall" data-open-modal="#equipment-modal">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="15.54" height="27.442" viewBox="0 0 15.54 27.442"><g id="icon" transform="translate(-5.951)"><path id="Path_1708" data-name="Path 1708" d="M19.494,0H7.948a2,2,0,0,0-2,2V25.445a2,2,0,0,0,2,2H19.494a2,2,0,0,0,2-2V2A2,2,0,0,0,19.494,0ZM10.872,1.214h5.7c.144,0,.261.215.261.481s-.117.482-.261.482h-5.7c-.145,0-.26-.216-.26-.482S10.727,1.214,10.872,1.214Zm2.85,24.255a1.275,1.275,0,1,1,1.273-1.276A1.277,1.277,0,0,1,13.722,25.469ZM20,21.1H7.448V3.373H19.995V21.1Z"/></g></svg></i> @lang('home.call_me')
                    </span>
                    <button class="sidebarBtn">
                    <span></span>
                </button>

                </ul>
            </div>
            <div class="col-grow right-part" style="display: flex;">
                <div class="drop-menu">
                <ul class="link-lister">
                    <li class="menu-item"> <a href="/">@lang('menu.home')</a> </li>
                    <li class="menu-item">
                        <a href="/ceny">@lang('menu.tariff')</a>
{{--                        <ul class="drop-active-menu" style="display: none; opacity: 0;">--}}
{{--                            <li><a href="/tariff">@lang('menu.tariff_for_client')</a></li>--}}
{{--                        </ul>--}}
                    <li class="menu-item">
                        <span>@lang('menu.product')</span>
                        <ul class="drop-active-menu" style="display: none; opacity: 0;">
                            <li class="drop-active-item">
                                <span>@lang('product_automation.automation')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.171" height="16.494" viewBox="0 0 10.171 16.494">
                                        <g id="keyboard-right-arrow-button_1_" data-name="keyboard-right-arrow-button (1)" transform="translate(-58.65)">
                                        <g id="chevron-right" transform="translate(58.65)">
                                            <path id="Path_10" data-name="Path 10" d="M60.574,0,58.65,1.924l6.323,6.323L58.65,14.57l1.924,1.924,8.247-8.247Z" transform="translate(-58.65)" fill="#d4d4d4"></path>
                                        </g>
                                        </g>
                                    </svg>
                                </span>
                                <ul class="drop-sub-menu" style="display: none; opacity: 0;">
                                    <li> <a href="/produktovyj-magazin">@lang('home.grocery_store')</a> </li>
                                    <li> <a href="/magazin-kosmetiki">@lang('home.cosmetics_store')</a> </li>
                                    <li> <a href="/apteka">@lang('home.pharmacy')</a> </li>
                                    <li> <a href="/magazin-odezhdy">@lang('home.clothing_store')</a> </li>
                                    <li> <a href="/magazin-spirtnyh-napitkov">@lang('home.liquor_store')</a> </li>
                                    <li> <a href="/magazin-igrushek">@lang('home.toy_store')</a></li>
                                    <li> <a href="/magazin-aksessuarov">@lang('home.accessories_store')</a> </li>
                                    <li> <a href="/magazin-optiki">@lang('home.optics_store')</a> </li>
                                </ul>
                            </li>
                            <li> <a href="/vozmozhnosti-programmy-umag">@lang('product_capabilities.capabilities')</a> </li>
{{--                            <li> <a href="/ceny">@lang('product_price.price')</a> </li>--}}
{{--                            <li> <a href="/snt">снт</a></li>--}}
                        </ul>  
                    </li>
                    <li class="menu-item"> 
                    <a href="/equipment">@lang('menu.equipment')</a>
                    <ul class="drop-active-menu" style="display: none; opacity: 0;">
                        <li><a href="/equipment/pos_monoblock_umag_t310">@lang('equipment.monoblock')</a></li>
                        <li><a href="/equipment/check_printer_58mm_umag_58u/">@lang('equipment.receipt_printer')</a></li>
                        <li><a href="/equipment/cash_box_umag_42mm/">@lang('equipment.money_box')</a></li>
                        <li><a href="/equipment/barcode_scanner_zebra_ds2208/">@lang('equipment.barcode_scanner')</a></li>
                        <li><a href="/equipment/label_printer_rongta_rp80vi-use">@lang('equipment.label_printer')</a></li>
                    </ul>
                    </li>
                    <li class="menu-item"> <a href="https://umag-partner.kz/">@lang('menu.franchise')</a> </li>
{{--                    <li class="menu-item"> <a href="https://media.umag.kz/"><span>@lang('menu.media')</span></a> </li>--}}
{{--                    <li class="menu-item"> <a href="https://media.umag.kz/stati/"><span>@lang('menu.news')</span></a> </li>--}}
                    <li class="menu-item"> <a href="/kontakty"><span>@lang('menu.contacts')</span></a> </li>
                    <li class="menu-item"> <a href="/knowledge-base-new"><span>@lang('menu.knowledgebase')</span></a> </li>
{{--                    <li class="menu-item news-item"> <a href="/news">--}}
{{--                            <span>@lang('menu.news')</span>--}}
{{--                            <span class="news-icon"></span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
                <!-- <button class="header-button">@lang('home.try_free')</button> -->
                <a href="https://umag-main.kz/page57741021.html" class="header-button">@lang('home.try_free')</a>

            </div>
            <div class="header-right-wrapp">
                <div class="dropdown">
{{--                    <img src="{{Config::get('languages')[App::getLocale()]['country-name']}}" alt="" onclick="myFunction()" class="dropbtn">--}}
                    <p onclick="myFunction()" class="dropbtn"> {{Config::get('languages')[App::getLocale()]['country-name']}} </p>
                    <div id="myDropdown" class="dropdown-content">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != app()->getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
{{--                                    <img src="{{$language['flag-icon']}}" alt="">--}}
                                    <p class="languages">{{$language['country-name']}}</p>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <a href="https://web.umag.kz/login" class="sign-in-btn" target="_blank"> 
                    <span class="sign-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <g clip-path="url(#clip0)">
                            <path d="M9.96632 12.1115C12.922 12.1115 15.3194 9.71416 15.3194 6.75851C15.3194 3.80286 12.922 1.42188 9.96632 1.42188C7.01067 1.42188 4.61328 3.81926 4.61328 6.75851C4.61328 9.69776 7.01063 12.1115 9.96632 12.1115ZM9.96632 2.81761C12.1338 2.81761 13.9072 4.591 13.9072 6.75851C13.9072 8.92602 12.1338 10.6994 9.96632 10.6994C7.79884 10.6994 6.02542 8.92598 6.02542 6.75847C6.02542 4.59096 7.79881 2.81761 9.96632 2.81761Z" fill="#000"></path>
                            <path d="M0.706068 20.4689H19.2939C19.688 20.4689 20 20.1569 20 19.7628C20 16.0682 16.9951 13.0469 13.2841 13.0469H6.71594C3.02135 13.0469 0 16.0518 0 19.7628C0 20.1569 0.311982 20.4689 0.706068 20.4689ZM6.71594 14.459H13.2841C15.977 14.459 18.1937 16.4623 18.5386 19.0567H1.46141C1.80622 16.4787 4.023 14.459 6.71594 14.459Z" fill="#000"></path>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="20" height="20" fill="#000" transform="translate(0 0.945312)"></rect>
                            </clipPath>
                            </defs>
                        </svg>
                    </span> 
                    <span class="text-sign">@lang('menu.signin_btn')</span>
                </a>
                <button class="new-button" id="burgerClick">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34.016" height="23.039" viewBox="0 0 34.016 23.039">
                        <g id="Group_7" data-name="Group 7" transform="translate(0 2)">
                        <line id="Line_2" data-name="Line 2" x2="34.016" transform="translate(0 0)" fill="none" stroke="#000" stroke-width="4"></line>
                        <line id="Line_3" data-name="Line 3" x2="34.016" transform="translate(0 9.52)" fill="none" stroke="#000" stroke-width="4"></line>
                        <line id="Line_4" data-name="Line 4" x2="34.016" transform="translate(0 19.039)" fill="none" stroke="#000" stroke-width="4"></line>
                        </g>
                    </svg>
                </button>
            </div>            
        </div>
    </div>
    <div class="main-menu__fade" data-menu-fade="" data-close-menu="" style="display:none"></div>
    <nav class="main-menu" data-menu="">
        <span class="back-to-ul" style="display: none">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve" width="48" height="48">
                <path d="M384.834,180.699c-0.698,0-348.733,0-348.733,0l73.326-82.187c4.755-5.33,4.289-13.505-1.041-18.26    c-5.328-4.754-13.505-4.29-18.26,1.041l-82.582,92.56c-10.059,11.278-10.058,28.282,0.001,39.557l82.582,92.561    c2.556,2.865,6.097,4.323,9.654,4.323c3.064,0,6.139-1.083,8.606-3.282c5.33-4.755,5.795-12.93,1.041-18.26l-73.326-82.188    c0,0,348.034,0,348.733,0c55.858,0,101.3,45.444,101.3,101.3s-45.443,101.3-101.3,101.3h-61.58    c-7.143,0-12.933,5.791-12.933,12.933c0,7.142,5.79,12.933,12.933,12.933h61.58c70.12,0,127.166-57.046,127.166-127.166    C512,237.745,454.954,180.699,384.834,180.699z" style="fill: rgb(0, 0, 0);"></path>
            </svg>
        </span>
        <span class="main-menu__close" data-close-menu=""></span>
        <div class="main-menu__body" data-menu-body="">
            <div class="mobile-menu">
                <nav>
                    <ul>
                        <li><a href="/">@lang('menu.home')</a></li>
                        <li><a href="/ceny">@lang('menu.tariff')</a>
                            <ul class="drop-active-menu" style="display: none; opacity: 0;">
                                <li><a href="/tariff">@lang('menu.tariff_for_client')</a></li>
                            </ul>
                        </li>
                        <li id="accordion-1" class="mobile-menu__nested">
                            <span class="without-link">@lang('menu.product')</span>
                            <span class="mobile-menu__toggle" data-collapse-toggle="#accordion-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve" width="48" height="48">
                                    <path d="M381.039,248.62L146.373,3.287c-4.083-4.229-10.833-4.417-15.083-0.333c-4.25,4.073-4.396,10.823-0.333,15.083    L358.56,255.995L130.956,493.954c-4.063,4.26-3.917,11.01,0.333,15.083c2.063,1.979,4.729,2.958,7.375,2.958    c2.813,0,5.604-1.104,7.708-3.292L381.039,263.37C384.977,259.245,384.977,252.745,381.039,248.62z" style="fill: rgb(0, 0, 0);"></path>
                                </svg>
                            </span>
                            <ul class="new-sub-menu">
                                <li>
                                    <span class="without-link">@lang('product_automation.automation')</span>
                                    <span class="mobile-menu__toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve" width="48" height="48">
                                            <path d="M381.039,248.62L146.373,3.287c-4.083-4.229-10.833-4.417-15.083-0.333c-4.25,4.073-4.396,10.823-0.333,15.083    L358.56,255.995L130.956,493.954c-4.063,4.26-3.917,11.01,0.333,15.083c2.063,1.979,4.729,2.958,7.375,2.958    c2.813,0,5.604-1.104,7.708-3.292L381.039,263.37C384.977,259.245,384.977,252.745,381.039,248.62z" style="fill: rgb(0, 0, 0);"></path>
                                        </svg>
                                    </span>
                                    <ul class="new-sub-menu lvl3">
                                        <li> <a href="/produktovyj-magazin">@lang('home.grocery_store')</a> </li>
                                        <li> <a href="/magazin-kosmetiki">@lang('home.cosmetics_store')</a> </li>
                                        <li> <a href="/apteka">@lang('home.pharmacy')</a> </li>
                                        <li> <a href="/magazin-odezhdy">@lang('home.clothing_store')</a> </li>
                                        <li> <a href="/magazin-spirtnyh-napitkov">@lang('home.liquor_store')</a> </li>
                                        <li> <a href="/magazin-igrushek">@lang('home.toy_store')</a></li>
                                        <li> <a href="/magazin-aksessuarov">@lang('home.accessories_store')</a> </li>
                                        <li> <a href="/magazin-optiki">@lang('home.optics_store')</a> </li>
                                    </ul>
                                </li>
                                <li> <a href="/vozmozhnosti-programmy-umag">@lang('product_capabilities.capabilities')</a> </li>
{{--                                <li> <a href="/ceny">@lang('product_price.price')</a> </li>--}}
                                <li> <a href="https://umag-partner.kz/">франшиза</a> </li>
                            </ul>
                        </li>
                        <li id="accordion-2" class="mobile-menu__nested">
                            <a href="/equipment">@lang('menu.equipment')</a>
                            <span class="mobile-menu__toggle" data-collapse-toggle="#accordion-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve" width="48" height="48">
                                    <path d="M381.039,248.62L146.373,3.287c-4.083-4.229-10.833-4.417-15.083-0.333c-4.25,4.073-4.396,10.823-0.333,15.083    L358.56,255.995L130.956,493.954c-4.063,4.26-3.917,11.01,0.333,15.083c2.063,1.979,4.729,2.958,7.375,2.958    c2.813,0,5.604-1.104,7.708-3.292L381.039,263.37C384.977,259.245,384.977,252.745,381.039,248.62z" style="fill: rgb(0, 0, 0);"></path>
                                </svg>
                            </span>
                            <ul class="new-sub-menu">
                                <li><a href="/equipment/pos_monoblock_umag_t310">@lang('equipment.monoblock')</a></li>
                                <li><a href="/equipment/check_printer_58mm_umag_58u/">@lang('equipment.receipt_printer')</a></li>
                                <li><a href="/equipment/cash_box_umag_42mm/">@lang('equipment.money_box')</a></li>
                                <li><a href="/equipment/barcode_scanner_zebra_ds2208/">@lang('equipment.barcode_scanner')</a></li>
                                <li><a href="/equipment/label_printer_rongta_rp80vi-use">@lang('equipment.label_printer')</a></li>
                                <li><a href="/equipment">@lang('equipment.all_equipment')</a></li>
                            </ul>
                        </li>
{{--                        <li id="accordion-3" class="mobile-menu__nested">--}}
{{--                            <a href="https://media.umag.kz/">@lang('menu.media')</a>--}}
{{--                        </li>--}}
                        <li><a href="/kontakty/">@lang('menu.contacts')</a></li>
                        <li><a href="/knowledge-base-new">@lang('menu.knowledgebase')</a></li>
{{--                        <li><a href="/news">@lang('menu.news')</a></li>--}}
                    </ul>
                </nav>
                <div class="mobile-menu__btn-wrap">
                    <a href="https://web.umag.kz/login" class="mobile-menu__btn">@lang('menu.signin_btn')</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<script>

</script>