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
    <h1>Ҷадвали пойгоҳи дониш</h1>
    
    <a href="{{ URL::route('knowledge-panel-new') }}">Ҷадвали нави пойгоҳи дониш</a>
    <a class="btn btn-success" href="{{ URL::route('admin.create') }}" role="button">Эҷод кардан</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="10%">#</th>
        <th width="60%">Ном</th>
        <th width="30%" class="text-right">Амалиётҳо</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $index=>$post): ?>
        <tr>
            <td>{{$index + 1}}</td>
            <td><a href="{{ URL::route('admin.show', $post->id) }}">{{ $post->title }}</a></td>
            <td class="text-right">
                <a href="{{ URL::route('admin.remove', $post->id) }}" class="btn btn-xs btn-danger">Ҳазф кардан</a>
                <a href="{{ URL::route('admin.edit', $post->id) }}" class="btn btn-xs btn-primary">Тағйир додан</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection