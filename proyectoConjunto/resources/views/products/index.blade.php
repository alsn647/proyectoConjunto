@extends('layouts.layout')

@section('titulo', 'Listado de productos')

@section('cuerpo')

     <h2>Listado de productos</h2>
     <h3> nombre:</h3>
     @forelse ($products as $product)
        <p>
            {{-- {{$post->titulo."    ".$post->created_at}} --}}
            Nombre: <a href="{{route('products.show', $product->id)}}"> {{$product->name}}</a>
            Categoria: <a href="{{route('categories.show', $product->category_id)}}"> {{$product->category->name}} </a>
        </p>
     @empty

     @endforelse
@endsection
