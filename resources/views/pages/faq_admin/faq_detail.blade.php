@extends('layouts.admin')
@section('content')
    <h3>Савол: {!! $faq->question !!}</h3>
    <h3>Ҷавоб: {!! $faq->answer !!}
    <br><br><a href="{{ URL::route('faq-panel') }}" class="btn btn-primary">Бозгашт</a>
@endsection