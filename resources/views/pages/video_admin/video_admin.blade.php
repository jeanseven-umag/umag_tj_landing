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
    <h1>Таблица Видео-уроки</h1>
    <a class="btn btn-success" href="{{ URL::route('video_admin.create') }}" role="button">Создать</a>
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
    <?php foreach ($videos as $index=>$video): ?>
        <tr>
            <td>{{$index + 1}}</td>
            <td><a href="{{ URL::route('video_admin.show', $video->id) }}">{{ $video->title }}</a></td>
            <td class="text-right">
                <a href="{{ URL::route('video_admin.remove', $video->id) }}" class="btn btn-xs btn-danger">Удалить</a>
                <a href="{{ URL::route('video_admin.edit', $video->id) }}" class="btn btn-xs btn-primary">Изменить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection