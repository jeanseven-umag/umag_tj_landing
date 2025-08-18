@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('faq_admin.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="QuestionLabel">Савол*</label>
                <input name="question" type="text" class="form-control @error('question') is-invalid @enderror" id="QuestionLabel" placeholder="Саволро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="AnswerLabel">Ҷавоб*</label>
                <input name="answer" type="text" class="form-control @error('answer') is-invalid @enderror" id="AnswerLabel" placeholder="Ҷавобро ворид кунед" required>
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
            <button type="submit" class="btn btn-success">Сабт кардан</button>
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
