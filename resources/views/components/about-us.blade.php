<section id="about-us"
         class="about-us padd-section page"
         style="{{$about_us->background_type !== 'image' ? "background:".$about_us->background : "background-image: url('".$about_us->background."')"}}"
>
    <div class="container">
        <div class="section-title text-center">
            <h2 id="about-us-title"
                style=" font-size: {{$about_us->title_font_size .'px'}}; color: {{$about_us->title_font_color}};"
                class="animation {{$about_us->title_animation_delay ? "delay-".$about_us->title_animation_delay : ""}} {{$about_us->title_animation_duration ? $about_us->title_animation_duration : ""}}"
                data-animation-in="{{$about_us->title_animation_in}}"
                data-animation-out="{{$about_us->title_animation_out}}"
            >{{$about_us->title}}</h2>
            <p class="separator"></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="about-content">
                    <p style="text-align: center; font-size: {{$about_us->desc_font_size.'px'}}; color: {{$about_us->desc_font_color}};"
                       class="separator animation {{$about_us->desc_animation_delay ? "delay-".$about_us->desc_animation_delay : ""}} {{$about_us->desc_animation_duration ? $about_us->desc_animation_duration : ""}}"
                       data-animation-in="{{$about_us->desc_animation_in}}"
                       data-animation-out="{{$about_us->desc_animation_out}}"
                    >
                        {{$about_us->description}}
                    </p>

                    <p style="text-align: center; font-size: {{$about_us->content_font_size.'px'}}; color: {{$about_us->content_font_color}};"
                       class="separator animation {{$about_us->content_animation_delay ? "delay-".$about_us->content_animation_delay : ""}} {{$about_us->content_animation_duration ? $about_us->content_animation_duration : ""}}"
                       data-animation-in="{{$about_us->content_animation_in}}"
                       data-animation-out="{{$about_us->content_animation_out}}"
                    >
                        {{$about_us->content}}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>