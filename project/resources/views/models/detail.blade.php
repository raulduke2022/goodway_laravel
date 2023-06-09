@extends('layouts.base')
@section('title', $id->name)
@section('main')
    <div>
    <h3>{{$id->name}}</h3>
    </div>
    <a href="/models">Вернуться к моделям</a>
@endsection
