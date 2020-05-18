@extends('layouts.app')
@section('title', $item->name)
@section('content')
    <div class="container">
        <div class="card post_body">
            <div class="card-body">
                <div class="post_title">
                    <h1>@yield('title')</h1>
                </div>
                <div class="post_attr">
                    <img src="/images/no-photography.jpg"/>
                    <p> {{ $item->description }}</p>
                </div>
            </div>
        </div>

        <div class="card post_body">
            <div class="card-body">
                <div class="post_title">
                    <h2>Товары этого каталога</h2>
                </div>
                <div class="post_attr">
                    <div class="infinite-scroll">
                        <div class="row justify-content-center">
                            @foreach ($products as $product)
                                @include('products._item', ['item' => $product])
                            @endforeach
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection








