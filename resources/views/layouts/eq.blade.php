@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/equipment-page.css?v2.27">
<link rel="stylesheet" type="text/css" href="/landing-resources/lib/lightgallery/css/lightgallery.css" />
<script src="/landing-resources/lib/lightgallery/js/lightgallery.min.js" type="text/javascript"></script>
<script src="/landing-resources/lib/lightgallery/modules/lg-video.min.js" type="text/javascript"></script>
<div class="eq-box">
    <div class="container sides-padding-40 bread-crumbs">
        <ul class="col-100 bread-list">
            <li>
                <a href="/">@lang('menu.home')</a>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="48" height="48" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
                    <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" style="fill: rgb(0, 0, 0);"></path>
                </svg>
            </li>
            <li>
                <a href="/equipment/">@lang('menu.equipment')</a>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="48" height="48" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
                    <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" style="fill: rgb(0, 0, 0);"></path> 
                </svg>
            </li>
            <li><a href="#">{!! $model !!}</a></li>
        </ul>
    </div>
    @yield('product')
    <section class="specification">
        <div class="container sides-padding-40">
            <div class="row row_middle heading">
                <h2 class="col-grow">@lang('equipment.specifications')</h2>
                <div class="col-auto specification-dropdown">
                    <img src="/img/equipment-page/specification-dropdown.svg" alt="">
                </div>
            </div>
            <div class="row specification-list">
                @yield('table')
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container sides-padding-40">
            <div class="row row_middle heading">
                <h1 class="col-grow">Каталог</h1>
                
                <div class="col-auto">
                    <select title="Категории" data-category-picker class="heading__category-picker">
                        <option value="0" selected>@lang('equipment.all_equipment')</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row equipment-list">
                @foreach ($all as $single_tovar)
                    <div class="col-25 col-mob-50" data-category="{{$single_tovar->type_id}}">
                        <section class="equipment">
                            <{{empty($single_tovar->url) ? 'span' : 'a  href=/equipment/'.$single_tovar->url.'' }} class="equipment__img">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="POS-моноблок UMAG T310"
                                    data-deferred-img="/img/equipment/{{$single_tovar->image}}.jpg"/>
                            </{{empty($single_tovar->url) ? 'span' : 'a' }}>
                            <h1 class="equipment__name">
                                <{{empty($single_tovar->url) ? 'span' : 'a  href=/equipment/'.$single_tovar->url.'' }}>
                                    <span class="equipment__name-sm">{{$single_tovar->types[0]->type}}</span>
                                    @if($single_tovar->rgx=="no")
                                        {{ $single_tovar->name }}
                                    @else
                                        {{ preg_replace(["/[\p{Cyrillic}]/ui", "/(<br\ ?\/?>)+/"] , "", $single_tovar->name) }}
                                    @endif
                                </{{empty($single_tovar->url) ? 'span' : 'a' }}>
                            </h1>
                            <div class="row row_middle equipment__bottom">
                                <div class="col-auto col-mob-100">
                                    <button type="button" class="equipment__btn" data-open-modal="#equipment-modal" data-type="PRODUCT_0001"
                                            data-caption="@lang('equipment.buy item'): {{ $single_tovar->name }}">@lang('equipment.buy')</button>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<style>
    .lg-backdrop{z-index: 9999; background: #000000f2}
    .lg-outer {z-index: 999999}
    h2.col-grow{
        cursor: pointer;
    }
</style>
<script>
    $('.play-button').on('click', function() {
        $(this).lightGallery({
            youtubePlayerParams: {
                autoplay: 1,
                controls: 1
            },
            dynamic: true,
            dynamicEl: [{"src": 'https://www.youtube.com/watch?v={{ $video }}'}]
        })
    });
    $(".equipment__btn, .button-product-buy").click(function(){
        fbq('trackCustom','umag equipment',{'name':$(this).data("caption").replace('Купить товар: ', ''),'page':window.location.href});
    });

    $('.specification-dropdown, h2.col-grow').on('click', function(event){
        event.preventDefault();
        $('.specification-list').slideToggle(500);
        $('.specification-dropdown').toggleClass('open');
    });
    
    function change(){
        let pickedCategory;
        if($(this).val()===''){
            pickedCategory = parseInt($(this).data('value'));
            $(".catalog")[0].scrollIntoView({block: "start", behavior: "smooth"});
            $('.eq_select_sidebar').removeClass('eq_active');
            $(this).addClass('eq_active');
        }else{
            pickedCategory = parseInt($(this).val());
        }
        $("[data-category]").each(function () {
            let _this = $(this);
            if (pickedCategory === 0 || pickedCategory === parseInt(_this.data("category"))) {
                _this.show();
            } else {
                _this.hide();
            }
        });
    }
    $('.eq_select_sidebar').click(change);
    $('[data-category-picker]').change(change);

</script>
@stop
