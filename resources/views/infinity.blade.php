<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TechWeb</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


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
            <li><a class="smoothscroll" href="#portfolio" title="">Technologie</a></li>
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
                        Projektujemy Strony Internetowe  <br>
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
            <i class="livicon icon" data-name="users" data-size="55" data-loop="true" data-c="#ff6600"
               data-hc="#ff6600"></i>
            <div class="intro">
                <h3 class="animate-this">o Nas</h3>
                <p class="lead animate-this">
                    <span>TechWeb </span>
                    to młoda, kreatywna firma stworzona po to aby w pełni <span style="color: #1da1f2">zwizualizować</span> Twój pomysł.<br>
                    <span>Teraz Ty</span> pozwól nam stworzyć rozwiązania i aplikacje internetowe po to aby w pełni go <span style="color: #1da1f2">zrealizować</span>.
                </p>
            </div>

        </div> <!-- end col-full  -->
    </div> <!-- end about-wrap  -->



</section> <!-- end about -->

<!-- services
================================================== -->
<section id="services">

    <div class="overlay"></div>
    <div class="gradient-overlay"></div>

    <div class="row narrow section-intro with-bottom-sep animate-this">
        <div class="col-full">

            <h3>Oferta</h3>
            <h1>Czym się zajmujemy?</h1>

            <p class="lead">Jesteśmy firmą oferującą rozwiązania IT z zakresu e-commerce zarówno dla najmniejszych firm
            bądź indywidualnych zleceniodawców, jak również dla tych już znacznie większych. Zaprojektujemy i wykonamy responsywną
                aplikację internetową dostosowaną specjalnie dla Ciebie, pomoźemy w jej pozycjonowaniu, doradzimy przy wyborze odpowiednich
            usług hostingowych, stworzymy system który wydatnie pomoże Ci w zarządzaniu firmą. Najważniejszy dla nas jesteś właśnie Ty i Twój pomysł,
                 dlatego każda Twoja sugestia co do wykonania projektu traktowana jest priorytetowo. Dlatego im jest ich więcej tym lepiej ...</p>

        </div> <!-- end col-full -->
    </div> <!-- end row -->

    <div class="row services-content">

        <div class="services-list block-1-2 block-tab-full group">

            <div class="bgrid service-item animate-this-bounceInLeft">

                <i class="livicon icon" data-name="sitemap" data-size="55" data-loop="true" data-c="#ff6600"
                   data-hc="#ff6600"></i>
                <div class="service-content">

                    <h3 class="h05">Plan Projektu</h3>

                    <p>Zwizualizujemy Twój pomysł poprzez wykonanie planu całego projektu zawierającego m.in. motyw przewodni, stylistyczny front-end,
                        wspierajacy aplikację back-end i wiele innych instrumentów potrzebnych do wykonania głównych operacji. W tworzeniu każdego planu
                        bierzemy sobie głównie do serca Twoje sugestie i wytyczne  oraz pełną akceptację obranej drogi.
                    </p>
                </div>

            </div> <!-- end bgrid -->

            <div class="bgrid service-item animate-this-bounceInRight">

                <i class="livicon icon" data-name="desktop" data-size="55" data-loop="true" data-c="#ff6600"
                   data-hc="#ff6600"></i>
                <div class="service-content">

                    <h3 class="h05">Strona internetowa</h3>

                    <p>Aplikacje internetowe tworzymy na indywidualne zamówienia i ściśle dostosowujemy je do potrzeb naszych klientów. Nasze strony
                        internetowe projektujemy przy użyciu najnowszych technologii i systemów. Od Ciebie zależeć będzie ostateczny layout strony,
                        rodzaj użytej magii w animacjach czy chociażby ilość stron/zakładek.
                    </p>
                </div>

            </div> <!-- end bgrid -->
        </div> <!-- end services-list -->

        <div class="services-list block-1-2 block-tab-full group">

            <div class="bgrid service-item animate-this-bounceInLeft">

                <i class="livicon icon" data-name="responsive" data-size="55" data-loop="true" data-c="#ff6600"
                   data-hc="#ff6600"></i>

                <div class="service-content">
                    <h3 class="h05">Responsywny Design</h3>

                    <p>Zapewne chcesz żeby Twój projekt był dopasowany idealnie pod każdy wyświetlający go ekran? Ten efekt zapewni właśnie implementacja
                        w projekcie responsywnych rozwiązań. Twoja strona będzie zachowywać się w odpowiednio ustalony sposób zarówno na małym jak i dużym
                        ekranie. Idealne dopasowanie strony WWW do każdego urządzenia ma kluczowy wpływ na to jak klient ją odbiera.
                    </p>
                </div>

            </div> <!-- end bgrid -->

            <div class="bgrid service-item animate-this-bounceInRight">

                <i class="livicon icon" data-name="edit" data-size="55" data-loop="true" data-c="#ff6600"
                   data-hc="#ff6600"></i>

                <div class="service-content">
                    <h3 class="h05">System CMS</h3>

                    <p>Autorski System CMS pozwala w intuicyjny i szybki sposób zarządzać wszelkimi treściami merytorycznymi na stronie www. Będziesz mógł
                        samemu wprowadzać wszelkie zmiany na swojej stronie, tworzyć nowe podstrony, aktualizować treści itp. Tylko od Ciebie zależeć bedzie
                        czy to Ty czy my zajmiemy sie dalszą administracją strony. Tak czy siak naszą pomoc otrzymasz dożywotnio bez względu na to którą
                        opcję wybierzesz.
                    </p>
                </div>

            </div> <!-- end bgrid -->

        </div> <!-- end services-list -->

        <div class="services-list block-1-2 block-tab-full group">

            <div class="bgrid service-item animate-this-bounceInLeft">

                <i class="livicon icon" data-name="globe" data-size="55" data-loop="true" data-c="#ff6600"
                   data-hc="#ff6600"></i>

                <div class="service-content">
                    <h3 class="h05">E-Commerce</h3>

                    <p>Chcesz stworzyć swój portal czy sklep internetowy? Nie ma problemu. Zrealizujemy Twój projekt w oparciu o popularne, opensource’owe
                        narzędzia takie jak PrestaShop czy WooCommerce. Przygotowując sklep internetowy uważnie słuchamy Twoich wskazówek oraz tłumaczymy
                        wszelkie wątpliwości. Stworzymy dla Ciebie rozbudowany serwis internetowy o bogatych funkcjonalnościach.
                    </p>
                </div>

            </div> <!-- end bgrid -->

            <div class="bgrid service-item animate-this-bounceInRight">

                <i class="livicon icon" data-name="search" data-size="55" data-loop="true" data-c="#ff6600"
                   data-hc="#ff6600"></i>

                <div class="service-content">
                    <h3 class="h05">Optymalizacja SEO</h3>

                    <p>Pozycjonowanie jest nieodłącznym elementem posiadania strony WWW, a przynajmniej powinno nim być. Optymalizujemy witrynę,
                        by osiągnęła jak najwyższe pozycje w Google. Bez nich wykonany serwis nie będzie miał dużej ilości odwiedzin, a co za tym
                        idzie - nie przyniesie zamierzonego efektu.
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
    <div class="intro-wrap">

        <div class="row narrow section-intro with-bottom-sep animate-this">
            <div class="col-twelve">
                <h3>Technologie</h3>
                <h1>Lista używanych przez nas technologii</h1>

                <p>Rozwijamy się każdego dnia, poznając i tworząc rozwiązania nowoczesne i unikalne. Pomimo ogromu nowości i ciągłemu rozwojowi branży, nie wyobrażamy sobie nie iść z duchem czasu.
                    Najnowsze technologie nie stanowią dla nas barier, a tylko motywują do ciągłego udoskonalania i poszerzania wiedzy.</p>
            </div>
        </div> <!-- end row section-intro -->

    </div> <!-- end intro-wrap -->

    <div class="row portfolio-content">
        <div class="col-twelve">

            <div id="folio-wrap" class="bricks-wrapper">

                <div class="col-1-3 brick folio-item animate-this-bounceInLeft">
                    <div class="item-wrap animate-this" data-src="images/HtmlCssJs.jpg" data-sub-html="#01" >
                        <a href="#" class="overlay">
                            <img src="images/HtmlCssJs.jpg" alt="WebPack">
                            <div class="item-text">
	                     	<span class="folio-types">
		     					      Html5 CSS3 JavaScript
		     					   </span>
                                <h3 class="folio-title">Fundamenty</h3>
                            </div>
                        </a>
                    </div> <!-- end item-wrap -->

                </div> <!-- end folio-item -->

                <div class="col-1-3 brick folio-item animate-this-bounceInLeft">
                    <div class="item-wrap animate-this" data-src="images/jquery.jpg" data-sub-html="#02">
                        <a href="#" class="overlay">
                            <img src="images/jquery.jpg" alt="jQuery">
                            <div class="item-text">
	                     	<span class="folio-types">
		     					      jQuery
		     					   </span>
                                <h3 class="folio-title">Szczypta Magii</h3>
                            </div>
                        </a>
                    </div> <!-- end item-wrap -->

                </div> <!-- end folio-item -->

                <div class="col-1-3 brick folio-item animate-this-bounceInRight">
                    <div class="item-wrap animate-this" data-src="images/angularBootstrap.jpg" data-sub-html="#03" >
                        <a href="#" class="overlay">
                            <img src="images/angularBootstrap.jpg" alt="Frameworki">
                            <div class="item-text">
		     					   <span class="folio-types">
		     					      Bootstrap AngularJS Node.js
		     					   </span>
                                <h3 class="folio-title">Popularne Frameworki</h3>
                            </div>
                        </a>
                    </div> <!-- end item-wrap -->

                </div> <!-- end folio-item -->


                <div class="col-1-3 brick folio-item animate-this-bounceInRight">
                    <div class="item-wrap animate-this"  data-src="images/Laravel-best-PHP-Framework.jpg"  data-sub-html="#04" >
                        <a href="#" class="overlay">
                            <img src="images/Laravel-best-PHP-Framework.jpg" alt="Laravel">
                            <div class="item-text">
		     					   <span class="folio-types">
		     					      PHP Framework Laravel
		     					   </span>
                                <h3 class="folio-title">Laravel</h3>
                            </div>
                        </a>
                    </div> <!-- end item-wrap -->

                </div> <!-- end folio-item -->



                <div class="col-1-3 brick folio-item animate-this-rollIn">
                    <div class="item-wrap animate-this"  data-src="images/wordpress-drupal-joomla.jpg"  data-sub-html="#05" >
                        <a href="#" class="overlay">
                            <img src="images/wordpress-drupal-joomla.jpg" alt="CMS">
                            <div class="item-text">
		     					   <span class="folio-types">
		     					      OpenSource CMS Systems
		     					   </span>
                                <h3 class="folio-title">Systemy CMS</h3>
                            </div>
                        </a>
                    </div> <!-- end item-wrap -->

                </div> <!-- end folio-item -->

                <div class="col-1-3 brick folio-item animate-this-rollIn">
                    <div class="item-wrap animate-this"  data-src="images/pluggins.png"  data-sub-html="#06">
                        <a href="#" class="overlay">
                            <img src="images/pluggins.png" alt="more">
                            <div class="item-text">
		     					   <span class="folio-types">
		     					      and many many more...
		     					   </span>
                                <h3 class="folio-title">Pluggins, CMS's</h3>
                            </div>
                        </a>
                    </div> <!-- end item-wrap -->

                </div> <!-- end folio-item -->

            </div> <!-- end folio-wrap -->

        </div> <!-- end twelve -->
    </div> <!-- end portfolio-content -->

