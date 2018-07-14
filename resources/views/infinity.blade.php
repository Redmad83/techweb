<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Infinity</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    {{--<link rel="stylesheet" href="css/bootstrap.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">--}}
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    {{--<link rel="stylesheet" href="css/animate.min.css">--}}

    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>--}}

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script>
        // object.reload(forcedReload);
        // window.location.reload(true);

        window.addEventListener("beforeunload", function (event) {
            alert("jejku")
        });

        // window.beforeunload(
        //     alert(location.href)
        // )



    </script>
    <style>
        /*.box{*/
            /*margin-top:53px !important;*/
        /*}*/

        /*.livicon {*/
            /*content: attr(data-icon);*/
            /*font-family: 'FontomasCustomRegular';*/
            /*color: #3c8dbc;*/
            /*position: absolute;*/
            /*left: 8px;*/
            /*top: 41px;*/
            /*width: 30px*/
        /*}*/
        /*.box-icon {*/
            /*background-color : transparent;*/
            /*border           : 1px solid #01bc8c;*/
            /*border-radius    : 50%;*/
            /*display          : table;*/
            /*height           : 80px;*/
            /*margin           : 0 auto;*/
            /*width            : 80px;*/
            /*margin-top       : -61px;*/
        /*}*/
    </style>



</head>

<body id="top">

<!-- header
================================================== -->
<header>

    <a id="header-menu-trigger" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>

    <nav id="menu-nav-wrap">

        <a href="#0" class="close-button" title="close"><span>Close</span></a>

        <h3>TechWeb</h3>

        <ul class="nav-list">
            <li class="current"><a class="smoothscroll" href="#home" title="">Start</a></li>
            <li><a class="smoothscroll" href="#about" title="">o Nas</a></li>
            <li><a class="smoothscroll" href="#services" title="">Oferta</a></li>
            <li><a class="smoothscroll" href="#technologies" title="">Technologie</a></li>
            <li><a class="smoothscroll" href="#contact" title="">Kontakt</a></li>
        </ul>

        <ul class="header-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>

        </ul>

    </nav>  <!-- end #menu-nav-wrap -->
    <div class="header-logo">
        <a href="{{ route('infinity') }}">TechWeb</a>
    </div>
</header> <!-- end header -->


<!-- home
================================================== -->
<section id="home">

    <div class="overlay"></div>

    <div class="home-content-table">
        <div class="home-content-tablecell">
            <div class="row">
                <div class="col-twelve">

                    <h3 class="animate-this-fadeInRight">Tech<span class="orange">Web</span></h3>
                    <h1 class="animate-this-fadeInLeft">
                        Projektujemy Strony <br> Internetowe  <br>
                        skrojone na miarę.
                    </h1>

                    <div class="more animate-this-rollIn">
                        <a class="smoothscroll button stroke" href="#about">
                            Dowiedz się Więcej
                        </a>
                    </div>

                </div> <!-- end col-twelve -->

            </div> <!-- end row -->

        </div> <!-- end home-content-tablecell -->
    </div> <!-- end home-content-table -->

    {{--<div class="scrolldown">--}}
        {{--<a href="#about" class="scroll-icon smoothscroll">--}}
            {{--Scroll Down--}}
            {{--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>--}}
        {{--</a>--}}
    {{--</div>--}}
    <div>
        <ul class="home-social-list">
            <li class="animate-intro">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li class="animate-intro">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>

        </ul> <!-- end home-social-list -->
    </div>



</section> <!-- end home -->


