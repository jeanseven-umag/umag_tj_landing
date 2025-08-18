@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('article-categories.store')}}" method="POST">
            @csrf
            @if(Route::is('subcategories.create') || Route::is('franz-subcategories.create') )
            <div class="form-group" >
                <label for="exampleFormControlInput2">Категория*</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Выберите категорию</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @endif
            @if(Route::is('categories-franz.create') || Route::is('franz-subcategories.create') )
                <input type="hidden" name="franz" value="1">
            @endif
            <div class="form-group">
                <label for="exampleFormControlInput1">Название*</label>
                <input name="name" type="text" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Введите название подкатегорий" required>
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
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
