@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form id="test-number" action="{{ route('amo-integration.editStore')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном:*</label>
                <input name="name" type="text" value="{{$integration->name}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Калидро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput2">Доменҳо:*</label>
                <input name="domain" type="text" value="{{$integration->domain}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput2" placeholder="Калидро ворид кунед" required>
            </div>

            <input name="id" type="hidden" value="{{$integration->id}}" class="form-control" id="exampleFormControlInput2" placeholder="Калидро ворид кунед" required>

            <div class="form-group">
                <label for="exampleFormControlInput3">Шаҳр*</label>
                <select name="city_id" class="form-control @error('$city_id') is-invalid @enderror">
                    <option value="">Шаҳрро интихоб кунед</option>
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}" {{$integration->city_id == $city->id ? 'selected' : ''}}>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput4">Калиди махфӣ:*</label>
                <input name="client_secret" type="text" value="{{$integration->client_secret}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput4" placeholder="Калидро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput4">Redirect url</label>
                <input name="redirect_url" type="text" value="{{$integration->redirect_url}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput4" placeholder="Калидро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput4">Refresh_token</label>
                @if(isset($integration->token) && isset($integration->token->refresh_token))
                    <input name="refresh_token" type="text" value="{{$integration->token->refresh_token}}" disabled class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput4" placeholder="Калидро ворид кунед" required>
                @else
                    <input name="refresh_token" type="text" disabled class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput4" placeholder="Калидро ворид кунед" required>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput5">ID интегратсия:*</label>
                <input name="client_id" type="text" value="{{$integration->client_id}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput5" placeholder="Калидро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput6">Коди авторизатсия (эътибор дорад 20 дақиқа)*</label>
                <input name="code" type="text" value="{{$integration->code}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput6" placeholder="Калидро ворид кунед" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput7">Статус:*</label>
                <select name="send_status" id="exampleFormControlInput7" class="form-control @error('send_status') is-invalid @enderror">
                    <option value="">Статусро интихоб кунед</option>
                    <option value="0" {{$integration->send_status == 0 ? 'selected' : ''}}>Ба навбат</option>
                    <option value="1" {{$integration->send_status == 1 ? 'selected' : ''}}>Фиристода шуд</option>
                    <option value="2" {{$integration->send_status == 2 ? 'selected' : ''}}>Хато бо токен</option>
                    <option value="3" {{$integration->send_status == 3 ? 'selected' : ''}}>Пардохт нашудааст</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Захира кардан</button>
        </form>
        <button class="btn btn-primary get-tokens">Access токенҳо</button>
        <button class="btn btn-primary get-refresh-tokens">Refresh токенҳо</button>
    </div>
</div>
@endsection

@section('page-js-files')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script>
    $('.get-tokens').click(function(){
        console.log("button");
        let form = $('#test-number');
        let e = form.serialize();
        let o = $.ajax({
            url: "/get-tokens",
            type: "post",
            data: e
        });
        return o.done(function (e, o, a) {
            console.log(e)
        }), o.fail(function (e, o, a) {
        })
    });
    $('.get-refresh-tokens').click(function(){
        console.log("button");
        let form = $('#test-number');
        let e = form.serialize();
        let o = $.ajax({
            url: "/get-refresh-token",
            type: "post",
            data: e
        });
        return o.done(function (e, o, a) {
            console.log(e)
        }), o.fail(function (e, o, a) {
        })
    });
</script>
@stop
