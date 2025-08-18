@extends('layouts.shop_new')
@section('topheader')
    <div class="top-header-container">
        <div class="top-wrap">
            <div class="top-left">
                <h3 class="informer-title">@lang('product_automation.title_liquor')</h3>
                <h1 class="full-text">@lang('product_automation.description_liquor')</h1>
                <a href="/request-form" class="green-request">@lang('product_automation.try_free')</a>
            </div>
            <div class="top-right">
                <img src="/img/home-page/business-type_5_hover.svg" alt="график прогаммы umag">
                <style>
                    li.for-active.for-active-5{background: #e4e4e4}
                    @media(min-width: 767px){.top-right img {width: auto; height: 31rem; margin-top: 40px; margin-bottom: 35px }.top-right {justify-content: center}}
                    @media(max-width: 767px){.top-right img {height: 31rem!important; margin-top: 25px; margin-bottom:0px; position: relative}}
                </style>
            </div>
        </div>
        <div class="bottom-wrap">
            <div class="col__one">
                <h4 class="col-title">@lang('product_automation.time_reviewing')</h4>
                <p>@lang('product_automation.time_reviewing_description')</p>
                <span class="play_col first-vid" data-video="6Sq4YBpZ8xk"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__two">
                <h4 class="col-title">@lang('product_automation.sort_products')</h4>
                <p>@lang('product_automation.sort_products_description')</p>
                <span class="play_col second-vid" data-video="bltwxyfeXTw"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__three">
                <h4 class="col-title">@lang('product_automation.pharmacy_control')</h4>
                <p>@lang('product_automation.pharmacy_control_description')</p>
                <span class="play_col third-vid" data-video="x0mrJ6mgOqc"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
        </div>
    </div>
@endsection
@section('review')
<p>@lang('product_automation.review_info_liquor')</p>
<p>Дмитрий Степанов <br/>Магазин разливного пива г. Талдыкорган</p>
@endsection
@section('iframe')
    <picture class="slide__img">
    <style>
        .review-flex.iframe-flex * {
            margin: 0 auto;
            height: 100%;
        }
    </style>
        <source srcset="/img/alcohol-store-page/top-header-phone.jpg">
        <source type="image/webp" srcset="/img/alcohol-store-page/top-header-phone.webp">
        <img src="/img/alcohol-store-page/top-header-phone.jpg" alt="магазин спиртных напитков umag">
    </picture>
@endsection
