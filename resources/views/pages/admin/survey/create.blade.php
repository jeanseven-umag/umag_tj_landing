@extends('layouts.admin')
@section('content')
<h1>Саволнома эҷод кунед</h1>

<form action="{{ route('surveys.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Номи саволнома *</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Тавсиф</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <h3>Вариантҳои саволнома</h3>

    <div id="options-wrapper">
        <div class="form-group option-group">
            <label for="options[]">Варианти 1</label>
            <input type="text" name="options[]" class="form-control" required>
        </div>
    </div>

    <button type="button" class="btn btn-secondary mt-2" id="add-option">Вариант илова кунед</button>

    <button type="submit" class="btn btn-primary mt-3">Саволномаро эҷод кунед</button>
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