@extends('layouts.app')
@section('title', 'Бренды товаров')
@section('content')
    <div class="container">
        <h1>@yield('title')</h1>
        @include('brands.list',['items'=>$items])
    </div>
@endsection


