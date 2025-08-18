<link rel="stylesheet" type="text/css" href="/css/knowledge-base-page.css" /> 
<link rel="stylesheet" type="text/css" href="/old-landing-resources/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
@extends('layouts.main')
@section('content')
<div class="top-header-container">
    <a href="{{ URL::previous() }}" class="btnBack"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Вернутся к списку</a>
    <h1 class="title">{!! $post->title !!}</h1>
    <div class="content">
        {!! $post->content !!}
    </div>

</div>
@endsection



