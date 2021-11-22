<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lung Check | Toolbox</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../images/favicons/manifest.json" crossorigin="use-credentials">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="Lung Life is a patient platform aimed to facilitate more meaningful conversation between patients and HCPs" content="Homepage" abstract="Homepage" robots="index,follow,noodp,noydir" page-type="patient platform" author="Boehringer Ingelheim" publisher="Boehringer Ingelheim" copyright="Boehringer Ingelheim" audiance="all">
    <link rel="canonical" href="<https://www.lunglife.com/lungage>">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.lunglife.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lunglife">
    <meta property="og:description" content="I just used Lung Life and found out the age of my lungs. Find out yours https://www.lunglife.com/">
    <meta property="og:image" content="https://www.lunglife.com/images/logo.svg">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="lunglife.com">
    <meta property="twitter:url" content="https://www.lunglife.com/">
    <meta name="twitter:title" content="Lunglife">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="https://www.lunglife.com/images/logo.svg">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
    <style>
        @charset "utf-8";
        @font-face {
            font-family: 'montserratregular';
            src: url('{{ asset('fonts/montserrat-regular-webfont.eot') }}');
            src: url('{{ asset('fonts/montserrat-regular-webfont.eot?#iefix') }}') format('embedded-opentype'),
            url('{{ asset('fonts/montserrat-regular-webfont.woff2') }}') format('woff2'),
            url('{{ asset('fonts/montserrat-regular-webfont.woff') }}') format('woff'),
            url('{{ asset('fonts/montserrat-regular-webfont.ttf') }}') format('truetype'),
            url('{{ asset('fonts/montserrat-regular-webfont.svg#montserratregular') }}') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'montserratbold';
            src: url('{{ asset('fonts/montserrat-bold-webfont.eot') }}');
            src: url('{{ asset('fonts/montserrat-bold-webfont.eot?#iefix') }}') format('embedded-opentype'),
            url('{{ asset('fonts/montserrat-bold-webfont.woff2') }}') format('woff2'),
            url('{{ asset('fonts/montserrat-bold-webfont.woff') }}') format('woff'),
            url('{{ asset('fonts/montserrat-bold-webfont.ttf') }}') format('truetype'),
            url('{{ asset('fonts/montserrat-bold-webfont.svg#montserratbold') }}') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        body,
        html {
            height: 100%;
            width: 100%;
            margin: 0px;
            overflow: auto;
            color: #003BA3;
            font-family: 'montserratregular';
        }
        img {
            max-width: 100%;
            height: auto;
            margin: auto;
        }
        .sub-tilte-bold.smoke {
            width: 336px;
        }
        .maxvalue { 
            left: auto;
            top: 90%;
            right: -20px;
        }
        .blue-btn {
            width: 150px;
            background: #003BA3;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
            padding: 15px;
            border-radius: 24px;    
            margin-bottom: 20px;    
            font-weight: bold;  
            font-size: 16px;    
            text-decoration: none;  
        }
        a{
            color: #003BA3;
            text-decoration: none;
        }
        .p-1 {
            padding: 1rem;
        }
        .py-1 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .pt-1 {
            padding-top: 1rem;
        }
        .pl-0 {
            padding-left: 0px !important;
        }
        .pb-1 {
            padding-bottom: 1rem;
        }
        .pb-2 {
            padding-bottom: 2rem;
        }
        .pb-4 {
            padding-bottom: 4rem;
        }
        .m-0 {
            margin: 0;
        }
        .mb-0 {
            margin-bottom: 0px;
        }
        .mb-1 {
            margin-bottom: 0.5em;
        }
        .mt-0 {
            margin-top: 0;
        }
        .w-100 {
            width: 100% !important;
        }
        .breath_symbol_white.home {
            background-color: #aedab7;
        }
        .breath_symbol_white {
            overflow: hidden;
            position: fixed;
            width: 100vw;
            height: 100vh;
            text-align: center;
            z-index: -1;
            background-color: #f6f1d5;
        }
        .breath_symbol_white img {
            position: relative;
            width: auto;
            height: auto;
            padding: 0vw;
            max-width: 100vw;
            max-height: 100vh;
        }
        .img-center {
            text-align: center;
            position: relative;
            height: 80vh;
            padding: 10vh 10vw;
        }
        .img-center img {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
        .img-center1 {
            text-align: center;
        }
        .text-center {
            text-align: center;
        }
        .text-center1 {
            text-align: center;
        }
        .container {
            max-width: 980px;
            margin: auto;
            padding: 5px 10px;
            position:relative;  
            z-index:9;
        }
        .font-bold {
            font-weight: bold;
            font-family: 'montserratbold';
        }
        .padd-top{padding-top:60px;}
        header {
            height: 30px;
            padding: 10px;
            z-index: 5;
        }
        header .globe {
            text-align: left;
            float: left;
            width: 40vw;
        }
        header .menu-lines {
            text-align: right;
            float: right;
            width: 30px;
            display: inline-block;
            cursor: pointer;
            border:none;
        }
        header .bar1,
        header .bar2,
        header .bar3 {
            width: 25px;
            height: 4px;
            background-color: #003ba3;
            margin: 5px 0;
            transition: 0.4s;
        }
        .lunglife_logo {
            max-width: 40%;
        }
        .lunglife_logo1 {
            max-width: 40%;
            max-height: 30vh;
            width: auto;
        }
        .arrow {
            width: 10px;
            height: 1rem;
            display: inline-block;
            position: absolute;
            margin: 0 0.8rem;
        }
        .home-cards {
            margin: 0px 10px 10px;
            background-color: #fff;
            border-radius: 10px;
            padding: 10px;
            display: inline-block;
        }
        .home-cards .img-left {
            float: left;
            display: block;
            width: 30%;
            text-align: center;
        }
        .home-cards-txt {
            float: right;
            width: 70%;
        }
        .home-cards-txt h3 {
            margin-block-start: 0.5em;
            margin-block-end: 0em;
            text-align:left;
        }
        .home-cards-txt p {
            margin-block-start: 0.2em;
            margin-block-end: 0.5em;
            font-size: 0.75em;
            line-height: 1.2;
            text-align:left;
        }
        .copd-link,
        .head-login {
            text-decoration: none;
            border-radius: 20px;
            color: #003BA3;
            border: 2px solid #003BA3;
            margin-bottom: 2em;
            display: inline-block;
            padding: 7px 15px;
            font-family: 'montserratbold';
        }
        .home-text1 {
            max-width: 360px;
            padding: 0px 40px 0px;
            margin: auto;
            color: #5c5c5c;
            line-height: 1.4;
            font-size: 14px;
            position: relative;
        }
        .home-text1:first-of-type{font-size:12px; margin-bottom:18px;}  
        .home-link1, .prev-link1 {
            text-decoration: none;
            border-radius: 20px;
            color: #ffffff !important;
            background-color: #003BA3;
            border: 2px solid #003BA3;
            margin-bottom: 2em;
            display: block;
            width: 230px;
            margin: 20px auto;
            padding: 10px 15px;
            font-family: 'montserratbold';
        }
        .home-link2 {
            border-radius: 20px;
            color: #ffffff;
            background-color: #003BA3;  
            border: 2px solid #003BA3;
            margin-bottom: 2em;
            display: block;
            width: 300px;
            height: 25px;
            margin: 20px auto;
            padding: 7px 15px;
            font-family: 'montserratbold';
            text-decoration:none;
        }
        .home-link3 {
            text-decoration: none;
            border-radius: 20px;
            color: #ffffff;
            background-color: #003BA3;
            border: 2px solid #003BA3;
            margin-bottom: 2em;
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 7px 15px;
            font-family: 'montserratbold';
        }
        .home-link2:hover,
        .home-link2:active,
        .home-link2.active {
            color: #ffffff;
        }
        .home-link1:hover,
        .home-link1:active,
        .home-link1.active {
            color: #ffffff;
        }
        .head4 {
            font-size: 1.5em;
            font-family: 'montserratbold';
            margin-bottom: 6px;
            margin-top: 10px;
            color: #5c5c5c;
        }
        .selected-result {
            background-color: #ffffff;
            max-width: 250px;   
            padding: 26px 20px; 
            margin: 30px auto 20px;
            text-align: center;
            line-height: 1.4;
            text-transform: uppercase;
            font-family: 'montserratbold';
            border: 5px solid #afd7b8;
            border-radius: 15px;
        }
        .maxvalue {
            float: right;
            text-align: center;
        }
        .container3 {
            max-width: 320px;
            margin: auto;
            padding: 20px 10px;
            min-height: 90px;
        }
        .result-nav-dots {
            margin-top: 0px;
        }
        .result-nav-dots li {
            text-align: center;
            color: #5c5c5c;
            vertical-align: top;
            font-weight: bold;
            font-size: 0.5em;
        }
        .result-nav-dots li span {
            background-color: #d48b7e;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            padding: 8px;
            margin: 10px 15px;
            display: inline-block;
            border: 1px solid #aaa;
        }
        .result-nav-dots li:nth-child(2) span {
            background-color: #ffa17d;
        }
        .result-nav-dots li:nth-child(3) span {
            background-color: #cae1bb;
        }
        .result-nav-dots li:nth-child(4) span {
            background-color: #afd7b7;
        }
        .result-text1 {
            max-width: 480px;
            padding: 0px 20px 20px;
            margin: auto;
            color: #5c5c5c;
            line-height: 1.4;
            position: relative;
        }
        .result-text2    {  
            max-width: 480px;   
            padding: 10px 10px 15px;    
            margin: auto;   
            color: #5c5c5c; 
            line-height: 1.4;   
            position: relative; 
            border: 1px solid #000; 
        }
        .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper{
            background: none;
        }
        .score{
            position: absolute; 
            left: 81%;  
            bottom: 36rem;  
            z-index: 99;    
            font-size: 28px;    
            color: #fff;    
            font-weight: bold;  
            text-align: center; 
            text-transform: uppercase;  
            padding: 8px ​9p; font-family: 'montserratregular';
        }   
        input.ui-slider-input{opacity:0;}   
        .ui-slider-track .ui-btn.ui-slider-handle{border-radius: 50%;border: 6px solid #afd7b8 !important;margin:-20px!important;}  
        .ui-slider-track{background: #cccac9!important;max-width: 360px!important;margin: auto!important;}  
        .score span{font-size:75px; font-family: 'montserratbold';}
        .text-line{ 
            width: 200px;   
            border: 1px solid black;    
            padding: 50px;  
            margin: 20px;   
        }
        main#spapp > section { display: none; }     
        main#spapp > section:last-child { display: block; }     
        @keyframes appear { from { width:0; opacity:0; } to { width:100%; opacity:1; } }    
        main#spapp > section:target { display: block; animation: appear 0.1s linear 1; }    
        main#spapp > section:target ~ * { display: none; }
        .symptoms-result.p-child{
            background: url("{{ asset('images/f-img.png') }}");
            background-size: cover; 
            background-repeat: no-repeat;   
            width: 140px;   
            height: 83px;   
            left: 32.2%;    
            bottom: 51.7rem;
        }   
        .symptoms-result1.p-child{
            background: url("{{ asset('images/s-img.png') }}");
            background-size: cover; 
            background-repeat: no-repeat;   
            width: 210px;   
            height: 102px;  
            left: 28.2%;    
            bottom: 44.8rem;
        }   
        .symptoms-result2.p-child{
            background: url("{{ asset('images/t-img.png') }}");
            background-size: cover; 
            background-repeat: no-repeat;   
            width: 254px;   
            height: 85px;   
            left: 26.2%;    
            bottom: 39.1rem;
        }   
        .symptoms-result2.p-child span {
            padding: 20px 5px 20px 12px;
            top: 35px;  
            position: relative; 
        }   
        .symptoms-result3.p-child{
            background: url("{{ asset('images/fth-img.png') }}");
            background-size: cover; 
            background-repeat: no-repeat;   
            width: 278px;   
            height: 112px;  
            left: 25.6%;    
            bottom: 32.7rem;
        }   
        .symptoms-result4.p-child{
            background: url("{{ asset('images/fifth-img.png') }}");   
            background-size: cover; 
            background-repeat: no-repeat;   
            width: 258px;   
            height: 102px;  
            left: 25.4%;    
            bottom: 26.2rem;
        }   
        .symptoms-result4.p-child span {    
            padding: 20px 20px; 
            top: 26px;  
            position: relative; 
        }   
        .p-child span{
            padding: 20px 44px; 
            top: 50px;  
            position: relative;
        }
        .bold-txt {
            margin: 0 auto !important;
            width: 383px !important;
            margin-top: 25px !important;
        }
        .question-para {
            margin-top: 7px !important;
        }
        .question-title {
            width: 247px !important;
        }
        .copd-link,
        .head-login {
            text-decoration: none;
            border-radius: 20px;
            color: #003BA3;
            border: 2px solid #003BA3;
            margin-bottom: 2em;
            display: inline-block;
            padding: 7px 15px;
            font-family: 'montserratbold';
        }
        .head4 {
            font-size: 1.5em;
            font-family: 'montserratbold';
            margin-bottom: 6px;
            margin-top: 10px;
            color: #5c5c5c;
        }
        .selected-result {
            background-color: #ffffff;
            max-width: 300px;
            padding: 40px 20px;
            margin: auto;
            text-align: center;
            line-height: 1.4;
            text-transform: uppercase;
            font-family: 'montserratbold';
            border: 5px solid #afd7b8;
            border-radius: 15px;
        }
        .minvalue,
        .maxvalue {
            max-width: 200px;
            color: #5e5e5e;
            float: left;
            width: 60%;
            margin-top: -10px;
        }
        .minvalue{text-align:left;}
        .maxvalue {
            float: right;
            text-align: center;
        }
        .container2 {
            max-width: 520px;
            margin: auto;
            padding: 20px 10px;
            min-height: 90px;
        }
        .container3 {
            max-width: 320px;
            margin: auto;
            padding: 20px 10px;
            min-height: 90px;
        }
        .prev-button,
        .next-button {
            width: 50%;
            float: left;
            text-align: center;
        }
        .prev-button .home-link1,
        .next-button .home-link1 {
            width: 100px;
            padding: 15px;
            border-radius: 26px;
        }
        .arrow1 {
            border: solid #ffffff;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }
        .arrow1.right {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
        }
        .arrow1.left {
            transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
        }
        .nav-dots {
            text-align: center;
            list-style: none;
            padding-inline-start: 0px;
            margin-top: -19vh;
        }
        .nav-dots li {
            display: inline-block;
        }
        .nav-dots li a {
            background-color: rgba(255, 255, 255, 0.6);
            width: 5px;
            height: 5px;
            border-radius: 100%;
            padding: 5px;
            margin: 10px;
            display: inline-block;
            border: 1px solid #aaa;
        }
        .result-nav-dots {
            margin-top: 0px;
        }
        .result-nav-dots li {
            text-align: center;
            color: #5c5c5c;
            vertical-align: top;
            font-weight: bold;
            font-size: 0.5em;
        }
        .result-nav-dots li span {
            background-color: #d48b7e;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            padding: 8px;
            margin: 10px 15px;
            display: inline-block;
            border: 1px solid #aaa;
        }
        .result-nav-dots li:nth-child(2) span {
            background-color: #ffa17d;
        }
        .result-nav-dots li:nth-child(3) span {
            background-color: #cae1bb;
        }
        .result-nav-dots li:nth-child(4) span {
            background-color: #afd7b7;
        }
        .result-text1 {
            max-width: 480px;
            padding: 0px 20px 20px;
            margin: auto;
            color: #5c5c5c;
            line-height: 1.4;
            position: relative;
        }
        .bold-txt {
            margin: 0 auto !important;
            width: 383px !important;
            margin-top: 25px !important;
        }
        .tablinks{
            background: #85b990;
            border: none;
            padding: 20px 50px;
            border-radius: 10px;
            margin: 5px -3px;
            color: #fff;
        }
        .tablinks.active{background:#649b71;}
        .result_cnt ul li{text-transform:uppercase; color:#fff;}
        .result_cnt ul li{list-style:none;}
        .result_cnt{background-image:url("{{ asset('images/result-lung1.png') }}"); background-size: 50%; background-position: top; height: 500px; background-repeat: no-repeat; display:flex; width:100%;}
        .map-track .result_cnt{background-image:url("{{ asset('images/result-lung1.png') }}");}
        .left_col{width:50%; margin:0 auto;}
        .left_col{padding-left:160px;  line-height:60px;}
        .result_cnt ul.left_col li:first-child{padding-left:65px; padding-top: 30px;}
        .result_cnt ul.left_col li.active:nth-child(4){background:url("{{ asset('images/fth-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 285px;margin-left: 50px;height: 80px;background-position: bottom;}
        .result_cnt ul.left_col li:last-child{margin-left: -80px;margin-top: -20px;}
        .result_cnt ul.left_col li.active:nth-child(2){background:url("{{ asset('images/t-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 220px;margin-left: 84px;height: 70px;background-position: bottom;}
        .result_cnt ul.left_col li.active:first-child{background:url("{{ asset('images/f-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 92px;margin-left: 130px;background-position: bottom;padding-top: 30px;padding-bottom: 15px;height: 52px;}
        .result_cnt ul.left_col li.active:first-child p{margin-left: -45px;}
        .result_cnt ul.left_col li.active:nth-child(3) p{margin:0px;}
        .result_cnt ul.left_col li.active:nth-child(3){background:url("{{ asset('images/s-img.png') }}"); background-repeat: no-repeat;background-size: 100%;width: 250px;margin-left: 65px;background-position: center;padding: 10px 0px;}
        .result_cnt ul.left_col li:nth-child(3){line-height: 27px;}
        .result_cnt ul.left_col li.active:last-child{background:url("{{ asset('images/fifth-img.png') }}"); background-repeat: no-repeat;background-size: 100%;background-size: 100%;width: 225px;margin-left: 75px;height: 105px;background-position: center;}
        .right_col{width:50%; text-align: left;line-height: 75px;padding-left: 0px;}
        .right_col li:first-child{padding-top: 23px;}
        .right_col li:last-child{padding-left: 45px;}
        .right_col li:nth-child(3){line-height:30px;}
        .right_col li:nth-child(4){padding-top:3px;}
        .right_col li:nth-child(2){padding-top:1px;}
        .result_cnt ul.right_col li.active:nth-child(2)::after{background: url("{{ asset('images/s-img.png') }}");background-repeat: no-repeat;content: "";background-size: 100%;width: 176px;height: 278px;margin-top: -190px;margin-left: -36px;background-position: center;padding-top: 0px;padding-bottom: 15px;transform: scaleX(-1);position: absolute;}
        .result_cnt ul.right_col li.active:first-child::after{content:""; background:url("{{ asset('images/f-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 150px;height: 100px;margin-top: -112px;margin-left: -36px;background-position: center;padding-top: 0px;padding-bottom: 15px;transform: scaleX(-1);position: absolute;}
        .result_cnt ul.right_col li.active:nth-child(3)::after{content:""; background:url("{{ asset('images/s-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 330px;height: 60px;margin-top: -80px;margin-left: -103px;background-position: center;padding-top: 0px;padding-bottom: 15px;transform: scaleX(-1);position: absolute;}
        .result_cnt ul.right_col li.active:last-child::after{content:""; background:url("{{ asset('images/fifth-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 282px;height: 64px;margin-top: -55px;margin-left: -120px;background-position: center;padding-top: 0px;padding-bottom: 15px;transform: scaleX(-1);position: absolute;}
        .result_cnt ul.right_col li.active:nth-child(4)::after{content:""; background:url("{{ asset('images/fth-img.png') }}"); background-repeat: no-repeat;background-size: 80%;width: 282px;height: 60px;margin-top: -80px;margin-left: -85px;background-position: center;padding-top: 0px;padding-bottom: 15px;transform: scaleX(-1);position: absolute;}
        .right_col li p{line-height: 40px;position: relative;z-index: 9;}
        .right_col li:nth-child(3) p{line-height: 26px;padding: 15px 0px 0px;}
        .result_cnt ul.left_col li{margin-left:-45px;}
        .text{padding:20px 20px 0px; line-height:19px;color:#79a381;}
        .text b{color: #fff;font-size: 57px;font-weight: bold; padding-bottom:10px;}
        .result-nav-dots {
            margin-top: 0px;
        }
        .result-nav-dots li {
            text-align: center;
            color: #5c5c5c;
            vertical-align: top;
            font-weight: bold;
            font-size: 0.5em;
        }
        .result-nav-dots li span {
            background-color: #d48b7e;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            padding: 8px;
            margin: 10px 15px;
            display: inline-block;
            border: 1px solid #aaa;
        }
        .result-nav-dots li:nth-child(2) span {
            background-color: #ffa17d;
        }
        .result-nav-dots li:nth-child(3) span {
            background-color: #cae1bb;
        }
        .result-nav-dots li:nth-child(4) span {
            background-color: #afd7b7;
        }
        .result-text1 {
            max-width: 480px;
            padding: 0px 20px 20px;
            margin: auto;
            color: #5c5c5c;
            line-height: 1.4;
            position: relative;
        }
        .my-result-nav-dots li span {
            background-color: #cae1bb;
            width: 120px;
            height: 120px;
            border-radius: 100%;
            padding: 8px;
            margin: 10px 15px;
            display: inline-block;
            border: 2px solid #afd7b7;
        }
        .Average-button {
            width: 50%;
            float: left;
            text-align: center;
        }
        .Download-button1 {
            width: 50%;
            float: right;
            text-align: center;
        }
        .home-link3{
            text-decoration: none;
            border-radius: 20px;
            color: #ffffff;
            background-color: #85b990;
            border: 2px solid #85b990;
            margin-bottom: 2em;
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 7px 15px;
            font-family: 'montserratbold';
        }
        .Average-button .home-link3, .Download-button1 .home-link3 {
            width: 200px;
            padding: 15px;
            border-radius: 26px;
        }
        .understand-progress-toolbox-bg-lg .desk-bg {
            background: url("{{ asset('images/progress1-bg.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center bottom;
            transform: translateZ(0);
            transition: transform .32s ease-out .44s;
        }
        .understand-progress-toolbox-bg-lg .mobile-desk {
            background-color: #cae1bb !important;
            opacity: .4;
        }
        .exercise1-slider-container .item p {
            font-size: 18px;
            line-height: 24px;
            width: 438px;
            margin: 10px auto;
        }
        .symptoms-result {
            position: absolute;
            margin-left: -55px;
            bottom: 53rem;
            z-index: 99;
            font-size:18px;
            color: #fff;
            font-weight: 200;
            list-style:none;
            text-align: center;
            text-transform: uppercase;
            padding: 6px; font-family: 'montserratregular';
        }
        .symptoms-result1 {
            position: absolute;
            margin-left: -95px;
            bottom: 48.5rem;
            list-style:none;
            z-index: 99;
            font-size:18px;
            color: #fff;
            font-weight: 200;
            text-align: center;
            text-transform: uppercase;
            padding: 6px; font-family: 'montserratregular';
        }
        .symptoms-result2 {
            position: absolute;
            margin-left: -133px;
            bottom: 41.5rem;
            list-style:none;
            z-index: 99;
            font-size: 18px;
            color: #fff;
            font-weight: 200;
            text-align: center;
            text-transform: uppercase;
            padding: 6px;
            font-family: 'montserratregular';
        }
        .symptoms-result3 {
            position: absolute;
            margin-left: -130px;
            bottom: 36rem;
            list-style:none;
            z-index: 99;
            font-size:18px;
            color: #fff;
            font-weight: 200;
            text-align: center;
            text-transform: uppercase;
            padding: 8px ​9px; font-family: 'montserratregular';
        }
        .symptoms-result4 {
            position: absolute;
            margin-left: -135px;
            bottom: 30.5rem;
            list-style:none;
            z-index: 99;
            font-size:18px;
            color: #fff;
            font-weight: 200;
            text-align: center;
            text-transform: uppercase;
            padding: 6px; font-family: 'montserratregular';
        }
        .l-result ul li.symptoms-result.p-child{
            background: url("{{ asset('images/f-img.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            width: 140px;
            height: 87px;
            margin-left: -100px;
            bottom: 53.8rem;
        }
        .l-result ul li.symptoms-result1.p-child{
            background: url("{{ asset('images/s-img.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            width: 210px;
            height: 107px;
            margin-left: -151px;
            bottom: 46.8rem;
        }
        .l-result ul li.symptoms-result2.p-child{
            background: url("{{ asset('images/t-img.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            width: 252px;
            height: 98px;
            margin-left: -176px;
            bottom: 40.5rem;
        }
        .symptoms-result2.p-child span {
            padding: 20px 5px 20px 12px;
            top: 20px;
            position: relative;
        }
        .l-result ul li.symptoms-result3.p-child{
            background: url("{{ asset('images/fth-img.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            width: 278px;
            height: 117px;
            margin-left: -184px;
            bottom: 34.7rem;
        }
        .l-result ul li.symptoms-result4.p-child{
            background: url("{{ asset('images/fifth-img.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            width: 258px;
            height: 102px;
            margin-left: -186px;
            bottom: 28.5rem;
        }
        .symptoms-result4.p-child span {
            padding: 20px 20px;
            top: 4px;
            position: relative;
            left: -25px;
        }
        .p-child span{
            padding: 20px 50px;
            top: 37px;
            position: relative;
        }
        .l-result{
            width: 328px; height: 154px;
            position: relative;
            margin: 0 auto;
        }
        .symptoms-result, .symptoms-result1, .symptoms-result2, .symptoms-result3, .symptoms-result4, .symptoms-result5{position:absolute;
        }
        .talk-bg-lg .desk-bg {
            background: url("{{ asset('images/talk-bg.png') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center bottom;
            transform: translateZ(0);
            transition: transform .32s ease-out .44s;
            background-color: rgb(255,161,125,0.2);
        }
        .better-bg-lg .desk-bg {
            background: url("{{ asset('images/better-bg.png') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center bottom;
            transform: translateZ(0);
            transition: transform .32s ease-out .44s;
            background-color: rgb(255,161,125,0.2);
        }
        .que-bg-lg .desk-bg {
            background: url("{{ asset('images/que-bg.png') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center bottom;
            transform: translateZ(0);
            transition: transform .32s ease-out .44s;
            background-color: rgb(255,161,125,0.2);
        }
        .check-bg-lg .desk-bg {
            background: url("{{ asset('images/check-bg.png') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center bottom;
            transform: translateZ(0);
            transition: transform .32s ease-out .44s;
            background-color: rgb(255,161,125,0.2);
        }
        .patient-bg-lg .desk-bg {
            background: url("{{ asset('images/patient.png') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center bottom;
            transform: translateZ(0);
            transition: transform .32s ease-out .44s;
            background-color: rgb(255,161,125,0.2);
        }
        .symptoms-head {
            position: absolute;
            left: 10%;
            top: 14.6rem;
            z-index: 99;
            font-size: 15px;
            color: #5c5c5c;
            font-weight: 200;
            text-align: center;
            font-family: 'montserratregular';
            width: 168px;
        }
        .line-right:after {
            content:"";
            background-image: url("{{ asset('images/bar.png') }}");
            z-index: 9;
            position: absolute;
            background-size: 100%;
            width: 132px;
            height: 20px;
            background-repeat: no-repeat;
            margin-left: 35px;
            border: none;
        }
        .symptoms-head1 {
            position: absolute;
            left: 11%;
            top: 19.5rem;
            z-index: 99;
            font-size: 15px;
            color: #5c5c5c;
            font-weight: 200;
            text-align: center;
            font-family: 'montserratregular';
            width: 160px;
        }
        .line-right1:after {
            content:""; background-image: url("{{ asset('images/bar.png') }}");
            z-index: 9;
            position: absolute;
            background-size: 100%;
            width: 80px;
            height: 20px;
            background-repeat: no-repeat;
            margin-left: 10px;
            border: none;
        }
        .symptoms-head2 {
            position: absolute;
            left: -2%;
            top: 27rem;
            z-index: 99;
            font-size:15px;
            color: #5c5c5c;
            font-weight: 200;
            text-align: center;
            width:170px; font-family: 'montserratregular';
        }
        .line-right2:after {
            content:"";
            background-image: url("{{ asset('images/bar.png') }}");
            z-index: 9;
            position: absolute;
            background-size: 100%;
            width: 75px;
            height: 20px;
            background-repeat: no-repeat;
            margin-left: 2px;
            border: none;
        }
        .symptoms-head3 {
            position: absolute;
            left: -4px;
            top:33rem;
            z-index: 99;
            font-size:15px;
            color: #5c5c5c;
            font-weight: 200;
            text-align: center;
            width:160px; font-family: 'montserratregular';
        }
        .line-right3:after {
            content:"";
            background-image: url("{{ asset('images/bar.png') }}");
            z-index: 9;
            position: absolute;
            background-size: 100%;
            width: 60px;
            height: 20px;
            background-repeat: no-repeat;
            margin-left: 30px;
            border: none;
        }
        .symptoms-head4 {
            position: absolute;
            left: -23%;
            top: 37rem;
            z-index: 99;
            font-size: 15px;
            color: #5c5c5c;
            font-weight: 200;
            text-align: center;
            font-family: 'montserratregular';
            width: 300px;
        }
        .line-right4:after {
            content:"";
            background-image: url("{{ asset('images/bar.png') }}");
            z-index: 9;
            position: absolute;
            background-size: 100%;
            width: 100px;
            height: 20px;
            background-repeat: no-repeat;
            margin-left: 10px;
            border: none;
        }
        .l-txt{position: relative;
            top: -64rem;
            left: -22rem;
            margin: 0 auto;
            width: 100%;
        }
        .l-result {
            left: 80%!important;
        }
        .result-lung1 {
            margin-right: -23rem!important;
        }
        .un-list{margin-left:50px;}
        .symptoms-result3{
            margin-left: -210px!important;
            bottom: 32rem!important;
        }
        .symptoms-result, .symptoms-result1, .symptoms-result2, .symptoms-result3, .symptoms-result4, .symptoms-result5 {
            font-size: 11px!important;
        }
        .symptoms-result3.p-child {
            width: 150px!important;
            height: 54px!important;
            left: 23%;
            bottom: 31.7rem!important;
        }
        .symptoms-result4{bottom: 29rem!important;}
        .symptoms-result2.p-child {
            width: 145px!important;
            height: 45px!important;
            margin-left: -224px!important;
            bottom: 35.7rem!important;
        }
        .symptoms-result1.p-child{left:16%!important;}
        .symptoms-result.p-child{left:18%!important;}
        .l-txt{
            top: -64rem!important;
            left: -18rem!important;
        }
        .symptoms-result2{bottom: 35.5rem!important;}
        .score{
            font-size: 20px; left: 52%;
            top: -43rem;
        }
        .score span{font-size:70px;}
        .l-result ul li.symptoms-result2.p-child{
            width: 206px;
            height: 70px;
            margin-left: -148px;
            bottom: 43rem;
        }
        .symptoms-result, .symptoms-result1, .symptoms-result2, .symptoms-result3, .symptoms-result4, .symptoms-result5{font-size:14px;}
        .symptoms-result2.p-child span{
            padding: 20px 5px 20px 5px;
            top: 16px;
        }
        .symptoms-result3{bottom:39rem;}
        .symptoms-result4{
            margin-left: -125px;
            bottom: 34.5rem;
        }
        .l-txt{top:-66.5rem;}
        .symptoms-head2{top:24rem;}
        .symptoms-head3{
            left: 28px;
            top: 29rem;
        }
        .symptoms-head4{
            left: -10%;
            top: 33rem;
        }
        .symptoms-result2{
            margin-left: -112px;
            bottom: 43.5rem;
        }
        .line-right2:after{width:62px;}
        .l-result ul li.symptoms-result4.p-child{
            width: 207px;
            height: 74px;
            margin-left: -156px;
            bottom: 33rem;
        }
        .l-result ul li.symptoms-result3.p-child{
            width: 226px;
            height: 95px;
            margin-left: -153px;
            bottom: 37.7rem;
        }
        .p-child span{top:28px; padding:20px 35px;}
        .l-result ul li.symptoms-result1.p-child{
            width: 164px;
            height: 90px;
            margin-left: -126px;
            bottom: 47.7rem;
        }
        .l-result ul li.symptoms-result.p-child{
            width: 110px;
            height: 70px;
            margin-left: -81px;
            bottom: 53.4rem;
        }
        .symptoms-result{margin-left:-45px;}
        .top-dots{
            margin: 0 auto;
            width: fit-content;
        }
        .un-list {
            margin-top: 110px;
            position: relative;
        }
        .home-cards .img-left a{display:flex;}
    </style>
</head>
<body class="">
    <div class="report-toolbox-bg-lg toolbox-bg-lg">
        <div class="desk-bg"></div>
        <div class="mobile-desk"></div>
    </div>
    <picture>
        <source type="image/webp" data-srcset="{{ asset('images/lung_logo_blue.webp') }}" srcset="{{ asset('images/lung_logo_blue.webp') }}" />
        <source type="image/png" data-srcset="{{ asset('images/lung_logo_blue.png') }}" srcset="{{ asset('images/lung_logo_blue.png') }}" />
        <img data-src="images/lung_logo_blue.png" data-srcset="/images/lung_logo_blue.png" loading="lazy" class="lazyloaded lunglife_logo2" width="340" height="324" alt="Lung Life logo" title="Lung Life logo" src="images/lung_logo_blue.png">
    </picture>
    <div class="container">
        <p class="text-center m-0">Toolbox > Map & Track</p>
        <h1 class="text-center font-bold m-0 main-title">LUNG-CHECK RESULT</h1>
    </div>
    <div class="container text-center">
        <div class="result_cnt">
            <ul class="left_col">
                <li><p>fatigue</p></li>
                <li><p>emotions</p></li>
                <li><p>functional <br> status</p></li>
                <li><p>mental status</p></li>
                <li><p>symtoms</p></li>
            </ul>
            <ul class="right_col">
                <li><p>fatigue</p></li>
                <li><p>emotions</p></li>
                <li><p>functional <br> status</p></li>
                <li><p>mental status</p></li>
                <li><p>symtoms</p></li>
            </ul>
        </div>
        <div>
            <ul class="nav-dots result-nav-dots">
                <li><span class="nav-dot active"></span><br>POOR</li>
                <li><span class="nav-dot"></span><br>NEEDS<br>IMPROVEMENT</li>
                <li><span class="nav-dot"></span><br>GOOD</li>
                <li><span class="nav-dot"></span><br>EXCELLENT</li>
            </ul>
        </div>
        <div>
            <ul class="nav-dots result-nav-dots1">
                <li><br><b>FATIGUE</b><br><span class="nav-dot"><p class="score1"><b>60</b></p></span></li>
                <li><br><b>EMOTION</b><br><span class="nav-dot"><p class="score1"><b>60</b></p></span></li>
                <li><br><b>FUNCTIONAL<br>STATUS</b><br><span class="nav-dot"><p class="score1"><b>60</b></p></span></li>
                <li><br><b>MENTAL<br>STATUS</b><br><span class="nav-dot"><p class="score1"><b>60</b></p></span></li>
                <li><br><b>SYMPTOMS</b><br><span class="nav-dot"><p class="score1"><b>60</b></p></span></li>
                <li><br><b>AVERAGE<br>SCORE</b><br><span class="nav-dot"><p class="score1"><b>60</b></p></span></li>
            </ul>
        </div>
        <h3>What does my overall score mean?</h3>
        <p>LUNGCHECK SCORE AND DEGREE OF COPD BURDEN</p>
        <ul class="score-text">
            <li>0 til 19 pts - Light burden</li>
            <li>20 til 39 pts - Moderate burden</li>
            <li>40 til 100 pts - Strong burden</li>
        </ul>
        <p>Ref Lung Alliance, Nedeländerna. <a href="http://goldcopd.org"><b>www.longalliantie.nl</b></a></p>
        <p class="text-center pb-4 result-text2">If your results indicate some areas as poor or needing improvement, we advise you to talk about these with your doctor at the next appointment.</p>
    </div>
</body>
</html>