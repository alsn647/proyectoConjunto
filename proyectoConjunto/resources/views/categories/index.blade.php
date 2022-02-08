@extends('layouts.layout')

@section('titulo', 'Categorias')

@section('cuerpo')
<h1>Categorias</h1>
@foreach ($categories as $category)
    <p> <a href="{{route('categories.show', $category->id)}}">{{$category->name}} </a> </p>
@endforeach
@endsection
