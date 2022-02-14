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

                        @foreach ($product->images as $imagen)
                            @if ($imagen->default == 1)
                                <img src="{{asset('images/'.$imagen->path)}}" alt="">
                            @endif
                            <a href="{{route('products.show', $product->id)}}"> {{$product->name}}</a>
                        @endforeach

                        </div>
                    </div>
            @empty
            @endforelse
        </div>
     </main>

@endsection
