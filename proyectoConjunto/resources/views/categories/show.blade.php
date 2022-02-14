@extends('layouts.layout')

@section('titulo', $category->name)

@section('cuerpo')
    <p> Nombre: {{ $category->name }} </p>
    <p> Id: {{ $category->id }} </p>
    <p> Descripcion: {{ $category->description }} </p>

    <button id='loadButton'>Cargar mas</button>

    <script>
        let button = document.querySelector('#loadButton');
        let counter = 0;
        let url = "{{ route('productsApi.showProducts', ['id' => $category->id, 'counter' => ':counter']) }}";
        url = url.replace(':counter', counter);
        console.log(url);

        button.onclick = function() {
            async function fetchProductsJSON() {
                console.log(counter);
                let url =
                    "{{ route('productsApi.showProducts', ['id' => $category->id, 'counter' => ':counter']) }}";
                url = url.replace(':counter', counter);
                console.log(url);
                let products = await fetch(url);
                console.log(products);
                let jsonProducts = await products.json();
                console.log(jsonProducts);
                return jsonProducts;
            }
            fetchProductsJSON().then(jsonProducts => {
                for (let product of jsonProducts) {
                    let div = document.createElement('div');
                    div.textContent = product.name;
                    document.body.append(div);
                }
                counter = counter + 2;
            });
        }

        async function fetchProductsJSON() {
            console.log(counter);
            let url = "{{ route('productsApi.showProducts', ['id' => $category->id, 'counter' => ':counter']) }}";
            url = url.replace(':counter', counter);
            console.log(url);
            let products = await fetch(url);
            console.log(products);
            let jsonProducts = await products.json();
            console.log(jsonProducts);
            return jsonProducts;
        }
        fetchProductsJSON().then(jsonProducts => {
            for (let product of jsonProducts) {
                let div = document.createElement('div');
                div.textContent = product.name;
                document.body.append(div);
            }
            counter = counter + 2;
        });
    </script>

@endsection
