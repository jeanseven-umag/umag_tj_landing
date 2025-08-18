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
    <h1>Ҷадвали ҳамгироӣ</h1>
    <a class="btn btn-success" href="{{ URL::route('amo-integration.create') }}" role="button">Сохтан</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th width="10%">#</th>
        <th width="60%">Ном</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($integrations as $index=>$integration): ?>
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{ $integration->name }}</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection