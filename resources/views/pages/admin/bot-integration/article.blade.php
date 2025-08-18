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
    @if(Route::is('article-integration'))
        <h1>Ҷадвали модда</h1>
        <div class="d-flex">
            <a class="btn btn-primary" href="{{ URL::route('article-integration.create') }}" role="button">Эҷод кардан</a>
            <a class="btn btn-primary" href="{{ URL::route('categories.create') }}" role="button">Создать Категорию</a>
            <a class="btn btn-primary" href="{{ URL::route('subcategories.create') }}" role="button">Создать Подкатегорию</a>
            <a class="btn btn-primary" href="{{ URL::route('categories-list') }}" role="button">Страница категорий</a>
            <a class="btn btn-primary" href="{{ URL::route('subcategories-list') }}" role="button">Страница подкатегорий</a>
        </div>
    @endif

    @if(Route::is('article-franz-integration'))
        <h1>Таблица франчизей</h1>
        <div class="d-flex">
            <a class="btn btn-primary" href="{{ URL::route('article-franz-integration.create') }}" role="button">Эҷод кардан</a>
            <a class="btn btn-primary" href="{{ URL::route('categories-franz.create') }}" role="button">Категория эҷод кардан</a>
            <a class="btn btn-primary" href="{{ URL::route('franz-subcategories.create') }}" role="button">Зеркатегория эҷод кардан</a>
            <a class="btn btn-primary" href="{{ URL::route('categories-franz-list') }}" role="button">Саҳифаи категория</a>
            <a class="btn btn-primary" href="{{ URL::route('subcategories-franz-list') }}" role="button">Саҳифаи зеркатегорияҳо</a>
        </div>
    @endif

</div>
<table class="table">
    <thead>
    <tr>
        <th width="40%">Ном</th>
        <th width="40%">Категория</th>
        <th width="10">Амалҳо</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $index=>$article)
        <tr>
            <td><a href="{{ URL::route('article-integration.show', $article->id) }}">{{ $article->title }}</a> </td>
            <td>
                @foreach($article->category as $index2=>$cat)
                    {{$cat -> name}}
                @endforeach
            </td>
            <td class="text-right">
                @if(Route::is('article-franz-integration'))
                      <div class="d-flex">
                        <a href="{{ URL::route('article-franz-integration.edit', $article->id) }}" class="btn btn-xs btn-primary">Таҳрир кардан</a>
                        <a href="{{ URL::route('article-franz.remove', $article->id) }}" class="btn btn-xs btn-danger">Нест кардан</a>
                    </div>
                @endif

                @if(Route::is('article-integration'))
                <div class="d-flex">
                    <a href="{{ URL::route('article-integration.edit', $article->id) }}" class="btn btn-xs btn-primary">Таҳрир кардан</a>
                    <a href="{{ URL::route('article.remove', $article->id) }}" class="btn btn-xs btn-danger">Нест кардан</a>
                </div>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection