@if (isset($product))
<div class="item mua_d1">
    <div class="recommend-image image mua_d2">
        <a href="{{ route('get.product.detail',$product->pro_slug . '-'.$product->id ) }}">
            <img class="imgge" alt="{{  $product->pro_name }}" data-src="" src="{{ pare_url_file($product->pro_avatar) }}" width="44" height="44">
        </a>
        </div>
</div>
<div class="mua_d3">
    <a href="{{ route('get.product.detail',$product->pro_slug . '-'.$product->id ) }}">
        <h3 class="text2 mua_d4"> {{  $product->pro_name }} </h3>
    <div class="recommend-price mua_d5">
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
    @endif <del></del>
        </div>
    </div>
    </a>
@endif

