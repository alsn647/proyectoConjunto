@extends('layout')

@section('titulo', 'Crear')

@section('cuerpo')
<h1>Creacion de un nuevo post</h1> <br>
    <form action="{{route('posts.store')}}" method="post">
        @csrf

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">
        <br>
        @error('titulo') Error: {{$message}} @enderror

        <label for="contenido">Contenido</label>
        <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
        <br>
        @error('contenido') Error: {{$message}} @enderror

        <label for="visibilidad">Visible</label>
        <input type="checkbox" name="visibilidad" id="visibilidad">
        <br>

        <label for="autor">Autor</label>
        <select class="form-control" name="autor" id="autor">
            @foreach ($writers as $writer)
                <option value="{{$writer->id}}">
                    {{ $writer->apodo }}
                </option>
            @endforeach
        </select>
        @error('autor') Error: {{$message}} @enderror
        <br> <br>
        <input type="submit" value="Guardar">

        {{--
            Esto muestra todos los errores seguidos
            @if ($errors->any())
            Hay errores en el formulario
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error}} </li>
                @endforeach
            </ul>
        @endif --}}
    </form>
@endsection
