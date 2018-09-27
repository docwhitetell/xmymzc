
<section id="footers" class="page footer">
    <div class="container">
        <div class="row animation" data-animation-in="fadeInUp" data-animation-out="fadeOutUp">
            <div class="col-sm-12 col-md-12">
                <div class="footer-logo">
                    <a class="navbar-brand" href="#">微信关注</a>
                    <img src="{{config('QRCode')}}" alt="">
                </div>
            </div>

            <div class="col-sm-12 col-md-12">
                <div class="list-menu">

                    <h4>联系我们</h4>

                    <ul class="list-unstyled">
                        @foreach($contact as $con)
                            @if($con->type === 'qq')
                                <li>
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin={{$con->value}}&site=qq&menu=yes" title="{{$con->title}}">
                                        <img src="{{asset("storage/img/c1.jpg")}}" alt="">
                                    </a>
                                </li>
                            @elseif($con->type === 'text')
                                <li><a href="javascript:void(0)" title="厦门优铭众创信息科技有限公司">{{$con->value}}</a></li>
                            @elseif($con->type === 'wechat_qrcode')
                                <li><a href="javascript:void(0)"><img src="{{$con->value}}" style="max-width: 80px" alt=""></a></li>
                            @else
                                <li><a href="javascript:void(0)">{{$con->title}} &nbsp;{{$con->value}}</a></li>
                            @endif
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="col-sm-12 col-md-12">
                <div class="list-menu">

                    <h4>友情链接</h4>

                    <ul class="list-unstyled">
                        @foreach($links as $link)
                            <li><a href="{{$link->value}}" title="{{$link->title}}">{{$link->title}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>

    <div class="copyrights animation" data-animation-in="fadeInUp" data-animation-out="fadeOutUp">
        <div class="container">
            <p>{{config("COPY_RIGHT")}}</p>
            <p>{{config("ICP")}}</p>
        </div>
    </div>
</section>

{{--<footer class="footer page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="footer-logo">
                    <a class="navbar-brand" href="#">微信关注</a>
                    <img src="{{config('QRCode')}}" alt="">
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="list-menu">

                    <h4>联系我们</h4>

                    <ul class="list-unstyled">
                        @foreach($contact as $con)
                            @if($con->type === 'qq')
                                <li>
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin={{$con->value}}&site=qq&menu=yes" title="{{$con->title}}">
                                        <img src="{{asset("storage/img/c1.jpg")}}" alt="">
                                    </a>
                                </li>
                            @elseif($con->type === 'text')
                                <li><a href="javascript:void(0)" title="厦门优铭众创信息科技有限公司">{{$con->value}}</a></li>
                            @elseif($con->type === 'wechat_qrcode')
                                <li><a href="javascript:void(0)"><img src="{{$con->value}}" style="max-width: 80px" alt=""></a></li>
                            @else
                                <li><a href="javascript:void(0)">{{$con->title}} &nbsp;{{$con->value}}</a></li>
                            @endif
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="list-menu">

                    <h4>友情链接</h4>

                    <ul class="list-unstyled">
                        @foreach($links as $link)
                        <li><a href="{{$link->value}}" title="{{$link->title}}">{{$link->title}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>

    <div class="copyrights">
        <div class="container">
            <p>{{config("COPY_RIGHT")}}</p>
            <p>{{config("ICP")}}</p>
        </div>
    </div>

</footer>--}}

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>