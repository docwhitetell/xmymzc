<section id="screenshots"
         class="padd-section text-center page"
         style="{{$example->background_type !== 'image' ? "background:".$example->background : "background-image: url('".$example->background."')"}}"
>

    <div class="container">
        <div class="section-title text-center">
            <h2 class="animation {{$example->title_animation_delay ? "delay-".$example->title_animation_delay : ""}} {{$example->title_animation_duration ? $example->title_animation_duration : ""}}"
                data-animation-in="{{$example->title_animation_in}}"
                data-animation-out="{{$example->title_animation_out}}"
            >
                客户案例
            </h2>
            <p class="separator animation {{$example->desc_animation_delay ? "delay-".$example->desc_animation_delay : ""}} {{$example->desc_animation_duration ? $example->desc_animation_duration : ""}}"
               data-animation-in="{{$example->desc_animation_in}}"
               data-animation-out="{{$example->desc_animation_out}}"
            >企业微信公众号、网站、web应用、APP开发案例</p>
        </div>
    </div>

    <div class="container animation {{$example->content_animation_delay ? "delay-".$example->content_animation_delay : ""}} {{$example->content_animation_duration ? $example->content_animation_duration : ""}}"
         data-animation-in="{{$example->content_animation_in}}"
         data-animation-out="{{$example->content_animation_out}}"
    >
        <div class="owl-carousel owl-theme">
            @foreach($example_data as $item)
                <div>
                    <a href="{{$item->link}}" target="_blank" title="{{$item->title}}" style="display: block;margin: 0 auto;width:200px;height: 150px;position: relative">
                        <img style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%) " src="{{$item->poster}}" alt="{{$item->title}}">
                    </a>
                    <p style="font-size:18px;color: #fff;font-weight: 500;margin-bottom: 0;">{{$item->title}}</p>
                    <p style="color: #fff;font-weight: 400;">{{$item->description}}</p>
                </div>
            @endforeach
        </div>
    </div>

</section>