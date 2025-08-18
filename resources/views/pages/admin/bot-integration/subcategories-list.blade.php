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
    <h1>Ҷадвали зеркатегория</h1>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="40%">ID</th>
        <th width="40%">Ном</th>
        <th width="10">Амалҳо</th>
    </tr>
    </thead>
    <tbody>
        @foreach($categories as $index=>$category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }} </td>
            <td class="text-right">
                @if(Route::is('subcategories-franz-list'))
                    <a href="{{ URL::route('article-franz-subcategories.edit', $category->id) }}" class="btn btn-xs btn-primary">Таҳрир кардан</a>
                    <a href="{{ URL::route('article-franz-subcategories.remove', $category->id) }}" class="btn btn-xs btn-danger">Нест кардан</a>
                @endif
                @if(Route::is('subcategories-list'))
                    <a href="{{ URL::route('article-subcategories.edit', $category->id) }}" class="btn btn-xs btn-primary">Таҳрир кардан</a>
                    <a href="{{ URL::route('article-subcategories.remove', $category->id) }}" class="btn btn-xs btn-danger">Нест кардан</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection