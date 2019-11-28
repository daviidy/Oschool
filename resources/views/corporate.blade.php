@extends('layouts.menu')
@section('title', 'La destination de l\'apprentissage en milieu de travail')
@section('description', 'Apprendre et améliorer les compétences dans les domaines des affaires, de la technologie, du design, etc. Enseigné par des experts pour aider votre main-d\'œuvre à faire face à la situation.')
@section('image', '/images/divers/corporate.png')
@section('content')

<style media="screen">
/*! CSS Used from: https://teachable.com/assets/pages-f96915a54d791314c17147bc824a14df73c1814a49ffca8fc920660733f1f1a4.css ; media=all */
@media all{
@media (max-width: 767px){
.accept-payments .default-green-header{margin-top:0;}
}
@media (min-width: 768px){
.accept-payments .default-green-header{margin-top:0;}
}
@media (min-width: 992px){
.accept-payments .default-green-header{margin-top:200px;}
}
@media (max-width: 767px){
.accept-payments .default-paragraph{margin-bottom:50px;}
}
@media (min-width: 768px){
.accept-payments .default-paragraph{margin-bottom:50px;}
}
@media (min-width: 992px){
.accept-payments .default-paragraph{margin-bottom:25px;}
}
@media (max-width: 767px){
.accept-payments .hand{display:none;}
}
@media (min-width: 768px){
.accept-payments .hand{display:none;}
}
@media (min-width: 992px){
.accept-payments .hand{display:block;}
}
@media (max-width: 767px){
.accept-payments .payment-methods{max-width:100%;display:block;margin:auto;}
}
@media (min-width: 768px){
.accept-payments .payment-methods{max-width:360px;display:block;}
}
@media (min-width: 992px){
.accept-payments .payment-methods{max-width:360px;}
}
@media (max-width: 767px){
.big-image img{display:none;}
.big-image .big-image-div{display:block;}
}
@media (min-width: 768px){
.big-image img{display:none;}
.big-image .big-image-div{display:block;}
}
@media (min-width: 992px){
.big-image img{display:block;}
.big-image .big-image-div{display:none;}
}
.big-image img{width:100%;}
.big-image .big-image-div{background-size:cover;background-position-x:50%;}
.big-image-text-column .right-column h1{text-align:left;margin-bottom:6px;}
.big-image-text-column .right-column .default-paragraph-container:not(:last-of-type){margin-bottom:50px;}
.big-image-text-column .left-column{position:relative;z-index:1;}
@media (max-width: 767px){
.big-image-text-column .left-column img{position:static;width:100%;margin-bottom:50px;}
}
@media (min-width: 768px){
.big-image-text-column .left-column img{position:static;width:100%;margin-bottom:50px;}
}
@media (min-width: 992px){
.big-image-text-column .left-column img{position:absolute;right:0;width:auto;}
}
.cta-partial{text-align:center;}
.cta-partial h1{margin-bottom:10px;}
.cta-partial h2{margin:auto;margin-bottom:26px;}

@media (max-width: 767px){
.green-quote .color{display:block;padding-bottom:0;}
}
@media (min-width: 768px){
.green-quote .color{display:block;padding-bottom:30px;}
}
@media (min-width: 992px){
.green-quote .color{display:none;}
}
.green-quote .color h1.default-green-header{margin-bottom:10px;}
.green-quote .color .default-paragraph-container{margin-bottom:30px;}
.green-quote .left-column{padding:0;}
@media (max-width: 767px){
.green-quote .left-column{display:none;}
}
@media (min-width: 768px){
.green-quote .left-column{display:none;}
}
@media (min-width: 992px){
.green-quote .left-column{display:flex;align-items:center;}
}
.green-quote .left-column .text{bottom:0;right:0;}
@media (min-width: 992px){
.green-quote .left-column .text{width:425px;margin:auto;margin-right:125px;}
}
@media (min-width: 1200px){
.green-quote .left-column .text{margin-right:200px;}
}
@media (min-width: 1400px){
.green-quote .left-column .text{margin-right:200px;}
}
.green-quote .left-column .text h1.default-green-header{margin-bottom:10px;}
.green-quote .left-column .text .default-paragraph-container:not(:last-of-type){margin-bottom:30px;}
.green-quote .right-column{padding:0;background-color:#1ea69a;}
@media (max-width: 767px){
.green-quote .right-column{padding-top:0;}
}
@media (min-width: 768px){
.green-quote .right-column{padding-top:0;}
}
@media (min-width: 992px){
.green-quote .right-column{padding-top:450px;}
}
@media (min-width: 1200px){
.green-quote .right-column{padding-top:450px;}
}
@media (min-width: 1400px){
.green-quote .right-column{padding-top:400px;}
}
.green-quote .right-column .image{max-width:1000px;background-size:cover;background-repeat:no-repeat;background-position:center;}
@media (max-width: 767px){
.green-quote .right-column .image{position:static;top:0;left:0;width:100%;height:300px;}
}
@media (min-width: 768px){
.green-quote .right-column .image{position:static;top:0;left:0;width:100%;height:500px;}
}
@media (min-width: 992px){
.green-quote .right-column .image{position:absolute;top:-50px;left:-100px;width:calc(100% + 100px);}
}
@media (min-width: 1400px){
.green-quote .right-column .image{top:-100px;}
}
.green-quote .right-column .orange-circle{position:absolute;border-radius:100%;-webkit-box-shadow:5px 5px 2px 0px rgba(0,0,0,0.25);-moz-box-shadow:5px 5px 2px 0px rgba(0,0,0,0.25);box-shadow:5px 5px 2px 0px rgba(0,0,0,0.25);width:80px;height:80px;margin-top:-100px;}
@media (max-width: 767px){
.green-quote .right-column .orange-circle{width:70px;height:70px;margin-top:-95px;}
}
.green-quote .right-column .quote{padding:60px 70px 30px 70px;}
@media (max-width: 767px){
.green-quote .right-column .quote{padding:60px 40px 30px 40px;}
}
.green-quote .right-column blockquote{border-left:0;font-family:'Domine-Regular';font-size:20px;line-height:30px;color:#fff;padding:0;margin-bottom:10px;}
.green-quote .right-column cite{color:white;font-size:14px;font-style:normal;letter-spacing:0.7px;line-height:24px;}
.green-quote .right-column a{text-decoration:underline;}
.green-quote .right-column a:focus{color:white;}
.green-quote-mirrored .color{padding-top:60px;}
@media (max-width: 767px){
.green-quote-mirrored .color{display:block;padding-bottom:30px;}
}
@media (min-width: 768px){
.green-quote-mirrored .color{display:block;padding-bottom:30px;}
}
@media (min-width: 992px){
.green-quote-mirrored .color{display:none;}
}
.green-quote-mirrored .color h1.default-green-header{margin-bottom:10px;}
.green-quote-mirrored .color .default-paragraph-container{margin-bottom:30px;}
.green-quote-mirrored .right-column{padding:0;}
@media (max-width: 767px){
.green-quote-mirrored .right-column{display:none;height:0!important;}
}
@media (min-width: 768px) and (max-width: 991px){
.green-quote-mirrored .right-column{display:none;height:0!important;}
}
@media (min-width: 992px){
.green-quote-mirrored .right-column{display:flex;align-items:center;}
}
.green-quote-mirrored .right-column .text{bottom:0;left:0;margin:auto;}
@media (min-width: 992px){
.green-quote-mirrored .right-column .text{width:425px;}
}
.green-quote-mirrored .right-column .text h1{margin-bottom:10px;}
.green-quote-mirrored .right-column .text .default-paragraph-container:not(:last-of-type){margin-bottom:30px;}
.green-quote-mirrored .left-column{padding:0;}
@media (max-width: 767px){
.green-quote-mirrored .left-column{padding-top:0;}
}
@media (min-width: 768px){
.green-quote-mirrored .left-column{padding-top:0;}
}
@media (min-width: 992px){
.green-quote-mirrored .left-column{padding-top:450px;}
}
@media (min-width: 1200px){
.green-quote-mirrored .left-column{padding-top:450px;}
}
@media (min-width: 1400px){
.green-quote-mirrored .left-column{padding-top:400px;}
}
.green-quote-mirrored .left-column .image{width:100%;background-size:cover;background-repeat:no-repeat;background-position:center;}
@media (max-width: 767px){
.green-quote-mirrored .left-column .image{position:static;top:0;height:300px;}
}
@media (min-width: 768px){
.green-quote-mirrored .left-column .image{position:static;top:0;height:500px;}
}
@media (min-width: 992px){
.green-quote-mirrored .left-column .image{max-width:845px;position:absolute;top:-50px;}
}
@media (min-width: 1400px){
.green-quote-mirrored .left-column .image{top:-100px;}
}
.green-quote-mirrored .left-column .orange-circle{position:absolute;border-radius:100%;-webkit-box-shadow:5px 5px 2px 0px rgba(0,0,0,0.25);-moz-box-shadow:5px 5px 2px 0px rgba(0,0,0,0.25);box-shadow:5px 5px 2px 0px rgba(0,0,0,0.25);width:80px;height:80px;margin-top:-100px;}
@media (max-width: 767px){
.green-quote-mirrored .left-column .orange-circle{width:70px;height:70px;margin-top:-95px;}
}
.green-quote-mirrored .left-column .quote{background-color:#1ea69a;padding:60px 70px 30px 70px;}
@media (max-width: 767px){
.green-quote-mirrored .left-column .quote{width:100%;padding:60px 40px 30px 40px;}
}
@media (min-width: 768px){
.green-quote-mirrored .left-column .quote{width:100%;}
}
@media (min-width: 992px){
.green-quote-mirrored .left-column .quote{width:85%;max-width:770px;}
}
.green-quote-mirrored .left-column blockquote{border-left:0;font-family:'Domine-Regular';font-size:20px;line-height:30px;color:#fff;padding:0;margin-bottom:10px;}
.green-quote-mirrored .left-column cite{color:white;font-size:14px;font-style:normal;letter-spacing:0.7px;line-height:32px;}
.green-quote-mirrored .left-column a{text-decoration:underline;}
.green-quote-mirrored .left-column a:focus{color:white;}
.hero-partial .hero-div{background-size:cover;background-position-x:50%;background-position-y:50%;}
.hero-partial .hero-container{color:white;}
@media (max-width: 767px){
.hero-partial .hero-container{padding-left:30px;padding-right:30px;}
}
@media (min-width: 768px){
.hero-partial .hero-container{padding-left:15px;padding-right:15px;}
}
@media (max-width: 767px){
.hero-partial .hero-container .hero-text{width:100%;}
}
.hero-partial .hero-container .hero-text.hero-text-center{margin:auto;text-align:center;}
.hero-partial .hero-container .hero-text.hero-text-center h1{margin:auto;}
.hero-partial .hero-container .hero-text.hero-text-center h2{margin:auto;margin-top:15px;}
.hero-partial .hero-container .hero-text h1{font-family:'TeachableSans-Bold';}
.hero-partial .hero-container .hero-text h1{font-size:32px;line-height:44px;}
.hero-partial .input-container{position:relative;margin-top:60px;}
@media (max-width: 991px){
.hero-partial .input-container{margin-bottom:60px;}
}
@media (min-width: 992px){
.hero-partial .input-container{margin-bottom:10px;}
}
.hero-partial .input-container input{width:calc(100% - 159px);height:60px;border-radius:100px;padding:19px;padding-left:25px;padding-right:75px;font-size:14px;}
.hero-partial .input-container input:invalid{box-shadow:none;}
.hero-partial .input-container .orange-button{border:0px;font-size:18px;padding:17.5px 20px;height:60px;}
.hero-partial .input-container.center{margin-left:auto;margin-right:auto;text-align:left;max-width:600px;}
@media (max-width: 767px){
.hero-partial .input-container.center input{width:100%;padding-right:25px;}
}
@media (max-width: 767px){
.hero-partial .input-container.center .orange-button{margin-top:20px;width:100%;padding-left:40px;padding-right:40px;margin-bottom:45px;}
}
@media (min-width: 768px){
.hero-partial .input-container.center .orange-button{position:absolute!important;width:210px;right:0px;}
}
hr{border-color:#ececec;}
.image-text-column img{max-width:100%;}
@media (max-width: 767px){
.image-text-column img{margin-bottom:50px;}
}
@media (min-width: 768px) and (max-width: 991px){
.image-text-column img{margin-bottom:50px;}
}
.image-text-column .text-block:not(:last-of-type){margin-bottom:50px;}
.six-icons .small-header{text-align:center;margin:auto;margin-bottom:10px;}
.six-icons h2{text-align:center;margin:auto;}
@media (max-width: 767px){
.six-icons h2{margin-bottom:50px;}
}
@media (min-width: 768px){
.six-icons h2{margin-bottom:80px;}
}
@media (min-width: 1200px){
.six-icons h2{margin-bottom:40px;}
}
.six-icons .image{max-width:100%;background-size:100%;background-repeat:no-repeat;margin-bottom:10px;}
.six-icons .default-green-header{margin-bottom:7px;}
@media (min-width: 992px){
.six-icons .col-md-4{padding-right:20px;padding-left:20px;}
}
@media (max-width: 767px){
.six-icons .default-paragraph:not(.text-below-header){margin-bottom:40px;}
}
.six-icons .row:last-of-type .col-xs-12:last-of-type .default-paragraph{margin-bottom:0;}
.sub-nav-menu{border-bottom:solid 2px #f1f1f1;}
.sub-nav-menu .nav-container{display:flex;margin:0 auto;padding:30px 30px;max-width:991px;flex-direction:row;justify-content:space-between;}
@media (max-width: 767px){
.sub-nav-menu .nav-container{display:block;text-align:center;}
}
.sub-nav-menu .nav-item{font-size:16px;color:#5f5f5f;}
@media (max-width: 767px){
.sub-nav-menu .nav-item{display:block;width:100%;padding:30px 0;}
}
@media (max-width: 767px){
.sub-nav-menu .nav-item a{padding-bottom:15px;}
}
@media (min-width: 768px){
.sub-nav-menu .nav-item a{padding-bottom:30px;}
}
.sub-nav-menu .nav-item a:focus{text-decoration:none;color:inherit;}
.sub-nav-menu .nav-item:hover a,.sub-nav-menu .nav-item.active a{color:#ff7f45;border-bottom:solid 3px #ff7f45;text-decoration:none;transition:all 0s;}
.text-column-big-image .small-header{text-align:center;margin-bottom:10px;}
.text-column-big-image .big-header{text-align:center;margin:auto;margin-bottom:80px;}
@media (max-width: 767px){
.text-column-big-image .big-header{margin-bottom:50px;}
}
.text-column-big-image .left-column h1{text-align:left;margin-bottom:6px;}
.text-column-big-image .left-column .default-paragraph-container{margin-bottom:50px;}
.text-column-big-image .right-column{position:relative;}
@media (max-width: 767px){
.text-column-big-image .right-column img{position:static;width:100%;}
}
@media (min-width: 768px){
.text-column-big-image .right-column img{position:static;width:100%;}
}
@media (min-width: 992px){
.text-column-big-image .right-column img{position:absolute;width:auto;}
}
.text-column-image .text-block:not(:last-of-type){margin-bottom:50px;}
.text-column-image img{max-width:100%;}
.text-column-image-text-column img{max-width:100%;}
.text-column-image-text-column .default-paragraph:not(:last-of-type){margin-bottom:40px;}
@media (max-width: 767px){
.text-column-image-text-column .col-md-3:first-of-type{margin-bottom:40px;}
}
@media (min-width: 768px){
.text-column-image-text-column .col-md-3:first-of-type{margin-bottom:40px;}
}
@media (min-width: 992px){
.text-column-image-text-column .col-md-3:first-of-type{margin-bottom:0;}
}
@media (max-width: 767px){
.text-column-image-text-column .col-md-4{display:none;}
}
@media (min-width: 768px){
.text-column-image-text-column .col-md-4{display:none;}
}
@media (min-width: 992px){
.text-column-image-text-column .col-md-4{display:block;}
}
.cookie-banner{background-color:#354A4A;color:white;position:fixed;bottom:0;width:100%;letter-spacing:0.4px;line-height:17px;z-index:1043;justify-content:center;padding:12px 40px;}
@media (max-width: 767px){
.cookie-banner{padding:12px 15px;}
}
.cookie-banner a{font-family:'TeachableSans-Bold';text-decoration:underline;}
.cookie-banner button{background:transparent;border:none;margin-left:25px;}
@media (min-width: 768px){
.cookie-banner button{margin-left:75px;}
}
@media (min-width: 992px){
.cookie-banner button{margin-left:100px;}
}
.cookie-banner img{width:14px;height:100%;}
.modal-background{display:none;position:fixed;background-color:rgba(0,0,0,0.5);width:100%;height:100%;z-index:11;}
.exit-intent-modal-container{display:none;position:fixed;width:100%;height:100%;z-index:1041;}
.exit-intent-modal{position:relative;padding:40px;width:90%;max-width:900px;background-image:url(https://teachable.com/assets/modals/exit-intent-background-f1ed03f17527f659cd1e09777487e40052752e397a06619c94238c556f49a77a.jpg);background-size:cover;margin:auto;border-radius:5px;}
.exit-intent-modal button.close{width:50px;height:50px;right:20px;top:20px;z-index:1042;}
.exit-intent-modal img{max-width:100%;}
.exit-intent-modal h1{font-family:'TeachableSans-Bold';margin-top:20px;color:white;font-size:50px;line-height:1.3;text-align:center;margin-bottom:5px;}
.exit-intent-modal p{text-align:center;color:white;font-size:15px;line-height:27px;margin-bottom:20px;}
.exit-intent-modal input{font-size:16px;line-height:25px;width:100%;height:100%;padding:19px;padding-left:15px;text-align:left;color:#626f6e;border:0;border-radius:5px;background:#fff;box-shadow:#667574 0 0 2px inset;margin-bottom:10px;}
.exit-intent-modal .download-button{font-family:'TeachableSans-Bold';background:#f06d26;color:#ffffff;width:100%;padding:15px 0;font-size:18px;line-height:1.33;cursor:pointer;border-radius:8px;border-style:none;}
}
/*! CSS Used from: Embedded */
._54{margin-bottom:0px;}
@media (max-width: 991px){
._54{margin-bottom:0px;}
}
@media (max-width: 767px){
._54{margin-bottom:0px;}
}
/*! CSS Used from: Embedded */
._55{margin-bottom:0px;}
@media (max-width: 991px){
._55{margin-bottom:0px;}
}
@media (max-width: 767px){
._55{margin-bottom:60px;}
}
._55 h1{max-width:none;}
._55 h2{max-width:none;font-size:16px;line-height:28px;}
@media (max-width: 767px){
._55 .hero-div{min-height:500px;}
._55 .hero-container .hero-text.hero-text-center{padding-top:150px;}
}
@media (min-width: 768px){
._55 .hero-div,._55 .container,._55 .row,._55 .col-xs-12{min-height:465px;}
._55 .container{padding-top:85px;}
}
/*! CSS Used from: Embedded */
._117{padding-bottom:0px;}
@media (max-width: 991px){
._117{padding-bottom:0px;}
}
@media (max-width: 767px){
._117{padding-bottom:0px;}
}
._117{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
._56{margin-bottom:40px;}
@media (max-width: 991px){
._56{margin-bottom:40px;}
}
@media (max-width: 767px){
._56{margin-bottom:0px;}
}
@media (max-width: 767px){
._56{display:none;}
}
/*! CSS Used from: Embedded */
._57{padding-bottom:40px;}
@media (max-width: 991px){
._57{padding-bottom:40px;}
}
@media (max-width: 767px){
._57{padding-bottom:40px;}
}
._57{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
@media (min-width: 992px){
._57{height:1px;}
}
/*! CSS Used from: Embedded */
@media (min-width: 768px) and (max-width: 991px){
._57{height:1px;}
}
/*! CSS Used from: Embedded */
@media (max-width: 767px){
._57{height:1px;}
}
/*! CSS Used from: Embedded */
._58{margin-bottom:450px;}
@media (max-width: 991px){
._58{margin-bottom:100px;}
}
@media (max-width: 767px){
._58{margin-bottom:50px;}
}
._58 h2{max-width:530px;}
@media (min-width: 992px){
._58 img{margin-left:-30%;}
}
@media (max-width: 991px){
._58 img{margin-left:0%;}
}
@media (max-width: 767px){
._58 img{margin-left:0%;}
}
@media (max-width: 991px){
._58 .right-column{display:none;}
._58 .left-column .default-paragraph-container:last-of-type{margin-bottom:0;}
}
@media (max-width: 767px){
._58 .right-column{display:none;}
}
/*! CSS Used from: Embedded */
._59{margin-bottom:270px;}
@media (max-width: 991px){
._59{margin-bottom:100px;}
}
@media (max-width: 767px){
._59{margin-bottom:100px;}
}
@media (min-width: 992px){
._59 img{margin-right:15%;margin-top:-40%;}
}
@media (max-width: 991px){
._59 img{margin-left:-10%;}
}
@media (max-width: 767px){
._59 img{margin-left:-10%;}
}
/*! CSS Used from: Embedded */
._60{margin-bottom:40px;}
@media (max-width: 991px){
._60{margin-bottom:40px;}
}
@media (max-width: 767px){
._60{margin-bottom:60px;}
}
._60 .left-column{background-color:#F4FAFA;}
._60 .color{background-color:#F4FAFA;}
/*! CSS Used from: Embedded */
._61{padding-bottom:40px;}
@media (max-width: 991px){
._61{padding-bottom:40px;}
}
@media (max-width: 767px){
._61{padding-bottom:40px;}
}
._61{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
@media (min-width: 992px){
._61{height:1px;}
}
/*! CSS Used from: Embedded */
@media (min-width: 768px) and (max-width: 991px){
._61{height:1px;}
}
/*! CSS Used from: Embedded */
@media (max-width: 767px){
._61{height:1px;}
}
/*! CSS Used from: Embedded */
._62{margin-bottom:200px;}
@media (max-width: 991px){
._62{margin-bottom:100px;}
}
@media (max-width: 767px){
._62{margin-bottom:100px;}
}
._62 div.image{margin-left:auto;margin-right:auto;width:350px;height:206px;margin-bottom:10px;}
._62 h2{max-width:630px;}
._62 div.default-green-header{color:#1EA69A;margin-bottom:7px;}
._62 .markdown-area p,._62 .icon-header{text-align:left;}
._62{background-color:#FFFFFF;}
._62{padding-top:0px;}
@media (max-width: 991px){
._62{padding-top:0px;}
}
@media (max-width: 767px){
._62{padding-top:0px;}
}
._62{padding-bottom:0px;}
@media (max-width: 991px){
._62{padding-bottom:0px;}
}
@media (max-width: 767px){
._62{padding-bottom:0px;}
}
/*! CSS Used from: Embedded */
._63{margin-bottom:0px;}
@media (max-width: 991px){
._63{margin-bottom:0px;}
}
@media (max-width: 767px){
._63{margin-bottom:0px;}
}
._63 .row{background-color:#FFFFFF;}
._63 .color{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
._172{padding-bottom:40px;}
@media (max-width: 991px){
._172{padding-bottom:40px;}
}
@media (max-width: 767px){
._172{padding-bottom:40px;}
}
._172{background-color:#F4FAFA;}
/*! CSS Used from: Embedded */
@media (min-width: 992px){
._172{height:1px;}
}
/*! CSS Used from: Embedded */
@media (min-width: 768px) and (max-width: 991px){
._172{height:1px;}
}
/*! CSS Used from: Embedded */
@media (max-width: 767px){
._172{height:1px;}
}
/*! CSS Used from: Embedded */
._64{padding-bottom:0px;}
@media (max-width: 991px){
._64{padding-bottom:0px;}
}
@media (max-width: 767px){
._64{padding-bottom:0px;}
}
._64{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
._65{padding-top:40px;}
@media (max-width: 991px){
._65{padding-top:40px;}
}
@media (max-width: 767px){
._65{padding-top:40px;}
}
._65{padding-bottom:20px;}
@media (max-width: 991px){
._65{padding-bottom:20px;}
}
@media (max-width: 767px){
._65{padding-bottom:20px;}
}
._65{margin-bottom:0px;}
@media (max-width: 991px){
._65{margin-bottom:0px;}
}
@media (max-width: 767px){
._65{margin-bottom:0px;}
}
._65{background-color:#F4FAFA;}
._65 h2{max-width:530px;}
/*! CSS Used from: Embedded */
._66{margin-bottom:0px;}
@media (max-width: 991px){
._66{margin-bottom:0px;}
}
@media (max-width: 767px){
._66{margin-bottom:0px;}
}
/*! CSS Used from: Embedded */
._67{margin-bottom:0px;}
@media (max-width: 991px){
._67{margin-bottom:60px;}
}
@media (max-width: 767px){
._67{margin-bottom:60px;}
}
/*! CSS Used from: Embedded */
._68{margin-bottom:115px;}
@media (max-width: 991px){
._68{margin-bottom:115px;}
}
@media (max-width: 767px){
._68{margin-bottom:100px;}
}
._68 .left-column{background-color:#F4FAFA;}
._68 .color{background-color:#F4FAFA;}
/*! CSS Used from: Embedded */
._69{margin-bottom:115px;}
@media (max-width: 991px){
._69{margin-bottom:115px;}
}
@media (max-width: 767px){
._69{margin-bottom:100px;}
}
._69{background-color:#FFFFFF;}
._69{padding-top:0px;}
@media (max-width: 991px){
._69{padding-top:0px;}
}
@media (max-width: 767px){
._69{padding-top:0px;}
}
._69{padding-bottom:0px;}
@media (max-width: 991px){
._69{padding-bottom:0px;}
}
@media (max-width: 767px){
._69{padding-bottom:0px;}
}
/*! CSS Used from: Embedded */
._70{margin-bottom:75px;}
@media (max-width: 991px){
._70{margin-bottom:75px;}
}
@media (max-width: 767px){
._70{margin-bottom:60px;}
}
/*! CSS Used from: Embedded */
._71{padding-bottom:40px;}
@media (max-width: 991px){
._71{padding-bottom:40px;}
}
@media (max-width: 767px){
._71{padding-bottom:40px;}
}
._71{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
@media (min-width: 992px){
._71{height:1px;}
}
/*! CSS Used from: Embedded */
@media (min-width: 768px) and (max-width: 991px){
._71{height:1px;}
}
/*! CSS Used from: Embedded */
@media (max-width: 767px){
._71{height:1px;}
}
/*! CSS Used from: Embedded */
._72{padding-top:0px;}
@media (max-width: 991px){
._72{padding-top:0px;}
}
@media (max-width: 767px){
._72{padding-top:0px;}
}
._72{padding-bottom:0px;}
@media (max-width: 991px){
._72{padding-bottom:0px;}
}
@media (max-width: 767px){
._72{padding-bottom:0px;}
}
._72{margin-bottom:80px;}
@media (max-width: 991px){
._72{margin-bottom:80px;}
}
@media (max-width: 767px){
._72{margin-bottom:80px;}
}
._72{background-color:#FFFFFF;}
._72 h2{max-width:555px;}
@media (max-width: 991px){
._72 .right-column{display:none;}
._72 .default-paragraph-container:last-of-type p:last-of-type{margin-bottom:0;}
}
@media (max-width: 767px){
._72 .right-column{display:none;}
._72 .default-paragraph-container:last-of-type p:last-of-type{margin-bottom:0;}
}
._72 img{margin-left:0%;}
@media (max-width: 991px){
._72 img{margin-left:0%;}
}
@media (max-width: 767px){
._72 img{margin-left:0%;}
}
/*! CSS Used from: Embedded */
._73{padding-top:40px;}
@media (max-width: 991px){
._73{padding-top:80px;}
}
@media (max-width: 767px){
._73{padding-top:80px;}
}
._73{padding-bottom:40px;}
@media (max-width: 991px){
._73{padding-bottom:80px;}
}
@media (max-width: 767px){
._73{padding-bottom:80px;}
}
._73{margin-bottom:40px;}
@media (max-width: 991px){
._73{margin-bottom:40px;}
}
@media (max-width: 767px){
._73{margin-bottom:40px;}
}
._73{background-color:#F4FAFA;}
._73 img{margin-left:0%;}
@media (max-width: 991px){
._73 img{margin-left:-10%;}
}
@media (max-width: 767px){
._73 img{margin-left:-8%;}
}
/*! CSS Used from: Embedded */
._74{padding-bottom:40px;}
@media (max-width: 991px){
._74{padding-bottom:40px;}
}
@media (max-width: 767px){
._74{padding-bottom:40px;}
}
._74{background-color:#FFFFFF;}
/*! CSS Used from: Embedded */
@media (min-width: 992px){
._74{height:1px;}
}
/*! CSS Used from: Embedded */
@media (min-width: 768px) and (max-width: 991px){
._74{height:1px;}
}
/*! CSS Used from: Embedded */
@media (max-width: 767px){
._74{height:1px;}
}
/*! CSS Used from: Embedded */
._75{margin-bottom:110px;}
@media (max-width: 991px){
._75{margin-bottom:100px;}
}
@media (max-width: 767px){
._75{margin-bottom:100px;}
}
._75 div.image{margin-left:0;margin-right:0;width:44px;height:50px;margin-bottom:10px;}
._75 h2{max-width:none;}
._75 div.default-green-header{color:#1EA69A;margin-bottom:7px;}
._75 .markdown-area p,._75 .icon-header{text-align:left;}
@media (min-width: 992px){
._75 .row.first-row{margin-bottom:80px;}
}
._75{background-color:#FFFFFF;}
._75{padding-top:0px;}
@media (max-width: 991px){
._75{padding-top:0px;}
}
@media (max-width: 767px){
._75{padding-top:0px;}
}
._75{padding-bottom:0px;}
@media (max-width: 991px){
._75{padding-bottom:0px;}
}
@media (max-width: 767px){
._75{padding-bottom:0px;}
}
/*! CSS Used from: Embedded */
._76{margin-bottom:50px;}
@media (max-width: 991px){
._76{margin-bottom:60px;}
}
@media (max-width: 767px){
._76{margin-bottom:60px;}
}
._76{background-color:#FFFFFF;}
._76{padding-top:0px;}
@media (max-width: 991px){
._76{padding-top:0px;}
}
@media (max-width: 767px){
._76{padding-top:0px;}
}
._76{padding-bottom:0px;}
@media (max-width: 991px){
._76{padding-bottom:0px;}
}
@media (max-width: 767px){
._76{padding-bottom:0px;}
}
/*! CSS Used from: Embedded */
._77{margin-bottom:0px;}
@media (max-width: 991px){
._77{margin-bottom:0px;}
}
@media (max-width: 767px){
._77{margin-bottom:0px;}
}
/*! CSS Used from: Embedded */
.sf-download-bar__circle{width:40px;height:40px;background-color:rgba(255, 255, 255, 0.3);border-radius:50%;position:relative;display:inline-block;vertical-align:middle;}
.sf-download-bar__circle .sf-download-bar__circle-slice,.sf-download-bar__circle .sf-download-bar__circle-fill{width:40px;height:40px;position:absolute;transition:transform 0.3s;border-radius:50%;}
.sf-download-bar__circle .sf-download-bar__circle-slice{clip:rect(0px, 40px, 40px, 20px);}
.sf-download-bar__circle .sf-download-bar__circle-slice .sf-download-bar__circle-fill{clip:rect(0px, 20px, 40px, 0px);background-color:#fff;}
.sf-download-bar__circle .sf-download-bar__circle-overlay{width:38px;height:38px;position:absolute;margin-left:1px;margin-top:1px;background-color:#5181B8;border-radius:50%;}
.sf-download-bar__circle[data-progress='0'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,.sf-download-bar__circle[data-progress='0'] .sf-download-bar__circle-fill{transform:rotate(0deg);}
.sf-download-bar__circle[data-progress='0'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar{transform:rotate(0deg);}
.sf-download-bar{position:fixed;right:110px;bottom:100px;z-index:99999;width:64px;height:64px;font-family:"Roboto", Helvetica, Arial, sans-serif;transition:width, height, right, 0.2s;border-radius:50%;}
.sf-download-bar_hide_yes{right:-64px;}
.sf-download-bar__head{position:relative;z-index:10;display:block;white-space:nowrap;width:100%;height:64px;outline:none;text-align:center;text-decoration:none;background:#5181B8;border-radius:100px;box-shadow:none;}
.sf-download-bar__head:after{content:'';width:64px;height:64px;position:absolute;top:0;left:0;z-index:-1;background:#5181B8;border-radius:100px;transition:width, height, left, top, 0.2s;}
.sf-download-bar:not(.sf-download-bar_opened_yes):hover .sf-download-bar__head:after{width:68px;height:68px;top:-2px;left:-2px;box-shadow:0px 0px 18px rgba(49, 51, 106, 0.15);}
.sf-download-bar__ticker{z-index:1;position:absolute;top:0px;right:0px;width:17px;height:17px;background:#FF734C;border-radius:100px;color:#fff;text-align:center;line-height:17px;font-size:10px;font-weight:bold;transition:opacity 0.2s;}
.sf-download-bar__ticker-big{opacity:0;z-index:1;position:absolute;top:0px;right:0px;width:40px;height:40px;;      color:#fff;text-align:center;line-height:40px;font-size:14px;transition:opacity 0.2s;}
.sf-download-bar__circle svg{z-index:1;position:absolute;top:50%;left:50%;display:block;margin:-7px 0 0 -5px;}
.sf-download-bar__content{overflow:hidden;}
.sf-download-bar__text{opacity:0.6;color:#fff;font-size:11px;text-align:center;line-height:64px;overflow:hidden;margin-left:-90px;margin-right:26px;width:64px;height:64px;vertical-align:middle;display:inline-block;transition:margin-left 0.2s;}
.sf-download-bar__footer{width:100%;height:0;background-color:#fff;overflow-y:auto;border-bottom-left-radius:4px;border-bottom-right-radius:4px;}
.sf-download-bar__cancel{display:none;height:40px;line-height:40px;color:#5181B8;font-size:9px;text-align:center;text-decoration:none;transition:background-color 0.2s;border-bottom-left-radius:4px;border-bottom-right-radius:4px;background:#fff;}
.sf-download-bar__cancel:hover{text-decoration:none;background-color:#5181B8;color:#fff;}
</style>

<section class="hero-partial _1569">
<style>
._1569 {
  margin-bottom: 0px;
}

@media (max-width: 991px) {
  ._1569 {
    margin-bottom: 0px;
  }
}

@media (max-width: 767px) {
  ._1569 {
    margin-bottom: 0px;
  }
}

._1569 h1 {
  max-width: 770px;
}

._1569 h2 {
  max-width: 600px;
  font-size: 16px;
  line-height: 28px;
}

@media (max-width: 767px) {
  ._1569 .hero-div {
    min-height: 550px;
  }
}

@media (min-width: 768px) {

  ._1569 .hero-div,
  ._1569 .container,
  ._1569 .row,
  ._1569 .col-xs-12 {
    min-height: 465px;
  }

  ._1569 .container {
    padding-top: 85px;
  }
}


</style>
<div id="segment-event" type="hidden" value=""></div>
<div class="hero-div" style="background-image: url(/images/divers/corporate.png);">
<div class="container hero-container">
  <div class="row">
    <div class="col-xs-12 vertically-align-contents-except-xs">
      <div class="hero-text hero-text-center">

          <h1>Faire progresser les compétences</h1>

          <h2>Apprendre et améliorer les compétences dans les domaines des affaires, de la technologie, du design, etc. Enseigné par des experts pour aider votre main-d'œuvre à faire face à la situation.</h2>

      </div>
    </div>
  </div>
</div>
</div>
</section>



    <section class="text-column-big-image _58">
        <style>
            ._58 {
                margin-bottom: 450px;
            }

            @media (max-width: 991px) {
                ._58 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._58 {
                    margin-bottom: 50px;
                }
            }

            ._58 h2 {
                max-width: 530px;
            }

            @media (min-width: 992px) {
                ._58 img {
                    margin-left: -30%;
                }
            }

            @media (max-width: 991px) {
                ._58 img {
                    margin-left: 0%;
                }
            }

            @media (max-width: 767px) {
                ._58 img {
                    margin-left: 0%;
                }
            }

            @media (max-width: 991px) {
                ._58 .right-column {
                    display: none;
                }

                ._58 .left-column .default-paragraph-container:last-of-type {
                    margin-bottom: 0;
                }
            }

            @media (max-width: 767px) {
                ._58 .right-column {
                    display: none;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text small-header"></h1>
                    <h2 class="default-header big-header">NOTRE OFFRE, LOCATION DE LA PLATEFORME, TEAM BUILDING</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-5 left-column">
                    <h1 class="default-green-header">NOTRE OFFRE</h1>
                    <div class="default-paragraph-container markdown-area">
                        <p>Oschool a développé la plateforme LMS afin de répondre aux besoins de ses clients et de faire face au développement grandissant de la formation à distance.</p>
                    </div>
                    <h1 class="default-green-header">Oschoolelearning.com :</h1>
                    <div class="default-paragraph-container markdown-area">
                        <ul>
                          <li>Vous aide à digitaliser votre formation.</li>
                          <li>Accueille vos cours e-learning pour un coût attractif</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 right-column">
                    <img data-src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/DfsKuQA2QziBB1whe0zD"
                      src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/DfsKuQA2QziBB1whe0zD" data-loaded="true">
                </div>
            </div>
        </div>
    </section>

    <section class="big-image-text-column _59">
        <style>
            ._59 {
                margin-bottom: 270px;
            }

            @media (max-width: 991px) {
                ._59 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._59 {
                    margin-bottom: 100px;
                }
            }

            ._59 h2 {
                max-width: 530px;
            }

            @media (min-width: 992px) {
                ._59 img {
                    margin-right: 15%;
                    margin-top: -40%;
                }
            }

            @media (max-width: 991px) {
                ._59 img {
                    margin-left: -10%;
                }
            }

            @media (max-width: 767px) {
                ._59 img {
                    margin-left: -10%;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-7 left-column">
                    <img data-src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/Gxm0GAuWSuKMKIj9kFVG"
                      src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/Gxm0GAuWSuKMKIj9kFVG" data-loaded="true">
                </div>
                <div class="col-xs-12 col-md-5 right-column">
                    <h1 class="default-green-header">LOCATION DE LA PLATEFORME</h1>
                    <div class="default-paragraph-container markdown-area">
                        <p>Oschoolelearning.com est disponible en location mode SaaS pour accueillir vos propres cours e-learning à un coût très attractif. Dans ce cas, la plateforme peut être personnalisée à vos couleurs. Nous proposons également une journée de formation à l’utilisation et à l’administration de la plateforme LMS.</p>
                    </div>
                    <h1 class="default-green-header">Le principe :</h1>
                    <div class="default-paragraph-container markdown-area">
                        <ul>
                          <li>Nous personnalisons la plateforme LMS « à vos couleurs » ainsi que les attestations de passage.</li>
                          <li>La location d’oschoolelearning.com est annuelle.</li>
                          <li>Un droit d’accès est facturé par apprenant.</li>
                          <li>Le LMS  est simple d’utilisation et ergonomique, néanmoins, nous pouvons vous proposer une journée de formation à son utilisation et à son administration.</li>
                          <li>Il est possible de réaliser la gestion administrative de la plateforme pour vous.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-quote _60">
        <style>
            ._60 {
                margin-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._60 {
                    margin-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                ._60 {
                    margin-bottom: 60px;
                }
            }

            ._60 .left-column {
                background-color: #F4FAFA
            }

            ._60 .color {
                background-color: #F4FAFA
            }
        </style>

        <div class="color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="default-green-header ">TEAM BUILDING </h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p></p>
                        </div>
                        <h1 class="default-green-header ">Use our domain to connect your own</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Oschool conçoit vos formations digitales sur-mesure en prêtant autant d'attention au fond (conseil, accompagnement, design des stratégies digitales, architecture de programmes de formation complexes, le tout reposant sur notre méthode pédagogique) qu'à la forme (simulations réalistes, e-learning, applications, vidéo, collaborative training, présentiel et même réalité virtuelle et augmentée)</p>
                        </div>
                        <h1 class="default-green-header ">Reach students worldwide in any language</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Modify the language used in any part of your site to support international audiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 left-column match-height" style="height: 664px;">
                    <div class="text">
                        <h1 class="default-green-header">TEAM BUILDING </h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Vous êtes une entreprise et vous souhaitez pouvoir présenter à vos employés une offre e-learning complète et adaptée à vos besoins.</p>
                        </div>
                        <h1 class="default-green-header"></h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Oschool conçoit vos formations digitales sur-mesure en prêtant autant d'attention au fond <b> (conseil, accompagnement, design des stratégies digitales, architecture de programmes de formation complexes, le tout reposant sur notre méthode pédagogique)</b> qu'à la forme (simulations réalistes, e-learning, applications, vidéo, collaborative training, présentiel et même réalité virtuelle et augmentée)</p>
                        </div>
                        <h1 class="default-green-header"></h1>
                        <div class="default-paragraph-container markdown-area">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 right-column match-height clearfix" style="height:;">
                    <div class="image" data-background-image="/images/divers/corporate-1.jpg" data-loaded="true"
                      style="background-image: url(/images/divers/corporate-1.jpg);"></div>
                    <!--div class="quote">
                        <img class="orange-circle" src="/assets/blockquote-orange-d24380ebe646a526fc1fa70b279fa6531394ee3ddc19bf7bca406c709a6f08f3.svg">
                        <blockquote>“It was important to us that our courses would look beautiful and that the software would be easy to use.”</blockquote>
                        <cite>
                            James Blatch, <a href="https://selfpublishingformula.com" target="_blank" rel="noopener noreferrer">Self Publishing Formula</a>
                        </cite>
                    </div-->
                </div>
            </div>
        </div>
    </section>


        <section class="cta-partial _69">
            <style>
                ._69 {
                    margin-bottom: 25px;
                    padding: 50px 0px!important;
                    height: 350px;
                    color: #fff;
                }

                @media (max-width: 991px) {
                    ._69 {
                        margin-bottom: 15px;
                    }
                }

                @media (max-width: 767px) {
                    ._69 {
                        margin-bottom: 10px;
                    }
                }

                /*CUSTOM EXPID2 CODE*/
                ._69 {
                    background:url(/images/divers/Nos-solutions.png);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-attachment: fixed;

                }

                ._69 {
                    padding-top: 0px;
                }

                @media (max-width: 991px) {
                    ._69 {
                        padding-top: 0px;
                    }
                }

                @media (max-width: 767px) {
                    ._69 {
                        padding-top: 0px;
                    }
                }

                ._69 {
                    padding-bottom: 0px;
                }

                @media (max-width: 991px) {
                    ._69 {
                        padding-bottom: 0px;
                    }
                }

                @media (max-width: 767px) {
                    ._69 {
                        padding-bottom: 0px;
                    }
                }
            </style>
            <div class="container" style="margin-top: 35px!important;">
                <div class="row">
                    <div class="col-xs-12 cta-content">
                        <h1 class="small-uppercase-text"></h1>
                        <h2 class="default-header" style="max-width: 750px; font-size: 50px!important;">QUEL IMPACT POUR VOTRE EQUIPE?</h2>
                        <div class="">
                          <a href="https://drive.google.com/open?id=1XgdPMQlUx8odYdNsQmxowfVQ11b6ODzO" class="orange-button" style="padding: 20px 30px;">Téléchargez notre catalogue</a>
                          <a href="https://blog.oschoolelearning.com/?page_id=4300" class="orange-button">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="id-tag _61">
        <style>
            ._61 {
                padding-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._61 {
                    padding-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                ._61 {
                    padding-bottom: 40px;
                }
            }

            ._61 {
                background-color: #FFFFFF
            }
        </style>
        <style>
            @media (min-width: 992px) {
                ._61 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (min-width: 768px) and (max-width: 991px) {
                ._61 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (max-width: 767px) {
                ._61 {
                    height: 1px;
                }
            }
        </style>
        <div id="learning-tools"></div>
    </section>

    <section class="six-icons _62">
        <style>
            ._62 {
                margin-bottom: 20px;
            }

            @media (max-width: 991px) {
                ._62 {
                    margin-bottom: 10px;
                }
            }

            @media (max-width: 767px) {
                ._62 {
                    margin-bottom: 100px;
                }
            }

            ._62 div.image {
                margin-left: auto;
                margin-right: auto;
                width: 350px;
                height: 206px;
                margin-bottom: 10px;
            }

            ._62 h2 {
                max-width: 630px;
            }

            ._62 div.default-green-header {
                color: #1EA69A;
                margin-bottom: 7px;
            }

            ._62 .markdown-area p,
            ._62 .icon-header {
                text-align: left;
            }

            /*CUSTOM EXPID2 CODE*/
            ._62 {
                background-color: #FFFFFF
            }

            ._62 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._62 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._62 {
                    padding-top: 0px;
                }
            }

            ._62 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._62 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._62 {
                    padding-bottom: 0px;
                }
            }
        </style>
        <div class="container">
            <div class="row headers-row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text small-header"></h1>
                    <h2 class="default-header">Les entreprises qui nous font confiance:</h2>
                </div>
            </div>
            <div class="row first-row">
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/cinetpay.png" data-loaded="true"
                      style="background-image: url(/images/divers/cinetpay.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/Epistrophe.jpg" data-loaded="true"
                      style="background-image: url(/images/divers/Epistrophe.jpg);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/bora.png" data-loaded="true"
                      style="background-image: url(/images/divers/bora.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/final.png" data-loaded="true"
                      style="background-image: url(/images/divers/final.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="row first-row">
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/LogoM-1.png" data-loaded="true"
                      style="background-image: url(/images/divers/tama.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/Logo-1.png" data-loaded="true"
                      style="background-image: url(/images/divers/Logo-1.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/Akil-tech.png" data-loaded="true"
                      style="background-image: url(/images/divers/Akil-tech.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="image" data-background-image="/images/divers/esatic.png" data-loaded="true"
                      style="background-image: url(/images/divers/esatic.png);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;"></div>
                    <div class="default-paragraph markdown-area">
                        <p></p>
                    </div>
                </div>
            </div>




        </div>
    </section>

    <!--section class="green-quote-mirrored _63">
        <style>
            ._63 {
                margin-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._63 {
                    margin-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._63 {
                    margin-bottom: 0px;
                }
            }

            ._63 .row {
                background-color: #FFFFFF
            }

            ._63 .color {
                background-color: #FFFFFF
            }
        </style>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 left-column match-height clearfix" style="height: 672px;">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/YCScuPcOQN6jbV3ilga1" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/YCScuPcOQN6jbV3ilga1&quot;);"></div>
                    <div class="quote">
                        <img class="orange-circle" src="/assets/blockquote-orange-d24380ebe646a526fc1fa70b279fa6531394ee3ddc19bf7bca406c709a6f08f3.svg">
                        <blockquote>“Our students just know that we’re providing an amazing, easy experience and they rave about it to us!”</blockquote>
                        <cite>
                            Mariah Coz, <a href="https://www.femtrepreneur.co" target="_blank" rel="noopener noreferrer">MariahCoz.com</a>
                        </cite>
                    </div>
                </div>
                <div class="col-md-6 right-column match-height vertically-align-contents" style="height: 672px;">
                    <div class="text">
                        <h1 class="default-green-header ">Student feedback</h1>
                        <div class="default-paragraph-container markdown-area ">
                            <p>Include Google Forms, surveys, and other tools to collect information from your students that helps you understand and serve them better.</p>
                        </div>
                        <h1 class="default-green-header ">Support integrations</h1>
                        <div class="default-paragraph-container markdown-area ">
                            <p>Use Zapier to connect your school with virtually every known support tool, including Intercom, Olark, and Zendesk.</p>
                        </div>
                        <h1 class="default-green-header ">Student list segmentation</h1>
                        <div class="default-paragraph-container markdown-area ">
                            <p>Keep in touch with your students by sending targeted emails based on enrollment, completion, code redemption, and a dozen other filters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="default-green-header ">Student feedback</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Include Google Forms, surveys, and other tools to collect information from your students that helps you understand and serve them better.</p>
                        </div>
                        <h1 class="default-green-header ">Support integrations</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Use Zapier to connect your school with virtually every known support tool, including Intercom, Olark, and Zendesk.</p>
                        </div>
                        <h1 class="default-green-header ">Student list segmentation</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Keep in touch with your students by sending targeted emails based on enrollment, completion, code redemption, and a dozen other filters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="id-tag _172">
        <style>
            ._172 {
                padding-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._172 {
                    padding-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                ._172 {
                    padding-bottom: 40px;
                }
            }

            ._172 {
                background-color: #F4FAFA
            }
        </style>
        <style>
            @media (min-width: 992px) {
                ._172 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (min-width: 768px) and (max-width: 991px) {
                ._172 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (max-width: 767px) {
                ._172 {
                    height: 1px;
                }
            }
        </style>
        <div id="placeholder"></div>
    </section>

    <section class="id-tag _64">
        <style>
            ._64 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._64 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._64 {
                    padding-bottom: 0px;
                }
            }

            ._64 {
                background-color: #FFFFFF
            }
        </style>
        <div id="marketing"></div>
    </section>

    <section class="text-column-image-text-column _65">
        <style>
            ._65 {
                padding-top: 40px;
            }

            @media (max-width: 991px) {
                ._65 {
                    padding-top: 40px;
                }
            }

            @media (max-width: 767px) {
                ._65 {
                    padding-top: 40px;
                }
            }

            ._65 {
                padding-bottom: 20px;
            }

            @media (max-width: 991px) {
                ._65 {
                    padding-bottom: 20px;
                }
            }

            @media (max-width: 767px) {
                ._65 {
                    padding-bottom: 20px;
                }
            }

            ._65 {
                margin-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._65 {
                    margin-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._65 {
                    margin-bottom: 0px;
                }
            }

            ._65 {
                background-color: #F4FAFA
            }

            ._65 h2 {
                max-width: 530px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text default-small-header-spacing">Marketing</h1>
                    <h2 class="default-header default-large-header-spacing">Leverage a wide variety of built-in marketing tools to grow your business</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="default-green-header default-green-header-spacing">
                        Coupons and promotions
                    </div>
                    <div class="default-paragraph">
                        Incentivize enrollments by creating dollar-amount or percentage-off coupons with custom expiration times.
                    </div>
                    <div class="default-green-header default-green-header-spacing">
                        Advanced pricing options
                    </div>
                    <div class="default-paragraph">
                        Charge a one-time fee, sell a subscription, or set up a payment plan, and offer individual or bundled courses.
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-1">
                    <img data-src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/tJ5eaTR1TImcI1rbrY8N"
                      src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/tJ5eaTR1TImcI1rbrY8N" data-loaded="true">
                </div>
                <div class="col-xs-12 col-md-3 col-md-offset-1">
                    <div class="default-green-header default-green-header-spacing">
                        Your own affiliate program
                    </div>
                    <div class="default-paragraph">
                        Reward others for sharing your course and track their results with the built-in affiliate marketing feature.
                    </div>
                    <div class="default-green-header default-green-header-spacing">
                        Customizable sales pages
                    </div>
                    <div class="default-paragraph">
                        Use our conversion-optimized sales page template, or create your own custom landing pages.
                    </div>
                </div>
            </div>
        </div>
    </section-->

    <!--section class="big-image _66">
        <style>
            ._66 {
                margin-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._66 {
                    margin-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._66 {
                    margin-bottom: 0px;
                }
            }
        </style>
        <img data-src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/Wm28SuypSZ2Tl6OhSM2g"
          src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/Wm28SuypSZ2Tl6OhSM2g" data-loaded="true">
        <div class="big-image-div" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/Wm28SuypSZ2Tl6OhSM2g" style="min-height: 200px;"></div>
    </section>

    <section class="accept-payments _67">
        <style>
            ._67 {
                margin-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._67 {
                    margin-bottom: 60px;
                }
            }

            @media (max-width: 767px) {
                ._67 {
                    margin-bottom: 60px;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="hand" src="https://cdn.filepicker.io/api/file/22Z3l3BaRDWueh7Bs7Rm">
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div>
                        <div class="default-green-header default-green-header-spacing">
                            Accept international payments
                        </div>
                        <div class="default-paragraph">
                            Take payments from 130+ international currencies through Stripe Connect credit card processing or PayPal. You can even accept multiple currencies for a single course.
                        </div>
                        <img class="payment-methods" src="https://cdn.filepicker.io/api/file/xiukJ3FGQ7mn9GjJ8XLs">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-quote _68">
        <style>
            ._68 {
                margin-bottom: 115px;
            }

            @media (max-width: 991px) {
                ._68 {
                    margin-bottom: 115px;
                }
            }

            @media (max-width: 767px) {
                ._68 {
                    margin-bottom: 100px;
                }
            }

            ._68 .left-column {
                background-color: #F4FAFA
            }

            ._68 .color {
                background-color: #F4FAFA
            }
        </style>

        <div class="color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="default-green-header ">Virtually infinite marketing integrations</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Integrate your school with MailChimp, AWeber, Infusionsoft, Mixpanel, and almost any other marketing tool via Zapier.</p>
                        </div>
                        <h1 class="default-green-header ">Conversion pixels support</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Gain valuable insights about your advertising’s effectiveness by adding conversion pixels to your site.</p>
                        </div>
                        <h1 class="default-green-header ">First and last touch attribution</h1>
                        <div class="default-paragraph-container default-paragraph-spacing markdown-area ">
                            <p>Determine the initial source where a student heard about you, and identify which campaign converted them into customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 left-column match-height" style="height: 694px;">
                    <div class="text">
                        <h1 class="default-green-header">Virtually infinite marketing integrations</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Integrate your school with MailChimp, AWeber, Infusionsoft, Mixpanel, and almost any other marketing tool via Zapier.</p>
                        </div>
                        <h1 class="default-green-header">Conversion pixels support</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Gain valuable insights about your advertising’s effectiveness by adding conversion pixels to your site.</p>
                        </div>
                        <h1 class="default-green-header">First and last touch attribution</h1>
                        <div class="default-paragraph-container markdown-area">
                            <p>Determine the initial source where a student heard about you, and identify which campaign converted them into customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 right-column match-height clearfix" style="height: 694px;">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/lStblsxWQ7W2EzceoCVy" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/lStblsxWQ7W2EzceoCVy&quot;);"></div>
                    <div class="quote">
                        <img class="orange-circle" src="/assets/blockquote-orange-d24380ebe646a526fc1fa70b279fa6531394ee3ddc19bf7bca406c709a6f08f3.svg">
                        <blockquote>“Teachable incorporates sales pages, so if you’re not a designer or developer, you don’t have to worry about creating a killer sales page.”</blockquote>
                        <cite>
                            Melyssa Griffin, <a href="http://melyssagriffin.com" target="_blank" rel="noopener noreferrer">MelyssaGriffin.com</a>
                        </cite>
                    </div>
                </div>
            </div>
        </div>
    </section-->


    <!--section class="horizontal-line _70">
        <style>
            ._70 {
                margin-bottom: 75px;
            }

            @media (max-width: 991px) {
                ._70 {
                    margin-bottom: 75px;
                }
            }

            @media (max-width: 767px) {
                ._70 {
                    margin-bottom: 60px;
                }
            }
        </style>
        <hr>
    </section>

    <section class="id-tag _71">
        <style>
            ._71 {
                padding-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._71 {
                    padding-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                ._71 {
                    padding-bottom: 40px;
                }
            }

            ._71 {
                background-color: #FFFFFF
            }
        </style>
        <style>
            @media (min-width: 992px) {
                ._71 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (min-width: 768px) and (max-width: 991px) {
                ._71 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (max-width: 767px) {
                ._71 {
                    height: 1px;
                }
            }
        </style>
        <div id="analytics-section"></div>
    </section>

    <section class="text-column-image _72">
        <style>
            ._72 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._72 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._72 {
                    padding-top: 0px;
                }
            }

            ._72 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._72 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._72 {
                    padding-bottom: 0px;
                }
            }

            ._72 {
                margin-bottom: 80px;
            }

            @media (max-width: 991px) {
                ._72 {
                    margin-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                ._72 {
                    margin-bottom: 80px;
                }
            }

            ._72 {
                background-color: #FFFFFF
            }

            ._72 h2 {
                max-width: 555px;
            }

            @media (max-width: 991px) {
                ._72 .right-column {
                    display: none;
                }

                ._72 .default-paragraph-container:last-of-type p:last-of-type {
                    margin-bottom: 0;
                }
            }

            @media (max-width: 767px) {
                ._72 .right-column {
                    display: none;
                }

                ._72 .default-paragraph-container:last-of-type p:last-of-type {
                    margin-bottom: 0;
                }
            }

            ._72 img {
                margin-left: 0%;
            }

            @media (max-width: 991px) {
                ._72 img {
                    margin-left: 0%;
                }
            }

            @media (max-width: 767px) {
                ._72 img {
                    margin-left: 0%;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text default-small-header-spacing">Analytics</h1>
                    <h2 class="default-header default-large-header-spacing">Get instant insights into your school with built-in reporting tools</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-1 left-column  match-height vertically-align-contents" style="height: 586px;">
                    <div>
                        <div class="text-block">
                            <h1 class="default-green-header default-green-header-spacing">Comprehensive dashboard</h1>
                            <div class="default-paragraph-container markdown-area">
                                <p>See a snapshot of student signups and revenue across a defined time period on your Teachable dashboard.</p>
                            </div>
                        </div>
                        <div class="text-block">
                            <h1 class="default-green-header default-green-header-spacing">Course-wide student insights</h1>
                            <div class="default-paragraph-container markdown-area">
                                <p>Understand your average lecture completion rates and sort by student account type (free, full price, or discounted).</p>
                            </div>
                        </div>
                        <div class="text-block">
                            <h1 class="default-green-header default-green-header-spacing">Contact and revenue data exports</h1>
                            <div class="default-paragraph-container markdown-area">
                                <p>Export your student contact list or course revenue data at any time to perform deeper analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 right-column match-height vertically-align-contents" style="height: 586px;">
                    <img data-src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/WPMHtqJDT8mX43mT6C7W"
                      src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/WPMHtqJDT8mX43mT6C7W" data-loaded="true">
                </div>
            </div>
        </div>
    </section-->

    <!--section class="image-text-column _73">
        <style>
            ._73 {
                padding-top: 40px;
            }

            @media (max-width: 991px) {
                ._73 {
                    padding-top: 80px;
                }
            }

            @media (max-width: 767px) {
                ._73 {
                    padding-top: 80px;
                }
            }

            ._73 {
                padding-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._73 {
                    padding-bottom: 80px;
                }
            }

            @media (max-width: 767px) {
                ._73 {
                    padding-bottom: 80px;
                }
            }

            ._73 {
                margin-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._73 {
                    margin-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                ._73 {
                    margin-bottom: 40px;
                }
            }

            ._73 {
                background-color: #F4FAFA;
            }

            ._73 h2 {
                max-width: none;
            }

            ._73 img {
                margin-left: 0%;
            }

            @media (max-width: 991px) {
                ._73 img {
                    margin-left: -10%;
                }
            }

            @media (max-width: 767px) {
                ._73 img {
                    margin-left: -8%;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-7 left-column match-height vertically-align-contents" style="height: 555px;">
                    <img data-src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/fl1rKtQQCYRrGpA6Ug2A"
                      src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/fl1rKtQQCYRrGpA6Ug2A" data-loaded="true">
                </div>
                <div class="col-xs-12 col-md-4 col-md-offset-1 right-column  match-height vertically-align-contents" style="height: 555px;">
                    <div>
                        <div class="text-block">
                            <h1 class="default-green-header default-green-header-spacing">Analytics integrations</h1>
                            <div class="default-paragraph-container markdown-area">
                                <p>By integrating Zapier, you can send custom course-related events to virtually any analytics tool.</p>
                            </div>
                        </div>
                        <div class="text-block">
                            <h1 class="default-green-header default-green-header-spacing">Multiple-instructor support</h1>
                            <div class="default-paragraph-container markdown-area">
                                <p>Allow others to author and manage courses on your school and pay out your instructors on a monthly basis.</p>
                            </div>
                        </div>
                        <div class="text-block">
                            <h1 class="default-green-header default-green-header-spacing">Student enrollments and refunds</h1>
                            <div class="default-paragraph-container markdown-area">
                                <p>Manually enroll students in new courses when necessary and process full or partial refunds.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->

    <!--section class="id-tag _74">
        <style>
            ._74 {
                padding-bottom: 40px;
            }

            @media (max-width: 991px) {
                ._74 {
                    padding-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                ._74 {
                    padding-bottom: 40px;
                }
            }

            ._74 {
                background-color: #FFFFFF
            }
        </style>
        <style>
            @media (min-width: 992px) {
                ._74 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (min-width: 768px) and (max-width: 991px) {
                ._74 {
                    height: 1px;
                }
            }
        </style>
        <style>
            @media (max-width: 767px) {
                ._74 {
                    height: 1px;
                }
            }
        </style>
        <div id="hosting-and-security"></div>
    </section-->

    <!--section class="six-icons _75">
        <style>
            ._75 {
                margin-bottom: 110px;
            }

            @media (max-width: 991px) {
                ._75 {
                    margin-bottom: 100px;
                }
            }

            @media (max-width: 767px) {
                ._75 {
                    margin-bottom: 100px;
                }
            }

            ._75 div.image {
                margin-left: 0;
                margin-right: 0;
                width: 44px;
                height: 50px;
                margin-bottom: 10px;
            }

            ._75 h2 {
                max-width: none;
            }

            ._75 div.default-green-header {
                color: #1EA69A;
                margin-bottom: 7px;
            }

            ._75 .markdown-area p,
            ._75 .icon-header {
                text-align: left;
            }

            @media (min-width: 992px) {
                ._75 .row.first-row {
                    margin-bottom: 80px;
                }
            }

            /*CUSTOM EXPID2 CODE*/
            ._75 {
                background-color: #FFFFFF
            }

            ._75 {
                padding-top: 0px;
            }

            @media (max-width: 991px) {
                ._75 {
                    padding-top: 0px;
                }
            }

            @media (max-width: 767px) {
                ._75 {
                    padding-top: 0px;
                }
            }

            ._75 {
                padding-bottom: 0px;
            }

            @media (max-width: 991px) {
                ._75 {
                    padding-bottom: 0px;
                }
            }

            @media (max-width: 767px) {
                ._75 {
                    padding-bottom: 0px;
                }
            }
        </style>
        <div class="container">
            <div class="row headers-row">
                <div class="col-xs-12">
                    <h1 class="small-uppercase-text small-header">Hosting &amp; Security</h1>
                    <h2 class="default-header">Get a team of experts looking out for your school</h2>
                </div>
            </div>
            <div class="row first-row">
                <div class="col-xs-12 col-md-4">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/UbyPdmSqTFuik2orzOkv" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/UbyPdmSqTFuik2orzOkv&quot;);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;">Seamless hosting</div>
                    <div class="default-paragraph markdown-area">
                        <p>Teachable hosts your course content for you and backs up your site and student data so you don’t have to worry about it.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/rhI8RO51QoCLGIPU9ye5" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/rhI8RO51QoCLGIPU9ye5&quot;);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;">Data ownership</div>
                    <div class="default-paragraph markdown-area">
                        <p>Own and control all of the content and student data from your Teachable schools and courses.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/skHFuyn6RZeeDKAHh6TD" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/skHFuyn6RZeeDKAHh6TD&quot;);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-1" style="height: 28px;">24/7 monitoring</div>
                    <div class="default-paragraph markdown-area">
                        <p>We work around the clock to fix issues as they arise and make sure your virtual school doors stay open.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/II8GXOCDTGG1Kii5Snbu" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/II8GXOCDTGG1Kii5Snbu&quot;);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-2" style="height: 28px;">Instant upgrades</div>
                    <div class="default-paragraph markdown-area">
                        <p>Automatically receive the latest features immediately, without having to manually update.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/YOMRf9jWSh2o8GKeuaRz" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/YOMRf9jWSh2o8GKeuaRz&quot;);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-2" style="height: 28px;">SSL certificate</div>
                    <div class="default-paragraph markdown-area">
                        <p>A 2048-bit SSL certificate keeps your students' information secure during login and checkout.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="image" data-background-image="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/TRPVPYfRGuZiLWvEgoIm" data-loaded="true"
                      style="background-image: url(&quot;https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/auto_image/compress/quality=value:90/TRPVPYfRGuZiLWvEgoIm&quot;);"></div>
                    <div class="icon-header default-green-header match-height-green-headers-row-2" style="height: 28px;">Secured payment data</div>
                    <div class="default-paragraph markdown-area">
                        <p>We only work with payment providers that are PCI level-1 compliant, so your and your users’ data is safe and secure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section--->


@endsection
