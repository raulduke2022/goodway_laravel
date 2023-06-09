@extends('layouts.base')
@section('title', 'Автомобили')
@section('main')
    @csrf
    @foreach($models as $model)
        <div>
        <h3>{{$model->name}}</h3>
        <a href="{{ route('detail.model', ['id' => $model->id]) }}">Подробнее</a>
        </div>
    @endforeach
    <a href="{{route('create.model')}}">Добавить новую модель</a>
@endsection
