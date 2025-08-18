@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Результат опроса</h1>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Назад</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ссылка</th>
                    <th>Опрос</th>
                    <th>Вариант</th>
                    <th>Имя пользователя</th>
                    <th>Телефон</th>
                    <th>Текст другое</th>
                    <th>Время</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->link }}</td>
                        <!-- Display 'Other' if survey is null, otherwise show survey name -->
                        <td>
                            @if ($result->survey)
                                {{ $result->survey->title }}
                            @else
                                Other
                            @endif
                        </td>

                        <!-- Display 'Other' if option is null, otherwise show option text -->
                        <td>
                            @if ($result->option)
                                {{ $result->option->option_text }}
                            @else
                                Other
                            @endif
                        </td>

                        <td>{{ $result->user_name }}</td>
                        <td>{{ $result->phone }}</td>

                        <!-- Display other_option_text if available -->
                        <td>{{ $result->other_option_text ?? 'N/A' }}</td>

                        <td>{{ $result->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection