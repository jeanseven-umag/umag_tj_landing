@extends('layouts.admin')
@section('content')
<h1>Создать опросник</h1>

<form action="{{ route('surveys.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Название опроса *</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <h3>Варианты опроса</h3>

    <div id="options-wrapper">
        <div class="form-group option-group">
            <label for="options[]">Вариант 1</label>
            <input type="text" name="options[]" class="form-control" required>
        </div>
    </div>

    <button type="button" class="btn btn-secondary mt-2" id="add-option">Добавить вариант</button>

    <button type="submit" class="btn btn-primary mt-3">Создать опрос</button>
</form>

<script>
    document.getElementById('add-option').addEventListener('click', function() {
        const optionsWrapper = document.getElementById('options-wrapper');
        const optionCount = optionsWrapper.querySelectorAll('.option-group').length + 1;
        const newOptionHtml = `
            <div class="form-group option-group">
                <label for="options[]">Option ${optionCount}</label>
                <input type="text" name="options[]" class="form-control" required>
            </div>
        `;
        optionsWrapper.insertAdjacentHTML('beforeend', newOptionHtml);
    });
</script>
@endsection