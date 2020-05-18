<section class="section">
    <div class="container">
        <div class="section-intro mb-75px">
            <h4 class="intro-title"><a href="{{ route('catalogues.index') }}">Каталоги</a></h4>
            <h2>Talent & experience member</h2>
        </div>

        <div class="row">
            @foreach ($catalogs as $item)
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="chef-card">
                        <img class="card-img rounded-0" src="themes/sneaky/img/home/chef-1.png" alt="">
                        <div class="chef-footer">
                            <h4><a href="{{ route('catalogues.show',['slug'=>$item->slug]) }}">{{ $item->name }}</a></h4>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>