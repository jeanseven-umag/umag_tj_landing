@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('admin.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Ном*</label>
                <input name="title" type="text" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Номро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Категория*</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Категорияро интихоб кунед</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Платформа*</label>
                <select name="platform_id" class="form-control @error('platform_id') is-invalid @enderror">
                    <option value="">Платформаро интихоб кунед</option>
                    @foreach($platforms as $platform)
                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                    @endforeach
                </select>
            </div>
            <textarea name="summernoteInput" class="summernote"></textarea>
            <button type="submit" class="btn btn-success">Захира кардан</button>
        </form>
    </div>
</div>
@endsection

@section('page-css-link')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop

@section('page-js-files')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
@stop

@section('page-js-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 500
            });
        });
    </script>
@stop
