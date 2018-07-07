<!DOCTYPE html>
{{--<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->--}}
{{--<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->--}}
{{--<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->--}}
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
    {{--<![endif]-->--}}
    <title>
        @section('title')
            Witamy w TechWeb
        @show
    </title>

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <!--global css starts-->






    {{--<style>--}}
        {{--.dropdown-item:active{--}}
            {{--background-color: transparent !important;--}}
        {{--}--}}
        {{--.indexpage.navbar-nav >.nav-item .nav-link:hover {--}}
            {{--color: #01bc8c;--}}
        {{--}--}}
    {{--</style>--}}
    <!--end of global css-
    <!--page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>

    <!-- script
    ================================================== -->
    {{--<script src="js/modernizr.js"></script>--}}
    {{--<script src="js/pace.min.js"></script>--}}



<body id="top">

<!-- header
================================================== -->
<header>

    <div class="header-logo">
        <a href="index.html">Infinity</a>
    </div>

    <a id="header-menu-trigger" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>

    <nav id="menu-nav-wrap">

        <a href="#0" class="close-button" title="close"><span>Close</span></a>

        <h3>Infinity.</h3>

        <ul class="nav-list">
            <li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
            <li><a class="smoothscroll" href="#about" title="">About</a></li>
            <li><a class="smoothscroll" href="#services" title="">Services</a></li>
            <li><a class="smoothscroll" href="#portfolio" title="">Works</a></li>
            <li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
        </ul>

        <p class="sponsor-text">
            Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">DreamHost</a>.
            Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
            <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
        </p>

        <ul class="header-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-behance"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </li>
        </ul>

    </nav>  <!-- end #menu-nav-wrap -->

</header> <!-- end header -->

<!-- //Header End -->




<!-- slider / breadcrumbs section -->
@yield('top')

<!-- Content -->
@yield('content')

<!-- Footer Section Start -->
<!-- footer
================================================== -->
<footer>
    <div class="footer-main">

        <div class="row">

            <div class="col-five tab-full footer-about">

                <h4 class="h05">Infinity.</h4>

                <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.</p>

            </div> <!-- end footer-about -->

            <div class="col-three tab-full footer-social">

                <h4 class="h05">Follow Us.</h4>

                <ul class="list-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Dribble</a></li>
                </ul>

            </div> <!-- end footer-social -->

            <div class="col-four tab-full footer-subscribe end">

                <h4 class="h05">Get Notified.</h4>

                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa.</p>

                <div class="subscribe-form">

                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required="">

                        <!-- <input type="submit" name="subscribe" > -->
                        <button><i class="icon-mail"></i></button>

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>

                </div>

            </div> <!-- end footer-subscribe -->

        </div> <!-- end row -->

    </div> <!-- end footer-main -->

    {{--<div class="footer-bottom">--}}

        {{--<div class="row">--}}

            {{--<div class="col-twelve">--}}
                {{--<div class="copyright">--}}
                    {{--<span>© Copyright Infinity 2016.</span>--}}
                    {{--<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</div> <!-- end footer-bottom -->

</footer>


{{--<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-original-title="Return to top"--}}
   {{--data-toggle="tooltip" data-placement="left">--}}
    {{--<i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>--}}
{{--</a>--}}

    <a id="back-to-top" class="smoothscroll btn btn-primary btn-lg back-to-top" title="Back to Top" href="#top" role="button" data-original-title="Return to top" data-toggle="tooltip" data-placement="left">
        {{--<i class="fa fa-long-arrow-up" aria-hidden="true"></i>--}}

        <i class="livicon" data-name="plane-up" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>



<!--global js starts-->
<script type="text/javascript" src="{{ asset('assets/js/infinityDown.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>

<!--global js end-->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
{{--<script>--}}
    {{--$(".navbar-toggler-icon").click(function () {--}}
        {{--$(this).closest('.navbar').find('.collapse').toggleClass('collapse1')--}}
    {{--})--}}

    {{--$(function () {--}}
        {{--$('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');--}}
    {{--})--}}
{{--</script>--}}
</body>

</html>
