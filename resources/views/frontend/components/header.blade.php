{{-- <section class="top-header desktop">
    <div class="container">
        <div class="content">
            <div class="left">
                <a href="{{ route('get.static.customer_care') }}" title="Chăm sóc khách hàng" rel="nofollow">Chăm sóc khách hàng</a>
                 <a href="{{ route('get.user.transaction') }}" title="Kiểm tra đơn hàng" rel="nofollow">Kiểm tra đơn hàng</a>
            </div>
            <div class="right">
                @if (Auth::check())
                    <a href="">Xin chào {{ Auth::user()->name }}</a>
                    <a href="{{  route('get.user.dashboard') }}">Quản lý tài khoản</a>
                    <a href="{{  route('get.logout') }}">Đăng xuất </a>
                @else
                    <a href="{{  route('get.register') }}">Đăng ký</a>
                    <a href="{{  route('get.login') }}">Đăng nhập</a>
                @endif
             </div>
        </div>
    </div>
</section>
<section class="top-header mobile">
    <div class="container">
        <div class="content">
            <div class="left">
                <a href="{{ route('get.static.customer_care') }}" title="Chăm sóc khách hàng" rel="nofollow">Chăm sóc khách hàng</a>
                <a href="{{ route('get.user.transaction') }}" title="Kiểm tra đơn hàng" rel="nofollow">Kiểm tra đơn hàng</a>
                @if (Auth::check())
                    <a href="">Xin chào {{ Auth::user()->name }}</a>
                    <a href="{{  route('get.user.dashboard') }}">Quản lý tài khoản</a>
                    <a href="{{  route('get.logout') }}">Đăng xuất </a>
                @else
                    <a href="{{  route('get.register') }}">Đăng ký</a>
                    <a href="{{  route('get.login') }}">Đăng nhập</a>
                @endif
            </div>
        </div>
    </div>
</section> --}}

