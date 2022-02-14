@extends('layouts.layout')

@section('titulo', 'Modificado')

@section('cuerpo')
    Producto modificado <br>
    Titulo:  {{$product->name}}
@endsection
