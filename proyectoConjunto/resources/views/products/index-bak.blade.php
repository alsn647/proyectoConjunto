@extends('layouts.layout')

@section('titulo', 'Listado de productos')

@section('cuerpo')

     <h2>Listado de productos</h2>
     <h3> nombre:</h3>
     <main>
        <div class="products-container">
            @forelse ($products as $product)
                <div class="product">
                    <div class="product-img-container">
                        <img src="{{ asset('img/img3-S.jpg') }}" class="img-prod" alt="description of myimage">
                    </div>
                    <a href="{{route('products.show', $product->id)}}"> {{$product->name}}</a>
                </div>
            @empty

            @endforelse
        </div>
     </main>

@endsection