<div class="commonTop" >
    <div id="headers" style="background: #0086f0">
        <div class="container header-wrapper" style="height: 45px">
            <!--Thay đổi-->
            <div class="logo" style="height: 45px">
                <a href="/" class="desktop">
                    <img src="{{ url('images/logo.png') }}" style="height: 67px;" alt="Home">
                </a>
{{--                <a href="/" class="mobile">--}}
{{--                    <img src="{{ url('images/icon/LogoMobile.png') }}" alt="Home">--}}
{{--                </a>--}}
                <span  class="menu js-menu-cate bang"><i class="fa fa-list-ul"></i> </span>
            </div>
            <div class="search">

              {{--   <form action="{{ $link_search ?? route('get.product.list',['k' => Request::get('k')]) }}" role="search" method="GET">
                    <input type="text" name="k" value="{{ Request::get('k') }}" class="form-control" placeholder="Tìm kiếm sản phẩm ...">
                    <button type="submit" class="btnSearch">
                        <i class="fa fa-search"></i>
                        <span>Tìm kiếm</span>
                    </button>
                </form> --}}
                <style type="text/css">
                    div#search_ajax {
                        position: absolute;
                        top: 10%;
                        background: azure;
                        z-index: 9999;
                    }
                </style>
                <form autocomplete="off" action="{{ $link_search ?? route('get.product.list',['k' => Request::get('k')]) }}" role="search" method="GET">
                    <input type="text" name="k" class="form-control" id="keywords" placeholder="Tìm kiếm sản phẩm chợ xanh...">
                    <div id="search_ajax"></div>
                    <button type="submit" class="btnSearch">
                        <i class="fa fa-search"></i>
                        <span>Tìm kiếm</span>
                    </button>
                </form>
            </div>
            <ul class="right">
                <li>
                    <a href="{{ route('get.shopping.list') }}" title="Giỏ hàng">
                        <i class="la la-shopping-cart"></i>
                        <span class="text">
                            <span class="">Giỏ hàng ({{ \Cart::count() }})</span>
                            <span></span>
                        </span>
                    </a>
                </li>
                <li class="desktop">
                    <a href="tel:18006005" title="">
                        <i class="la la-phone"></i>
                        <span class="text">
                            <span class="">(8h-21h từ T2-CN)</span>
                            <span>1900.99.88.99</span>
                        </span>
                    </a>
                </li>
            </ul>

            <div id="menu-main" class="container" style="display: flex;margin-left: 1%;margin-top: 2%;" >
                <ul class="menu-list">
                    @foreach($categories as $item)
                    <li>
                        <a href="{{  route('get.category.list', $item->c_slug.'-'.$item->id) }}"
                           title="{{  $item->c_name }}" class="js-open-menu">
                            <img src="{{ asset(pare_url_file($item->c_avatar)) }}" alt="{{ $item->c_name }}">
                            <span>{{  $item->c_name }}</span>
                            @if (isset($item->children) && count($item->children))
                                <span class="fa fa-angle-right"></span>
                            @else
                                <span></span>
                            @endif
                        </a>
                        @if (isset($item->children) && count($item->children))
                        <div class="submenu">
                            <div class="group">
                                <div class="item">
                                    @foreach($item->children as $children)
                                        <a href="{{  route('get.category.list', $children->c_slug.'-'.$children->id) }}"
                                           title="{{  $children->c_name }}" class="js-open-menu">
                                            <span>{{  $children->c_name }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <div id="headersf" >
        <div class="danhmuc01" style="width: 71%; height:57px; background: beige;display: flex;">
            <div class="danhmuc02" style="width: 23%;display: flex;height:57px;background: #2196f3;align-items: center;">
                    <span  class="menu js-menu-cate " style="color: white;font-size: 20px;margin-left:10%;"><i class="fa fa-list-ul"></i>  </span>
                    <p  style="font-size: 15px;margin-left: 18px; color: white;">DANH MỤC</p>
            </div>
            <div class="danhmuc_01" style="width: 77%; height:57px; background: rgb(146, 84, 84); display: flex;">
                <ul class="danhmuc03" style="width: 100%; height:57px; background: rgb(146, 84, 84);display: flex; ">
                    <li style="width: 100%; height:57px; background:#2cbde5;display: flex;align-items: center;justify-content: space-between; ">
                        <div class="danhmuc04">
                                <a class="" href="" style="display: flex;flex-wrap: nowrap;align-items: center; font-size: 11px; font-family: "Quicksand", sans-serif;"">
                                    <img class=" ls-is-cached lazyloaded" src="https://theme.hstatic.net/1000030244/1000730923/14/service_1.png?v=3103" alt="doi tra mien phi tai nha br nhanh trong 4h" style="width: 40px; height: auto;">
                                    <span style="color: #fff;text-align: center;font-weight: 700;margin-left: 10px;">ĐỔI TRẢ MIỄN PHÍ TẠI NHÀ <br> NHANH TRONG 4H</span>
                                </a>
                        </div>
                        <div class="danhmuc04">
                            <a class="" href="#" style="display: flex;flex-wrap: nowrap;align-items: center;  font-size: 11px; font-family: "Quicksand", sans-serif;"">
                                <img class=" ls-is-cached lazyloaded" src="https://theme.hstatic.net/1000030244/1000730923/14/service_2.png?v=3103" alt="doi tra mien phi tai nha br nhanh trong 4h" style="width: 40px; height: auto;">
                                <span style="color: #fff;text-align: center;font-weight: 700;margin-left: 10px;">FREESHIP TỪ 500.000Đ</span>
                            </a>
                        </div>
                        <div class="danhmuc04">
                            <a class="" href="#" style="display: flex;flex-wrap: nowrap;align-items: center;  font-size: 11px; font-family: "Quicksand", sans-serif;"">
                                <img class=" ls-is-cached lazyloaded" src="https://theme.hstatic.net/1000030244/1000730923/14/service_3.png?v=3103" alt="doi tra mien phi tai nha br nhanh trong 4h" style="width: 40px; height: auto;">
                                <span style="color: #fff;text-align: center;font-weight: 700;margin-left: 10px;">HỆ THỐNG CỬA HÀNG</span>
                            </a>
                        </div>
                        <div class="danhmuc04">
                            <a class="" href="#" style="display: flex;flex-wrap: nowrap;align-items: center;  font-size: 11px; font-family: "Quicksand", sans-serif;"">
                                <img class=" ls-is-cached lazyloaded" src="https://theme.hstatic.net/1000030244/1000730923/14/service_4.png?v=3103" alt="doi tra mien phi tai nha br nhanh trong 4h" style="width: 40px; height: auto;">
                                <span style="color: #fff;text-align: center;font-weight: 700;margin-left: 10px;">CHƯƠNG TRÌNH </br>KH THÂN THIẾT</span>
                            </a>
                        </div>
                        <div class="danhmuc04" >
                            <a class="" href="#" style="display: flex;flex-wrap: nowrap;align-items: center;  font-size: 11px;font-family: "Quicksand", sans-serif;">
                                <img class=" ls-is-cached lazyloaded" src="/icon/recruitment.png" alt="tuyển dụng " style="width: 40px; height: auto;">
                                <span style="color: #fff;text-align: center;font-weight: 700;margin-left: 10px;">TUYỂN DỤNG</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>
