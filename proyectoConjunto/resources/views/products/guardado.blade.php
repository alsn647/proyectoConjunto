@extends('layouts.layout')

@section('titulo', 'Guardado')

@section('cuerpo')
    Post guardado <br>
    Titulo:  {{$product->name}}
@endsection
