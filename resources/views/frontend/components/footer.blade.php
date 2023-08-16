<div id="footer">
    <div class="container footer">
        <div class="footer__left">
            <div class="top">
                <div class="item">
                    <div class="title">Về chúng tôi</div>
                    <ul>
                        <li>
                            <a href="{{ route('get.blog.home') }}">Bài viết</a>
                        </li>
                        <li>
                            <a href="{{ route('get.product.list') }}">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('get.register') }}">Đăng Ký</a>
                        </li>
                        <li>
                            <a href="{{ route('get.login') }}">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">Tin tức</div>
                    <ul>
                        @if (isset($menus))
                            @foreach ($menus as $menu)
                                <li>
                                    <a title="{{ $menu->mn_name }}"
                                        href="{{ route('get.article.by_menu', $menu->mn_slug . '-' . $menu->id) }}">
                                        {{ $menu->mn_name }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                        <li><a href="{{ route('get.contact') }}">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">Chính sách</div>
                    <ul>
                        <li><a href="{{ route('get.static.shopping_guide') }}">Hướng dẫn mua hàng</a></li>
                        <li><a href="{{ route('get.static.return_policy') }}">Chính sách đổi trả</a></li>
                    </ul>
                </div>
            </div>
            <div class="bot">
                <div class="social">
                    <div class="title">KẾT NỐI VỚI CHÚNG TÔI</div>
                    <p>
                        <a href="" class="fa fa fa-youtube"></a>
                        <a href="" class="fa fa-facebook-official"></a>
                        <a href="" class="fa fa-twitter"></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer__mid">
            <div class="title">Hệ thống cửa hàng</div>
            <div class="image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59624.8207429596!2d106.02126573193759!3d20.930364640461587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a51a693fdb91%3A0xb8ff5d51e5c93cb5!2zQ2jhu6MgWGFuaCBQaOG7kSBO4buRaQ!5e0!3m2!1svi!2s!4v1690009349059!5m2!1svi!2s" width="280" height="130" style="border:0;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            {{-- <a href="" title="" class="more">Xem t?t c? h? th?ng c?a hàng</a> --}}
        </div>
        <div class="footer__right">
            <div class="title">Fanpage của chúng tôis</div>
            <div class="image">
                <div class="widget-content">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fchoxanh.com.vn&tabs=timeline&width=280&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
