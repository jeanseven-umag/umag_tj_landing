@extends('layouts.shop_new')
@section('topheader')
    <div class="top-header-container">
    <style>li.for-active.for-active-1{background: #e4e4e4}</style>
        <div class="top-wrap">
            <div class="top-left">
                <h3 class="informer-title">@lang('product_automation.title_grocery')</h3>
                <h1 class="full-text">@lang('product_automation.description_grocery')</h1>
                <a href="/request-form" class="green-request">@lang('product_automation.try_free')</a>
            </div>
            <div class="top-right">
                <img src="/img/product.jpg" alt="данные по продуктовому магазину umag">
                <div class="under-image">
                    <h4 class="col-title">@lang('product_automation.database_goods')</h4>
                    <p>@lang('product_automation.database_goods_desc')</p>
                </div>
                <style>
                    .under-image p {max-width: 100%} .top-right img { width: 36rem; margin-top: 40px} .under-image {width: 100%; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; -ms-flex-direction: column; flex-direction: column; -webkit-box-align: end; -ms-flex-align: end; align-items: flex-end }
                    .top-right {justify-content: flex-start; align-items: flex-end; flex-direction: column; padding-right: 10rem} .top-right img {width: 36rem; margin-top: 40px}
                    @media(max-width: 767px){.top-right {padding: 0;align-items: center}.under-image {display: block!important}.top-right img {width: 75%!important;margin-top: 15px;}.under-image {border-bottom: 3px solid #E8E8E8}.top-wrap {padding-bottom: 0}}
                </style>
            </div>
        </div>
        <div class="bottom-wrap">
            <div class="col__one">
                <h4 class="col-title">@lang('product_automation.control_sales')</h4>
                <p>@lang('product_automation.control_sales_desc')</p>
                <span class="play_col first-vid" data-video="x0mrJ6mgOqc"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__two">
                <h4 class="col-title">@lang('product_automation.rid_theft')</h4>
                <p>@lang('product_automation.rid_theft_desc')</p>
                <span class="play_col second-vid" data-video="hJpx8FOSChE"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
            <div class="col__three">
                <h4 class="col-title">@lang('product_automation.simplify_revision')</h4>
                <p>@lang('product_automation.simplify_revision_desc')</p>
                <span class="play_col third-vid" data-video="6Sq4YBpZ8xk"> <i class="play_button"></i> @lang('product_automation.see_works')</span>
            </div>      
        </div>
    </div>
@endsection
@section('review')
<p>@lang('product_automation.review_info_grocery')</p>
<p>Айгуль Идиришова <br/> Магазин “Султан” г. Алматы</p>
@endsection
@section('iframe')
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/S9bEN6fDQwk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection