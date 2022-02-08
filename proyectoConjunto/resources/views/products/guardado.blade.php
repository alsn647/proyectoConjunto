@extends('layout')

@section('titulo', 'Guardado')

@section('cuerpo')
    Post guardado <br>
    Titulo:  {{$post->titulo}}
@endsection
