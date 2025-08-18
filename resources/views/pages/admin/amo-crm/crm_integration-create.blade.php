@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('amo-integration.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Название:*</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Введите название" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput2">Домен:*</label>
                <input name="domain" type="text" class="form-control" id="exampleFormControlInput2" placeholder="https://example.amocrm.ru/" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3">Город*</label>
                <select name="city_id" class="form-control">
                    <option value="">Выберите город</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput4">Секретный ключ:*</label>
                <input name="client_secret" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Введите ключ" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput5">ID интеграции:*</label>
                <input name="client_id" type="text" class="form-control" id="exampleFormControlInput5" placeholder="Введите ID интеграции:" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput6">Код авторизации (действителен 20 минут)*</label>
                <input name="code" type="text" class="form-control" id="exampleFormControlInput6" placeholder="Введите код авторизации" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput7">Статус*</label>
                <select name="send_status" id="exampleFormControlInput7" class="form-control @error('send_status') is-invalid @enderror" required>
                    <option value="">Выберите Статус</option>
                    <option value="0" selected>В очередь</option>
                    <option value="1">Отправлено</option>
                    <option value="2">Ошибка с токеном</option>
                    <option value="3">Не оплачено</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
</div>
@endsection

@section('page-js-files')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
@stop


