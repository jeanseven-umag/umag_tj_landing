@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('video_admin.store')}}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$video->id}}">
            <div class="form-group">
                <label for="TitleLabel">Ном*</label>
                <input name="title" type="text" value="{{$video->title}}" class="form-control @error('title') is-invalid @enderror" id="TitleLabel" placeholder="Номро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="UrlLabel">Суроға*</label>
                <input name="url" type="text" value="{{$video->url}}" class="form-control @error('url') is-invalid @enderror" id="UrlLabel" placeholder="Суроғаро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Категория*</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Категорияро интихоб кунед</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{$video->category_id == $category->id  ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Платформа*</label>
                <select name="platform_id" class="form-control @error('platform_id') is-invalid @enderror">
                    <option value="">Категорияро интихоб кунед</option>
                    @foreach($platforms as $platform)
                        <option value="{{ $platform->id }}" {{$video->platform_id == $platform->id  ? 'selected' : ''}}>{{ $platform->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Захира кардан</button>
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
