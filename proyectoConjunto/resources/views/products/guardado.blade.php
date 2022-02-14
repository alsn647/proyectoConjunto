@extends('layouts.layout')

@section('titulo', 'Guardado')

@section('cuerpo')
    Producto guardado <br>
    Nombre:  {{$product->name}}
@endsection
