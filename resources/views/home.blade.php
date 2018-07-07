@extends('layouts/landingpage')
{{-- Page title --}}
@section('title')
    Home
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/infinity/css/base.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/infinity/css/vendor.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/infinity/css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/infinity/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/infinity/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">

    {{--<style>--}}
        {{--.box{--}}
            {{--margin-top:53px !important;--}}
        {{--}--}}

    {{--</style>--}}

    <!--end of page level css-->
@stop

@section('top')

@stop

@section('content')

    <!-- home
   ================================================== -->
    <section id="home">


        <div class="overlay"></div>

        <div class="home-content-table">
            <div class="home-content-tablecell">
                <div class="row">
                    <div class="col-twelve">

                        <h3 class="animate-intro">We Are Infinity.</h3>
                        <h1 class="animate-intro">
                            We Craft Stunning  <br>
                            Digital Experiences.
                        </h1>

                        <div class="more animate-intro">
                            <a class="smoothscroll button stroke" href="#about">
                                Learn More
                            </a>
                        </div>

                    </div> <!-- end col-twelve -->
                </div> <!-- end row -->
            </div> <!-- end home-content-tablecell -->
        </div> <!-- end home-content-table -->

        <ul class="home-social-list">
            <li class="animate-intro">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li class="animate-intro">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="animate-intro">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="animate-intro">
                <a href="#"><i class="fa fa-behance"></i></a>
            </li>
            <li class="animate-intro">
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </li>
        </ul> <!-- end home-social-list -->

        <div class="scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                Scroll Down
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->

    <!-- about
   ================================================== -->
    <section id="about">

        <div class="row about-wrap">
            <div class="col-full">

                <div class="about-profile-bg"></div>

                <div class="intro">
                    <h3 class="animate-this">About Us</h3>
                    <p class="lead animate-this"><span>Infinity</span> is a creative digital agency based in Manila, Philippines. We are composed of creative designers and experienced developers.</p>
                </div>

            </div> <!-- end col-full  -->
        </div> <!-- end about-wrap  -->

    </section> <!-- end about -->

@stop

@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <!--page level js ends-->
@stop
