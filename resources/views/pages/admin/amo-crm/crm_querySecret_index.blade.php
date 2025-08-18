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
            <h1>AmoCrm-Integrations</h1>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th width="10%">#</th>
                <th width="25%">Ном</th> <!-- Название -> Ном -->
                <th width="15%">Шаҳр</th> <!-- Город -> Шаҳр -->
                <th width="15%">Ҳисоб</th> <!-- Акканут -> Ҳисоб -->
                <th width="15%">Телефон</th>
                <th width="15%">Вақт</th> <!-- Время -> Вақт -->
                <th width="10%">Амал</th> <!-- Действия -> Амал -->
                <th width="10%">#</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $index=>$item): ?>
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->cities_name }}</td>
                    <td>{{ $item->domain }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{  date('d-m-Y H:i', strtotime('+6 hour', strtotime($item->created_at )))}}</td>
                    <td><a class="btn btn-danger" href="{{URL::route('amo.queriesSecretRemove', $item->id)}}">Нест кардан</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $('.integration-order').on("change", function (e) {
            let id = $(this).attr('data-integration');
            let order = $(this).val();
            $.ajax({
                url: 'amo/changeOrder',
                type: "get",
                data: { id, order },
                success: function() {
                    window.location.href = "/amo";
                }
            });
        });

        $('.status').on("change", function (e) {
            const id = $(this).attr('data-id');
            const is_active = $(this).is(":checked");
            $.ajax({
                url: 'amo/updateActive',
                type: "get",
                data: { id, is_active },
                success: function() {
                   window.location.href = "/amo";
                }
            });
        });
    </script>
@endsection
