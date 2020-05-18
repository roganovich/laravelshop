@extends('layouts.app')
@section('title', 'Каталог товаров')
@section('content')
    <div class="container">
        <h1>@yield('title')</h1>
        @include('catalogues.list',['items'=>$items])
    </div>
@endsection