</section>  <!-- end portfolio -->

<!-- stats
================================================== -->


{{--<section id="clients">--}}

    {{--<div class="row animate-this">--}}
        {{--<div class="col-twelve">--}}

            {{--<div class="client-lists owl-carousel">--}}
                {{--<div><img src="images/clients/mozilla.png" alt=""></div>--}}
                {{--<div><img src="images/clients/bower.png" alt=""></div>--}}
                {{--<div><img src="images/clients/codepen.png" alt=""></div>--}}
                {{--<div><img src="images/clients/envato.png" alt=""></div>--}}
                {{--<div><img src="images/clients/firefox.png" alt=""></div>--}}
                {{--<div><img src="images/clients/grunt.png" alt=""></div>--}}
                {{--<div><img src="images/clients/evernote.png" alt=""></div>--}}
                {{--<div><img src="images/clients/github.png" alt=""></div>--}}
                {{--<div><img src="images/clients/joomla.png" alt=""></div>--}}
                {{--<div><img src="images/clients/jQuery.png" alt=""></div>--}}
                {{--<div><img src="images/clients/wordpress.png" alt=""></div>--}}
            {{--</div>--}}

        {{--</div> <!-- end col-twelve -->--}}
    {{--</div> <!-- end row -->--}}

{{--</section> <!-- end clients -->--}}


