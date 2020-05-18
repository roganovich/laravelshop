
<section class="section-margin">
    <div class="container">
        <div class="section-intro mb-75px">
            <h4 class="intro-title"><a href="{{ route('products.index') }}">Товары</a></h4>
            <h2>Talent & experience member</h2>
        </div>
        <div class="row">

            @foreach ($products as $item)
                @include('products._item', ['item' => $item])
            @endforeach



        </div>
    </div>
</section>