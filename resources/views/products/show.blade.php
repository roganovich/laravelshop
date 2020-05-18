@extends('layouts.app')
@section('title', $item->name)
@section('content')
    <div class="container">
        <div class="card post_body">
            <div class="card-body">
                <div class="post_title">
                    <h1>{{ $item->name }}</h1>
                </div>
                <div class="post_attr">
                    <img src="/images/no-photography.jpg"/>
                    <p> {{ $item->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection








