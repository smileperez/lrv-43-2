@extends('layouts.main')
@push('head')
    <title>Efimenko ToDos</title>
@endpush

@section('main-section')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Список всех задач</div>
            <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Добавить новую задачу</a>
        </div>

        <table class="table table-stripped table-dark">
            <tr>
                <th>Id</th>
                <th>Тема</th>
                <th>Описание</th>
                <th>Создана</th>
                <th>Изменена</th>
                <th>Действие</th>
            </tr>

            @foreach ($todos as $todo)

                <tr valign="middle">
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->description}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td>{{$todo->updated_at}}</td>
                    <td>
                        <a href="{{route("todo.edit", $todo->id)}}" class="btn btn-success btn-sm">Изменить</a>
                        <a href="{{route("todo.destroy", $todo->id)}}" class="btn btn-danger btn-sm">Удалить</a>
                    </td>
                </tr>

            @endforeach


        </table>

    </div>

@endsection
