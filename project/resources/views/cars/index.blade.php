@extends('layouts.base')
@section('title', 'Автомобили')
@section('main')
    @csrf
    @foreach($cars as $car)
        <div class="form-group">
        <h3>{{$car->gosnomer}}</h3>
        <a href="{{ route('detail.car', ['id' => $car->id]) }}">Подробнее</a>
        </div>
    @endforeach
    <a href="{{route('create.car')}}">Добавить новый автомобиль</a>
@endsection
