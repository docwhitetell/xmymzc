<section id="joinus"
         class="padd-section page"
         style="{{$join_us->background_type !== 'image' ? "background:".$join_us->background : "background-image: url('".$join_us->background."')"}}"
>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="animation {{$join_us->title_animation_delay ? "delay-".$join_us->title_animation_delay : ""}} {{$join_us->title_animation_duration ? $join_us->title_animation_duration : ""}}"
                data-animation-in="{{$join_us->title_animation_in}}"
                data-animation-out="{{$join_us->title_animation_out}}"
                style="font-size: {{$join_us->title_font_size .'px'}}; color: {{$join_us->title_font_color}};"
            >
                加入我们
            </h2>
            <p class="separator animation {{$join_us->desc_animation_delay ? "delay-".$join_us->desc_animation_delay : ""}} {{$join_us->desc_animation_duration ? $join_us->desc_animation_duration : ""}}"
               data-animation-in="{{$join_us->desc_animation_in}}"
               data-animation-out="{{$join_us->desc_animation_out}}"
               style="font-size: {{$join_us->desc_font_size .'px'}}; color: {{$join_us->desc_font_color}};"
            >
                {{$join_us->description}}
            </p>
        </div>
        <div class="row justify-content-center animation {{$join_us->content_animation_delay ? "delay-".$join_us->content_animation_delay : ""}} {{$join_us->content_animation_duration ? $join_us->content_animation_duration : ""}}"
             data-animation-in="{{$join_us->content_animation_in}}"
             data-animation-out="{{$join_us->content_animation_out}}"
        >
            <div class="col-lg-3 col-md-4">
            </div>

            <div class="col-lg-5 col-md-8">
                <ul class="list-unstyled" style="margin: 0 20px;font-size: {{$join_us->content_font_size .'px'}}; color: {{$join_us->content_font_color}};">
                    <li style="font-size: inherit;color: inherit">1.年度评优、绩效奖金、长期激励、人才推荐奖、专利基金等</li>
                    <li style="font-size: inherit;color: inherit">2.按国家规定为每个员工缴纳五险一金</li>
                    <li style="font-size: inherit;color: inherit">3.温馨假别 带薪年假、带薪病假，享受国家规定各种带薪假种</li>
                    <li style="font-size: inherit;color: inherit">4.弹性工作制，每周5天7个小时，按照国家规定实行假期制度，加班另有加班补贴</li>
                    <li style="font-size: inherit;color: inherit">5.员工活动 篮球、羽毛球、瑜伽、电影， 公司赠送生日蛋糕，生日礼物，小伙伴一起为你开个快乐的生日趴</li>
                    <li style="font-size: inherit;color: inherit">6.工作环境优美，精心准备下午茶，保证下午茶不重样。公司会有不定期的奖励或者活动。中秋博饼，年度尾牙宴</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- #contact -->

<section id="join-agent"
         class="padd-section page"
         style="{{$join_us->background_type !== 'image' ? "background:".$join_us->background : "background-image: url('".$join_us->background."')"}}"
>

    <div class="container">
        <div class="section-title text-center">
            <h2 class="animation {{$join_us->title_animation_delay ? "delay-".$join_us->title_animation_delay : ""}} {{$join_us->title_animation_duration ? $join_us->title_animation_duration : ""}}"
                data-animation-in="{{$join_us->title_animation_in}}"
                data-animation-out="{{$join_us->title_animation_out}}"
                style="font-size: {{$join_us->title_font_size .'px'}}; color: {{$join_us->title_font_color}};"
            >
                加入代理
            </h2>
            <p class="separator"></p>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-5 col-md-8 animation delay-1s"
                 data-animation-in="fadeInUp"
                 data-animation-out="fadeOutUp">
                <div class="form">
                    <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="姓名" data-rule="minlen:2" data-msg="不得少于2个字符！" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="邮箱" data-rule="email" data-msg="请输入有效的邮箱地址" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="电话" data-rule="minlen:11" data-msg="请输入11位手机号" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="" placeholder="留言内容"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-default">提交</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- #contact -->