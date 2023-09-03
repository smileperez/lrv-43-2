@extends('layouts.main')
@push('head')
    <title>Add ToDos</title>
@endpush

@section('main-section')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Добавить новую задачу</div>
            <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Назад</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{route("todo.store")}}" method="post">
                    @csrf

                    <label for="" class="form-label mt-4">Тема задачи</label>
                    <input type="text" name="title" class="form-control">
                    <div class="text-danger">
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>

                    <label for="" class="form-label mt-4">Описание задачи</label>
                    <input type="text" name="description" class="form-control">
                    <div class="text-danger">
                        @error('description')
                            {{$message}}
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg mt-4">Добавить</button>
            </div>
        </div>

    </div>

@endsection
