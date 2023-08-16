{{-- <div class="leftduoi">
    <div class="combo-shopping">
        <h2>Video hướng dẫn:</h2>
        <div class="list-02">
            <div class="list_2">
                <div class="video">
                    <div class="video_chinh">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/5bIHZQT0qps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video_phu">
                        <div class="video1"></div>
                        <div class="video1"></div>
                        <div class="video1"></div>
                        <div class="video1"></div>
                        <div class="video1"></div>
                        <div class="video1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="infomation">
    <h2 class="infomation__title">Nguồn gốc sản phẩm</h2>
    <div class="infomation__group">
        <div class="item">
            <p class="text1">Danh mục:</p>
            <h3 class="text2">
                @if (isset($product->category->c_name))
                    <a href="{{  route('get.category.list', $product->category->c_slug).'-'.$product->pro_category_id }}">{{ $product->category->c_name }}</a>
                @else
                    "[N\A]"
                @endif
            </h3>
        </div>
        <div class="item">
            <p class="text1">Xuất sứ :</p>
            <h3 class="text2">{{ isset($product->producer) && !empty($product->producer) ? $product->producer->pdr_name : ''  }}</h3>
        </div>
        <div class="item">
            <p class="text1">Email liên hệ :</p>
            <h3 class="text2">{{ isset($product->producer) && !empty($product->producer) ? $product->producer->pdr_email : ''  }}</h3>
        </div>
        <div class="item">
            <p class="text1">Phone :</p>
            <h3 class="text2">{{ isset($product->producer) && !empty($product->producer) ? $product->producer->pdr_phone : ''  }}</h3>
        </div>
    </div>
</div> --}}
{{-- <a href="{{ route('ajax_get.user.add_favourite', $product->id) }}"
    title="Thêm sản phẩm yêu thích"
    class="muatragop  {{ !\Auth::id() ? 'js-show-login' : 'js-add-favourite' }}">
     <span>Yêu thích</span>
     <span>Sản phẩm</span>
 </a> --}}
 {{-- <div class="loai">
    <div class="loai1">
        <label for="">Chọn</label>
        <span class="loai2">
            Miếng 100g
            </span>
        </div>
    </div>
    <div class="buttons_added">
        <span>
            Số lượng:</span>
        <input class="minus is-form" type="button" value="-">
        <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
        <input class="plus is-form" type="button" value="+">
    </div> --}}
@extends('layouts.app_master_frontend')
@section('css')
    <style>
        <?php $style = file_get_contents('css/product_detail_insights.min.css');echo $style;?>
    </style>