<!-- about
================================================== -->
<section id="about">

    <div class="row about-wrap">

        <div class="col-full">
        {{--<div class="col-full wow bounceInUp" data-wow-duration="3.5s" style="--}}
    {{--visibility: visible;--}}
    {{--animation-duration: 3.5s;--}}
    {{--animation-name: bounceInUp;--}}
{{--">--}}

            {{--<div class="about-profile-bg"></div>--}}
            <i class="livicon icon" data-name="users" data-size="55" data-loop="true" data-c="#ff6600"
               data-hc="#ff6600"></i>
            <div class="intro">
                <h3 class="animate-this">About Us</h3>
                <p class="lead animate-this"><span>TechWeb</span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum lobortis pretium. Suspendisse nunc ipsum,
                    dictum et maximus nec, iaculis sed massa.</p>
            </div>

        </div> <!-- end col-full  -->
    </div> <!-- end about-wrap  -->



</section> <!-- end about -->
{{--<div class="scrolldown">--}}
    {{--<a href="#services" class="scroll-icon smoothscroll">--}}
        {{--Scroll Down--}}
        {{--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>--}}
    {{--</a>--}}
{{--</div>--}}

<!-- about
================================================== -->
<!-- services
================================================== -->
<section id="services">

    <div class="overlay"></div>
    <div class="gradient-overlay"></div>

    <div class="row narrow section-intro with-bottom-sep animate-this">
        <div class="col-full">

            <h3>Services</h3>
            <h1>What We Do.</h1>

            <p class="lead">Lorem ipsum Elit ut consequat veniam eu nulla nulla reprehenderit reprehenderit sit velit in cupidatat ex aliquip ut cupidatat Excepteur tempor id irure sed dolore sint sunt voluptate ullamco nulla qui Duis qui culpa voluptate enim ea aute qui veniam in irure et nisi nostrud deserunt est officia minim.</p>

        </div> <!-- end col-full -->
    </div> <!-- end row -->

    <div class="row services-content">

        <div class="services-list block-1-2 block-tab-full group">

            <div class="bgrid service-item animate-this-bounceInLeft">


                <div class="service-content">
                   <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#ff6600"
                                          data-hc="#ff6600"></i>
                    <h3 class="h05">Branding</h3>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                </div>

            </div> <!-- end bgrid -->

            <div class="bgrid service-item animate-this-bounceInRight">

                <span class="icon"><i class="icon-earth"></i></span>

                <div class="service-content">
                    <h3 class="h05">Web Design</h3>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                </div>

            </div> <!-- end bgrid -->
        </div> <!-- end services-list -->

        <div class="services-list block-1-2 block-tab-full group">

            <div class="bgrid service-item animate-this-bounceInLeft">

                <span class="icon"><i class="icon-lego-block"></i></span>

                <div class="service-content">
                    <h3 class="h05">Web Development</h3>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                </div>

            </div> <!-- end bgrid -->

            <div class="bgrid service-item animate-this-bounceInRight">

                <span class="icon"><i class="icon-megaphone"></i></span>

                <div class="service-content">
                    <h3 class="h05">Marketing</h3>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                </div>

            </div> <!-- end bgrid -->

        </div> <!-- end services-list -->

        <div class="services-list block-1-2 block-tab-full group">

            <div class="bgrid service-item animate-this-bounceInLeft">

                <span class="icon"><i class="icon-lego-block"></i></span>

                <div class="service-content">
                    <h3 class="h05">Web Development</h3>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                </div>

            </div> <!-- end bgrid -->

            <div class="bgrid service-item animate-this-bounceInRight">

                <span class="icon"><i class="icon-megaphone"></i></span>

                <div class="service-content">
                    <h3 class="h05">Marketing</h3>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                </div>

            </div> <!-- end bgrid -->

        </div> <!-- end services-list -->

    </div> <!-- end services-content -->

</section> <!-- end services -->

<!-- technologies
================================================== -->

{{--<section id="technologies">--}}

    {{--<div class="overlay"></div>--}}
    {{--<div class="gradient-overlay"></div>--}}

    {{--<div class="row narrow section-intro with-bottom-sep animate-this">--}}
        {{--<div class="col-full">--}}

            {{--<h3>Services</h3>--}}
            {{--<h1>What We Do.</h1>--}}

            {{--<p class="lead">Lorem ipsum Elit ut consequat veniam eu nulla nulla reprehenderit reprehenderit sit velit in cupidatat ex aliquip ut cupidatat Excepteur tempor id irure sed dolore sint sunt voluptate ullamco nulla qui Duis qui culpa voluptate enim ea aute qui veniam in irure et nisi nostrud deserunt est officia minim.</p>--}}

        {{--</div> <!-- end col-full -->--}}
    {{--</div> <!-- end row -->--}}

    {{--<div class="row services-content">--}}

        {{--<div class="services-list block-1-2 block-tab-full group">--}}

            {{--<div class="bgrid service-item animate-this-bounceInLeft">--}}


                {{--<div class="service-content">--}}
                    {{--<i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#ff6600"--}}
                       {{--data-hc="#ff6600"></i>--}}
                    {{--<h3 class="h05">Branding</h3>--}}

                    {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div> <!-- end bgrid -->--}}

            {{--<div class="bgrid service-item animate-this-bounceInRight">--}}

                {{--<span class="icon"><i class="icon-earth"></i></span>--}}

                {{--<div class="service-content">--}}
                    {{--<h3 class="h05">Web Design</h3>--}}

                    {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div> <!-- end bgrid -->--}}
        {{--</div> <!-- end services-list -->--}}

    {{--</div> <!-- end services-content -->--}}

    {{--<div class="scrolldown">--}}
    {{--<a href="#portfolio" class="scroll-icon smoothscroll">--}}
    {{--Scroll Down--}}
    {{--<i class="fa fa-long-arrow-right" aria-hidden="true"></i>--}}
    {{--</a>--}}
    {{--</div>--}}

    {{--<div class="row services-content">--}}

        {{--<div class="services-list block-1-2 block-tab-full group">--}}

            {{--<div class="bgrid service-item animate-this-bounceInLeft">--}}

                {{--<span class="icon"><i class="icon-lego-block"></i></span>--}}

                {{--<div class="service-content">--}}
                    {{--<h3 class="h05">Web Development</h3>--}}

                    {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div> <!-- end bgrid -->--}}

            {{--<div class="bgrid service-item animate-this-bounceInRight">--}}

                {{--<span class="icon"><i class="icon-megaphone"></i></span>--}}

                {{--<div class="service-content">--}}
                    {{--<h3 class="h05">Marketing</h3>--}}

                    {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div> <!-- end bgrid -->--}}

        {{--</div> <!-- end services-list -->--}}

    {{--</div> <!-- end services-content -->--}}

{{--</section> <!-- end services -->--}}

<!-- technologies
================================================== -->
<!-- portfolio
================================================== -->
<section id="portfolio">

    {{--<div class="overlay"></div>--}}
    <div class="overlay intro-wrap">

        <div class="row narrow section-intro with-bottom-sep animate-this">
            <div class="col-twelve">
                <h3>Showcase</h3>
                <h1>See Our Featured Projects.</h1>

                <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div> <!-- end row section-intro -->

    </div> <!-- end intro-wrap -->

    <div class="row portfolio-content">
        <div class="col-twelve">
            <div id="folio-wrap" class="bricks-wrapper">

                <ul class="row list-unstyled brick">

                <li class="col-four">
                    <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-shutterbug.jpg" data-sub-html="#01" >
                        <a href="#" class="overlay">
                            <img src="images/portfolio/yellowwall.jpg" alt="Skaterboy">
                            <div class="item-text">
	                     	<span class="folio-types">
		     					      Web Development
		     					   </span>
                                <h3 class="folio-title">Shutterbug</h3>
                            </div>
                        </a>
                        <a href="https://www.behance.net/" class='details-link' title="details">
                            <i class="icon-link"></i>
                        </a>
                    </div> <!-- end item-wrap -->

                    <div id="01" class='hide'>
                        <h4>Shutterbug</h4>
                        <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                    </div>
                </li> <!-- end folio-item -->

                <li class="col-four">
                    <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-yellowwall.jpg" data-sub-html="#02">
                        <a href="#" class="overlay">
                            <img src="images/portfolio/yellowwall.jpg" alt="Shutterbug">
                            <div class="item-text">
	                     	<span class="folio-types">
		     					      Marketing
		     					   </span>
                                <h3 class="folio-title">Yellow Wall</h3>
                            </div>
                        </a>
                        <a href="https://www.behance.net/" class='details-link' title="details">
                            <i class="icon-link"></i>
                        </a>
                    </div> <!-- end item-wrap -->

                    <div id="02" class='hide'>
                        <h4>Yellow Wall</h4>
                        <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                    </div>
                </li> <!-- end folio-item -->

                <li class="col-four">
                    <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-architecture.jpg" data-sub-html="#03" >
                        <a href="#" class="overlay">
                            <img src="images/portfolio/architecture.jpg" alt="Explore">
                            <div class="item-text">
		     					   <span class="folio-types">
		     					      Web Design
		     					   </span>
                                <h3 class="folio-title">Architecture</h3>
                            </div>
                        </a>
                        <a href="https://www.behance.net/" class='details-link' title="details">
                            <i class="icon-link"></i>
                        </a>
                    </div> <!-- end item-wrap -->

                    <div id="03" class='hide'>
                        <h4>Architecture</h4>
                        <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                    </div>
                </li> <!-- end folio-item -->

                <li class="col-four">
                    <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-shutterbug.jpg" data-sub-html="#01" >
                        <a href="#" class="overlay">
                            <img src="images/portfolio/yellowwall.jpg" alt="Skaterboy">
                            <div class="item-text">
                        <span class="folio-types">
                                  Web Development
                               </span>
                                <h3 class="folio-title">Shutterbug</h3>
                            </div>
                        </a>
                        <a href="https://www.behance.net/" class='details-link' title="details">
                            <i class="icon-link"></i>
                        </a>
                    </div> <!-- end item-wrap -->

                    <div id="01" class='hide'>
                        <h4>Shutterbug</h4>
                        <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                    </div>
                </li> <!-- end folio-item -->

                <li class="col-four">
                    <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-yellowwall.jpg" data-sub-html="#02">
                        <a href="#" class="overlay">
                            <img src="images/portfolio/yellowwall.jpg" alt="Shutterbug">
                            <div class="item-text">
                        <span class="folio-types">
                                  Marketing
                               </span>
                                <h3 class="folio-title">Yellow Wall</h3>
                            </div>
                        </a>
                        <a href="https://www.behance.net/" class='details-link' title="details">
                            <i class="icon-link"></i>
                        </a>
                    </div> <!-- end item-wrap -->

                    <div id="02" class='hide'>
                        <h4>Yellow Wall</h4>
                        <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                    </div>
                </li> <!-- end folio-item -->

                <li class="col-four">
                    <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-architecture.jpg" data-sub-html="#03" >
                        <a href="#" class="overlay">
                            <img src="images/portfolio/architecture.jpg" alt="Explore">
                            <div class="item-text">
                               <span class="folio-types">
                                  Web Design
                               </span>
                                <h3 class="folio-title">Architecture</h3>
                            </div>
                        </a>
                        <a href="https://www.behance.net/" class='details-link' title="details">
                            <i class="icon-link"></i>
                        </a>
                    </div> <!-- end item-wrap -->

                    <div id="03" class='hide'>
                        <h4>Architecture</h4>
                        <p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
                    </div>
                </li> <!-- end folio-item -->

                {{--<div class="brick folio-item">--}}
                    {{--<div class="item-wrap animate-this"  data-src="images/portfolio/gallery/g-minimalismo.jpg"  data-sub-html="#04" >--}}
                        {{--<a href="#" class="overlay">--}}
                            {{--<img src="images/portfolio/minimalismo.jpg" alt="Minimalismo">--}}
                            {{--<div class="item-text">--}}
		     					   {{--<span class="folio-types">--}}
		     					      {{--Web Design--}}
		     					   {{--</span>--}}
                                {{--<h3 class="folio-title">Minimalismo</h3>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a href="https://www.behance.net/" class='details-link' title="details">--}}
                            {{--<i class="icon-link"></i>--}}
                        {{--</a>--}}
                    {{--</div> <!-- end item-wrap -->--}}

                    {{--<div id="04" class='hide'>--}}
                        {{--<h4>Minimalismo</h4>--}}
                        {{--<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>--}}
                    {{--</div>--}}
                {{--</div> <!-- end folio-item -->--}}

                {{--<div class="brick folio-item">--}}
                    {{--<div class="item-wrap animate-this"  data-src="images/portfolio/gallery/g-skaterboy.jpg"  data-sub-html="#05" >--}}
                        {{--<a href="#" class="overlay">--}}
                            {{--<img src="images/portfolio/skaterboy.jpg" alt="Bicycle">--}}
                            {{--<div class="item-text">--}}
		     					   {{--<span class="folio-types">--}}
		     					      {{--Branding--}}
		     					   {{--</span>--}}
                                {{--<h3 class="folio-title">Skaterboy</h3>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a href="https://www.behance.net/" class='details-link' title="details">--}}
                            {{--<i class="icon-link"></i>--}}
                        {{--</a>--}}
                    {{--</div> <!-- end item-wrap -->--}}

                    {{--<div id="05" class='hide'>--}}
                        {{--<h4>Skaterboy</h4>--}}
                        {{--<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>--}}
                    {{--</div>--}}
                {{--</div> <!-- end folio-item -->--}}

                {{--<div class="brick folio-item">--}}
                    {{--<div class="item-wrap animate-this"  data-src="images/portfolio/gallery/g-salad.jpg"  data-sub-html="#06">--}}
                        {{--<a href="#" class="overlay">--}}
                            {{--<img src="images/portfolio/salad.jpg" alt="Salad">--}}
                            {{--<div class="item-text">--}}
		     					   {{--<span class="folio-types">--}}
		     					      {{--Branding--}}
		     					   {{--</span>--}}
                                {{--<h3 class="folio-title">Salad</h3>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<a href="https://www.behance.net/" class='details-link' title="details">--}}
                            {{--<i class="icon-link"></i>--}}
                        {{--</a>--}}
                    {{--</div> <!-- end item-wrap -->--}}

                    {{--<div id="06" class='hide'>--}}
                        {{--<h4>Salad</h4>--}}
                        {{--<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="www.behance.net">Details</a></p>--}}
                    {{--</div>--}}
                {{--</div> <!-- end folio-item -->--}}
                </ul>
            </div> <!-- end folio-wrap -->
        </div> <!-- end twelve -->
    </div> <!-- end portfolio-content -->

</section>  <!-- end portfolio -->

<!-- stats
================================================== -->
<section id="clients">

    <div class="row animate-this">
        <div class="col-twelve">

            <div class="client-lists owl-carousel">
                <div><img src="images/clients/mozilla.png" alt=""></div>
                <div><img src="images/clients/bower.png" alt=""></div>
                <div><img src="images/clients/codepen.png" alt=""></div>
                <div><img src="images/clients/envato.png" alt=""></div>
                <div><img src="images/clients/firefox.png" alt=""></div>
                <div><img src="images/clients/grunt.png" alt=""></div>
                <div><img src="images/clients/evernote.png" alt=""></div>
                <div><img src="images/clients/github.png" alt=""></div>
                <div><img src="images/clients/joomla.png" alt=""></div>
                <div><img src="images/clients/jQuery.png" alt=""></div>
                <div><img src="images/clients/wordpress.png" alt=""></div>
            </div>

        </div> <!-- end col-twelve -->
    </div> <!-- end row -->

</section> <!-- end clients -->

<!-- Testimonials Section
================================================== -->
<section id="testimonials">

    <div class="row">
        <div class="col-twelve">
            <h2 class="animate-this">What They Say About Us.</h2>
        </div>
    </div>

    <div class="row flex-container">

        <div id="testimonial-slider" class="flex-slider animate-this">

            <ul class="slides">

                <li>
                    <p>
                        Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                        to do what you believe is great work. And the only way to do great work is to love what you do.
                        If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                    </p>

                    <div class="testimonial-author">
                        <img src="images/avatars/user-02.jpg" alt="Author image">
                        <div class="author-info">
                            Steve Jobs
                            <span class="position">CEO, Apple.</span>
                        </div>
                    </div>
                </li> <!-- end slide -->

                <li>
                    <p>
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                        nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                    </p>

                    <div class="testimonial-author">
                        <img src="images/avatars/user-03.jpg" alt="Author image">
                        <div class="author-info">
                            John Doe
                            <span>CEO, ABC Corp.</span>
                        </div>
                    </div>
                </li> <!-- end slide -->

            </ul> <!-- end slides -->

        </div> <!-- end testimonial-slider -->

    </div> <!-- end flex-container -->

</section> <!-- end testimonials -->

<!-- contact
================================================== -->
<section id="contact">

    <div class="overlay"></div>

    <div class="row narrow section-intro with-bottom-sep animate-this">
        <div class="col-twelve">
            <h3>Contact</h3>
            <h1>Get In Touch.</h1>

            <p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
        </div>
    </div> <!-- end section-intro -->

    <div class="row contact-content">

        <div class="col-seven tab-full animate-this">

            <h5>Send Us A Message</h5>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post">

                <div class="form-field">
                    <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                </div>

                <div class="row">
                    <div class="col-six tab-full">
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                        </div>
                    </div>
                    <div class="col-six tab-full">
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                        </div>
                    </div>
                </div>

                <div class="form-field">
                    <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                </div>

                <div class="form-field">
                    <button class="submitform">Submit</button>

                    <div id="submit-loader">
                        <div class="text-loader">Sending...</div>
                        <div class="s-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>

            </form> <!-- end form -->

            <!-- contact-warning -->
            <div id="message-warning"></div>

            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div> <!-- end col-seven -->

        <div class="col-four tab-full contact-info end animate-this">

            <h5>Contact Information</h5>

            <div class="cinfo">
                <h6>Where to Find Us</h6>
                <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA<br>
                    94043 US
                </p>
            </div> <!-- end cinfo -->

            <div class="cinfo">
                <h6>Email Us At</h6>
                <p>
                    someone@infinitysite.com<br>
                    info@infinitysite.com
                </p>
            </div> <!-- end cinfo -->

            <div class="cinfo">
                <h6>Call Us At</h6>
                <p>
                    Phone: (+63) 555 1212<br>
                    Mobile: (+63) 555 0100<br>
                    Fax: (+63) 555 0101
                </p>
            </div>

        </div> <!-- end cinfo -->

    </div> <!-- end row contact-content -->

</section> <!-- end contact -->



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

    <div class="footer-bottom">

        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Infinity 2016.</span>
                    <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                </div>
            </div>

        </div>

    </div> <!-- end footer-bottom -->

    <div id="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top">
            {{--<i class="fa fa-long-arrow-up" aria-hidden="true"></i>--}}
            <i class="livicon" data-name="plane-up" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i>
        </a>
    </div>
</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>

<script src="js/plugins.js"></script>
{{--<script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>--}}
<script src="js/main.js"></script>

<script>

    // $( window ).onunload(function() {
    //     alert("Reloads");
    // });


    window.beforeunload = function () {
        window.scrollTo(0, 0);
    }

</script>



</body>

</html>