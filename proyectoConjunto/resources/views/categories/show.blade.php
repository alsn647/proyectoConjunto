@extends('layouts.layout')

@section('titulo', $category->name)

@section('cuerpo')
    <p> Nombre: {{$category->name}} </p>
    <p> Id: {{$category->id}} </p>
    <p> Descripcion: {{$category->description}} </p>
@endsection
