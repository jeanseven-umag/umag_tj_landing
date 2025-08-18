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
            <a class="btn btn-success" href="{{URL::route('amo.create')}}">Создать</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th width="35%">Название</th>
                <th width="25%">Город</th>
                <th>Активация</th>
                <th width="15%">Статус</th>
                <th width="15%">Порядок</th>
                <th width="15%">Действия</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($integrations as $index=>$integration): ?>
                <tr>
                    <td>{{ $integration->name }}</td>
                    <td>{{ $integration->cities_name }}</td>
                    <td>
                        <div style="width: 15px; margin: 0 auto;">
                            <input type="checkbox" class="status form-control" data-id="{{$integration->id}}"{{ $integration->is_active ? 'checked' : '' }}>
                        </div>
                    </td>
                    @if(!$integration->is_active)
                        <td><span class="label label-default">Не активен</span></td>
                    @elseif( $integration->send_status == 1 )
                        <td><span class="label label-success">Отправлено</span></td>
                    @elseif( $integration->send_status == 2 )
                        <td><span class="label label-danger">Ошибка с токеном</span></td>
                    @elseif( $integration->send_status == 3 )
                        <td><span class="label label-primary">Подписки нету</span></td>
                    @else
                        <td><span class="label label-warning">В очереди</span></td>
                    @endif
                    <td>
                        <select class="integration-order" data-integration="{{$integration->id}}">
                            @for ($i = 1; $i <= $hashCityOrder[$integration->city_id]; $i++)
                                <option value="{{ $i }}" {{ ( $integration->order == $i) ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </td>
                    <td>
                        <a class="btn btn-primary" style="margin: 4px 0" href="{{URL::route('amo.edit', $integration->id)}}">Изменить</a>
                        <a class="btn btn-danger" href="{{URL::route('amo.remove', $integration->id)}}">Удалить</a>
                    </td>

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