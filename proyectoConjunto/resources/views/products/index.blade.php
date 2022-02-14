@extends('layouts.layout')

@push('scripts')
    <script defer src="/js/index.js"></script>
@endpush
<link rel="stylesheet" href="/css/style.css">
@section('titulo', 'Listado de productos')

@section('cuerpo')

    <main>
        <div class="textContent">

        </div>
        <button id="loadButton">Cargar Mas</button>
    </main>

@endsection
