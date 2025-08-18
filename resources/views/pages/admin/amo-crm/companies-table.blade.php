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
    <div class="top-header-container">
        <div class="container-nav">
            <h1>Контакты-клиенты</h1>
            <a class="btn btn-success" href="{{URL::route('kontakty.create')}}">Создать</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th width="35%">Название</th>
                <th width="25%">Город</th>
                <th width="15%">Действия</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($companies as $index=>$company): ?>
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->cities_name }}</td>
                    <td>
                        <a class="btn btn-primary" style="margin: 4px 0" href="{{URL::route('kontakty.edit', $company->id)}}">Изменить</a>
                        <a class="btn btn-danger" href="{{URL::route('kontakty.remove', $company->id)}}">Удалить</a>
                    </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection
