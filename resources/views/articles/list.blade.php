<section class="section">
    <div class="container">
        <div class="section-intro mb-75px">
        </div>
        <div class="row">
            @foreach ($items as $item)
                @include('articles._item', ['item' => $item])
            @endforeach
        </div>
    </div>
    {{ $items->links() }}
</section>



@push('scripts')
    <script src="{{asset('js/script.js')}}"></script>
@endpush