@stop
@section('content')
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li>
                    <a itemprop="url" href="/" title="Home"><span itemprop="title">Trang chủ</span></a>
                </li>
                <li>
                    <a itemprop="url" href="{{ route('get.product.list') }}" title="Sản phẩm"><span
                            itemprop="title">Sản phẩm</span></a>
                </li>

                <li>
                    <a itemprop="url" href="{{  route('get.category.list', $product->category->c_slug.'-'.$product->category->id) }}" title="{{isset($product->category) ? $product->category->c_name : ''}}"><span itemprop="title">{{isset($product->category) ? $product->category->c_name : ''}}</span></a>
                </li>

            </ul>
        </div>
        <div class="card">
            <div class="card-body info-detail">
                <div class="left">
                    <div class="lefttren">
                    <a href="{{ route('get.product.detail',$product->pro_slug . '-'.$product->id ) }}" title="" class="listanh">
                        <img alt="" style="max-width: 100% ;height:30%" src="{{ pare_url_file($product->pro_avatar) }}" class="lazyload" id="show_anh">
                        <p class="list_img">
                            <img src="{{ pare_url_file($product->pro_avatar) }}" alt="">
                            <img src="{{ pare_url_file($product->pro_avatar1) }}" alt="">
                            <img src="{{ pare_url_file($product->pro_avatar2) }}" alt="">
                            <img src="{{ pare_url_file($product->pro_avatar3) }}" alt="">
                            <img src="{{ pare_url_file($product->pro_avatar4) }}" alt="">
                            <img src="{{ pare_url_file($product->pro_avatar5) }}" alt="">
                        </p>
                    </a>
                    </div>
                </div>
                <div class="right" id="product-detail" data-id="{{ $product->id }}">
                    <h1>{{  $product->pro_name }}</h1>
                    <div class="right__content">
                        <div class="info">
                            <div class="infomation" style="margin-bottom: 20px;">
                                <h2 class="infomation__title">Mô tả ngắn về sản phẩm</h2>
                                <div class="infomation__group">
                                    {!! $product->pro_description !!}
                                </div>
                            </div>

                            <div class="prices">
                                @if ($product->pro_sale)
                                    <p>Giá niêm yết :
                                        <span class="value">{{ number_format($product->pro_price,0,',','.') }} đ</span>
                                    </p>
                                    @php
                                        $price = ((100 - $product->pro_sale) * $product->pro_price)  /  100 ;
                                    @endphp
                                    <p>
                                        Giá bán  : <span
                                            class="value price-new">{{  number_format($price,0,',','.') }} đ</span>
                                        <span class="sale">-{{  $product->pro_sale }}%</span>
                                    </p>
                                @else
                                    <p>
                                        Giá bán d : <span class="value price-new">{{  number_format($product->pro_price,0,',','.') }} đ</span>
                                    </p>
                                @endif

                                <p>
                                    <span>View :&nbsp</span>
                                    <span>{{ $product->pro_view }}</span>
                                </p>
                                    <p>
                                        <span>Trạng thái :&nbsp</span>
                                        @if ($product->pro_number > 0)
                                            <span>Còn hàng</span>
                                        @else
                                            <span>Hết hàng</span>
                                        @endif
                                    </p>
                            </div>
                            {{--@if($product->attributes->count() > 0)--}}
                                {{--<div>--}}
                                    {{--<div style="margin-bottom: 10px">--}}
                                        {{--<div style="float: left; width: 30%; line-height: 36px;">--}}
                                            {{--Chọn khối lượng :--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<select name="size" id="product-size" class="form-control" style="height: 42px;">--}}
                                                {{--<option value="">Chọn khối lượng</option>--}}
                                                {{--@foreach($product->attributes as $attribute)--}}
                                                    {{--@if($attribute->atb_type_id == 1)--}}
                                                        {{--<option value="{{ $attribute->atb_name }}" >{{ $attribute->atb_name }}</option>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<div style="float: left; width: 30%; line-height: 36px;">--}}
                                            {{--Chọn đơn vị :--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<select name="color" id="product-color" class="form-control" style="height: 42px;">--}}
                                                {{--<option value="">Chọn đơn vị</option>--}}
                                                {{--@foreach($product->attributes as $attribute)--}}
                                                    {{--@if($attribute->atb_type_id == 2)--}}
                                                        {{--<option value="{{ $attribute->atb_name }}" >{{ $attribute->atb_name }}</option>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endif--}}
                            @if (!empty($product->pro_description))

                            @endif
                            <div style="clear: both;"></div>
                            <div class="btn-cart">
                                <a href="{{ route('get.shopping.add', $product->id) }}" title=""
                                   class="muangay">
                                    <span>Thêm Vào Giỏ Hàng</span>
                                    <span><Hotline:09999999999> </span>
                                </a>
                            </div>
                            <div class="infomation mua">
                                <h2 class="infomation__title">Sản phẩm thường mua cùng </h2>
                                <div class="infomation__group mua_d">
                                    <div class=" mua_d1">
                                            <div class="item">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" >
                                        </div>
                                            @include('frontend.components.product_item2',['product' => $product])
                                        </div>
                                    </div>
                                    <div class=" mua_d1">
                                            <div class="item">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                            @include('frontend.components.product_item2',['product' => $product])
                                        </div>
                                    </div>
                                    <div class=" mua_d1">
                                            <div class="item">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  >
                                        </div>
                                            @include('frontend.components.product_item2',['product' => $product])
                                        </div>
                                    </div>
                                    <div class=" mua_d1">
                                            <div class="item">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  >
                                        </div>
                                            @include('frontend.components.product_item2',['product' => $product])
                                        </div>
                                    </div>
                                    <div class=" mua_d1">
                                            <div class="item">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  >
                                        </div>
                                            @include('frontend.components.product_item2',['product' => $product])
                                        </div>
                                    </div>
                                    <div class=" mua_d1">
                                            <div class="item">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  >
                                        </div>
                                            @include('frontend.components.product_item2',['product' => $product])
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @if ($event1)
                        <div class="ads">
                            <a href="{{ $event1->e_link }}" title="Giam giá" target="_blank"><img alt="Hoan tien" style="width: 100%"
                                                                              src="{{  pare_url_file($event1->e_banner) }}"></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @include('frontend.pages.product_detail.include._inc_content')
            @include('frontend.pages.product_detail.include._inc_ratings')
            <div class="comments">
                <div class="form-comment">
                    <form action="" method="POST">
                        <input type="hidden" name="productId" value="{{ $product->id }}">
                        <div class="form-group">
                            <textarea placeholder="Mời bạn để lại bình luận ..." name="comment" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="footer">
                            <p>
                                {{--<a href=""><i class="la la-camera"></i> Gửi ảnh</a>--}}
                                <a href="">Quy định đăng bình luận</a>
                            </p>
                            <button class=" {{ \Auth::id() ? 'js-save-comment' : 'js-show-login' }}">Gửi bình luận</button>
                        </div>
                    </form>
                </div>
                @include('frontend.pages.product_detail.include._inc_list_comments')
            </div>

        </div>
        <div class="card-body product-des">
            <div class="left">
                <div class="tabs">
                    <div class="tabs__content">
                        <div class="product-five">
                            <div class="bot js-product-5 owl-carousel owl-theme owl-custom">
                                @foreach($productsSuggests as $product)
                                    <div class="item">
                                        @include('frontend.components.product_item',['product' => $product])
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                @if ($event2)
                    <a href="{{ $event2->e_link }}" title="Giam giá" target="_blank"><img alt="Hoan tien" style="width: 100%; margin-top: 20px;"
                                                                                              src="{{  pare_url_file($event2->e_banner) }}"></a>
                @endif
            </div>
        </div>
    </div>
    {{--@if ($isPopupCaptcha >= 2)--}}
        {{--@include('frontend.pages.product_detail.include._inc_popup_captcha')--}}
    {{--@endif--}}
@stop
@section('script')
    <script>
		var ROUTE_COMMENT = '{{ route('ajax_post.comment') }}';
		var CSS = "{{ asset('css/product_detail.min.css') }}";
		var URL_CAPTCHA = '{{ route('ajax_post.captcha.resume') }}';

    </script>
    <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/product_detail.js') }}" type="text/javascript"></script>
    <script>
        $(function () {
            $('.muangay').click(function (event) {
                event.preventDefault();

                var link = $(this).attr('href');
                var size = $('#product-size').val();
                var color = $('#product-color').val();
                var gender = $('input[name=gender]:checked').val() !== undefined ? $('input[name=gender]:checked').val() : '';

                $.ajax({
                    url: link,
                    type: 'GET',
                    data : {
                        size : size,
                        gender : gender,
                        color : color,
                    }
                }).done(function (result) {
                    window.location = window.location.href;
                })
            })
        });
    </script>
    <script>
        $(() =>{
            $('p img').hover(function(){
                let imgPath = $(this).attr('src');
                $('#show_anh').attr('src',imgPath);
            });

        });

        </script>
@stop


