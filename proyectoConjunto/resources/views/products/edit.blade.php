@extends('layouts.layout')

@section('titulo', 'Actualizar')

@section('cuerpo')
    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('put')

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="{{old('titulo')?old('titulo'):$product->name}}">
        {{-- Comprueba si existe titulo anterior y si no pone el titulo del post --}}
        <br>

        <label for="contenido">Contenido</label>
        <textarea name="contenido" id="contenido" cols="30" rows="10">
            {{ old('contenido')? old('contenido') : $product->description }}
        </textarea>
        <br>

        <label for="autor">Autor</label>
        <select name="autor" id="autor" class="form-control">
            @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$category->id==$product->category->id?'selected':''}}>
                    {{old('autor')?old('autor'):$category->name}}
                </option>
            @endforeach
        </select>
        <br> <br>
        <input type="submit" value="Guardar">
    </form>
@endsection
