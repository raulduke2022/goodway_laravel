@extends('layouts.base')
@section('title', $id->gosnomer)
@section('main')
    <div>
    <h3>{{$id->gosnomer}}</h3>
    <h3>{{$id->car_model->name}}</h3>
    <h3>{{$id->office->name}}</h3>
    </div>
    <a href="/cars">Вернуться к автомобилям</a>
@endsection
