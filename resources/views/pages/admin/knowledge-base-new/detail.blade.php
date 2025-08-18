@extends('layouts.admin')
@section('content')
    <h1>{!! $post->title !!}</h1>
    <p>{!! $post->read_time  !!}</p>
    {!! $post->web_content !!}
@endsection
