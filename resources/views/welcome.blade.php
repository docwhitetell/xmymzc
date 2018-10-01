<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{config('APP_TITLE')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{config("SEO_KEYWORD")}}" name="keywords">
    <meta content="{{config("SEO_DESCRIPTION")}}" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('css/font.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/fullpage/fullpage.min.css')}}">
    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{asset('vendor/fullpage/vendors/easings.min.js')}}"></script>


    <!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
    <script type="text/javascript" src="{{asset('vendor/fullpage/vendors/scrolloverflow.min.js')}}"></script>
    <script src="{{asset('vendor/fullpage/fullpage.min.js')}}"></script>

    <style>
        #fp-nav ul li a span{
            background: #fff !important;
        }
    </style>
</head>

<body id="#body" style="color: #fff">

@include('layouts.header')

<div id="fullpage" style="margin-top: -40px">
    <!--==========================
  Banner Section
============================-->
@include('components.banner')

<!--==========================
  About Us Section
============================-->
@include('components.about-us')

<!--==========================
  Screenshots Section
============================-->
@include('components.example')

<!--==========================
  Screenshots Section
============================-->
@include('components.solutions')
<!--==========================
  Video Section
============================-->
{{--@include('components.video')--}}

{{--@include('team')--}}

{{--
<!--==========================
  Blog Section
============================-->
@include('components.blogs')
--}}

<!--==========================
  Newsletter Section
============================-->
@include('components.contact')

<!--==========================
  Contact Section
============================-->
@include('components.joinus')

<!--==========================
  Footer
============================-->
    @include('layouts.footer')
</div>




<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/modal-video/js/modal-video.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

<script>
    function AnimationIn() {
        var animationIn = this.getAttribute('data-animation-in');
        var animationOut = this.getAttribute('data-animation-out');
        var delay = this.getAttribute('data-delay');
        this.classList.add('animated');
        this.classList.add(animationIn);
        this.classList.remove(animationOut);
        this.style.visibility = 'visible';
    }
    function AnimationLeave() {
        var animationIn = this.getAttribute('data-animation-in');
        var animationOut = this.getAttribute('data-animation-out');
        this.classList.remove(animationIn);
        this.classList.add('animated');
        this.classList.add(animationOut);
    }

    $(function () {
        $animationEl = $('.animation');
        $animationEl.bind('onLoad',AnimationIn);
        $animationEl.bind('onLeave', AnimationLeave);
        var app = new fullpage('#fullpage', {
            //Navigation
            lockAnchors: false,
            anchors:['Home', 'AboutUs', 'Example', 'Solution', 'Contact', 'Join-Us', 'JoinAgent', 'Members', 'Templates', 'Links'],
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['首页', '关于我们', '客户案例', '企业网络解决方案', '联系我们', '加入我们','加入代理', '友情链接'],
            showActiveTooltip: false,
            slidesNavigation: false,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 1000,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 500,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            continuousHorizontal: false,
            scrollHorizontally: false,
            interlockedSlides: false,
            dragAndMove: false,
            offsetSections: false,
            resetSliders: false,
            fadingEffect: false,
            normalScrollElements: '#element1, .element2',
            scrollOverflow: false,
            scrollOverflowReset: false,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,
            bigSectionsDestination: null,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

            //Design
            controlArrows: true,
            verticalCentered: true,
            sectionsColor : [],
            paddingTop: '0em',
            paddingBottom: '10px',
            fixedElements: '#header',
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,
            parallax: false,
            parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

            //Custom selectors
            sectionSelector: '.page',
            slideSelector: '.slide',

            lazyLoading: true,

            //events
            onLeave: function(origin, destination, direction){
                $(origin.item).find('.animation').trigger('onLeave');
            },
            afterLoad: function(origin, destination, direction){
                $(destination.item).find('.animation').trigger('onLoad');
            },
            afterRender: function(){},
            afterResize: function(width, height){},
            afterResponsive: function(isResponsive){},
            afterSlideLoad: function(section, origin, destination, direction){},
            onSlideLeave: function(section, origin, destination, direction){}
        });

        //var navLinkItem = document.getElementsByClassName('nav-link-item');
        var navLinkItem = $('.nav-link-item');
        var mobileLinkItem = $('#mobile-nav').find('.nav-link-item');

        navLinkItem.bind('click', function () {
            var targetIndex = this.getAttribute('data-index') || 1;
            app.moveTo(targetIndex);
        });
        mobileLinkItem.bind('click',function () {
            var targetIndex = this.getAttribute('data-index') || 1;
            app.moveTo(targetIndex);
        });

    })



</script>

</body>
</html>
