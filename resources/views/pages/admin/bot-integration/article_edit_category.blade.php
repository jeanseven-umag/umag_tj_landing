@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('article-categories.store')}}" method="POST">
            @csrf
            @if(Route::is('article-subcategories.edit') || Route::is('article-franz-subcategories.edit') )
                <div class="form-group" >
                    <label for="exampleFormControlInput2">Категория*</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Категорияро интихоб кунед</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{$cat->id == $category->category_id  ? 'selected' : ''}}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            @if(Route::is('article-franz-categories.edit') || Route::is('article-franz-subcategories.edit') )
                <input type="hidden" name="franz" value="1">
            @endif
            <input name="id" type="hidden" value="{{$category->id}}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном*</label>
                <input
                    name="name"
                    type="text"
                    value="{{$category->name}}"
                    class="form-control @error('category_id') is-invalid @enderror"
                    id="exampleFormControlInput1"
                    placeholder="Номи зеркатегорияро ворид кунед"
                    required>
            </div>
            <button type="submit" class="btn btn-success">Захира кунед</button>
        </form>
    </div>
</div>
@endsection

@section('page-css-link')
@stop

@section('page-js-files')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
@stop

@section('page-js-script')
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@stop
