@extends('layouts.admin')
@section('content')
    <h3>Вопрос: {!! $faq->question !!}</h3>
    <h3>Ответ: {!! $faq->answer !!}
    <br><br><a href="{{ URL::route('faq-panel') }}" class="btn btn-primary">Назад</a>
@endsection