<section id="hero"
         class="page"
         style="{{$banner->background_type !== 'image' ? "background:".$banner->background : "background-image: url('".$banner->background."')"}}"
>
    <div class="hero-container">
        <h1 class="animation {{$banner->title_animation_delay ? "delay-".$banner->title_animation_delay : ""}} {{$banner->title_animation_duration ? $banner->title_animation_duration : ""}}"
            data-animation-in="{{$banner->title_animation_in}}"
            data-animation-out="{{$banner->title_animation_out}}"
        >
            {{$banner->title}}
        </h1>
        <h2></h2>
        <img class="animation {{$banner->content_animation_delay ? "delay-".$banner->content_animation_delay : ""}} {{$banner->content_animation_duration ? $banner->content_animation_duration : ""}}"
             data-animation-in="{{$banner->content_animation_in}}"
             data-animation-out="{{$banner->content_animation_out}}"
             src="{{asset('img/banner.jpg')}}"
             alt="{{$banner->content}}"
        >
    </div>
</section><!-- #hero -->