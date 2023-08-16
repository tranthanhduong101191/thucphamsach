<section id="box-news">
    <div class="top"> <a href="#" class="main-title">Tin tức</a> </div>
    <div class="bot">
        @foreach($articlesHot as $item)
        <div class="col">
            <div class="item">
                <div class="item__image">
                    <a href="{{ route('get.blog.detail',$item->a_slug.'-'.$item->id) }}" title="{{ $item->a_name }}">
                        <img class="lazyload lazy" src="{{  asset('images/preloader.gif') }}" data-src="{{ pare_url_file($item->a_avatar) }}" alt="{{ $item->a_name }}">
                    </a>
                    </div>
                <div class="item__content">
                    <div class="date-time"> <i class="fa fa-calendar"></i> <span>{{ $item->created_at }}</span> </div>
                    <h3> <a href="{{ route('get.blog.detail',$item->a_slug.'-'.$item->id) }}" class="title" title="{{ $item->a_name }}">{{ $item->a_name }}</a> </h3>
                    <p class="description"> {{ $item->a_description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
{{--  --}}
<section id="box-news">
    <div class="top"> <a href="#" class="main-title">Đối Tác Của Chúng Tôi </a> </div>
    <div class="bot">
        <div class="col">
            <div class="item">
                <div class="item__image">
                    <a href="" title="">
                        <img class="lazyload lazy" src="uploads/2023/icon_danhmuc/doitacchoxanh/aeon_da717c7c652740bdba61d267edd87a94.png"  alt="" style="height: 10%">
                    </a>
                </div>
            </div>
        </div>

            <div class="col">
                <div class="item">
                    <div class="item__image">
                        <a href="" title="">
                            <img class="lazyload lazy" src="uploads/2023/icon_danhmuc/doitacchoxanh/kingfood_1c0a94b818bc4f87b7ea52c53ba71772.png"  alt="" style="height: 10%">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="item">
                    <div class="item__image">
                        <a href="" title="">
                            <img class="lazyload lazy" src="uploads/2023/icon_danhmuc/doitacchoxanh/lotte_8b157070ab9a4259841f9ef667673f8b.png"  alt="" style="height: 10%">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="item">
                    <div class="item__image">
                        <a href="" title="">
                            <img class="lazyload lazy" src="uploads/2023/icon_danhmuc/doitacchoxanh/vinmart_ae238b9dd7704d50868b1e16ebd95c48.png"  alt="" style="height: 10%">
                        </a>
                    </div>
                </div>
            </div>

    </div>

</section>
