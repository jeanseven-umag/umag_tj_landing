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
            <h1>Тамос - мизоҷон</h1>
            <a class="btn btn-success" href="{{URL::route('kontakty.create')}}">Эҷод кунед</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th width="35%">Ном</th>
                <th width="25%">Шаҳр</th>
                <th width="15%">Амалҳо</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($companies as $index=>$company): ?>
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->cities_name }}</td>
                    <td>
                        <a class="btn btn-primary" style="margin: 4px 0" href="{{URL::route('kontakty.edit', $company->id)}}">Таҳрир</a>
                        <a class="btn btn-danger" href="{{URL::route('kontakty.remove', $company->id)}}">Нест кардан</a>
                    </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
@endsection
