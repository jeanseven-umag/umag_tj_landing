@extends('layouts.admin')
@section('content')
<div class="top-header-container">
    <div class="top-wrap">
        <form action="{{ route('new.admin.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Ном*</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Номро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="title_second">Номи дуюм*</label>
                <input name="title_second" type="text" class="form-control @error('title_second') is-invalid @enderror" id="title_second" placeholder="Номи дуюмро ворид кунед" required>
            </div>
            <div class="form-group">
                <label for="link">Истинод бо забони англисӣ*</label>
                <input name="link" type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Ссылкаро ворид кунед" required>
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
                <label for="read_time">Вақти хондан</label>
                <input name="read_time" type="text" class="form-control @error('read_time') is-invalid @enderror" id="read_time" placeholder="Вақти хонданро ворид кунед">
            </div>

            <div class="form-group">
                <label for="description">Тавсиф</label>
                <textarea name="description" class="summernote_desc form-control @error('description') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="web_content">Контенти WEB</label>
                <textarea name="web_content" class="summernote form-control @error('web_content') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="ios_content">Контент IOS</label>
                <textarea name="ios_content" class="summernote form-control @error('ios_content') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="android_content">Контенти Android</label>
                <textarea name="android_content" class="summernote form-control @error('android_content') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="video_url">URL барои омӯзиши видео</label>
                <input name="video_url" class="form-control @error('video_url') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="faq_web">Саволҳои зуд-зуд медодаи WEB</label>
                <textarea name="faq_web" class="summernote_faq form-control @error('faq_web') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="faq_ios">Саволҳои зуд-зуд медодаи IOS</label>
                <textarea name="faq_ios" class="summernote_faq form-control @error('faq_ios') is-invalid @enderror"></textarea>
            </div>

            <div class="form-group">
                <label for="faq_android">Саволҳои зуд-зуд медодаи Android</label>
                <textarea name="faq_android" class="summernote_faq form-control @error('faq_android') is-invalid @enderror"></textarea>
            </div>
            

            <div class="form-group">
                <label for="status">Мақом</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror">
                    <option value="draft">Лоиҳа</option>
                    <option value="published">Нашр шудааст</option>
                </select>
            </div>

            <div class="form-group">
                <label for="is_soon"> Ба наздикӣ (Агар дастур омода набошад, интихоб кунед) </label>
                <input type="checkbox" id="is_soon" name="is_soon" value="1">
            </div>

            <div class="form-group">
                <label for="is_public">Намоиш</label>
                <select name="is_public" class="form-control @error('is_public') is-invalid @enderror">
                    <option value="0">Танҳо корбарони авторизатсияшуда</option>
                    <option value="1">Ба ҳама намоиш</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Захира кунед</button>
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
                height: 300
            });
            $('.summernote_faq').summernote({
                height: 150
            });
            $('.summernote_desc').summernote({
                height: 100
            });
        });
    </script>
@stop
