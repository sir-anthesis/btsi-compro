@extends('layout.layout')

@php
    $headTitle = 'PT. Blue Tide System Indonesia';
    $header = 'false';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

    <div class="page-wrapper">

        <header class="main-header-two clearfix">
            <div class="main-header-two__top">
                <div class="main-header-two__top-details">
                    <div class="container">
                        <div class="main-header-two__top-details-inner">
                            <ul class="list-unstyled main-header-two__top-details-list"
                                style="display: flex; gap: 2rem; flex-wrap: wrap; justify-content: start;">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <h5>Drop a line</h5>
                                        <p><a
                                                href="mailto:yudhistira@bluetidesystemindonesia.co">yudhistira@bluetidesystemindonesia.com</a>
                                        </p>
                                    </div>
                                </li>
                                <li style="margin: 0">
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <h5>Kebayoran Baru</h5>
                                        <p>South Jakarta</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header-two__logo">
                                <a href="/"><img style="width: 8rem; border-radius: 10px;"
                                        src="{{ asset('assets/btsi-images/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-two__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner"
                            style="display:flex; justify-content: space-between; align-items: center; padding: 0 40px">
                            <div>
                                <a href="/"><img style="width: 8rem; border-radius: 10px;"
                                        src="{{ asset('assets/btsi-images/logo/logo.png') }}" alt=""></a>
                            </div>
                            <div class="main-menu-two__left">
                                <div class="main-menu-two__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list one-page-scroll-menu">
                                        <li class="current scrollToLink">
                                            <a href="/">Home </a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#about">About</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#why-us">Why Us</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#products">Products</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-two clearfix" id="banner">
            <div class="swiper-container thm-swiper__slider"
                data-swiper-options='{"slidesPerView": 1, "loop": true,
                                                                                                                        "effect": "fade",
                                                                                                                        "pagination": {
                                                                                                                        "el": "#main-slider-pagination",
                                                                                                                        "type": "bullets",
                                                                                                                        "clickable": true
                                                                                                                        },
                                                                                                                        "navigation": {
                                                                                                                        "nextEl": "#main-slider__swiper-button-next",
                                                                                                                        "prevEl": "#main-slider__swiper-button-prev"
                                                                                                                        },
                                                                                                                        "autoplay": {
                                                                                                                        "delay": 5000
                                                                                                                        }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-2-1.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="main-slider-two__inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-7">
                                        <div class="main-slider-two__content">
                                            <h2 class="main-slider-two__title" style="min-width: 50vw;">PT. Blue Tide System
                                                Indonesia</h2>
                                            <p class="main-slider-two__text">Aims to create a new wave in the ICT security,
                                                solutions, and consulting sectors in Indonesia's financial and public
                                                sectors.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-2-2.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="main-slider-two__inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-7">
                                        <div class="main-slider-two__content">
                                            <h2 class="main-slider-two__title" style="min-width: 50vw;">Our Phyloshopy</h2>
                                            <p class="main-slider-two__text" style="min-width: 50vw;">Oriented towards
                                                delivering a good customer
                                                experience, our organization is leading the way in digital transformation by
                                                providing effective cybersecurity solutions to improve data protection and
                                                strengthen operational efficiency.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature Start-->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset('assets/images/resources/feature-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-two__content" style="width: 90%">
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <span class="icon-cash-flow"></span>
                                    </div>
                                    <div class="feature-two__text-box">
                                        <p class="feature-two__text" style="font-size: 1rem"><a href="#">Activating
                                                Innovation To
                                                Advance Your Business.</a>
                                        </p>
                                    </div>
                                </div>
                                <div style="padding: 1rem; text-align: justify;">
                                    <p>As cybercriminals continuously refine their tactics, organizations must adapt their
                                        defenses accordingly.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset('assets/images/resources/feature-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-two__content" style="width: 90%">
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <span class="icon-cash-flow"></span>
                                    </div>
                                    <div class="feature-two__text-box">
                                        <p class="feature-two__text" style="font-size: 1rem"><a href="#">Unleashing Personal
                                                Potential.</a>
                                        </p>
                                    </div>
                                </div>
                                <div style="padding: 1rem; text-align: justify;">
                                    <p>By creating an environment that supports growth and advancement, businesses can
                                        empower individuals to reach their full potential and contribute meaningfully to the
                                        company's success.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset('assets/images/resources/feature-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-two__content" style="width: 90%">
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <span class="icon-cash-flow"></span>
                                    </div>
                                    <div class="feature-two__text-box">
                                        <p class="feature-two__text" style="font-size: 1rem"><a href="#">Creating Synergy To
                                                Achieve Shared Goals And Shared</a>
                                        </p>
                                    </div>
                                </div>
                                <div style="padding: 1rem; text-align: justify;">
                                    <p>Creating synergy to achieve shared goals and success involves combining the strengths
                                        and efforts of multiple individuals or groups to enhance overall performance and
                                        reach common objectives more effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                </div>
            </div>
        </section>
        <!--Feature End-->

        <!--About Start-->
        <section class="about-two" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">About Us</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Pioneering Innovation in Security and IT Solutions for
                                    Indonesia’s Financial and Public Sectors</h2>
                            </div>
                            <p class="about-two__text">PT. BTSI aims to create a new wave in the security, solutions, and IT
                                consulting sectors for the financial and public sectors in Indonesia. PT. BTSI is set to
                                launch in 2023 and is established as a separate entity from PAN.</p>
                            <a href="{{ route('about') }}" style="margin-top: 2rem" class="thm-btn about-two__btn">Discover
                                More</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__middle">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-two__dots float-bob-y">
                                    <img src="{{ asset('assets/images/shapes/about-two-dots.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About End-->

        <!--Why Start-->
        <section class="work-together" id="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="work-together__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why Us</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Implementing Cybersecurity Solutions</h2>
                            </div>
                            <div class="work-together__content-box">
                                <div class="work-together__text-box" style="margin: 0">
                                    <p class="work-together__text">Implementing cybersecurity solutions is essential today
                                        to protect sensitive data, ensure regulatory compliance, maintain business
                                        continuity, and safeguard against increasing cyber threats. Here are some key
                                        reasons why it's crucial to implement cybersecurity solutions today
                                    </p>
                                </div>
                            </div>
                            <div class="work-together__progress">
                                <div class="work-together__progress-single">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="work-together__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>+</span> Maecenas scelerisque nibh vitae turpis</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>+</span> Nulla fermentum leo nibh, a vestibulum</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>+</span> Quisque vel rutrum tortor, in rhoncus</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>+</span> Quisque vel rutrum tortor, in rhoncus</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>+</span> Quisque vel rutrum tortor, in rhoncus</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>+</span> Quisque vel rutrum tortor, in rhoncus</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Two End-->

        <!--Products Start-->
        <section class="services-two" id="products">
            <div class="services-two-shape-1"
                style="background-image: url('{{ asset('assets/images/shapes/services-two-shape-1.png') }}')"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-two__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Products and Solutions</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-5.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-6.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">Comprehensive Range of Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-two__top-right">
                                <p class="services-two__top-text">We offer a comprehensive range of services, including data
                                    protection, network security, cloud security, and advanced threat detection systems,
                                    ensuring that your business stays secure, compliant, and resilient in today’s
                                    ever-changing technological landscape</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-two__bottom">
                    <div class="row">
                        <!--Services Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon"
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-image: url('{{ asset('assets/btsi-images/logo/logo-hiware.png') }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-repeat: no-repeat;">
                                    </div>

                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">HIWARE</a></h3>
                                <p class="services-two__text">Hiware is an integrated solution for user access control and
                                    account management across network and server operating system.</p>
                                <a href="{{ route('about') }}" style="margin-top: 1rem"
                                    class="thm-btn about-two__btn">Discover
                                    More</a>
                            </div>
                        </div>
                        <!--Services Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Products Two End-->

        <!--Customers Start-->
        <section class="brand-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="brand-one__title">
                            <h2>Our Customers</h2>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="brand-one__main-content">
                            <div class="thm-swiper__slider swiper-container"
                                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                                                                                                                                                                                                                                                                                                                                                                        "0": {
                                                                                                                                                                                                                                                                                                                                                                                            "spaceBetween": 30,
                                                                                                                                                                                                                                                                                                                                                                                            "slidesPerView": 2
                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                        "375": {
                                                                                                                                                                                                                                                                                                                                                                                            "spaceBetween": 30,
                                                                                                                                                                                                                                                                                                                                                                                            "slidesPerView": 2
                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                        "575": {
                                                                                                                                                                                                                                                                                                                                                                                            "spaceBetween": 30,
                                                                                                                                                                                                                                                                                                                                                                                            "slidesPerView": 3
                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                        "767": {
                                                                                                                                                                                                                                                                                                                                                                                            "spaceBetween": 50,
                                                                                                                                                                                                                                                                                                                                                                                            "slidesPerView": 4
                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                        "991": {
                                                                                                                                                                                                                                                                                                                                                                                            "spaceBetween": 50,
                                                                                                                                                                                                                                                                                                                                                                                            "slidesPerView": 5
                                                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                                                        "1199": {
                                                                                                                                                                                                                                                                                                                                                                                            "spaceBetween": 100,
                                                                                                                                                                                                                                                                                                                                                                                            "slidesPerView": 5
                                                                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                                                                    }}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Customers End-->

        <!--CTA One Start-->
        <section class="cta-one" style="padding: 0">
            <div class="container">
                <div class="cta-one__content">
                    <div class="cta-one__inner"
                        style="text-align: start; display: flex; justify-content: center; align-items: center;">
                        <ul class="list-unstyled main-header-two__top-details-list"
                            style="display: flex; gap: 4rem; flex-wrap: wrap; justify-content: start;">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <div class="text">
                                    <h5>Our Contact</h5>
                                    <p><a href="">0858-123-456</a>
                                    </p>
                                </div>
                            </li>
                            <li style="margin: 0">
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <h5>Address</h5>
                                    <p style="max-width: 30rem">Jl. Aditiawarman I No.14, RT.6/RW.2, Melawai, Kec. Kby.
                                        Baru,
                                        Kota Jakarta Selatan,
                                        Daerah Khusus Ibukota Jakarta 12160</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Partners Start-->
        <section class="brand-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="brand-one__title">
                            <h2>Our Partners</h2>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="brand-one__main-content">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                            "0": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                                },
                                            "375": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 2
                                                },
                                            "575": {
                                                "spaceBetween": 30,
                                                "slidesPerView": 3
                                                },
                                            "767": {
                                                "spaceBetween": 50,
                                                "slidesPerView": 4
                                                },
                                            "991": {
                                                "spaceBetween": 50,
                                                "slidesPerView": 5
                                                },
                                            "1199": {
                                                "spaceBetween": 100,
                                                "slidesPerView": 5
                                            }}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Partners End-->

        <!--Contact Start-->
        <section class="get-insuracne-two" id="contact">
            <div class="get-insuracne-two-shape-3 float-bob-x">
                <img src="{{ asset('assets/images/shapes/get-insuracne-two-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="get-insuracne-two__left">
                            <div class="get-insuracne-two__shape-box">
                                <div class="get-insuracne-two-shape-1"
                                    style="background-image: url('{{ asset('assets/images/shapes/get-insuracne-two-shape-1.png') }}')">
                                </div>
                                <div class="get-insuracne-two-shape-2">
                                    <img src="{{ asset('assets/images/shapes/get-insuracne-two-shape-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="get-insuracne-two__img">
                                <img src="{{ asset('assets/images/resources/get-insurance-two-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="get-insuracne-two__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Contact Us</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Sends Us a Message</h2>
                            </div>
                            <div class="get-insuracne-two__tab clearfix">
                                <div class="get-insuracne-two__tab-box tabs-box clearfix">
                                    <div class="get-insuracne-two__inner clearfix">
                                        <form class="get-insuracne-two__form">
                                            <div class="get-insuracne-two__content-box">
                                                <div class="get-insuracne-two__input-box">
                                                    <input type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="get-insuracne-two__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                                <div class="get-insuracne-two__input-box">
                                                    <input type="text" placeholder="Phone (+6285123456)" name="phone">
                                                </div>
                                                <div class="get-insuracne-two__input-box">
                                                    <input type="text" placeholder="Message" name="message">
                                                </div>
                                            </div>
                                            <div class="get-insuracne-two__content-bottom">
                                                <button type="submit" class="thm-btn get-insuracne-two__btn"
                                                    style="width: 100%">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact End-->

@endsection