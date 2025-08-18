@section('page-css-link')
<style>
    .header-title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }
    .header-title h1 {
        margin: 0 0 20px;
    }
</style>
@stop

@extends('layouts.admin')
@section('content')
<div class="header-title">
    <h1>Таблица Вопросы-ответы</h1>
    <a class="btn btn-success" href="{{ URL::route('faq_admin.create') }}" role="button">Создать</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="10%">#</th>
        <th width="60%">Название</th>
        <th width="30%" class="text-right">Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($faqs as $index=>$faq): ?>
        <tr>
            <td>{{$index + 1}}</td>
            <td><a href="{{ URL::route('faq_admin.show', $faq->id) }}">{{ $faq->question }}</a></td>
            <td class="text-right">
                <a href="{{ URL::route('faq_admin.remove', $faq->id) }}" class="btn btn-xs btn-danger">Удалить</a>
                <a href="{{ URL::route('faq_admin.edit', $faq->id) }}" class="btn btn-xs btn-primary">Изменить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection