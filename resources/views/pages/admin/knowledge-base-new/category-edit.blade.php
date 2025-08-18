@extends('layouts.admin')
@section('content')
<div class="top-header-container">
<h3>Таҳрири категорияҳо (Маҳзани дониш)</h3>
    <div class="top-wrap">
        <form action="{{ route('new.admin.category-store')}}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$category->id}}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном</label>
                <input name="title" type="text" value="{{$category->name}}" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Номро ворид кунед">
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

