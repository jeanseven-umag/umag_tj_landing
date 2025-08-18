<?php $sumweb = 0; $sumios = 0; $sumandroid = 0;?>
<link rel="stylesheet" type="text/css" href="/css/knowledge-base-page.css" /> 
<link rel="stylesheet" type="text/css" href="/old-landing-resources/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
<style>li.base-menu.active-menu-4{background: #fff}</style>
@extends('layouts.main')
@section('content')
<div class="top-header-container">
  <h2 class="base-help">@lang('knowledge-base.help')</h2>
  <form class="search-box" method="get" action="{{ route('post.search') }}">
    <button class="fa fa-search"  type="sumbit"></button>
    <input class="base-search" type="text" placeholder="@lang('knowledge-base.find_answers')" name="search" id="search">
  </form>
  <h1 class="base-category">Система лояльности</h1>
  <h3 class="base-platform">@lang('knowledge-base.choose_platform')</h3>
  <div class="tabs_platform">
    <div class="tabs_platform__nav">
      <button class="tabs_platform__nav-btn" type="button" data-tab="#tab_platform_1">Website</button>
{{--      <button class="tabs_platform__nav-btn" type="button" data-tab="#tab_platform_2">IOS Platform</button>--}}
{{--      <button class="tabs_platform__nav-btn" type="button" data-tab="#tab_platform_3">Android Platform</button>--}}
    </div>
    <div class="tabs_platform__content">
      <div class="tabs_platform__item" id="tab_platform_1">
        <div class="underTabs_platform">
          <div class="underTabs_platform__nav">
{{--            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformWeb_1">Вопросы-ответы</button>--}}
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformWeb_2">@lang('knowledge-base.instruction') </button>
{{--            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformWeb_3">Видео-уроки</button>--}}
          </div>
          <div class="underTabs_platform__content">
            <div class="underTabs_platform__item" id="underTab_platformWeb_1">
              @foreach($faqs as $el_faqs)
                @if($el_faqs->category_id === 4 and $el_faqs->platform_id === 1)
                  <div class="accordion">
                    <div class="accordion-item">
                      <div class="accordion-item__btn">{{ $el_faqs->question }}</div>
                      <div class="accordion-item__body"><div class="accordion-item__body__content">{{ $el_faqs->answer }}</div></div>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
            <div class="underTabs_platform__item" id="underTab_platformWeb_2">
              <ul class="instruction_list">
                @foreach($posts as $el_posts)
                  @if($el_posts->category_id === 4 and $el_posts->platform_id === 1 )
                    <li class="instruction_list__item">{{$sumweb+=1}}. &nbsp;<a href="/knowledge-base/show/{{ $el_posts->id }}" class="link">{{ $el_posts->title }}</a></li>
                  @endif
                @endforeach
              </ul>
            </div>
            <div class="underTabs_platform__item" id="underTab_platformWeb_3">
              <div class="video_list">
                @foreach($videos as $el_videos)
                  @if($el_videos->category_id === 4 and $el_videos->platform_id === 1 )
                    <div class="video_list__item">
                      <iframe width="362" height="224" src="{{ $el_videos->url }}" frameborder="0" allowfullscreen></iframe>
                      <h2 class="video_list__name">{{ $el_videos->title }}</h2>
                    </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tabs_platform__item" id="tab_platform_2">
        <div class="underTabs_platform">
          <div class="underTabs_platform__nav">
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformIOS_1">@lang('knowledge-base.faq')</button>
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformIOS_2">@lang('knowledge-base.instruction') </button>
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformIOS_3">@lang('knowledge-base.video_lessons')</button>
          </div>
          <div class="underTabs_platform__content">
            <div class="underTabs_platform__item" id="underTab_platformIOS_1">
              @foreach($faqs as $el_faqs)
                @if($el_faqs->category_id === 4 and $el_faqs->platform_id === 2 )
                  <div class="accordion">
                    <div class="accordion-item">
                      <div class="accordion-item__btn">{{ $el_faqs->question }}</div>
                      <div class="accordion-item__body"><div class="accordion-item__body__content">{{ $el_faqs->answer }}</div></div>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
            <div class="underTabs_platform__item" id="underTab_platformIOS_2">
              <ul class="instruction_list">
                @foreach($posts as $el_posts)
                  @if($el_posts->category_id === 4 and $el_posts->platform_id === 2 )
                    <li class="instruction_list__item">{{$sumios+=1}}. &nbsp;<a href="/knowledge-base/show/{{ $el_posts->id }}" class="link">{{ $el_posts->title }}</a></li>
                  @endif
                @endforeach
              </ul>
            </div>
            <div class="underTabs_platform__item" id="underTab_platformIOS_3">
              <div class="video_list">
                @foreach($videos as $el_videos)
                  @if($el_videos->category_id === 4 and $el_videos->platform_id === 2 )
                    <div class="video_list__item">
                      <iframe width="362" height="224" src="{{ $el_videos->url }}" frameborder="0" allowfullscreen></iframe>
                      <h2 class="video_list__name">{{ $el_videos->title }}</h2>
                    </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tabs_platform__item" id="tab_platform_3">
        <div class="underTabs_platform">
          <div class="underTabs_platform__nav">
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformAndroid_1">@lang('knowledge-base.faq')</button>
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformAndroid_2">@lang('knowledge-base.instruction') </button>
            <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformAndroid_3">@lang('knowledge-base.video_lessons')</button>
          </div>
          <div class="underTabs_platform__content">
            <div class="underTabs_platform__item" id="underTab_platformAndroid_1">
              @foreach($faqs as $el_faqs)
                @if($el_faqs->category_id === 4 and $el_faqs->platform_id === 3 )
                  <div class="accordion">
                    <div class="accordion-item">
                      <div class="accordion-item__btn">{{ $el_faqs->question }}</div>
                      <div class="accordion-item__body"><div class="accordion-item__body__content">{{ $el_faqs->answer }}</div></div>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
            <div class="underTabs_platform__item" id="underTab_platformAndroid_2">
              <ul class="instruction_list">
                @foreach($posts as $el_posts)
                  @if($el_posts->category_id === 4 and $el_posts->platform_id === 3 )
                    <li class="instruction_list__item">{{$sumandroid+=1}}. &nbsp;<a href="/knowledge-base/show/{{ $el_posts->id }}" class="link">{{ $el_posts->title }}</a></li>
                  @endif
                @endforeach
              </ul>
            </div>
            <div class="underTabs_platform__item" id="underTab_platformAndroid_3">
              <div class="video_list">
                @foreach($videos as $el_videos)
                  @if($el_videos->category_id === 4 and $el_videos->platform_id === 3 )
                    <div class="video_list__item">
                      <iframe width="362" height="224" src="{{ $el_videos->url }}" frameborder="0" allowfullscreen></iframe>
                      <h2 class="video_list__name">{{ $el_videos->title }}</h2>
                    </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection