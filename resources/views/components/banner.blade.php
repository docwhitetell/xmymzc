<section id="hero"
         class="page"
         style="{{$banner->background_type !== 'image' ? "background:".$banner->background : "background-image: url('".$banner->background."')"}}"
>
    <div class="container">
    <div class="hero-container">
        <div class="section-title text-center">
        <h2 class="animation {{$banner->title_animation_delay ? "delay-".$banner->title_animation_delay : ""}} {{$banner->title_animation_duration ? $banner->title_animation_duration : ""}}"
            style="font-size: {{$banner->title_font_size .'px'}}; color: {{$banner->title_font_color}};"
            data-animation-in="{{$banner->title_animation_in}}"
            data-animation-out="{{$banner->title_animation_out}}"
        >
            {{$banner->title}}
        </h2>
        </div>
        <img class="animation {{$banner->content_animation_delay ? "delay-".$banner->content_animation_delay : ""}} {{$banner->content_animation_duration ? $banner->content_animation_duration : ""}}"
             data-animation-in="{{$banner->content_animation_in}}"
             data-animation-out="{{$banner->content_animation_out}}"
             src="{{asset('img/banner.jpg')}}"
             alt="{{$banner->content}}"
        >
    </div>
    </div>
</section><!-- #hero -->