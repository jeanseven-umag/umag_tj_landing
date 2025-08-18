<?php $sum = 0;?>
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
    <h1 class="base-category">Результаты поиска по запросу "{{Request::input('search')}}":</h1>
    @if(!$faqs->isEmpty() or !$posts->isEmpty() or !$videos->isEmpty())
        <div class="underTabs_platform">
            <div class="underTabs_platform__nav">
                @if(!$faqs->isEmpty())
                    <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_search_1">@lang('knowledge-base.faq')</button>
                @endif
                @if(!$posts->isEmpty())
                    <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_search_2">@lang('knowledge-base.instruction') </button>
                @endif
                @if(!$videos->isEmpty())
                    <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_search_3">@lang('knowledge-base.video_lessons')</button>
                @endif
            </div>
            <div class="underTabs_platform__content">
                <div class="underTabs_platform__item" id="underTab_search_1">
                    @foreach($faqs as $el_faqs)
                        <div class="accordion">
                            <div class="accordion-item">
                            <div class="accordion-item__btn">{{ $el_faqs->question }}</div>
                            <div class="accordion-item__body"><div class="accordion-item__body__content">{{ $el_faqs->answer }}</div></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="underTabs_platform__item" id="underTab_search_2">
                    <ul class="instruction_list">
                        @foreach($posts as $el_posts)
                            <li class="instruction_list__item">{{$sum+=1}}. &nbsp;<a href="/knowledge-base/show/{{ $el_posts->id }}" class="link">{{ $el_posts->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="underTabs_platform__item" id="underTab_search_3">
                    <div class="video_list">
                        @foreach($videos as $el_videos)
                            <div class="video_list__item">
                                <iframe width="362" height="224" src="{{ $el_videos->url }}" frameborder="0" allowfullscreen></iframe>
                                <h2 class="video_list__name">{{ $el_videos->title }}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>Ответ на этот вопрос: "{{Request::input('search')}}" не найден! Обратитесь в тех поддержку!</p>
    @endif    
</div>
@endsection