<!-- contact
================================================== -->
<section id="contact">

    <div class="overlay"></div>

    <div class="row narrow section-intro with-bottom-sep animate-this">
        <div class="col-twelve">
            <h3>Kontakt</h3>
            <h1>Skontaktuj się z nami.<br>
            To nic nie kosztuje.</h1>
            {{--<p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>--}}
        </div>
    </div> <!-- end section-intro -->

    <div class="row contact-content">

        <div class="col-seven tab-full animate-this">

            <h5>Wyślij nam Wiadomość</h5>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post">

                <div class="form-field">
                    <input name="contactName" type="text" id="contactName" placeholder="Imię" value="" minlength="2" required="">
                </div>

                <div class="row">
                    <div class="col-six tab-full">
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                        </div>
                    </div>
                    <div class="col-six tab-full">
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Temat" value="">
                        </div>
                    </div>
                </div>

                <div class="form-field">
                    <textarea name="contactMessage" id="contactMessage" placeholder="wiadomość" rows="10" cols="50" required=""></textarea>
                </div>

                <div class="form-field">
                    <button class="submitform">Wyślij</button>

                    <div id="submit-loader">
                        <div class="text-loader">Wysyła...</div>
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
                <i class="fa fa-check"></i>Wiadomość wysłana, dziękujemy!<br>
            </div>

        </div> <!-- end col-seven -->

        <div class="col-four tab-full contact-info end animate-this">

            <h5>Kontakt Info</h5>

            <div class="cinfo">
                <h6>Gdzie nas znaleźć?</h6>
                <p>
                    Zamoyskiego 3/40,<br>
                    22-400 Zamość<br>
                </p>
            </div> <!-- end cinfo -->

            <div class="cinfo">
                <h6>Email</h6>
                <p>
                    admin@techwebpl.com<br>
                    techwebpl@gmail.com
                </p>
            </div> <!-- end cinfo -->

            <div class="cinfo">
                <h6>Numer Telefonu</h6>
                <p>
                    Tel: (+48) 535 31 34 31<br>
                </p>
            </div>

        </div> <!-- end cinfo -->

    </div> <!-- end row contact-content -->

