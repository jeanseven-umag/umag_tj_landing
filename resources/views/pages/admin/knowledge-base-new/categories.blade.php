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
    <h1>Категорияҳои маҳзани дониш</h1>
    <a class="btn btn-success" href="{{ URL::route('new.admin.category-create') }}" role="button">Эҷод кунед</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="5%">ID</th>
        <th width="50%">Ном</th>
        <th width="15%" class="text-right">Амалҳо</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $index => $post): ?>
        <tr>
            <td>{{$post->id }}</td>
            <td><p>{{ $post->name }}</p></td>
            <td class="text-right">
                <!--<a href="{{ URL::route('new.admin.remove', $post->id) }}" class="btn btn-xs btn-danger">Нест кардан</a>-->
                <a href="{{ URL::route('new.admin.category-edit', $post->id) }}" class="btn btn-xs btn-primary">Таҳрир кардан</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection
