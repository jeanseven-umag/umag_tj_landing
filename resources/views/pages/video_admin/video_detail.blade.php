@extends('layouts.admin')
@section('content')
    <h3>Название: {!! $video->title !!}</h3>
    <h3>Видео:</h3><br>
    <iframe width="362" height="224" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
    <br><br><a href="{{ URL::route('video-panel') }}" class="btn btn-primary">Назад</a>
@endsection