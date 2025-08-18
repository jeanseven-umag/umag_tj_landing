@extends('layouts.admin')
@section('content')
    <h1>Опросы</h1>
    <a href="{{ route('surveys.create') }}" class="btn btn-primary">Создать новый опрос</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="/survey-results" class="btn btn-success">Резултаты опроса</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $survey)
                <tr>
                    <td>{{ $survey->title }}</td>
                    <td>{{ $survey->description }}</td>
                    <td>
                        <a href="{{ route('surveys.edit', $survey->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('surveys.destroy', $survey->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection