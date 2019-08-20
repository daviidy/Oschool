@extends('layouts.menu')

@section('content')



    <section class="hero-partial _2">
        <style>
            ._2 {
                margin-bottom: 105px;
            }

            @media (max-width: 991px) {
                ._2 {
                    margin-bottom: 105px;
                }
            }

            @media (max-width: 767px) {
                ._2 {
                    margin-bottom: 105px;
                }
            }

            ._2 h1 {
                max-width: none;
            }

            ._2 h2 {
                max-width: none;
                font-size: 22px;
                line-height: 33px;
            }

            @media (max-width: 767px) {
                ._2 .hero-div {
                    min-height: 600px;
                }
            }

            @media (min-width: 768px) {

                ._2 .hero-div,
                ._2 .container,
                ._2 .row,
                ._2 .col-xs-12 {
                    min-height: 765px;
                }

                ._2 .container {
                    padding-top: 85px;
                }
            }
        </style>
        <div id="segment-event" type="hidden" value="Submit Home Page Hero Form"></div>
        <div class="hero-div" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/nvpceaUsR6m0RayBroe6_homepage-hero.jpg);">
            <div class="container hero-container">
                <div class="row">
                    <div class="col-xs-12 vertically-align-contents-except-xs">
                        <div class="hero-text hero-text-left">
                            <h1>Create and sell beautiful online courses</h1>
                            <h2>Your skills and experiences are unique and valuable. Easily build a beautiful course website, share your knowledge, and be rewarded for it.</h2>
                            <div class="input-container left">
                                <div class="hidden redirect">/create-account</div>
                                <div class="hidden iterable-event"></div>
                                <div class="hidden iterable-campaign"></div>
                                <input id="email-input" type="email" autofocus="autofocus" placeholder="Email address">
                                <button id="email-submit-button" class="orange-button">Get started</button>
                                <div class="hidden marketing-email-opt-in-container">
                                    <input class="marketing-email-opt-in-input" type="checkbox" name="opted-into-marketing-email">
                                    <label for="opted-into-marketing-email">I agree to receive product and marketing updates from Teachable</label>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-numbers-four _3">
        <style>
            ._3 {
                margin-bottom: 115px;
            }

            @media (max-width: 991px) {
                ._3 {
                    margin-bottom: 115px;
                }
            }

            @media (max-width: 767px) {
                ._3 {
                    margin-bottom: 115px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="default-header">Everything is Teachable</h1>
                    <h1>
                    </h1>
                    <h2 class="default-paragraph">Join the 68,000+ instructors who use Teachable to share their knowledge. Easily create an online course with our powerful yet simple all-in-one platform.</h2>
                </div>
            </div>
            <div class="row">
                <!--  Below laptop size: bootstrap -->
                <ul class="col-xs-12 hidden-md hidden-lg">
                    <li class="col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>18m+</h3>
                            <h4 class="default-paragraph">Students learning</h4>
                        </div>
                    </li>
                    <li class="flex-item-number col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>186k+</h3>
                            <h4 class="default-paragraph">Active courses</h4>
                        </div>
                    </li>
                    <li class="flex-item-number col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>68k+</h3>
                            <h4 class="default-paragraph">Instructors online</h4>
                        </div>
                    </li>
                    <li class="flex-item-number col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>$338m+</h3>
                            <h4 class="default-paragraph">Earned by instructors</h4>
                        </div>
                    </li>
                </ul>
                <!-- Above laptop size: flexbox  -->
                <ul class="flex-numbers-container hidden-xs hidden-sm">
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>18m+</h3>
                            <h4 class="default-paragraph">Students learning</h4>
                        </div>
                    </li>
                    <div class="flex-item-line-segment-container">
                        <div class="flex-item-line-segment"></div>
                    </div>
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>186k+</h3>
                            <h4 class="default-paragraph">Active courses</h4>
                        </div>
                    </li>
                    <div class="flex-item-line-segment-container">
                        <div class="flex-item-line-segment"></div>
                    </div>
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>68k+</h3>
                            <h4 class="default-paragraph">Instructors online</h4>
                        </div>
                    </li>
                    <div class="flex-item-line-segment-container">
                        <div class="flex-item-line-segment"></div>
                    </div>
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>$338m+</h3>
                            <h4 class="default-paragraph">Earned by instructors</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="image-text-column-wide _2520">
        <style>
            ._2520 {
                margin-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._2520 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                ._2520 {
                    margin-bottom: 75px;
                }
            }

            .video-open._2520 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                .video-open._2520 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                .video-open._2520 {
                    margin-bottom: 75px;
                }
            }

            ._2520 {
                background-color: #FFFFFF;
            }

            @media (min-width: 992px) {
                ._2520 .inner-text {
                    padding-top: 200px;
                    padding-bottom: 200px;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-5 image-column match-height" style="background-image: url(&quot;https://s3.amazonaws.com/cms-uploaded-images/kyK2e0BxSTSDMOUDlvlf_homepage-intro-image.jpg&quot;); height: 688px;">
                    <img src="https://s3.amazonaws.com/cms-uploaded-images/kyK2e0BxSTSDMOUDlvlf_homepage-intro-image.jpg">
                </div>
                <div class="col-md-1 hidden-sm hidden-xs"></div>
                <div class="col-xs-12 col-md-5 text-column vertically-align-contents match-height" style="height: 688px;">
                    <div class="inner-text">
                        <h1 class="default-header ">Provide a world-class learning experience</h1>
                        <p class="default-paragraph">Let Teachable do the heavy lifting so you can focus on what matters - creating courses with our user-friendly interface.</p>
                        <div class="button-container">
                            <svg class="play-button" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 141 141" style="enable-background:new 0 0 141 141;"
                              xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #FF7F45;
                                    }

                                    .st1 {
                                        fill: #FFFFFF;
                                    }
                                </style>
                                <circle class="st0" cx="70.5" cy="70.5" r="70"></circle>
                                <path class="st1" d="M62.5,58.4v24.2l19-12.1L62.5,58.4z"></path>
                            </svg>
                            <a class="default-paragraph orange hidden-xs hidden-sm">Watch our short demo video</a>
                        </div>
                        <p class="default-paragraph">Allow your students to easily sign up to your school, view curriculums and previews, and purchase your courses.</p>
                        <p class="default-paragraph orange hidden-md hidden-lg hidden-xl">Watch our short demo video</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="top-of-video" data-wistiaid="qgdtbummf6"></div>
        <div class="container video-container">
            <div class="row">
                <div class="col-xs-12">
                    <script src="https://fast.wistia.com/embed/medias/qgdtbummf6.jsonp" async=""></script>
                    <script src="https://fast.wistia.com/assets/external/E-v1.js" async=""></script>
                    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                        <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                            <div class="wistia_embed wistia_async_qgdtbummf6 videoFoam=true wistia_embed_initialized" style="height:100%;width:100%" id="wistia-qgdtbummf6-1">
                                <div id="wistia_chrome_25" class="w-chrome" tabindex="-1"
                                  style="display: inline-block; height: 100%; margin: 0px; padding: 0px; position: relative; vertical-align: top; width: 100%; zoom: 1; outline: none; overflow: hidden; box-sizing: content-box;">
                                    <div id="wistia_grid_31_wrapper" style="display: block;">
                                        <div id="wistia_grid_31_above"></div>
                                        <div id="wistia_grid_31_main">
                                            <div id="wistia_grid_31_behind"></div>
                                            <div id="wistia_grid_31_center">
                                                <div class="w-video-wrapper w-css-reset" style="clip: rect(0px, 0px, 0px, 0px); height: 100%; position: absolute; top: 0px; width: 100%; opacity: 1; background-color: rgb(0, 0, 0);"></div>
                                                <div class="w-ui-container" style="height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; opacity: 1;"></div>
                                            </div>
                                            <div id="wistia_grid_31_front"></div>
                                            <div id="wistia_grid_31_top_inside">
                                                <div id="wistia_grid_31_top"></div>
                                            </div>
                                            <div id="wistia_grid_31_bottom_inside">
                                                <div id="wistia_grid_31_bottom"></div>
                                            </div>
                                            <div id="wistia_grid_31_left_inside">
                                                <div id="wistia_grid_31_left"></div>
                                            </div>
                                            <div id="wistia_grid_31_right_inside">
                                                <div id="wistia_grid_31_right"></div>
                                            </div>
                                        </div>
                                        <div id="wistia_grid_31_below"></div>
                                        <style id="wistia_32_style" type="text/css" class="wistia_injected_style">
                                            #wistia_grid_31_wrapper {
                                                -moz-box-sizing: content-box;
                                                -webkit-box-sizing: content-box;
                                                box-sizing: content-box;
                                                font-family: Arial, sans-serif;
                                                font-size: 14px;
                                                height: 100%;
                                                position: relative;
                                                text-align: left;
                                                width: 100%;
                                            }

                                            #wistia_grid_31_wrapper * {
                                                -moz-box-sizing: content-box;
                                                -webkit-box-sizing: content-box;
                                                box-sizing: content-box;
                                            }

                                            #wistia_grid_31_above {
                                                position: relative;
                                            }

                                            #wistia_grid_31_main {
                                                display: block;
                                                height: 100%;
                                                position: relative;
                                            }

                                            #wistia_grid_31_behind {
                                                height: 100%;
                                                left: 0;
                                                position: absolute;
                                                top: 0;
                                                width: 100%;
                                            }

                                            #wistia_grid_31_center {
                                                height: 100%;
                                                overflow: hidden;
                                                position: relative;
                                                width: 100%;
                                            }

                                            #wistia_grid_31_front {
                                                display: none;
                                                height: 100%;
                                                left: 0;
                                                position: absolute;
                                                top: 0;
                                                width: 100%;
                                            }

                                            #wistia_grid_31_top_inside {
                                                position: absolute;
                                                left: 0;
                                                top: 0;
                                                width: 100%;
                                            }

                                            #wistia_grid_31_top {
                                                width: 100%;
                                                position: absolute;
                                                bottom: 0;
                                                left: 0;
                                            }

                                            #wistia_grid_31_bottom_inside {
                                                position: absolute;
                                                left: 0;
                                                bottom: 0;
                                                width: 100%;
                                            }

                                            #wistia_grid_31_bottom {
                                                width: 100%;
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                            }

                                            #wistia_grid_31_left_inside {
                                                height: 100%;
                                                position: absolute;
                                                left: 0;
                                                top: 0;
                                            }

                                            #wistia_grid_31_left {
                                                height: 100%;
                                                position: absolute;
                                                right: 0;
                                                top: 0;
                                            }

                                            #wistia_grid_31_right_inside {
                                                height: 100%;
                                                right: 0;
                                                position: absolute;
                                                top: 0;
                                            }

                                            #wistia_grid_31_right {
                                                height: 100%;
                                                left: 0;
                                                position: absolute;
                                                top: 0;
                                            }

                                            #wistia_grid_31_below {
                                                position: relative;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-quote _5">
        <style>
            ._5 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                ._5 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._5 {
                    margin-bottom: 100px;
                }
            }

            ._5 .left-column {
                background-color: #F4FAFA
            }

            ._5 .color {
                background-color: #F4FAFA
            }
        </style>

        <div class="color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="default-green-header ">Effortless setup</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>With just a few clicks, you’ll get a fully functioning school with learning management, payment gateways, and sales &amp; marketing tools.</p>
                        </div>
                        <h1 class="default-green-header ">Exceptional learning experience</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Your content is your greatest asset. Take it to the next level with Teachable’s top-notch virtual classroom experience.</p>
                        </div>
                        <h1 class="default-green-header ">Simple yet powerful website customization</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Get a professional website out-of-the-box with minimal configuration necessary. Plus, enjoy full control to personalize any aspect of it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 left-column match-height" style="height: 724px;">
                    <div class="text">
                        <h1 class="default-green-header">Effortless setup</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>With just a few clicks, you’ll get a fully functioning school with learning management, payment gateways, and sales &amp; marketing tools.</p>
                        </div>
                        <h1 class="default-green-header">Exceptional learning experience</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Your content is your greatest asset. Take it to the next level with Teachable’s top-notch virtual classroom experience.</p>
                        </div>
                        <h1 class="default-green-header">Simple yet powerful website customization</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Get a professional website out-of-the-box with minimal configuration necessary. Plus, enjoy full control to personalize any aspect of it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 right-column match-height clearfix" style="height: 724px;">
                    <div class="image" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8);"></div>
                    <div class="quote">
                        <img class="orange-circle" src="https://teachable.com/assets/blockquote-orange-d24380ebe646a526fc1fa70b279fa6531394ee3ddc19bf7bca406c709a6f08f3.svg">
                        <blockquote>“I've used Teachable to sell hundreds of thousands of dollars in online courses. If you are thinking of creating your own online course, Teachable is the place to be.”</blockquote>
                        <cite>
                            Melyssa Griffin, <a href="http://melyssagriffin.com" target="_blank" rel="noopener noreferrer">melyssagriffin.com</a>
                        </cite>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="five-simple-steps _6">
        <style>
            ._6 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                ._6 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._6 {
                    margin-bottom: 75px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="default-header">Share your knowledge in five simple steps</h1>
                    <ul class="steps-nav">
                        <div class="line"></div>
                        <li class="steps active" data-step="1">
                            <a href="#step1" data-scroll="false">
                                <h2>1</h2>
                                <p>Create a course for free</p>
                            </a>
                        </li>
                        <li class="steps" data-step="2">
                            <a href="#step2" data-scroll="false">
                                <h2>2</h2>
                                <p>Upload your content</p>
                            </a>
                        </li>
                        <li class="steps" data-step="3">
                            <a href="#step3" data-scroll="false">
                                <h2>3</h2>
                                <p>Make your school beautiful</p>
                            </a>
                        </li>
                        <li class="steps" data-step="4">
                            <a href="#step4" data-scroll="false">
                                <h2>4</h2>
                                <p>Engage your students</p>
                            </a>
                        </li>
                        <li class="steps" data-step="5">
                            <a href="#step5" data-scroll="false">
                                <h2>5</h2>
                                <p>Share knowledge and be rewarded</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row second-row active" data-step="1">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step1-3fd2c54b7e72864447f8592b46ffed7927760eeb11ca09a77b9b3a7426a76b29.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Create a course for free in minutes with Teachable</h1>
                    <p class="default-paragraph">Get started with just your email and the name of your school. It’s as simple as that -- no payments or credit card information required.</p>
                    <a class="next-step green-button">Next step&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
            <div class="row second-row" data-step="2">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step2-ca89a5b5172f4db76cdc855c5f9f8f0915f0ec6f08e26fc509a027f4439c4022.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Access everything you need to build rich, interactive lectures</h1>
                    <p class="default-paragraph">Seamlessly upload videos, audio, presentations, images, and text. Effortlessly create quizzes and start discussion forums.</p>
                    <a class="next-step green-button">Next step&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
            <div class="row second-row" data-step="3">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step3-8f437aa13e47280d12ebc583e8f93dc75924ec2c796d7972c02e2f87bc3737ff.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Showcase a stunning school with your own branding</h1>
                    <p class="default-paragraph">Tailor the look and feel of your school to make it your own -- no coding skills required. Leverage our beautiful design to present a captivating course website.</p>
                    <a class="next-step green-button">Next step&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
            <div class="row second-row" data-step="4">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step4-7c0f831a75108d29133c05c3c702da22ba47e389e582fa333d64101d7aac8ce6.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Build a vibrant community around your school</h1>
                    <p class="default-paragraph">Impress your students with a world-class online course experience. Nurture your community using our ready-to-go comment and email system.</p>
                    <a class="next-step green-button">Next step&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
            <div class="row second-row" data-step="5">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step5-675f78f2901de7b19928570ae8cff205a4b34dc3c38e72adb8aad9b5a8bef953.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Attract students and sell your online courses</h1>
                    <p class="default-paragraph">Launch your course and join thousands of online instructors already making millions on Teachable. Accept payments and enrollments instantly.</p>
                    <a class="next-step green-button">Get started&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="showcase _7">
        <style>
            ._7 {
                margin-bottom: 150px;
            }

            @media (max-width: 991px) {
                ._7 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                ._7 {
                    margin-bottom: 85px;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <h1 class="default-header">The most gorgeous online schools are built on Teachable</h1>
                <p class="default-paragraph subheader">Take your content to the next level by packaging it in a beautiful, professional, and fully personalized online school</p>
            </div>
            <div class="slider-parent">
                <div class="slider homepage-slider slick-initialized slick-slider"><button type="button" class="slick-prev slick-arrow" style="display: block;">‹</button>
                    <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track" style="opacity: 1; width: 4840px; transform: translate3d(-1320px, 0px, 0px);" role="listbox">
                            <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/xry5vzxQSuaMySPNhaug_Nicole%20Walters%20Headshot.png">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://s3.amazonaws.com/cms-uploaded-images/3RWSdMQlinGJY7diShFw_nicole-walters.jpg">
                                    <p class="default-paragraph">Nicole Walters, $1k in 1 Day Academy</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/lsfYuKBpSFOdaK4QQ3n2_homepage-featured-everytuesday.jpg">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jRczQFwrTHGEeyIgTWJG">
                                    <p class="default-paragraph">Teela Cunningham, Every Tuesday</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 440px;">
                                <img class="big-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/XKMKaKhXSniPF7Ok6xh3">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IgamM6IzTySKfgHAeNUV">
                                    <p class="default-paragraph">Melyssa Griffin, melyssagriffin.com</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide00" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/HodQVq0YS7qSVCtXSNHK_homepage-featured-sketchmaster.jpg">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jT5L8vR1qWrKfiUg3gCQ">
                                    <p class="default-paragraph">Peter Nowell, Sketch Master</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide01" style="width: 440px;">
                                <img class="big-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IC5in4HlQB23O5MEj7nu">
                                <div class="text big-image-text active">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/UQ2vDQcTQq88XYQlisDg">
                                    <p class="default-paragraph">Pat Flynn, Smart Passive Income</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide02" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/xry5vzxQSuaMySPNhaug_Nicole%20Walters%20Headshot.png">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://s3.amazonaws.com/cms-uploaded-images/3RWSdMQlinGJY7diShFw_nicole-walters.jpg">
                                    <p class="default-paragraph">Nicole Walters, $1k in 1 Day Academy</p>
                                </div>
                            </div>
                            <div class="item slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/lsfYuKBpSFOdaK4QQ3n2_homepage-featured-everytuesday.jpg">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jRczQFwrTHGEeyIgTWJG">
                                    <p class="default-paragraph">Teela Cunningham, Every Tuesday</p>
                                </div>
                            </div>
                            <div class="item slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide04" style="width: 440px;">
                                <img class="big-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/XKMKaKhXSniPF7Ok6xh3">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IgamM6IzTySKfgHAeNUV">
                                    <p class="default-paragraph">Melyssa Griffin, melyssagriffin.com</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/HodQVq0YS7qSVCtXSNHK_homepage-featured-sketchmaster.jpg">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jT5L8vR1qWrKfiUg3gCQ">
                                    <p class="default-paragraph">Peter Nowell, Sketch Master</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 440px;">
                                <img class="big-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IC5in4HlQB23O5MEj7nu">
                                <div class="text big-image-text active">
                                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/UQ2vDQcTQq88XYQlisDg">
                                    <p class="default-paragraph">Pat Flynn, Smart Passive Income</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 440px;">
                                <img class="big-image" src="https://s3.amazonaws.com/cms-uploaded-images/xry5vzxQSuaMySPNhaug_Nicole%20Walters%20Headshot.png">
                                <div class="text big-image-text">
                                    <img class="person-image" src="https://s3.amazonaws.com/cms-uploaded-images/3RWSdMQlinGJY7diShFw_nicole-walters.jpg">
                                    <p class="default-paragraph">Nicole Walters, $1k in 1 Day Academy</p>
                                </div>
                            </div>
                        </div>
                    </div>




                    <button type="button" class="slick-next slick-arrow" style="display: block;">›</button>
                </div>
            </div>
            <div class="small-text">
                <div class="text active">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/UQ2vDQcTQq88XYQlisDg">
                    <p class="default-paragraph">Pat Flynn, Smart Passive Income</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://s3.amazonaws.com/cms-uploaded-images/3RWSdMQlinGJY7diShFw_nicole-walters.jpg">
                    <p class="default-paragraph">Nicole Walters, $1k in 1 Day Academy</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jRczQFwrTHGEeyIgTWJG">
                    <p class="default-paragraph">Teela Cunningham, Every Tuesday</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/IgamM6IzTySKfgHAeNUV">
                    <p class="default-paragraph">Melyssa Griffin, melyssagriffin.com</p>
                </div>
                <div class="text">
                    <img class="person-image" src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/jT5L8vR1qWrKfiUg3gCQ">
                    <p class="default-paragraph">Peter Nowell, Sketch Master</p>
                </div>
            </div>
        </div>
        <div class="container container-beneath-slider">
            <div class="row">
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">User-friendly website builder</h1>
                    <p class="default-paragraph">Customize your online school with an intuitive user interface. Design your homepage, lectures, and sales pages to fit your specific needs.</p>
                </div>
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Fully optimized for web and mobile</h1>
                    <p class="default-paragraph">Provide your students a consistent and captivating learning experience across desktops, tablets, and smartphones. Present a website that looks great on any device.</p>
                </div>
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Advanced developer customization</h1>
                    <p class="default-paragraph">With our Power Editor, you or your team can dig into the code and modify any aspect of your online school. Your ambition is the only limit to what you can accomplish.</p>
                </div>
            </div>
            <div class="row last-row">
                <div class="col-xs-12">
                    <a href="/features" class="dark-green-button">More features</a>
                    <p class="default-paragraph">Market leaders use Teachable to enrich their brand &amp; business.</p>
                    <div class="clearfix company-logos">
                        <img src="https://teachable.com/assets/showcase/logo1-492edcd6564167cc91a0162d028da0669ae87f2959ccf683b78b4a176e9338c4.png">
                        <img src="https://teachable.com/assets/showcase/logo2-d60d37fa3443fe00a9e47bc2c42a43799a0faf2f1f1d81b9f9441bcb77d17e60.png">
                        <img src="https://teachable.com/assets/showcase/logo3-459469bb472753db1c99486b03df57852e15959cc830efe60d984db56f171f9c.png">
                        <img src="https://teachable.com/assets/showcase/logo-pearson-42979f87ef26b43c43d1696ea250245731ebc4fecf738c3b0442bdec64a2475f.svg">
                        <img src="https://teachable.com/assets/showcase/logo5-522181dfddb7bfe3ab06b9b76d635dbb46fd77748a9b14a850a1cc6b0290bc60.png">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-cards _8">
        <style>
            ._8 {
                margin-bottom: 115px;
            }

            @media (max-width: 991px) {
                ._8 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._8 {
                    margin-bottom: 100px;
                }
            }
        </style>
        <div class="container">
            <div class="row header-row">
                <div class="col-xs-12">
                    <h1 class="default-header">Join creators who have made over $300m in sales</h1>
                    <p class="default-paragraph">Their secret? Focusing 100% of their effort on creating and promoting their amazing courses, and letting Teachable take care of the rest.</p>
                </div>
            </div>
            <div class="row cards-row">
                <div class="col-xs-12 col-md-4 card-column">
                    <div class="card-container">
                        <div class="card-front" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/SQqL7NUVR8Ov0zJv7CC9);">
                            <div class="card-front-text">
                                <div class="name">
                                    CS Lakin
                                </div>
                                <div class="course-name">
                                    <em>Live. Write. Thrive.</em>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <p class="testimonial-text">“What really has clinched it for me, why I chose Teachable, and why I love it and will continue to do my online courses with Teachable, is the great support that they have.”</p>
                            <div class="card-bottom">
                                <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/1Q8XrSq5SbWFgfqocPw2">
                                <div class="card-bottom-attribution">
                                    <div class="card-bottom-attribution-bottom ">
                                        <div class="name">CS Lakin</div>
                                        <a href="http://cslakin.teachable.com" target="_blank" rel="noopener noreferrer">View course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 card-column">
                    <div class="card-container middle">
                        <div class="card-front" style="background-image: none;">
                            <div class="card-front-text">
                                <div class="name">
                                    Alan Perlman
                                </div>
                                <div class="course-name">
                                    <em>UAV Coach</em>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <p class="testimonial-text">“I was struggling to get my course off the ground, but I discovered Teachable and it was so easy to set everything up, great support team, and overall an awesome experience.”</p>
                            <div class="card-bottom">
                                <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/7xttxlETVOIUtnNtDWC5">
                                <div class="card-bottom-attribution">
                                    <div class="card-bottom-attribution-bottom ">
                                        <div class="name">Alan Perlman</div>
                                        <a href="http://learn.uavcoach.com" target="_blank" rel="noopener noreferrer">View course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 card-column">
                    <div class="card-container">
                        <div class="card-front" style="background-image: url(https://s3.amazonaws.com/cms-uploaded-images/91dZmzQ3RdmL48qQ8BNO_homepage-cardtestimonial-juliestoian.jpg);">
                            <div class="card-front-text">
                                <div class="name">
                                    Julie Stoian
                                </div>
                                <div class="course-name">
                                    <em>Digital Insiders For Life</em>
                                </div>
                            </div>
                        </div>
                        <div class="card-back">
                            <p class="testimonial-text">“I went from creating small, inexpensive courses to large courses that resulted in 5-figure income months. This is the perfect solution for service-based entrepreneurs who want to scale their
                                business.”</p>
                            <div class="card-bottom">
                                <img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/HfVh1POeQCaTQbrr0D3r">
                                <div class="card-bottom-attribution">
                                    <div class="card-bottom-attribution-bottom ">
                                        <div class="name">Julie Stoian</div>
                                        <a href="http://school.juliestoian.com" target="_blank" rel="noopener noreferrer">View course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-partial _9">
        <style>
            ._9 {
                margin-bottom: 60px;
            }

            @media (max-width: 991px) {
                ._9 {
                    margin-bottom: 60px;
                }
            }

            @media (max-width: 767px) {
                ._9 {
                    margin-bottom: 60px;
                }
            }

            /*CUSTOM EXPID2 CODE*/
            ._9 {
                background-color: #FFFFFF
            }

            ._9 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._9 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._9 {
                    padding-top: 0px;
                }
            }

            ._9 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._9 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._9 {
                    padding-bottom: 0px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text">WHAT ARE YOU WAITING FOR?</h1>
                    <h2 class="default-header" style="max-width: 750px">Join thousands of creators making a difference every day using Teachable</h2>
                    <a href="/create-account?utm_source=home-testimonial" class="orange-button">Get started for free</a>
                </div>
            </div>
        </div>
    </section>

    <section class="webinar _10">
        <style>
            ._10 {
                margin-bottom: 140px;
            }

            @media (max-width: 991px) {
                ._10 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._10 {
                    margin-bottom: 80px;
                }
            }
        </style>
        <div class="url-string hidden">quickstart1</div>
        <div class="background" style="background-image: url(https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/97mKmvzDR5auFMsSHTFG);" onload="$(this).fadeIn();">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 pull-right green-box">
                        <h2>Teachable Quickstart Webinar</h2>
                        <div class="description">
                            <p>Learn how to create your own online school and set up your first course using Teachable (without any technical headaches)</p>
                            <a href="https://teachable.com/webinars/quickstart1/register?src=homepage" target="_blank" rel="noopener noreferrer">Register for the webinar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="boxes-of-people remove-bottom-margin _11">
        <style>
            ._11 {
                margin-bottom: 80px;
            }

            @media (max-width: 991px) {
                ._11 {
                    margin-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                ._11 {
                    margin-bottom: 80px;
                }
            }
        </style>
        <div class="container">
            <h1 class="default-header">Your success is our success</h1>
            <p class="default-paragraph">Our diverse team of professionals shares a passion for online education. We tirelessly work to improve our product, content, and community to help you achieve your goals.</p>
        </div>
        <div class="container-fluid">
            <div class="row pictures-grid">
                <div class="hidden-xs hidden-sm col-md-3 column">
                    <img src="https://teachable.com/assets/boxes-of-people/beard-e6c9dc7950adc1fd50cd62ca97d874fcc65d20e87e831de29ed09c4f4eb47156.jpg" alt=""><img src="https://teachable.com/assets/boxes-of-people/peace-70bdbab9bc81c1b6fe035aaeaf2e5749b43bf04a4614255a0dcca34d5ad9c484.jpg"
                      alt="">
                    <img src="https://teachable.com/assets/boxes-of-people/jade-6b63b22955668550d9723d8871cfa330aed18a01e8c61e3f3c10f20286bde0d2.jpg" alt="">
                    <img src="https://teachable.com/assets/boxes-of-people/whitelady-886d415f2c99b275c32449e331fb04e9592234b20108fe6d087da06eea6b31e2.jpg" alt=""><img
                      src="https://teachable.com/assets/boxes-of-people/teacher-901e005114ea89617f63f2281b941e6b5d512d54090e0ed01ca62ee072c46892.jpg" alt="">
                </div>
                <div class="hidden-xs col-sm-4 col-md-3 column">
                    <img src="https://teachable.com/assets/boxes-of-people/yellowsweater-008ad9cd17aeb7bf4b66d07e62a81b110352b6f8309ff73b90fcbd45a898644d.jpg" alt="">
                    <img src="https://teachable.com/assets/boxes-of-people/kyle-05de8255f450b88a1268f5e1eaef1ac24bcaee684f15cb87c7cf5f44a00c7d4c.jpg" alt=""><img src="https://teachable.com/assets/boxes-of-people/tealshirt-f3fc7822b6b1dc6e90cfe65143c857fc067a1205a2c1eaaf5856b8e7a544e7ca.jpg"
                      alt="">
                </div>
                <div class="col-sm-8 col-md-6 column">
                    <div class="row-1 clearfix">
                        <img src="https://teachable.com/assets/boxes-of-people/ankur-915bd38cb9d4c7a881ef6ca90681c317e497f44766b6f458261caf89c0901b94.jpg" class="ankur" alt="">
                        <div class="row-1-col-2">
                            <div class="row-1-col-2-row-1">
                                <img src="https://teachable.com/assets/boxes-of-people/leaves-f2d8049a1e75192632d5f3e1f74736deae03667b053b5f544a708e089e5e56a2.jpg" class="leaves" alt=""><img
                                  src="https://teachable.com/assets/boxes-of-people/computer-1a3879cbabc1783a1c514b5c4f94c736c3310bff3d761029d74779cd0e305d70.jpg" class="computer" alt="">
                            </div>
                            <div class="row-1-col-2-row-2">
                                <img src="https://teachable.com/assets/boxes-of-people/laurence-e0a574262c9055f0cbaf617d8bfd1c604af0fa9b27c9c72b4c013d0eb9f2d6f1.jpg" class="laurence" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row-2 clearfix">
                        <img src="https://teachable.com/assets/boxes-of-people/writer-86733135fcc6a86d2826eaa17e1648a1cc03aed3577d8228118f1c77cb7dda5e.jpg" class="writer"><img
                          src="https://teachable.com/assets/boxes-of-people/don-6affb7ff54e752829d247f4cee47c5c01dbce5628631d8261554e8f470a57664.jpg" class="don"><img src="https://teachable.com/assets/boxes-of-people/hat-10f420ab1ce5ccc04b13dfeee96641b809be6658295ac328a2006b59ef14607b.jpg"
                          class="hat">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-partial _12">
        <style>
            ._12 {
                margin-bottom: 85px;
            }

            @media (max-width: 991px) {
                ._12 {
                    margin-bottom: 85px;
                }
            }

            @media (max-width: 767px) {
                ._12 {
                    margin-bottom: 85px;
                }
            }

            /*CUSTOM EXPID2 CODE*/
            ._12 {
                background-color: #FFFFFF
            }

            ._12 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._12 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._12 {
                    padding-top: 0px;
                }
            }

            ._12 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._12 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._12 {
                    padding-bottom: 0px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text">CREATE YOUR FIRST COURSE</h1>
                    <h2 class="default-header" style="max-width: 750px">Start now and turn your knowledge into a profitable online course</h2>
                    <a href="/create-account?utm_source=home-bottom" class="orange-button">Get started</a>
                </div>
            </div>
        </div>
    </section>



@endsection
