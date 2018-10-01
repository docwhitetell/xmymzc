<section id="contactus"
         class="about-us padd-section page"
         style="{{$contact_us->background_type !== 'image' ? "background:".$contact_us->background : "background-image: url('".$contact_us->background."')"}}"
>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="animation {{$contact_us->title_animation_delay ? "delay-".$contact_us->title_animation_delay : ""}} {{$contact_us->title_animation_duration ? $contact_us->title_animation_duration : ""}}"
                data-animation-in="{{$contact_us->title_animation_in}}"
                data-animation-out="{{$contact_us->title_animation_out}}"
                style="font-size: {{$contact_us->title_font_size .'px'}}; color: {{$contact_us->title_font_color}};"
            >联系我们</h2>
            <p class="separator animation {{$contact_us->desc_animation_delay ? "delay-".$contact_us->desc_animation_delay : ""}} {{$contact_us->desc_animation_duration ? $contact_us->desc_animation_duration : ""}}"
               data-animation-in="{{$contact_us->desc_animation_in}}"
               data-animation-out="{{$contact_us->desc_animation_out}}"
               style="font-size: {{$contact_us->desc_font_size .'px'}}; color: {{$contact_us->desc_font_color}};"
            >
                {{$contact_us->description}}
            </p>
        </div>
        <div class="row justify-content-center">

            <div class="col-sm-12 animation animation {{$contact_us->content_animation_delay ? "delay-".$contact_us->content_animation_delay : ""}} {{$contact_us->content_animation_duration ? $contact_us->content_animation_duration : ""}}"
                 data-animation-in="{{$contact_us->content_animation_in}}"
                 data-animation-out="{{$contact_us->content_animation_out}}"
            >
                <img style="max-width: 90vw" src="{{asset("img/location.jpg")}}" alt="">
            </div>

            <div class="col-sm-12 animation {{$contact_us->content_animation_delay ? "delay-".$contact_us->content_animation_delay : ""}} {{$contact_us->content_animation_duration ? $contact_us->content_animation_duration : ""}}"
                 data-animation-in="{{$contact_us->content_animation_in}}"
                 data-animation-out="{{$contact_us->content_animation_out}}"
                 style="margin-top: 20px;font-size: {{$contact_us->content_font_size .'px'}}; color: {{$contact_us->content_font_color}};"
            >
                <ul class="contact-detail" style="margin:0;padding: 0;color: inherit; font-size: inherit">
                    <li style="color: inherit; font-size: inherit">服务热线:18020709391</li>
                    <li style="color: inherit; font-size: inherit">QQ:3046238637 </li>
                    <li style="color: inherit; font-size: inherit">微信：18020709391</li>
                    <li style="color: inherit; font-size: inherit">邮箱：3046238637@qq.com</li>
                    <li style="color: inherit; font-size: inherit">公司地址：厦门市湖里区高新技术园区汇金湖里大厦一楼funwork</li>
                </ul>
            </div>
        </div>
    </div>
</section>