@extends('layouts.layout')

@section('titulo', 'Actualizar')

@section('cuerpo')
    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('put')<!-- cambiar metodo? -->

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{old('name')?old('name'):$product->name}}">
        {{-- Comprueba si existe nombre anterior y si no pone el nombre del producto --}}
        <br>
        <div>
            <label for="description">Descripcion: </label>
            <textarea name="description" id="description" required cols="30" rows="10">
                {{ old('description')? old('description') : $product->description }}
            </textarea>
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

        </div>
        <div>
            <label for="price">Precio: </label>
            <input type="number" step="any" name="price" id="price" min="0.1" value="{{old('price')?old('price'):$product->price}}" required>
            <span id="errorPrice"> El campo Precio debe contener un numero positivo con un valor mayor a 0 y con un
                maximo de dos decimales</span>
            @error('precio') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="discount">Descuento: </label>
            <input type="number" min="0" max="100" step="any" name="discount" id="discount" value="{{old('discount')?old('discount'):$product->discount}}" required>
            <span id="errorDiscount"> El campo Descuento debe contener un numero positivo con un valor mayor o igual a 0
                y con un maximo de dos decimales</span>
                @error('descuento') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="taxes">Impuesto: </label>
            <input type="number" min="0" max="100" step="any" name="taxes" id="taxes" value="{{old('taxes')?old('taxes'):$product->taxes}}"  required>
            <span id="errorTaxes"> El campo Impuesto debe contener un numero positivo con un valor mayor o igual a 0 y
                con un maximo de dos decimales</span>
            @error('descuento') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="stock">Existencias: </label>
            <input type="number" min="0" name="stock" id="stock" value="{{old('stock')?old('stock'):$product->stock}}"  required>
            <span id="errorStock"> El campo Existencias debe contener un numero entero positivo con un valor mayor o
                igual a 0</span>
            @error('existencias') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="image">Subir imagen</label>
            <input type="file" name="images[]" multiple required>
            <span id="errorImage"> El campo Imagen debe contener un archivo de tipo imagen</span>
        </div>
        @error('imagen') Error: {{$message}} @enderror

        <div>
            <label for="visibilidad">Visibilidad</label>
            <input type="checkbox" name="visibilidad" checked >
        </div>
        @error('imagen') Error: {{$message}} @enderror

        <div>
            <label for="enviar"></label>
            <input type="submit" value="Enviar" name="enviar" id="enviar" required>
        </div>


{{--
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
        <input type="submit" value="Guardar"> --}}
    </form>
@endsection
