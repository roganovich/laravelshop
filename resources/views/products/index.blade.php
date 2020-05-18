@extends('layouts.app')
@section('title', 'Список товаров')
@section('content')
    <div class="container">
        <h1>@yield('title')</h1>
        @include('products.list',['items'=>$items])
    </div>
@endsection


