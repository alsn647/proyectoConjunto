@extends('layouts.layout')

@push('scripts')
    <script defer src="{{asset('js/validacionProducto.js')}}"></script>
@endpush
@section('titulo', 'Crear')

@section('cuerpo')
<h1>Creacion de un nuevo Producto</h1> <br>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="formClass">
        @csrf
        <div>
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" required>
            <span id="errorName"> El campo Nombre no puede estar vacio</span>
        </div>
        @error('nombre') Error: {{$message}} @enderror

        <div>
            <label for="description">Descripcion: </label>
            <input type="text" name="description" id="description" required>
            <span id="errorDescription"> El campo Descripcion no puede estar vacio</span>
        </div>
        @error('descripcion') Error: {{$message}} @enderror

        <div>
            <label for="category">Categoria: </label>
            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <!-- <input type="text" name="category" id="category" required>
            <span id="errorCategory"> El campo Categoria no puede estar vacio</span> -->
        </div>
        <div>
            <label for="price">Precio: </label>
            <input type="number" step="any" name="price" id="price" required>
            <span id="errorPrice"> El campo Precio debe contener un numero positivo con un valor mayor a 0 y con un
                maximo de dos decimales</span>
            @error('precio') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="discount">Descuento: </label>
            <input type="number" min="0" max="100" step="any" name="discount" id="discount" required>
            <span id="errorDiscount"> El campo Descuento debe contener un numero positivo con un valor mayor o igual a 0
                y con un maximo de dos decimales</span>
            @error('descuento') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="taxes">Impuesto: </label>
            <input type="number" min="0" max="100" step="any" name="taxes" id="taxes" required>
            <span id="errorTaxes"> El campo Impuesto debe contener un numero positivo con un valor mayor o igual a 0 y
                con un maximo de dos decimales</span>
            @error('descuento') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="stock">Existencias: </label>
            <input type="number" min="0" name="stock" id="stock" required>
            <span id="errorStock"> El campo Existencias debe contener un numero entero positivo con un valor mayor o
                igual a 0</span>
            @error('existencias') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="visibilidad">Visibilidad</label>
            <input type="checkbox" name="visibilidad" id="visibilidad" checked >
        </div>
        @error('imagen') Error: {{$message}} @enderror

        <div>
            <label for="image">Subir imagen</label>
            <input type="file" name="images[]" multiple required>
            <span id="errorImage"> El campo Imagen debe contener un archivo de tipo imagen</span>
        </div>
        @error('imagen') Error: {{$message}} @enderror

        <div>
            <label for="enviar"></label>
            <input type="submit" value="Enviar" name="enviar" id="enviar" required>
        </div>
        {{-- <label for="autor">Autor</label>
        <select class="form-control" name="autor" id="autor">
            @foreach ($writers as $writer)
                <option value="{{$writer->id}}">
                    {{ $writer->apodo }}
                </option>
            @endforeach
        </select>
        @error('autor') Error: {{$message}} @enderror
        <br> <br>
        <input type="submit" value="Guardar"> --}}

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
