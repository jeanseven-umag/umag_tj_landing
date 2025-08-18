@extends('layouts.admin')
@section('content')
<h1>{!! $article->title !!}</h1>
{!! $article->content !!}
{{ URL::to('/') }}/images/{{$article->img_path}}
@endsection