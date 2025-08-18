@extends('layouts.admin')
@section('content')
<h1>Редактировать опросник</h1>

<form action="{{ route('surveys.update', $survey->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Название опроса *</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $survey->title }}" required>
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control">{{ $survey->description }}</textarea>
    </div>

    <h3>Варианты опроса</h3>

    <div id="options-wrapper">
        @foreach ($survey->options as $index => $option)
            <div class="form-group option-group">
                <label for="options[{{ $index }}][text]">Вариант {{ $index + 1 }}</label>
                <input type="hidden" name="options[{{ $index }}][id]" value="{{ $option->id }}">
                <input type="text" name="options[{{ $index }}][text]" class="form-control" value="{{ $option->option_text }}" required>
            </div>
        @endforeach
    </div>

    <button type="button" class="btn btn-secondary mt-2" id="add-option">Добавить вариант</button>

    <button type="submit" class="btn btn-primary mt-3">Обновить опрос</button>
</form>

<script>
    document.getElementById('add-option').addEventListener('click', function() {
        const optionsWrapper = document.getElementById('options-wrapper');
        const optionCount = optionsWrapper.querySelectorAll('.option-group').length;
        const newOptionHtml = `
            <div class="form-group option-group">
                <label for="options[${optionCount}][text]">Вариант ${optionCount + 1}</label>
                <input type="hidden" name="options[${optionCount}][id]" value="">
                <input type="text" name="options[${optionCount}][text]" class="form-control" required>
            </div>
        `;
        optionsWrapper.insertAdjacentHTML('beforeend', newOptionHtml);
    });
</script>
@endsection