@if (isset($product))
<div class="item mua_d1">
    <div class="product-item">
        <a href="{{ route('get.product.detail',$product->pro_slug . '-'.$product->id ) }}" title="" class="avatar image contain">
            <img alt="{{  $product->pro_name }}" data-src="{{ pare_url_file($product->pro_avatar) }}" src="{{  asset('images/preloader.gif') }}" class="lazyload lazy">
        </a>
        <a href="{{ route('get.product.detail',$product->pro_slug . '-'.$product->id ) }}"
         title="{{  $product->pro_name }}" class="title">
            <h3>{{  $product->pro_name }}</h3>
        </a>
        <p class="rating">
            <span>
                @php
                    $iactive = 0;
                    if ($product->pro_review_total){
                        $iactive = round($product->pro_review_star / $product->pro_review_total,2);
                    }

                @endphp
                @for($i = 1 ; $i <= 5 ; $i ++)
                    <i class="la la-star {{ $i <= $iactive ? 'active' : ''  }}"></i>
                @endfor
            </span>
            <span class="text">{{ $product->pro_review_total }} đánh giá</span>
        </p>
        @if ($product->pro_sale)
            <p>
                <span class="percent">-{{ $product->pro_sale }}%</span>
                @php
                    $price = ((100 - $product->pro_sale) * $product->pro_price)  /  100 ;
                @endphp
                <span class="price">{{  number_format($price,0,',','.') }} đ</span>
                <span class="price-sale">{{ number_format($product->pro_price,0,',','.') }} đ</span>
            </p>
        @else
            <p class="price">{{  number_format($product->pro_price,0,',','.') }} đ</p>
        @endif

    </div>
</div>
@endif
{{-- <div class="item mua_d1">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
    </div>
    <div class="recommend-image image mua_d2">
        <a href="">
            <img class="imgge" src="" width="44" height="44" alt=""></a>
        </div>
    <div class="mua_d3">
        <h3 class="text2 mua_d4"></h3>
        <div class="recommend-price mua_d5">
            55.000 <del></del>
            </div>
        </div>
</div> --}}
