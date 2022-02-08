@extends('layout')

@section('titulo', 'Modificado')

@section('cuerpo')
    Post modificado <br>
    Titulo:  {{$post->titulo}}
@endsection