</section> <!-- end contact -->


<!-- Testimonials Section
================================================== -->

<section id="testimonials">

    {{--<div class="row">--}}
        {{--<div class="col-twelve">--}}
            {{--<h2 class="animate-this">What They Say About Us.</h2>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="row flex-container">

        <div id="testimonial-slider" class="flex-slider animate-this-fadeInLeft">

            <ul class="slides">

                <li>
                    <blockquote>
                        <p>
                            Wkrótce będzie możliwe bezprzewodowe wysyłanie informacji na cały świat, tak, że każdy człowiek będzie mógł to robić
                            przy pomocy małego urządzenia noszonego przy sobie.
                        </p>
                    </blockquote>
                    <div class="testimonial-author">
                        <img src="images/avatars/user-01.jpg" alt="Author image">
                        <div class="author-info">
                            Nikola Tesla
                            <span class="position">„New York Times” z 1909 roku</span>
                        </div>
                    </div>
                </li> <!-- end slide -->

                <li>
                    <blockquote>
                        <p>
                            Niczego w życiu nie należy się bać, należy to tylko zrozumieć.
                        </p>
                    </blockquote>
                    <div class="testimonial-author">
                        <img src="images/avatars/user-02.jpg" alt="Author image">
                        <div class="author-info">
                            Maria-Skłodowska Curie
                        </div>
                    </div>

                </li> <!-- end slide -->

                <li>
                    <blockquote>
                        <p>
                            Z aerodynamicznego punktu widzenia trzmiel nie powinien być zdolny do latania, jednak trzmiel o tym nie wie, więc lata pomimo wszystko.
                        </p>
                    </blockquote>
                    <div class="testimonial-author">
                        <img src="images/avatars/user-03.jpg" alt="Author image">
                        <div class="author-info">
                            Mary Kay Ash
                        </div>
                    </div>
                </li> <!-- end slide -->

                <li>
                    <blockquote>
                        <p>
                            Każda wystarczająco zaawansowana technologia jest nierozróżnialna od magii.
                        </p>
                    </blockquote>
                    <div class="testimonial-author">
                        <img src="images/avatars/user-04.jpg" alt="Author image">
                        <div class="author-info">
                            Arthur C. Clarke
                        </div>
                    </div>
                </li> <!-- end slide -->

            </ul> <!-- end slides -->

        </div> <!-- end testimonial-slider -->

    </div> <!-- end flex-container -->

</section> <!-- end testimonials -->


<!-- footer
================================================== -->
<footer>
    <div class="footer-main">

        <div class="row">

            <div class="col-five tab-full footer-about">

                <h4 class="h05">Techweb</h4>

                <p>Projektujemy Strony Internetowe  <br>
                    skrojone na miarę.</p>

            </div> <!-- end footer-about -->

            <div class="col-three tab-full footer-social">

                <h4 class="h05">Social Media</h4>

                <ul class="list-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>

            </div> <!-- end footer-social -->

            <div class="col-four tab-full footer-subscribe end">

                <h4 class="h05">Kontakt</h4>

                <p>
                    Tel: (+48) 535 31 34 31<br>
                    Email: <br>
                    admin@techwebpl.com<br>
                    techwebpl@gmail.com
                </p>

            </div> <!-- end footer-subscribe -->

        </div> <!-- end row -->

    </div> <!-- end footer-main -->

    <div class="footer-bottom">

        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright TechWeb 2018</span>
                    {{--<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>--}}
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


    // window.beforeunload = function () {
    //     window.scrollTo(0, 0);
    // }
    window.addEventListener("beforeunload", function (event) {

        $('#top').hide();
        window.scrollTo(0, 0);

    });
    //
    $(document).ready(function() {
        var url = window.location.pathname;
        // alert(url);
        // if( url.indexOf('#') < 0 ) {
        //     //     window.location.replace(url + "#");
        //     // } else {
        //     //     window.location.replace(url);
        //     window.location.replace(url);
        // }
    });

</script>



</body>

</html>