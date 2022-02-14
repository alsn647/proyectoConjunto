@extends('layouts.layout')

@section('titulo', 'Producto')

@section('cuerpo')
    <h1>
        <a href="{{route('categories.show', $product->category->id)}}"> {{$product->category->name}} </a>
    </h1>

    <p>
        {{$product->description}}
    </p>

    <p>
        Fecha: {{$product->created_at}}
    </p>
    <p>
        @foreach ($product->images as $imagen)
            <img src="{{asset('images/'.$imagen->path)}}" alt="">
        @endforeach
    </p>
    {{-- <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form> --}}
    @if ($user->role == 'Admin')
        <a href="{{route('products.edit', $product->id)}}">Editar</a>
    @else
        añadir al carrito
    @endif

@endsection
