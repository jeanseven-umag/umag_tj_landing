@extends('layouts.shop_new')
@section('topheader')
    <div class="top-header-container">
        <div class="top-wrap">
            <div class="top-left">
                <h3 class="informer-title">@lang('product_automation.title_cosmetics')</h3>
                <h1 class="full-text">@lang('product_automation.description_cosmetics')</h1>
                <a href="/request-form" class="green-request">@lang('product_automation.try_free')</a>
            </div>
            <div class="top-right">
                <img src="/img/home-page/business-type_2_hover.svg" alt="ҷадвали барномаи umag">
                <style>
                    li.for-active.for-active-2{background: #e4e4e4}
                    @media(min-width: 767px){.top-right img {width: auto; height: 31rem; margin-top: 40px; margin-bottom: 35px }.top-right {justify-content: center}}
                    @media(max-width: 767px){.top-right img {height: 31rem!important; margin-top: 25px; margin-bottom: 25px; position: relative; right: 4rem}}
                </style>
            </div>
        </div>
        <div class="bottom-wrap">
            <div class="col__one">
                <h4 class="col-title">@lang('product_automation.best-worst_product')</h4>
                <p>@lang('product_automation.best-worst_product_description')</p>
                <span class="play_col first-vid" data-video="u0K_HSJqoGc"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__two">
                <h4 class="col-title">@lang('product_automation.you_anywhere')</h4>
                <p>@lang('product_automation.you_anywhere_description')</p>
                <span class="play_col second-vid" data-video="Ibn2xm_am08"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__three">
                <h4 class="col-title">@lang('product_automation.dont-worry_reserves')</h4>
                <p>@lang('product_automation.dont-worry_reserves_description')</p>
                <span class="play_col third-vid" data-video="USLcEnA89iE"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
        </div>
    </div>
@endsection
@section('review')
<p>@lang('product_automation.review_info_cosmetics')</p>
<p>Толганай Шарипбек <br/> Магазини «Олами косметика» Алмаато</p>
@endsection
@section('iframe')
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VVXjSPAcdKE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection