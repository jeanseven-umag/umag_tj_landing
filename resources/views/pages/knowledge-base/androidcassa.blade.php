<?php $sumweb = 0; $sumios = 0; $sumandroid = 0;?>
<link rel="stylesheet" type="text/css" href="/css/knowledge-base-page.css" /> 
<link rel="stylesheet" type="text/css" href="/old-landing-resources/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
<style>li.base-menu.active-menu-12{background: #fff}</style>
@extends('layouts.main')
@section('content')
<div class="top-header-container">
  <h2 class="base-help">@lang('knowledge-base.help')</h2>
  <form class="search-box" method="get" action="{{ route('post.search') }}">
    <button class="fa fa-search"  type="sumbit"></button>
    <input class="base-search" type="text" placeholder="@lang('knowledge-base.find_answers')" name="search" id="search">
  </form>
  <h1 class="base-category">Android Касса</h1>
  <h3 class="base-platform">Лутфан категорияро интихоб кунед:</h3>
  <div class="underTabs_platform">
    <div class="underTabs_platform__nav">
{{--      <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformWeb_1">Саволҳо-ҷавобҳо</button>--}}
{{--      <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformWeb_2">Дастурамал</button>--}}
{{--      <button class="underTabs_platform__nav-btn" type="button" data-tab="#underTab_platformWeb_3">Дарсҳои видеоӣ</button>--}}
    </div>
    <div class="underTabs_platform__content">
      <div class="underTabs_platform__item" id="underTab_platformWeb_1">
        @foreach($faqs as $el_faqs)
          @if($el_faqs->category_id === 12 and $el_faqs->platform_id === 5)
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
            @if($el_posts->category_id === 12 and $el_posts->platform_id === 5)
              <li class="instruction_list__item">{{$sumweb+=1}}. &nbsp;<a href="/knowledge-base/show/{{ $el_posts->id }}" class="link">{{ $el_posts->title }}</a></li>
            @endif
          @endforeach
        </ul>
      </div>
      <div class="underTabs_platform__item" id="underTab_platformWeb_3">
        <div class="video_list">
          @foreach($videos as $el_videos)
            @if($el_videos->category_id === 12 and $el_videos->platform_id === 5)
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
@endsection