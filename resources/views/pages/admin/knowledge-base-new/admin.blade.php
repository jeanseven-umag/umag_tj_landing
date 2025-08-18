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
    <h1>Ҷадвали маҳзани дониш (НАВ)</h1>
    <a href="{{ URL::route('knowledge-categories') }}">Категорияҳои маҳзани дониш</a>
    <a class="btn btn-success" href="{{ URL::route('new.admin.create') }}" role="button">Эҷод кунед</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="5%">#</th>
        <th width="50%">Ном</th>
        <th width="10%">Истиснод</th>
        <th width="10%">Ба ҳама намоён</th>
        <th width="10%">Мақом</th>
        <th width="15%" class="text-right">Амалҳо</th>
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
                    Бале
                @elseif($post->is_public == 0)
                    Не
                @endif
            </p></td>
            <td>
                <p>@if($post->status == 'published')
                        Нашр шудааст
                    @elseif($post->status == 'draft')
                        Лоиҳа
                    @elseif($post->status == 'soon')
                        Ба зудӣ
                    @endif
                </p>
            </td>
            <td class="text-right">
                <a href="{{ URL::route('new.admin.remove', $post->id) }}" class="btn btn-xs btn-danger">Нест кардан</a>
                <a href="{{ URL::route('new.admin.edit', $post->id) }}" class="btn btn-xs btn-primary">Таҳрир кардан</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection
