<div class="row">
    <h2><a href="{{ route('brands.index') }}">Бренды</a></h2>

    <div class="infinite-scroll">
        <div class="row justify-content-center">
            @foreach ($brands as $item)
                @include('brands._item', ['item' => $item])
            @endforeach
        </div>
    </div>
</div>