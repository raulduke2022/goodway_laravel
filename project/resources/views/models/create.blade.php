@extends('layouts.base')
@section('title', 'Создание модели')
@section('main')
    <div class="container mt-4">
    <form action="{{ route('store.model') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Модель</label>
            <input type="text" id="name" class="form-control" name="name" placeholder="Введите название">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    </div>
@endsection
