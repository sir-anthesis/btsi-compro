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
            <nav class="main-menu main-menu-two clearfix" style="position: fixed; margin: 0; width: 100%;">
                <div class="main-menu-two__wrapper clearfix">
                    <div class="main-menu-two__wrapper-inner"
                        style="display:flex; justify-content: space-between; align-items: center; padding: .5rem 2.3rem; border-radius: 0; border-bottom: 5px solid #172e7b;">
                        <div>
                            <a href="/"><img style="width: 9rem; border-radius: 10px;"
                                    src='http://127.0.0.1:8000/storage/{{ $generals->logo}}' alt=""></a>
                        </div>
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="scrollToLink">
                                        <a style="font-weight: 700" href="#banner">Home </a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a style="font-weight: 700" href="#about">About</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a style="font-weight: 700" href="#why-us">Why Us</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a style="font-weight: 700" href="#products">Products</a>
                                    </li>
                                    <li class="scrollToLink">
                                        <a style="font-weight: 700" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!--Main Slider Start-->
        <section class="main-slider-two clearfix" id="banner" style="margin-top: 7rem">
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

                    @foreach ($heroes as $h)
                        <div class="swiper-slide">
                            <div class="image-layer-two" style="background-image: url('{{ asset('storage/' . $h->image) }}')">
                            </div>
                            <!-- /.image-layer -->

                            <div class="container" style="height: 100vh">
                                <div class="main-slider-two__inner">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-7">
                                            <div class="main-slider-two__content">
                                                <h2 class="main-slider-two__title" style="min-width: 50vw;">{{ $h->title }}</h2>
                                                <p class="main-slider-two__text">{{ $h->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-2-2.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container" style="height: 100vh;">
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
                    </div> --}}
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
                    @foreach ($highlights as $h)
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-two__single">
                                <div class="feature-two__img">
                                    <img src="{{ asset('storage/' . $h->image) }}" alt="">
                                </div>
                                <div class="feature-two__content" style="width: 95%">
                                    <div class="feature-two__content-inner">
                                        <div class="feature-two__icon">
                                            <span class="{{ $h->icon }}"></span>
                                        </div>
                                        <div class="feature-two__text-box">
                                            <p class="feature-two__text" style="font-size: 1rem"><a href="#">{{ $h->title }}</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div style="padding: 1rem; text-align: justify; height: 12rem; overflow: auto;">
                                        <p>{{ $h->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                <h2 class="section-title__title">{{ $generals->abt_title }}</h2>
                            </div>
                            <p class="about-two__text">{!! $generals->abt_desc !!}</p>
                            <a href="{{ $generals->abt_link }}" style="margin-top: 2rem" class="thm-btn about-two__btn"
                                target="_blank">Discover
                                More</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__middle">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="{{ asset('storage/' . $generals->abt_img) }}" alt="">
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
                                <h2 class="section-title__title">{{ $generals->why_title }}</h2>
                            </div>
                            <div class="work-together__content-box">
                                <div class="work-together__text-box" style="margin: 0">
                                    <p class="work-together__text">{!! $generals->why_desc !!}
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
                                @foreach ($accordions as $a)
                                    <div class="accrodion {{ $loop->first ? 'active' : '' }}">
                                        <div class="accrodion-title">
                                            <h4><span>+</span>{{ $a->title }}</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>{{ $a->description }}</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                @endforeach
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
                    <div class="row" style="margin-bottom: 2rem">
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-two__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Products and Services</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-5.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-6.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">{{ $generals->prod_title }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-two__top-right">
                                <p class="services-two__top-text">{!! $generals->prod_desc !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-two__bottom">
                    <div class="row">
                        @foreach ($products as $p)
                            <!--Services Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="services-two__single">
                                    <div class="services-two__icon-box">
                                        <div class="services-two__icon"
                                            style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            background-image: url('{{ asset('storage/' . $p->photo) }}'); 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            background-size: contain; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            background-position: center; 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            background-repeat: no-repeat;">
                                        </div>

                                    </div>
                                    <h3 class="services-two__title"><a href="{{ $p->link }}">{{ $p->title }}</a></h3>
                                    <p class="services-two__text">{{ $p->description }}</p>
                                    <a href="{{ $p->link }}" style="margin-top: 1rem" class="thm-btn about-two__btn">Discover
                                        More</a>
                                </div>
                            </div>
                            <!--Services Single End-->
                        @endforeach
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
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Our Customers</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-5.png') }}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-6.png') }}" alt="">
                                </div>
                            </div>
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
                                <div class="swiper-wrapper" style="justify-content: center; align-items: center;">
                                    @foreach ($customers as $c)
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="{{ asset('storage/' . $c->photo) }}" alt="">
                                        </div><!-- /.swiper-slide -->
                                    @endforeach
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
                                    <p><a href="">{{ $generals->contact }}</a>
                                    </p>
                                </div>
                            </li>
                            <li style="margin: 0">
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <h5>Address</h5>
                                    <p style="max-width: 30rem">{{ $generals->address }}</p>
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
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">Our Partners</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-5.png') }}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-6.png') }}" alt="">
                                </div>
                            </div>
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }}}'>
                                <div class="swiper-wrapper" style="justify-content: center; align-items: center;">
                                    @foreach ($partners as $p)
                                        <div class="swiper-slide">
                                            <img class="img-fluid" src="{{ asset('storage/' . $p->photo) }}" alt="">
                                        </div><!-- /.swiper-slide -->
                                    @endforeach
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
                                <img src="{{ asset('storage/' . $generals->contact_img) }}" alt="">
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
                                <h2 class="section-title__title">{{ $generals->ctc_title }}</h2>
                            </div>
                            <div class="get-insuracne-two__tab clearfix">
                                <div class="get-insuracne-two__tab-box tabs-box clearfix">
                                    <div class="get-insuracne-two__inner clearfix">
                                        <form action="{{ route('form') }}" method="POST" class="get-insuracne-two__form">
                                            @csrf
                                            <div class="get-insuracne-two__content-box">
                                                <div class="get-insuracne-two__input-box">
                                                    <input required type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="get-insuracne-two__input-box">
                                                    <input required type="email" placeholder="Email address" name="email">
                                                </div>
                                                <div class="get-insuracne-two__input-box">
                                                    <input required type="text" placeholder="Phone (+6285123456)"
                                                        name="phone">
                                                </div>
                                                <div class="get-insuracne-two__input-box">
                                                    <input required type="text" placeholder="Message" name="message">
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

        {{-- Footer Start --}}
        <footer class="site-footer">
            <div class="site-footer-bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/site-footer-bg.png') }}')">
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="/"><img style="width: 8rem; border-radius: 10px;"
                                            src='http://127.0.0.1:8000/storage/{{ $generals->logo}}' alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">{{ $generals->footer_desc }}</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email" style="font-size: 20px"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $generals->email }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin" style="font-size: 20px"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $generals->address }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Informations</h3>
                                <div class="footer-widget__phone">
                                    <div class="footer-widget__phone-icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="footer-widget__phone-text">
                                        <a href="tel:9200368090">+92 (003) 68-090</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                                <div class="footer-widget__open-hour">
                                    <h3 class="footer-widget__open-hour-title">Open Hours</h3>
                                    <h3 class="footer-widget__open-hour-text">Mon – Fri: 9:00 am to 5:00 pm</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2023 by <a href="#">Insur.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </footer>
        {{-- Footer End --}}

@endsection