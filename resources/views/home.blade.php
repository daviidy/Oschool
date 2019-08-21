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
                            <h1>On ne vas pas à l'école, on y est dèja.</h1>
                            <h2>Faites vous accompagner par nos mentors pendant votre apprentissage et réalisez des projets professionnalisants.</h2>
                            <div class="input-container left">
                                <div class="hidden redirect">/create-account</div>
                                <div class="hidden iterable-event"></div>
                                <div class="hidden iterable-campaign"></div>
                                <input id="email-input" type="email" autofocus="autofocus" placeholder="Que voulez-vous apprendre">
                                <button id="email-submit-button" class="orange-button">Commencez</button>
                                <div class="hidden marketing-email-opt-in-container">
                                    <input class="marketing-email-opt-in-input" type="checkbox" name="opted-into-marketing-email">
                                    <label for="opted-into-marketing-email">J'accepte de recevoir des mises à jour de produit et de marketing de oschool</label>
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
                    <h1 class="default-header">Votre reussite n'est pas loin</h1>
                    <h1>
                    </h1>
                    <h2 class="default-paragraph">Rejoignez les +2000 étudiants qui utilisent oschool pour apprendre les compétences les plus rechercher sur le marché de l'emploi.</h2>
                </div>
            </div>
            <div class="row">
                <!--  Below laptop size: bootstrap -->
                <ul class="col-xs-12 hidden-md hidden-lg">
                    <li class="col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>+ 2k</h3>
                            <h4 class="default-paragraph">Apprenants</h4>
                        </div>
                    </li>
                    <li class="flex-item-number col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>+ 15</h3>
                            <h4 class="default-paragraph">Parcours disponible</h4>
                        </div>
                    </li>
                    <li class="flex-item-number col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>+ 10</h3>
                            <h4 class="default-paragraph">Ecoles partenaires</h4>
                        </div>
                    </li>
                    <li class="flex-item-number col-sm-6 col-xs-12">
                        <div class="inner-li">
                            <h3>+ 10k</h3>
                            <h4 class="default-paragraph">Personnes dans la communauté Oschool</h4>
                        </div>
                    </li>
                </ul>
                <!-- Above laptop size: flexbox  -->
                <ul class="flex-numbers-container hidden-xs hidden-sm">
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>+ 2k</h3>
                            <h4 class="default-paragraph">Apprenants</h4>
                        </div>
                    </li>
                    <div class="flex-item-line-segment-container">
                        <div class="flex-item-line-segment"></div>
                    </div>
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>+ 15</h3>
                            <h4 class="default-paragraph">Parcours disponible</h4>
                        </div>
                    </li>
                    <div class="flex-item-line-segment-container">
                        <div class="flex-item-line-segment"></div>
                    </div>
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>+ 10</h3>
                            <h4 class="default-paragraph">Ecoles partenaires</h4>
                        </div>
                    </li>
                    <div class="flex-item-line-segment-container">
                        <div class="flex-item-line-segment"></div>
                    </div>
                    <li class="flex-item-number">
                        <div class="inner-li">
                            <h3>+ 10k</h3>
                            <h4 class="default-paragraph">Personnes dans la communauté Oschool</h4>
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
                        <h1 class="default-header ">Suivez des formations 100% en ligne auprès des meilleurs universités et entreprises d'Afrique</h1>
                        <p class="default-paragraph">Oschool vous offre la possibilité de poursuivre des diplômes et certificats 100% en ligne, auprès des meilleures universités d’Afrique.</p>
                        <!--div class="button-container">
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
                        </div-->
                        <p class="default-paragraph">Profitez de l’expertise de Oschool dans le domaine et de son offre de formation à distance complète et variée pour décrocher un diplôme universitaire</p>
                        <p class="default-paragraph orange hidden-md hidden-lg hidden-xl">et réaliser vos plus grandes ambitions professionnelles.</p>
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
                        <h1 class="default-green-header ">Cours interactifs</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>les cours Oschool sont des cours où les participantes et participants peuvent intervenir immédiatement. Dans ces cours, la formatrice ou le formateur est directement présent avec les participantes et participants.</p>
                        </div>
                        <h1 class="default-green-header ">Aide et assistance </h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Oschool associe un mentor dans le domaine de votre formation pour vous aidez à mieux la suivre .</p>
                        </div>
                        <h1 class="default-green-header ">Certificats et diplômes</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Suivre tes cours sur oschool à votre rythme, tout en obtenant un diplôme reconnu par l'Etat et les entreprises partenaires, ou pour améliorer votre performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 left-column match-height" style="height: 724px;">
                    <div class="text">
                        <h1 class="default-green-header">Cours interactifs</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>les cours Oschool sont des cours où les participantes et participants peuvent intervenir immédiatement. Dans ces cours, la formatrice ou le formateur est directement présent avec les participantes et participants.</p>
                        </div>
                        <h1 class="default-green-header">Aide et assistance </h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Oschool associe un mentor dans le domaine de votre formation pour vous aidez à mieux la suivre .</p>
                        </div>
                        <h1 class="default-green-header">Certificats et diplômes</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Suivre tes cours sur oschool à votre rythme, tout en obtenant un diplôme reconnu par l'Etat et les entreprises partenaires, ou pour améliorer votre performance.</p>
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
                    <h1 class="default-header">Pourquoi choisir Oschool?</h1>
                    <ul class="steps-nav">
                        <div class="line"></div>
                        <li class="steps active" data-step="1">
                            <a href="#step1" data-scroll="false">
                                <h2>1</h2>
                                <p>Projets de la vie réelle conçus par des experts de l'industrie</p>
                            </a>
                        </li>
                        <li class="steps" data-step="2">
                            <a href="#step2" data-scroll="false">
                                <h2>2</h2>
                                <p>Mentorat</p>
                            </a>
                        </li>
                        <li class="steps" data-step="3">
                            <a href="#step3" data-scroll="false">
                                <h2>3</h2>
                                <p>Programme d'apprentissage flexible</p>
                            </a>
                        </li>
                        <li class="steps" data-step="4">
                            <a href="#step4" data-scroll="false">
                                <h2>4</h2>
                                <p>Accompagnement à l'emploi</p>
                            </a>
                        </li>
                        <!--li class="steps" data-step="5">
                            <a href="#step5" data-scroll="false">
                                <h2>5</h2>
                                <p>Share knowledge and be rewarded</p>
                            </a>
                        </li-->
                    </ul>
                </div>
            </div>
            <div class="row second-row active" data-step="1" id="step1">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step1-3fd2c54b7e72864447f8592b46ffed7927760eeb11ca09a77b9b3a7426a76b29.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Projets de la vie réelle conçus par des experts de l'industrie</h1>
                    <p class="default-paragraph">Avec des projets du monde réel construits en partenariat avec des experts du secteur, vous serez en mesure de constituer un portefeuille prêt à l'emploi, et directement utilisable par les entreprises.</p>
                    <!--a class="next-step green-button">Suivant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="2" id="step2">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step2-ca89a5b5172f4db76cdc855c5f9f8f0915f0ec6f08e26fc509a027f4439c4022.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Mentorat</h1>
                    <p class="default-paragraph">Obtenez un mentor compétent qui oriente votre apprentissage et qui se concentre sur les réponses à vos questions, vous motive et vous garde sur la bonne voie.</p>
                    <!--a class="next-step green-button">Suivant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="3" id="step3">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step3-8f437aa13e47280d12ebc583e8f93dc75924ec2c796d7972c02e2f87bc3737ff.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Programme d'apprentissage flexible</h1>
                    <p class="default-paragraph">Obtenez un plan d'apprentissage personnalisé sur mesure pour votre vie bien remplie. Avec des paiements mensuels faciles, vous pouvez apprendre à votre rythme et atteindre vos objectifs personnels.</p>
                    <!--a class="next-step green-button">Suivant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a-->
                </div>
            </div>
            <div class="row second-row" data-step="4" id="step4">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step4-7c0f831a75108d29133c05c3c702da22ba47e389e582fa333d64101d7aac8ce6.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Accompagnement à l'emploi</h1>
                    <p class="default-paragraph">Vous aurez accès à des sessions de coaching en carrière, à des conseils de préparation aux entretiens, à des résumés de CV et à des critiques de profils professionnels en ligne pour vous aider à progresser dans votre carrière.</p>
                    <a class="next-step green-button">Commencer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div>
            <!--div class="row second-row" data-step="5">
                <div class="col-md-7 image-column">
                    <img src="https://teachable.com/assets/five-steps/step5-675f78f2901de7b19928570ae8cff205a4b34dc3c38e72adb8aad9b5a8bef953.svg">
                </div>
                <div class="col-md-5">
                    <h1 class="default-header">Attract students and sell your online courses</h1>
                    <p class="default-paragraph">Launch your course and join thousands of online instructors already making millions on Teachable. Accept payments and enrollments instantly.</p>
                    <a class="next-step green-button">Get started&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&gt;</a>
                </div>
            </div-->
        </div>
    </section>
    <script type="text/javascript">
    $('.steps-nav a').on('click', function (event) {
        event.preventDefault();

        $('.active').removeClass('active');
        $(this).parent().addClass('active');
        $('.second-row').hide();
        $($(this).attr('href')).show();
    });

    $('.steps-nav a:first .next-step').trigger('click'); // Default

    </script>
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
                <h1 class="default-header">Les meilleurs écoles sont sur Oschool</h1>
                <p class="default-paragraph subheader">Apprenez les compétences qu'il vous faut pour réussir votre carrière</p>
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
                    <h1 class="default-green-header">Une communauté engagée</h1>
                    <p class="default-paragraph">Customize your online school with an intuitive user interface. Design your homepage, lectures, and sales pages to fit your specific needs.</p>
                </div>
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Une équipe prête pour vous.</h1>
                    <p class="default-paragraph">Provide your students a consistent and captivating learning experience across desktops, tablets, and smartphones. Present a website that looks great on any device.</p>
                </div>
                <div class="col-xs-12 col-md-4 column">
                    <h1 class="default-green-header">Une présence dans la semaine</h1>
                    <p class="default-paragraph">With our Power Editor, you or your team can dig into the code and modify any aspect of your online school. Your ambition is the only limit to what you can accomplish.</p>
                </div>
            </div>
            <div class="row last-row">
                <div class="col-xs-12">
                    <a href="/features" class="dark-green-button">Tous nos écoles</a>
                    <p class="default-paragraph">En collaboration avec les leaders de l'industrie</p>
                    <div class="clearfix company-logos">
                        <img src="/images/divers/cinetpay.png">
                        <img src="/images/divers/Epistrophe.jpg">
                        <img src="/images/divers/bora.png">
                        <img src="/images/divers/final.png">
                        <img src="/images/divers/LogoM-1.png">
                        <img src="/images/divers/Logo-1.png">
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
                    <h1 class="default-header">Ils ont reussir avec Oschool</h1>
                    <p class="default-paragraph"></p>
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
                    <h1 class="small-uppercase-text">ET SI VOUS DEVENEZ UN MENTOR OSCHOOL?</h1>
                    <h2 class="default-header" style="max-width: 750px">Faite la difference en devenant mentor Oschool</h2>
                    <a href="/create-account?utm_source=home-testimonial" class="orange-button">Postuler pour devenir mentor.</a>
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
                        <h2>Rejoignez le show oschool sur facebook</h2>
                        <div class="description">
                            <p>Chaque vendredi à 19h, oschool organise un show sur facebook sur des questions de l'entreprenariat, du Elearning ... Vous êtes invités!  </p>
                            <a href="https://teachable.com/webinars/quickstart1/register?src=homepage" target="_blank" rel="noopener noreferrer">Clique et Rejoigne nous!</a>
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
            <h1 class="default-header">Votre succès est notre succès</h1>
            <p class="default-paragraph"></p>
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
                    <h1 class="small-uppercase-text">CHOISSER OSCHOOL POUR VOTRE FORMATION</h1>
                    <h2 class="default-header" style="max-width: 750px">Commencer dèh maintenant et transformer votre competence en une carrière profitable.</h2>
                    <a href="/create-account?utm_source=home-bottom" class="orange-button">Commencer maintenant</a>
                </div>
            </div>
        </div>
    </section>



@endsection
