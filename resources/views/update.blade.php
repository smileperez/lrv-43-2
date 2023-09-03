@extends('layouts.main')
@push('head')
    <title>Update ToDos</title>
@endpush

@section('main-section')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Изменить задачу №{{$todo->id}}</div>
            <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Назад</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{route("todo.update", $todo->id)}}" method="post">
                    @csrf

                    <label for="" class="form-label mt-4">Тема задачи</label>
                    <input type="text" name="title" class="form-control" value="{{$todo->title}}">
                    <div class="text-danger">
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>

                    <label for="" class="form-label mt-4">Описание задачи</label>
                    <input type="text" name="description" class="form-control" value="{{$todo->description}}">
                    <div class="text-danger">
                        @error('description')
                            {{$message}}
                        @enderror
                    </div>

                    <input type="number" name="id" value="{{$todo->id}}" hidden>

                    <button class="btn btn-primary btn-lg mt-4">Изменить задачу</button>
            </div>
        </div>

    </div>

@endsection
