
<div class="col-lg-6">
    <div class="media align-items-center food-card">
        <img class="mr-3 mr-sm-4" src="themes/sneaky/img/home/food1.png" alt="{{ $item->name }}"/>
        <div class="media-body">
            <div class="d-flex justify-content-between food-card-title">
                <h4><a href="{{ route('articles.show',['slug'=>$item->slug]) }}">{{ $item->name }}</a></h4>
            </div>
            <p> {{ $item->intro }} </p>
        </div>
    </div>
</div>

