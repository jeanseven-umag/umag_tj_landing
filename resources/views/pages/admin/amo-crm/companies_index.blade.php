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
        <div class="top-wrap">
            <form action="{{ route('kontakty.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ном:*</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Номро ворид кунед" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput2">Суроға:*</label>
                    <input name="address" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Суроға ворид кунед" required>
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
                    <label for="exampleFormControlInput3">Интегратсия*</label>
                    <select name="integration_id" class="form-control">
                        <option value="" disabled>Интегратсияро интихоб кунед</option>
                        <option value="0">интегратсия нест</option>
                        @foreach($integrations as $integration)
                            <option value="{{ $integration->id }}">{{ $integration->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput3">Ҷойи ҷоиза*</label>
                    <select name="status" class="form-control">
                        <option value="">Статусро интихоб кунед</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">нест</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput4">Телефон:*</label>
                    <input name="phone" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Телефон ворид кунед" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput5">Рӯйхат:*</label>
                    <textarea name="description" class="form-control" id="exampleFormControlInput5" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Ҳифз кардан</button>
            </form>
        </div>
    </div>
@endsection
