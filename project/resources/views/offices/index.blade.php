@extends('layouts.base')
@section('title', 'Офисы')
@section('main')
    @csrf
    @foreach($offices as $office)
        <div>
        <h3>{{$office->name}}</h3>
        <a href="{{ route('detail.office', ['id' => $office->id]) }}">Подробнее</a>
        </div>
    @endforeach
    <a href="{{route('create.office')}}">Добавить новый офис</a>
@endsection
