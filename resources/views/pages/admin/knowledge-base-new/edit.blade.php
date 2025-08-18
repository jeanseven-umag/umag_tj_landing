@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('new.admin.store')}}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$post->id}}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Название</label>
                <input name="title" type="text" value="{{$post->title}}" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Введите название">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Второе название</label>
                <input name="title_second" type="text" value="{{$post->title_second}}" class="form-control @error('title_second') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Введите второе название">
            </div>
            <div class="form-group">
                <label for="link">Ссылка на английском*</label>
                <input name="link" type="text" value="{{$post->link}}" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Введите ссылку" required readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Категория*</label>
                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">Выберите категорию</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{$post->category_id == $category->id  ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="read_time">Время прочтения</label>
                <input name="read_time" type="text" value="{{$post->read_time}}" class="form-control @error('read_time') is-invalid @enderror" id="read_time" placeholder="Введите время прочтения">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea name="description" class="summernote_desc form-control @error('description') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="web_content">Контент WEB</label>
                <textarea name="web_content" class="web_content form-control @error('web_content') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="ios_content">Контент IOS</label>
                <textarea name="ios_content" class="ios_content form-control @error('ios_content') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="android_content">Контент Android</label>
                <textarea name="android_content" class="android_content form-control @error('android_content') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="video_url">URL для видеоурока</label>
                <input name="video_url" value="{{$post->video_url}}"class="form-control @error('video_url') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="faq_web">Часто задаваемых вопросов WEB</label>
                <textarea name="faq_web" class="summernote_faq form-control @error('faq_web') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="faq_ios">Часто задаваемых вопросов IOS</label>
                <textarea name="faq_ios" class="summernote_faq_ios form-control @error('faq_ios') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="faq_android">Часто задаваемых вопросов Android</label>
                <textarea name="faq_android" class="summernote_faq_android form-control @error('faq_android') is-invalid @enderror"></textarea>
            </div>

            

            <div class="form-group">
                <label for="status">Статус</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Черновик</option>
                    <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Опубликована</option>
                    <option value="soon" {{ $post->status == 'soon' ? 'selected' : '' }}>Скоро</options>
                </select>
            </div>

            <div class="form-group">
                <label for="is_soon">Скоро (Выберите если инструкция не готова)</label>
                <input type="checkbox" id="is_soon" name="is_soon" value="1" {{ $post->is_soon ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="is_public">Видимость</label>
                <select name="is_public" class="form-control @error('is_public') is-invalid @enderror">
                    <option value="0" {{ $post->is_public == 0 ? 'selected' : '' }}>Только авторизованным пользователям</option>
                    <option value="1" {{ $post->is_public == 1 ? 'selected' : '' }}>Всем виден</option>
                </select>
            </div>


            <button type="submit" class="btn btn-success">Сохранить</button>
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
        $('.web_content').summernote({
                height: 300
        });
        $('.ios_content').summernote({
                height: 300
        });
        $('.android_content').summernote({
                height: 300
        });

        $('.summernote_faq').summernote({
            height: 150
        });

        $('.summernote_desc').summernote({
            height: 100
        });
        var description = {!! json_encode($post->description) !!};
        $('.summernote_desc').summernote('code', description);

        var web_content = {!! json_encode($post->web_content) !!};
        $('.web_content').summernote('code', web_content);

        var ios_content = {!! json_encode($post->ios_content) !!};
        $('.ios_content').summernote('code', ios_content);

        var android_content = {!! json_encode($post->android_content) !!};
        $('.android_content').summernote('code', android_content);

        var faq_web = {!! json_encode($post->faq_web) !!};
        $('.summernote_faq').summernote('code', faq_web);

        var faq_ios = {!! json_encode($post->faq_ios) !!};
        $('.summernote_faq_ios').summernote('code', faq_ios);

        var faq_android = {!! json_encode($post->faq_android) !!};
        $('.summernote_faq_android').summernote('code', faq_android);
    });
</script>
@stop
