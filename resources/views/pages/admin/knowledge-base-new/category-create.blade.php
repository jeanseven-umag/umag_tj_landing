@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <h3>Эҷоди категорияҳо (Базаи дониш)</h3>
    <div class="top-wrap">
        <form action="{{ route('new.admin.category-store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Номро ворид кунед">
                {{-- Display error message if name validation fails --}}
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Захира кардан</button>
        </form>
    </div>
</div>
@endsection

@section('page-js-files')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
@stop

