@extends('layouts.layout')

@push('scripts')
    <script defer src="{{asset('js/validacionEdit.js')}}"></script>
@endpush
@section('titulo', 'Actualizar')

@section('cuerpo')
    <form action="{{route('products.update', $product->id)}}" enctype="multipart/form-data" method="post" class="formClass">
        @csrf
        @method('put')
        <div>
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" value="{{old('name')?old(''):$product->name}}">
            <span id="errorName"> El campo Nombre no puede estar vacio</span>
        </div>
        @error('nombre') Error: {{$message}} @enderror

        <div>
            <label for="description">Descripcion: </label>
            <textarea name="description" id="description" cols="30" rows="10">
                {{ old('description')? old('description') : $product->description }}
            </textarea>
            <span id="errorDescription"> El campo Descripcion no puede estar vacio</span>
        </div>
        @error('descripcion') Error: {{$message}} @enderror

        <div>
            <label for="category">Categoria: </label>
            <select name="category" id="category" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id==$product->category->id?'selected':''}}>
                        {{old('category')?old('category'):$category->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="price">Precio: </label>
            <input type="number" min="0" step="any" name="price" id="price" value="{{old('price')?old(''):$product->price}}">
            <span id="errorPrice"> El campo Precio debe contener un numero positivo con un valor mayor a 0 y con un
                maximo de dos decimales</span>
        </div>
        @error('precio') Error: {{$message}} @enderror

        <div>
            <label for="discount">Descuento: </label>
            <input type="number" min="0" max="100" step="any" name="discount" id="discount" value="{{old('discount')?old(''):$product->discount}}">
            <span id="errorDiscount"> El campo Descuento debe contener un numero positivo con un valor mayor o igual a 0
                y con un maximo de dos decimales</span>
        </div>
        @error('descuento') Error: {{$message}} @enderror

        <div>
            <label for="taxes">Impuesto: </label>
            <input type="number" min="0" max="100" step="any" name="taxes" id="taxes" value="{{old('taxes')?old(''):$product->tax}}">
            <span id="errorTaxes"> El campo Impuesto debe contener un numero positivo con un valor mayor o igual a 0 y
                con un maximo de dos decimales</span>
        </div>
        @error('descuento') Error: {{$message}} @enderror

        <div>
            <label for="stock">Existencias: </label>
            <input type="number" name="stock" id="stock" value="{{old('stock')?old(''):$product->stock}}">
            <span id="errorStock"> El campo Existencias debe contener un numero entero positivo con un valor mayor o
                igual a 0</span>
            @error('existencias') Error: {{$message}} @enderror
        </div>

        <div>
            <label for="visibilidad">Visibilidad</label>
            <input type="checkbox" name="visibility" checked >
        </div>
        @error('imagen') Error: {{$message}} @enderror

        <div>
            <label for="image">Subir imagen</label>
            <input type="file" name="images[]" multiple>
            <span id="errorImage"> El campo Imagen debe contener un archivo de tipo imagen</span>
        </div>
        @error('imagen') Error: {{$message}} @enderror

        <div>
            <label for="guardar"></label>
            <input type="submit" value="Guardar" name="guardar" id="guardar" required>
        </div>
    </form>
@endsection
