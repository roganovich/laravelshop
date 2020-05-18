@extends('layouts.app')
@section('title', 'Список товаров')
@section('content')
    <div class="container">
        <h1>@yield('title')</h1>
        @include('articles.list',['items'=>$items])
    </div>
@endsection


