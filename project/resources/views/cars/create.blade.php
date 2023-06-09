@extends('layouts.base')
@section('title', 'Создание автомобиля')
@section('main')
    <div class="container mt-4">
    <form action="{{ route('store.car') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="gosnomer">Госномер</label>
            <input type="text" id="gosnomer" class="form-control" name="gosnomer" placeholder="Введите госномер">
        </div>
        <div class="form-group">
            <label for="vin">VIN</label>
            <input type="text" id="vin" class="form-control" name="vin" placeholder="Введите VIN">
        </div>
        <div class="form-group">
        <label for="model">Офис</label>
        <select name="office">
            @foreach($offices as $office)
                <option value="{{ $office->id }}"> {{ $office->name }} </option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
        <label for="model">Модель</label>
        <select name="model">
            @foreach($models as $model)
                <option value="{{ $model->id }}"> {{ $model->name }} </option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    </div>
@endsection
