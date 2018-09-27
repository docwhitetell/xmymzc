<section id="contactus"
         class="about-us padd-section page"
         style="{{$solutions->background_type !== 'image' ? "background:".$solutions->background : "background-image: url('".$solutions->background."')"}}"
>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="animation"
                data-animation-in="fadeInDown"
                data-animation-out="fadeOutDown"
            >联系我们</h2>
            <p class="separator animation" data-animation-in="fadeInDown" data-animation-out="fadeOutDown">Contact US</p>
        </div>
        <div class="row justify-content-center">

            <div class="col-sm-12 animation" data-animation-in="fadeInRight" data-animation-out="fadeOutRight">
                <img src="{{asset("img/location.jpg")}}" alt="">
            </div>

            <div class="col-sm-12 animation animation" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
                <h3 style="font-weight: 500; color: inherit;text-align: center">服务热线</h3>
                <p style="color: inherit;text-align: center">18020709391</p>
                <ul class="contact-detail" style="margin:0;padding: 0">
                    <li>QQ:3046238637 </li>
                    <li>微信：18020709391</li>
                    <li>
                        邮箱：3046238637@qq.com
                    </li>
                    <li>公司地址：厦门市湖里区高新技术园区汇金湖里大厦一楼funwork</li>
                </ul>
            </div>
        </div>
    </div>
</section>