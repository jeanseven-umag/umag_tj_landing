@extends('layouts.shop_new')
@section('topheader')
    <div class="top-header-container">
        <div class="top-wrap">
            <div class="top-left">
                <h3 class="informer-title">@lang('product_automation.title_accessories')</h3>
                <h1 class="full-text">@lang('product_automation.description_accessories')</h1>
                <a href="/request-form" class="green-request">@lang('product_automation.try_free')</a>
            </div>
            <div class="top-right">
                <img src="/img/home-page/business-type_7_hover.svg" alt="график прогаммы umag">
                <style>
                    li.for-active.for-active-7{background: #e4e4e4}
                    @media(min-width: 767px){.top-right img {width: auto; height: 31rem; margin-top: 40px; margin-bottom: 35px }.top-right {justify-content: center}}
                    @media(max-width: 767px){.top-right img {height: 31rem!important; margin-top: 25px; margin-bottom:0px; position: relative}}
                </style>
            </div>
        </div>
        <div class="bottom-wrap">
            <div class="col__one">
                <h4 class="col-title">@lang('product_automation.you_anywhere')</h4>
                <p>@lang('product_automation.you_anywhere_description')</p>
                <span class="play_col first-vid" data-video="Ibn2xm_am08"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__two">
                <h4 class="col-title">@lang('product_automation.shop_reserves')</h4>
                <p>@lang('product_automation.shop_reserves_description')</p>
                <span class="play_col second-vid" data-video="USLcEnA89iE"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__three">
                <h4 class="col-title">@lang('product_automation.best-worst_product')</h4>
                <p>@lang('product_automation.best-worst_product_description')</p>
                <span class="play_col third-vid" data-video="u0K_HSJqoGc"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>
        </div>
    </div>
@endsection
@section('review')
<p>@lang('product_automation.review_info_accessories')</p>
<p>Алмас Искаков <br/>Магазин сотовых аксессуаров г. Алматы</p>
@endsection
@section('iframe')
    <style>
        .review-flex.iframe-flex * { margin: 0 auto; height: 100% }
    </style>
    <picture>
        <source type="image/webp" srcset="/img/accessories-store-page/top-header-phone.webp">
        <img src="/img/accessories-store-page/top-header-phone.png" alt="магазин спиртных напитков umag">
    </picture>
@endsection