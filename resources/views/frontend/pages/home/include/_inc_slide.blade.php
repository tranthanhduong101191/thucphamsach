<div id="slider">
    <div class="imageSlide js-banner owl-carousel" style="height: 301px;">

            @foreach($slides as $item)
            <div>
                <a href="{{ $item->sd_link }}" title="{{ $item->sd_title }}">
                    <img alt="Đồ án tốt nghiệp" src="{{ pare_url_file($item->sd_image) }}"  style="max-width: 100%;height: 300px;" class="" />
                </a>
            </div>
        @endforeach

    </div>
    <div class="quangcao001" style="width: 100%;height: 185px;background: #f5f5f5">
        <div class="quangcaoleft">
            <img src="uploads/2023/07/banner_bottom_1.jpg" alt="" class="quangcaoleft-img">

        </div>

        <div class="quangcaoright">
            <img src="uploads/2023/07/banner_bottom_2.jpg" alt="" class="quangcaoright-img">
        </div>
    </div>
</div>
