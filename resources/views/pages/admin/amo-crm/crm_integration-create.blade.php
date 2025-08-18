@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('amo-integration.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном:*</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Номро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput2">Домен:*</label>
                <input name="domain" type="text" class="form-control" id="exampleFormControlInput2" placeholder="https://example.amocrm.ru/" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Шаҳр*</label>
                <select name="city_id" class="form-control">
                    <option value="">Шаҳрро интихоб кунед</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput4">Калиди махфӣ:*</label>
                <input name="client_secret" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Калидро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput5">ID интегратсия:*</label>
                <input name="client_id" type="text" class="form-control" id="exampleFormControlInput5" placeholder="ID интегратсияро ворид кунед:" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput6">Коди авторизатсия (эътибор дорад 20 дақиқа)*</label>
                <input name="code" type="text" class="form-control" id="exampleFormControlInput6" placeholder="Коди авторизатсияро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput7">Статус*</label>
                <select name="send_status" id="exampleFormControlInput7" class="form-control @error('send_status') is-invalid @enderror" required>
                    <option value="">Статусро интихоб кунед</option>
                    <option value="0" selected>Ба навбат</option>
                    <option value="1">Фиристода шуд</option>
                    <option value="2">Хато бо токен</option>
                    <option value="3">Пардохт нашудааст</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Захира кунед</button>
        </form>
    </div>
</div>
@endsection

@section('page-js-files')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
@stop

