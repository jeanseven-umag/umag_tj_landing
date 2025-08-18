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
    <h1>Таблица базы знаний (NEW)</h1>
    <a href="{{ URL::route('knowledge-categories') }}">Категорий база знаний</a>
    <a class="btn btn-success" href="{{ URL::route('new.admin.create') }}" role="button">Создать</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="5%">#</th>
        <th width="50%">Название</th>
        <th width="10%">Ссылка</th>
        <th width="10%">Всем виден</th>
        <th width="10%">Статус</th>
        <th width="15%" class="text-right">Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $index=>$post): ?>
        <tr>
            <td>{{$index + 1}}</td>
            <td><a href="{{ URL::route('new.admin.show', $post->id) }}">{{ $post->title }}</a></td>
            <td><p>{{ $post->link }}</p></td>
            <td><p>
                @if($post->is_public == 1)
                    Да
                @elseif($post->is_public == 0)
                    Нет
                @endif
            </p></td>
            <td>
                <p>@if($post->status == 'published')
                        Опубликован
                    @elseif($post->status == 'draft')
                        Черновик
                    @elseif($post->status == 'soon')
                        Скоро
                    @endif
                </p>
            </td>
            <td class="text-right">
                <a href="{{ URL::route('new.admin.remove', $post->id) }}" class="btn btn-xs btn-danger">Удалить</a>
                <a href="{{ URL::route('new.admin.edit', $post->id) }}" class="btn btn-xs btn-primary">Изменить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection
