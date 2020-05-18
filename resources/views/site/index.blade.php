@extends('layouts.app')
@section('title', 'Магазин')
@section('content')
    <div class="container">
            @include('site._catalogues', ['catalogs' => $catalogs])
            @include('site._products', ['products' => $products])

    </div>
@endsection


