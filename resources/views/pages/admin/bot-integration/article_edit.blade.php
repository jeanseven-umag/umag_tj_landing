@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('article.store_v2')}}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$article->id}}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном*</label>
                <input name="title" type="text" value="{{$article->title}}" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Номро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Категория*</label>
                <select id="categoryList" name="category_id1" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Категорияро интихоб кунед</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{$article->category_id == $category->id  ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Зеркатегория*</label>
                <select id="subcategoryList" name="subcategory_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Зеркатегорияро интихоб кунед</option>
                    @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" {{$article->category_id == $category->id  ? 'selected' : ''}} class='parent-{{ $subcategory->category_id }} subcategory'>{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="LinkLabel">Суроғаи мақола*</label>
                <input name="link" type="text" value="{{$article->link}}"  class="form-control @error('link') is-invalid @enderror" id="LinkLabel" placeholder="Суроға ворид кунед" required>
            </div>
            @if(Route::is('article-franz-integration.edit') )
            <input type="hidden" name="franz" value="1">
            @endif
            <button type="submit" class="btn btn-success">Захира кунед</button>
        </form>
    </div>
</div>
@endsection

@section('page-js-files')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
@stop

@section('page-js-script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#categoryList').on('change', function () {
            $("#subcategoryList").attr('disabled', false);
            $("#subcategoryList").val("");
            $(".subcategory").attr('disabled', true);
            $(".subcategory").hide();
            $(".parent-" + $(this).val()).attr('disabled', false);
            $(".parent-" + $(this).val()).show();
        });
    });
</script>
@stop
