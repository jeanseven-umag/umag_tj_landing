<?php $sumposts = 0; $sumfaqs = 0;?>
<link rel="stylesheet" type="text/css" href="/css/knowledge-base-page.css" /> 
<link rel="stylesheet" type="text/css" href="/old-landing-resources/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
@extends('layouts.main')
@section('content')
<div class="top-header-container">
    <h2 class="base-help">@lang('knowledge-base.help')</h2>
    <form class="search-box" method="get" action="{{ route('post.search') }}">
        <button class="fa fa-search"  type="sumbit"></button>
        <input class="base-search" type="text" placeholder="@lang('knowledge-base.find_answers')" name="search" id="search">
    </form>
    <h1 class="base-category">@lang('knowledge-base.top_questions')</h1>
    <div class="underTabs_platform">
        <div class="underTabs_platform__nav">
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_search_1">@lang('knowledge-base.faq')</button>
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_search_2">@lang('knowledge-base.instruction') </button>
        </div>
        <div class="underTabs_platform__content">
            <div class="underTabs_platform__item" id="underTab_search_1">
            @foreach($faqs as $el_faqs)
                @if($sumfaqs < 5)<?php $sumfaqs+=1;?>
                <div class="accordion">
                    <div class="accordion-item">
                    <div class="accordion-item__btn">{{ $el_faqs->question }}</div>
                    <div class="accordion-item__body"><div class="accordion-item__body__content">{{ $el_faqs->answer }}</div></div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="underTabs_platform__item" id="underTab_search_2">
            <ul class="instruction_list">
                @foreach($posts as $el_posts)
                    @if($sumposts < 5)
                    <li class="instruction_list__item">{{$sumposts+=1}}. &nbsp;<a href="/knowledge-base/show/{{ $el_posts->id }}" class="link">{{ $el_posts->title }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    </div> 
</div>

@endsection