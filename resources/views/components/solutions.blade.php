<section id="solutions"
         class="padd-section text-center page"
         style="{{$solutions->background_type !== 'image' ? "background:".$solutions->background : "background-image: url('".$solutions->background."')"}}"
>

    <div class="container">
        <div class="section-title text-center">
            <h2 class="animation {{$solutions->title_animation_delay ? "delay-".$solutions->title_animation_delay : ""}} {{$solutions->title_animation_duration ? $solutions->title_animation_duration : ""}}"
                data-animation-in="{{$solutions->title_animation_in}}"
                data-animation-out="{{$solutions->title_animation_out}}"
                style="font-size: {{$solutions->title_font_size .'px'}}; color: {{$solutions->title_font_color}};"
            >
                企业网络解决方案
            </h2>
            <p class="separator animation {{$solutions->desc_animation_delay ? "delay-".$solutions->desc_animation_delay : ""}} {{$solutions->desc_animation_duration ? $solutions->title_animation_duration : ""}}"
               data-animation-in="{{$solutions->desc_animation_in}}"
               data-animation-out="{{$solutions->desc_animation_out}}"
               style="font-weight: 400;font-size: {{$solutions->desc_font_size .'px'}}; color: {{$solutions->desc_font_color}};"
            >企业微信公众号、网站、web应用、APP开发案例</p>
        </div>
    </div>

    <div class="container animation {{$solutions->content_animation_delay ? "delay-".$solutions->content_animation_delay : ""}} {{$solutions->content_animation_duration ? $solutions->content_animation_duration : ""}}"
         data-animation-in="{{$solutions->content_animation_in}}"
         data-animation-out="{{$solutions->content_animation_out}}"
    >
        <div class="owl-carousel owl-theme">
            @foreach($solutions_data as $item)
                <div>
                    <a href="{{$item->link}}" target="_blank" title="{{$item->title}}" style="display: block;margin: 0 auto;width:200px;height: 150px;position: relative">
                        <img style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%) " src="{{$item->poster}}" alt="{{$item->title}}">
                    </a>
                    <p style="font-size:{{$solutions->content_font_size.'px'}};color: {{$solutions->content_font_color}};font-weight: 500;margin-bottom: 0;">{{$item->title}}</p>
                    <p style="font-size:{{$solutions->content_font_size.'px'}};color: {{$solutions->content_font_color}};font-weight: 400; transform: scale(0.8)">{{$item->description}}</p>
                </div>
            @endforeach
        </div>
    </div>

</section>