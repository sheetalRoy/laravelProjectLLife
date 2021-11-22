<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | LungLife</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="You'll find tools to help manage your COPD*, improve conversations with your health care professional and discover potentially big benefits from small changes." />
    <meta http-equiv="Cache-control" content="public" />
    <link rel="manifest" href="{{ asset('manifest.json') }}" crossorigin="use-credentials" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons/manifest.json') }}" crossorigin="use-credentials">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="Lung Life is a patient platform aimed to facilitate more meaningful conversation between patients and HCPs" content="Homepage" abstract="Homepage" robots="index,follow,noodp,noydir" page-type="patient platform" author="Boehringer Ingelheim" publisher="Boehringer Ingelheim" copyright="Boehringer Ingelheim" audiance="all">
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
    <link rel="preload" href="{{ asset('css/custom.css') }}" as="style" />
    <link rel="preload" href="{{ asset('js/custom.js') }}" as="script" />
    <link rel="preload" href="{{ asset('fonts/montserrat-bold-webfont.woff2') }}" as="font" type="font/woff2" crossorigin />
    <link rel="preload" href="{{ asset('fonts/montserrat-regular-webfont.woff2') }}" as="font" type="font/woff2" crossorigin />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/pace-master/css/pace-theme-minimal.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/toast/css/jquery.toast.min.css') }}" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
    @yield('styles')
    <!-- <script type='text/javascript' src="https://script.bi-instatag.com/?ref=https%3A%2F%2Fwww.lunglife.com%2F"></script>
    <script type='text/javascript' src="https://cdn.bi-instatag.com/eprivacy-templates/production/it-eprivacy.js"></script> -->
    <!-- BEGIN QUALTRICS WEBSITE FEEDBACK SNIPPET-->
    <script type='text/javascript'>
        (function(){var g=function(e,h,f,g){
            this.get=function(a){for(var a=a+"=",c=document.cookie.split(";"),b=0,e=c.length;b<e;b++)
            {for(var d=c[b];" "==d.charAt(0);)d=d.substring(1,d.length);if(0==d.indexOf(a))return d.substring(a.length,d.length)}
            return null};
            this.set=function(a,c)
            {var b="",b=new Date;b.setTime(b.getTime()+6048E5);b="; expires="+b.toGMTString();document.cookie=a+"="+c+b+"; path=/; "}
            ;
            this.check=function(){var a=this.get(f);if(a)a=a.split(":");else if(100!=e)"v"==h&&(e=Math.random()>=e/100?0:100),a=[h,e,0],this.set(f,a.join(":"));else return!0;var c=a[1];if(100==c)return!0;switch(a[0])
            {case "v":return!1;case "r":return c=a[2]%Math.floor(100/c),a[2]++,this.set(f,a.join(":")),!c}
            return!0};
            this.go=function(){if(this.check()){var a=document.createElement("script");a.type="text/javascript";a.src=g;document.body&&document.body.appendChild(a)}};
            this.start=function(){var t=this;"complete"!==document.readyState?window.addEventListener?window.addEventListener("load",function()
                {t.go()}
                ,!1):window.attachEvent&&window.attachEvent("onload",function(){t.go()}):t.go()};};
            try{(new g(100,"r","QSI_S_ZN_9zbRQJWtiKLEMpn","[https://zn9zbrqjwtiklempn-boehringeringelheim.siteintercept.qualtrics.com/SIE/?Q_ZID=ZN_9zbRQJWtiKLEMpn]")).start()}
            catch{}})();
        </script>
        <!-- END WEBSITE FEEDBACK SNIPPET-->
    </head>
    <body>
        <div id='ZN_9zbRQJWtiKLEMpn'><!-DO NOT REMOVE-CONTENTS PLACED HERE-></div>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="toolbox-bg-lg">
            <div class="desk-bg"></div>
            <div class="mobile-desk"></div>
        </div>
        <div class="login-bg">
            <div class="desk-bg"></div>
            <div class="mobile-desk"></div>
        </div>
        <div class="breath_symbol_white">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/breath_symbol_white.webp') }}" srcset="{{ asset('images/breath_symbol_white.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/breath_symbol_white.png') }}" srcset="{{ asset('images/breath_symbol_white.png') }}" />
                <img data-src="{{ asset('images/breath_symbol_white.png') }}" data-srcset="{{ asset('images/breath_symbol_white.png') }}" loading="lazy" class="lazyloaded" width="1140" height="890" alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/breath_symbol_white.png') }}">
            </picture>
        </div>
        <div class="lungage-bg age" style="display:none;">
        
        </div>    
            <!--texture img -->
        <!--<div class="lungage-texture-bg">
            <div class="lungage-pic-one">    
                <picture>
                    <source type="image/webp" data-srcset="{{ asset('images/background-texture.png') }}" srcset="{{ asset('images/background-texture.png') }}" />
                    <source type="image/png" data-srcset="{{ asset('images/background-texture.png') }}" srcset="{{ asset('images/background-texture.png') }}" />
                    <img data-src="{{ asset('images/background-texture.png') }}" data-srcset="{{ asset('images/background-texture.png') }}" loading="lazy" class="lazyloaded"  alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/background-texture.png') }}">
                </picture>
            </div>
            <div class="lungage-pic-two">    
                <picture>
                    <source type="image/webp" data-srcset="{{ asset('images/background-texture.png') }}" srcset="{{ asset('images/background-texture.png') }}" />
                    <source type="image/png" data-srcset="{{ asset('images/background-texture.png') }}" srcset="{{ asset('images/background-texture.png') }}" />
                    <img data-src="{{ asset('images/background-texture.png') }}" data-srcset="{{ asset('images/background-texture.png') }}" loading="lazy" class="lazyloaded"  alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/background-texture.png') }}">
                </picture>
            </div>
        </div>-->
		
		<div class="lungage-pic">
        <div class="lungage-pic-one">    
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/swirl-white.png') }}" srcset="{{ asset('images/swirl-white.png') }}" />
                <source type="image/png" data-srcset="{{ asset('images/swirl-white.png') }}" srcset="{{ asset('images/swirl-white.png') }}" />
                <img data-src="{{ asset('images/swirl-white.png') }}" data-srcset="{{ asset('images/swirl-white.png') }}" loading="lazy" class="lazyloaded"  alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/swirl-white.png') }}">
            </picture>
            </div>
            <div class="lungage-pic-two">    
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/swirl-white.png') }}" srcset="{{ asset('images/swirl-white.png') }}" />
                <source type="image/png" data-srcset="{{ asset('images/swirl-white.png') }}" srcset="{{ asset('images/swirl-white.png') }}" />
                <img data-src="{{ asset('images/swirl-white.png') }}" data-srcset="{{ asset('images/swirl-white.png') }}" loading="lazy" class="lazyloaded"  alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/swirl-white.png') }}">
            </picture>
            </div>
        </div>  
        <div class="menu-pop-up text-center" id="menu-pop-up">
            <header>
                <div class="menu-lines close" onclick="myMenuClose(this)">
                    <div class="bar1"></div>
                    <div class="bar3"></div>
                </div>
            </header>
            <div>
                <picture>
                    <source type="image/webp" data-srcset="{{ asset('images/lung_logo_blue.webp') }}" srcset="{{ asset('images/lung_logo_blue.webp') }}" />
                    <source type="image/png" data-srcset="{{ asset('images/lung_logo_blue.png') }}" srcset="{{ asset('images/lung_logo_blue.png') }}" />
                    <img data-src="{{ asset('images/lung_logo_blue.png') }}" data-srcset="{{ asset('images/lung_logo_blue.png') }}" loading="lazy" class="lazyloaded lunglife_logo1" width="340" height="324" alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/lung_logo_blue.png') }}">
                </picture>
            </div>
            <div class="menu-list pb-4">
                <div id="menulist1">
                    <div><a href="{{ url('/') }}" class="menu-a ajax_anchor">HOME</a></div>
                    <div><a href="javascript:;" class="cookie-check menu-a" data-for="lungage">LUNG AGE</a></div>
                    <div><a href="javascript:;" class="cookie-check menu-a" data-for="lungcheck">LUNG CHECK</a></div>
                </div>
                <div>
                    <div class="menu-a" id="menuToolbox">TOOLBOX <span class="arrow"><span></span><span></span></span></div>
                </div>
                <div id="menulist2">
                    <div><a href="{{ url('toolbox') }}" class="menu-a ajax_anchor">HOME</a></div>
                    <div>
                        <a
                        @if(Session::has('countResult'))
                        @if(Session::get('countResult') > 1)
                        id="" href="{{ url('toolbox/map-track') }}"
                        @else
                        id="myBtn1" href="javascript:;"
                        @endif
                        @else
                        id="myBtn1" href="javascript:;"    
                        @endif    	 
                        class="menu-a ajax_anchor">
                    MAP & TRACK</a>
                </div>
                <div><a href="{{ url('toolbox/guide-me') }}" class="menu-a ajax_anchor">GUIDE ME</a></div>
                <div><a href="{{ url('toolbox/talk-to-me') }}" class="menu-a ajax_anchor">TALK TO ME</a></div>
                <div><a href="{{ url('toolbox/patients-like-me') }}" class="menu-a ajax_anchor">PATIENTS LIKE ME</a></div>
            </div>
        </div>
        <div id="menulist3" class="">
            @if(Session::has('user'))
            <a href="{{ url('logout') }}" class="ajax_anchor logout head-login">Logout</a>
            @else
            <a href="{{ url('login') }}" class="cookie-check ajax_anchor head-login" data-for="login">REGISTER / LOGIN</a>
            @endif
        </div>
        <div><a href="javascript:;" class="menu-policy" id="menu-policy">Privacy Policy</a></div>
    </div>
    <header>
        <div class="globe">
            <a href="{{ url('select-language') }}">
                <picture>
                    <source type="image/webp" data-srcset="{{ asset('images/globe_icn.webp') }}" srcset="{{ asset('images/globe_icn.webp') }}" />
                    <source type="image/png" data-srcset="{{ asset('images/globe_icn.png') }}" srcset="{{ asset('images/globe_icn.png') }}" />
                    <img data-src="{{ asset('images/globe_icn.png') }}" data-srcset="{{ asset('images/globe_icn.png') }}" loading="lazy" class="lazyloaded" width="27" height="27" alt="MANAGE MY PREFERENCE" title="MANAGE MY PREFERENCE" src="{{ asset('images/globe_icn.png') }}" />
                </picture>
            </a>
        </div>
        <div class="menu-lines" onclick="myMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div id="header-welcome-div"> 
            @if(Session::has('user'))
            Welcome – {{ session('user')->code }}
            @else    
            <a href="{{ url('login') }}" class="ajax_anchor" data-for="login">REGISTER / LOGIN</a>
            @endif
        </div>
    </header>
    <div id="content" class="animated">
        <div class="loaded_content">
            @yield('content')
        </div>
    </div>
    <div class="bg-img">
        <picture>
            <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
            <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
            <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}" />
        </picture>
    </div>
    <!-- lungcheck first time assessment background image -->
    <div class="new-assess-bg">
        <div class="desk-bg"></div>
        <div class="mobile-desk"></div>
    </div>
        <!-- <div class="lungcheck-bg">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/newassbg.webp') }}" srcset="{{ asset('images/newassbg.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/newassbg.png') }}" srcset="{{ asset('images/newassbg.png') }}" />
                <img data-src="{{ asset('images/newassbg.png') }}" data-srcset="{{ asset('images/newassbg.png') }}" loading="lazy" class="lazyloaded bg-2" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/newassbg.png') }}" />
            </picture>
        </div> -->
        <!-- Termas conditions Modal -->
        <div id="term-condition-modal" class="term-condition-modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" id="term-condition-close">&times;</span>
                <h2>Terms and conditions</h2>
                <div class="content">
                    <p><b> Addressees</b></p>
                    <p> This website is an international information resource from our Corporate Headquarters in Ingelheim, Germany and is intended to provide information about our global business. Please be aware that information relating to the approval status and labels of approved products may vary from country to country, and country-specific information may be available in the countries where we do business.</p>
                    <p><b> Use of Content</b></p>
                    <p> All content on this site is the property of the Boehringer Ingelheim group of companies and is protected by copyright. Permission to use documents (such as white papers, news releases, datasheets and FAQs) from this website is granted, provided that (1) this notice appears in all copies and that, in particular, both the copyright notice and this permission notice appear, (2) use of such documents from this site is for informational, media and non-commercial or personal use only and the documents will not be copied or posted on any network computer or broadcast in  commercial media, and (3) no modifications of any documents are made. Use for any other purpose is expressly prohibited, and may result in severe civil and criminal penalties. Violations will be prosecuted. Permission given above does not include the use of the design or layout of the boehringer-ingelheim.com website or any other site owned, operated, licensed or controlled by one of the companies of the Boehringer Ingelheim group. Elements of these websites are protected by copyright, trade dress, trademark, unfair competition, and other laws and may not be copied or imitated in whole or in part. No trademark, trade dress, logo, graphic, sound or image from any Boehringer Ingelheim website may be copied or retransmitted unless expressly permitted by the specific Boehringer Ingelheim company owning these rights. Any rights not expressly granted herein are reserved.</p>
                    <div class="btn-grp">
                        <a href="#" class="accept-terms">Accept</a>
                        <a href="#" class="decline-terms">Decline</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Privacy policy modal -->
        <div id="privacy-modal" class="privacy-modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" id="privacy-close">&times;</span>
                <h2>Privacy policy</h2>
                <div class="content">
                    <p><b> Privacy Policy</b></p>
                    <p> This data privacy statement explains how Boehringer Ingelheim International GmbH (hereafter "Boehringer Ingelheim", "we", "us") processes which personal data of you for which purposes. In any event, collection and processing of personal data will only take place conformable to the applicable law (i.a. the General Data Protection Regulation, "GDPR"). Contact form or other requests</p>
                    <p>We process your data in order to provide you with the agreed or requested services on this website: <br>
                        - If you register and log in; <br>
                        - if you take part in training courses or events;<br>
                        - if you send us inquiries about products or possible adverse event.
                    </p>
                    <p><b> Log data</b></p>
                    <p> a) Log data and technical cookies <br>
                    When using the website, certain data, including data sent by the browser (e.g. IP address, cookies, previous website, time and date, displayed contents) is temporarily stored. We use this data to enable you to use our website and, if necessary, to review and assert our and third party rights in the event of damage or violations of legal regulations, our terms of use and the rights of third parties. The legal basis is Article 6 (1) f) GDPR. We use cookies and similar technologies such as pixel tags, web beacons and clear GIFs (hereinafter referred to as "cookies"). We use cookies for technical reasons, such as to resume a user's session when logging in if the previous session was interrupted due to inactivity. These cookies are not used to analyse the use of our website. The legal basis is Article 6 (1) f) GDPR.</p>
                    <p>b) Analytics <br>
                    Adobe Analytics (Omniture) We also use cookies from Adobe Analytics, a web analytics service provided by Adobe Systems Software Ireland Limited ("Adobe"). Adobe Analytics uses cookies on behalf of Boehringer Ingelheim to analyze all traffic and usage patterns. The IP address collected by the cookies is made anonymous before it is geolocated. In addition, it is replaced by a generic IP address. Adobe will not associate your IP address with other information held by Adobe. You can prevent Adobe from collecting and using information (cookies and IP address) by using your options at http://www.adobe.com/privacy/opt-out.html As data can be transferred to the USA in exceptional cases, Adobe is self-certified itself to the EU-U.S. Privacy Shield. The analyses help us to improve our services and are based on the so-called balancing of interests clause of the DSGVO. Data transfer to third parties We may share personal information with third parties. 1. Reporting obligations to regulatory authorities and enforcement of rights As a pharmaceutical company, we are subject to specific regulations, such as pharmacovigilance. Some of these laws require us to send your reports to regulators or other authorities worldwide (including countries that may have a different level of data protection than the EU). We only provide authorities with personal data if we are legally obliged to do so. In order to protect our rights or the rights of third parties, we may also disclose data to rights holders, consultants and authorities in accordance with legal provisions.</p>
                </div>
            </div>
        </div>
        <!-- Data Processing Modal -->
        <div id="data-modal" class="data-modal">
            <!-- Modal content -->
            <div class="modal-content">
                <a href="javascript:;" class="close" id="data-close">&times;</a>
                <div class="uk-text-center"><h2>Data processing CONSENT</h2> <p class="uk-margin-large-top">
                  In order to receive the best possible experience, I agree that Boehringer Ingelheim can process my usage data when I access Lunglife
              </p> <p class="uk-margin-large-top">We will send you personal login details for the specialist areas of this website via email. Please find more information about data protection at <a href="#">INSERT BI PAGE OF EACH COUNTRY (to be provided by OPU in localization).</a></p> <p class="uk-margin-large-top">
                  You can revoke your consent at any time with future effect on your profile page on the login page of the Lung Check part of the website.
              </p></div>
          </div>
      </div>
      <!-- Data Processing Modal -->
<?php /*        <div id="data-modal" class="data-modal">
            <!-- Modal content -->
            <div class="modal-content">
                <a href="javascript:;" class="close" id="data-close">&times;</a>
                <h2>DATA PROCESSING CONSENT</h2>
                <p>In order to receive the best possible experience, I agree that Boehringer Ingelheim can process my usage data when I access Lunglife</br>
                We will send you personal login details for the specialist areas of this website via email. Please find more information about data protection at </br>
                INSERT BI PAGE OF EACH COUNTRY (to be provided by OPU in localization).</br>
                You can revoke your consent at any time with future effect on your profile page on the login page of the Lung Check part of the website.
                </p>
            </div>
            </div> */?>
            <!-- what Modal -->
            <div id="what-modal" class="what-modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <a href="javascript:;" class="close" id="what-close">&times;</a>
                    <h2>WHAT DOES MY SCORE MEAN?</h2>
                    <p class="score-bold-text"><b>LUNGCHECK SCORE AND DEGREE OF COPD BURDEN</b></p>
                    <p>0 til 19 pts - Light burden</p>
                    <p>20 til 39 pts - Moderate burden</p><p>40 til 100 pts - Strong burden</p><p>Ref Lung Alliance, Nedeländerna. <a href="http://goldcopd.org">www.longalliantie.nl</a></p>
                </div>
            </div>
            <!-- Trigger/Open The Modal -->
            <!-- <button id="non-reg-modalBtn">Open Modal</button> -->
            <!-- The Modal -->
            <div id="non-reg-modal" class="non-reg-modal">
                <!-- Modal content -->
                <div class="modal-content text-center">
                    <span class="close" id="non-reg-close">&times;</span>
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/non-reg.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/non-reg.png') }}" />
                        <img data-src="{{ asset('images/non-reg.png') }}" data-srcset="{{ asset('images/non-reg.png') }}" loading="lazy" class=" lazyloaded" alt="" src="{{ asset('images/non-reg.png') }}" width="110" height="110">
                    </picture>
                    <h2>REGISTER FOR GREAT FEATURES</h2>
                    <p>The TOOLBOX feature is only available after registration. By registering, you will be able to see the
                    progress you're making over time and gain access to personalised content.</p>
                    <a href="{{ url('register') }}" class="ajax_anchor register-btn" title="Register">Register</a>
                </div>
            </div>
    <!-- Trigger/Open The Modal
        <button id="myBtn1">New assessment</button> -->
        <div id="new-assem-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close" id="new-assem-close">&times;</span>
                <picture>
                    <source type="image/webp" data-srcset="{{ asset('images/map-track.webp') }}" />
                    <source type="image/png" data-srcset="{{ asset('images/map-track.png') }}" />
                    <img data-src="{{ asset('images/map-track.png') }}" data-srcset="{{ asset('images/map-track.png') }}" loading="lazy" class=" lazyloaded" alt="" src="{{ asset('images/map-track.png') }}" width="110" height="110">
                </picture>
                <h2>REGISTER FOR GREAT FEATURES</h2>
                <p>MAP & TRACK is only available if you register for an account and carry out two LUNG CHECK assessments.
                    Doing so will allow you to see the progress you're making over time and give you access to personalised
                content.</p>
                @if(!Session::has('user'))
                <a href="{{ url('register') }}" class="ajax_anchor register-btn" title="Register">Register</a> <br>
                @endif
                <a href="{{ url('lungcheck/assessment') }}" class="ajax_anchor new-asses-btn" title="New Assessment">New Assessment</a>
            </div>
        </div>
    <!-- Trigger/Open The Modal
        <button id="myBtn1">New assessment</button> -->
        <div id="average-score-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close" id="new-assem-close">&times;</span>
                <h2>AVERAGE SCORE</h2>
                <p id="average_score" style="">x</p>
            </div>
        </div>
        <div id="total-score-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close" id="new-assem-close">&times;</span>
                <h2>TOTAL SCORE</h2>
                <p id="total_score" style="">x</p>
            </div>
        </div>
        <div id="forgot-userid-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close forgot-password-close">&times;</span>
                <div id="mail-sent-success" style="display: none;">
                    <p><strong>We've sent you your login details.</strong></p>
                    <p><strong>Please check your email!</strong></p>
                    <div>
                        <button type="button" class="forgot-password-close">Login</button>
                        <a href="javascript:;" id="resendMail" class="resetIdLink">Resend email</a>
                    </div>
                </div>
                <div id="forgot-userid-form-wrapper">
                    <h2>Forgot User ID</h2>
                    <p>Enter your email address below</p>
                    <p>We will send your user ID then</p>
                    <form id="forgot-userid-form" method="POST" autocomplete="off">
                        {{ csrf_field() }}
                        <div>
                            <input placeholder="Email address" id="email-id" name="email" class="uk-input" />
                        </div>
                        <button disabled="disabled" id="forgot-userid-button"> Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="lungage-report-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close lungage-report-close">&times;</span>
                <div id="lungage-userid-form-wrapper">
                    <h2>Enter your email address below</h2>
                    <div>
                        <input type="checkbox" class="uk-checkbox" id="lung_age_accept">
                        I consent that my results are shared to the following email
                    </div>
                    <div>
                        <input placeholder="Email address" id="user-id" name="email" class="uk-input" />
                    </div>
                    <button disabled="disabled" id="lungage-userid-button"> Send</button>
                </div>
                <div id="success-mail" style="display: none;">
                    <p>Email sent</p>
                    <p>check your mail</p>
                </div>
            </div>
        </div>
        <div id="data-processing-consent-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close data-processing-consent-close">&times;</span>
                <h2>Data processing CONSENT</h2>
                <p>In order to receive the best possible experience, I agree that Boehringer Ingelheim can process my usage data when I access Lunglife</p>
                <p>We will send you personal login details for the specialist areas of this website via email. Please find more information about data protection at <a href="#">INSERT BI PAGE OF EACH COUNTRY (to be provided by OPU in localization).</a></p>
                <p>You can revoke your consent at any time with future effect on your profile page on the login page of the Lung Check part of the website.</p>
            </div>
        </div>
        <div id="cpod-report-modal" class="new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content text-center">
                <span class="close lungage-report-close">&times;</span>
                <div class="uk-text-center"><h2><strong>What is COPD?</strong></h2> 
                    <p class="uk-margin-large-top"><strong>Chronic Obstructive Pulmonary Disease (COPD) is a common, preventable and treatable disease that is characterized by persistent respiratory symptoms and airflow limitation that is due to airway and/or alveolar abnormalities usually cuased by significant exposure to noxious particles or gases.</strong></p> 
                    <p class="uk-margin-large-top"><strong>Reference</strong></p> 
                    <p class="uk-margin-large-top references">Global Initiative for Chronic Obstructive Lung Disease (Gold). Global Strategy for the Diagnosis, Management and Prevention of Chronic Obstructive Pulmonary Disease; updated 2019. Available at: <a href="http://goldcopd.org" target="_blank">http://goldcopd.org</a></p>
                </div>
            </div>
        </div>
        <div id="privacy_statement-modal" class="modal new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content" style="text-align: left;">
                <span class="close modal-close">&times;</span>
                <h2>Privacy statement</h2>
                <div>
                    <p>This privacy statement describes how Boehringer Ingelheim Boehringer Ingelheim Finland Ky (hereinafter “Boehringer Ingelheim”, “we”) processes your personal information through this website. Personal data will only be processed in accordance with applicable data protection and privacy laws (ie the general EU data protection regulation, GDPR).</p>
                    <p><b>1. Use of information and legal basis</b></p>
                    <p><b>1.1 Contact Form and Other Requests</b> <br> 
                        We will process your information so that we can provide you with the services agreed upon or requested on this website,
                    </p>
                    <ul>
                        <li> if you register and log in </li>
                        <li> if you attend trainings or events</li>
                        <li> if you send us requests for products or possible adverse events.</li>
                    </ul>
                    
                    <p>The legal basis is Articles 6 (1) (b) and 6 (1) (c) of the General Data Protection Regulation (GDPR) if you are submitting information on possible adverse events (see section 6 for more information on adverse events).</p>
                    <p><b>1.2 Log information</b></p>
                    <p>
                        When a website is accessed, certain data, including data sent by the browser (e.g., IP address, cookie type, previous website, time and date, and displayed content) is temporarily stored. We use this data to enable access to the Website and, where appropriate, to review and defend our and third party's rights in the event of damage and infringement, and to review our Terms of Use and the rights of third parties. The legal basis is Article 6 (1) (b) of the General Data Protection Regulation (GDPR). The log files are kept for as long as necessary for the purpose, in principle for a maximum of 14 days.
                    </p>
                    <p><b>1.3 Cookies and Related Technology</b></p>
                    <p>
                        We use cookies (small text files placed in the browser) and similar technology, such as image references, web beacons or small pixel-sized images (clear GIFs, added to the website) (hereinafter collectively referred to as “cookies”). The following section defines the different types of cookies.
                    </p>
                    <p><b>1.3.1 Essential Cookies</b></p>
                    <p>
                        Necessary cookies are needed for the website to function properly. Such cookies allow access to the website by providing basic functions such as navigating the page, access to secure sections of the website and language settings. Because these cookies are required to use the website, they cannot be refused. The related processing of personal data is based on Article 6 (1) b of the General Data Protection Regulation (GDPR): the contractual provision of our services.
                    </p>
                    <p>
                        The essential cookies used to provide this website include cookies that:
                    </p>
                    <ul>
                        <li> identify whether the user is using Java Script </li>
                        <li> allow site content to be transferred to a visitor from a server while the user is browsing the site</li>
                        <li> determine which category the user has accepted in the cookie bar</li>
                        <li> maintain user space for all page requests.</li>
                    </ul>
                    <p>The duration of the essential cookies we use varies from one session to one year.<p>
                    <p>  <b>1.3.2 Cookies used to optimize the website</b></p>
                    <p>
                        Based on your consent (Article 6 (1) of the General Data Protection Regulation), we will enhance the operation of our websites with cookies and identify your devices on subsequent visits in order to obtain usage data and statistics. You can revoke your consent at any time without adverse effects, in which case the revocation concerns the future processing of personal data. To cancel the consent, change the settings here.
                    </p>
                    <p>
                        We use the following third party services:
                    </p>
                    <p><b>Adobe Analytics (Omniture) </b></p>
                 
                    <p>
                        If you agree to their use, we use cookies from Adobe Analytics, a web analytics service provided by Adobe Systems Software Ireland Limited (“Adobe”). Adobe Analytics uses cookies on behalf of Boehringer Ingelheim to analyze all web traffic and usage habits. The duration of cookies varies from one session to three years. The IP address collected by cookies is made anonymous before it is located. In addition, it will be replaced by a generic IP address. Adobe will not associate your IP address with any other information in its possession. To prevent Adobe from collecting and using information (cookies and IP address), change your settings at http://www.adobe.com/privacy/opt-out.html or here.
                    </p>
                    <p> <b>Google Analytics (FIN)</b></p>
                   
                    <p>
                        This website uses Google Analytics, a web analytics service provided by Google, Inc. (“Google”). Google Analytics uses cookies to analyze users' use of the site. If you're in an EU or EEA country, Google will shorten your computer's IP address before moving it to the United States. Only in exceptional cases will the address be sent to Google's server in the United States as is and will not be abbreviated there. Google has certified itself in accordance with the EU-US Privacy Shield. Google will use this information on behalf of Boehringer Ingelheim to generate reports on website activity and to provide other services relating to website activity and internet usage. IP address, sent from your browser as part of Google Analytics activity will not be associated with any other data held by Google. Analyzes help us improve our services. The legal basis is Article 6 (1) (f) of the General Data Protection Regulation (GDPR). You can prevent the information generated by cookies (including your IP address) from being transmitted to Google by downloading and installing this browser add-on.
                    </p>
                    <p>
                        The cookies associated with this service allow us, among other things
                    </p>
                    <ul>
                        <li>   create a unique ID for users and track visitors in our various domains</li>
                        <li>   determine whether cookies are enabled</li>
                        <li>   generate statistics on user website visits</li>
                        <li>   identify the time (in days) between two visits by the same visitor</li>
                        <li>   count the number of visits by an individual user.</li>
                    </ul>
                    <p><b>1.3.3 Marketing cookies</b></p>
                    <p>
                        We use marketing cookies to track users on other websites and to show ads that are relevant to an individual user’s interests. This processing is based on your consent (Article 6 (1) a) of the General Data Protection Regulation, which you may cancel at any time through the settings of this link without adverse effects, in which case the cancellation concerns the future processing of personal data.
                    </p>
                    <p>We use the following third party services:</p>
                   <p> <b>Facebook Custom Audience and Instagram (pixels):</b></p>
                   
                    <p>
                        We use the basic version of the Facebook pixel to display our own and third-party personalized ads on Facebook and Instagram. Facebook and Instagram are operated by Facebook Ireland Ltd, 4 Grand Canal Square, Grand Canal Harbor, Dublin 2 Ireland (“Facebook”).
                    </p>
                    <p>
                        Due to the marketing tools used, your browser will automatically connect directly to the Facebook server. We are unable to influence the use of information collected by Facebook through a pixel and the extent of the information collected. Through the Facebook Custom Audiences integration, Facebook receives information that you have visited and viewed our online offer or that you have clicked on an ad we have displayed. If you have registered with one of Facebook’s services, Facebook may target the visit to your private account. Even if you are not registered with Facebook or logged in, your service provider may be able to detect and store your IP address and other identifiers. The Facebook pixel allows us to measure, evaluate, and optimize the effectiveness of Facebook ads for statistical and market research purposes.
                    </p>
                    <p>
                        Logged-in users can disable Facebook Custom Audiences at www.facebook.com/settings/. For more information about the collection and use of Facebook information, as well as privacy rights and options, see the Facebook Privacy Policy (https://www.facebook.com/privacy/explanation). You can revoke your consent to use a Facebook pixel at any time from the following link, in which case the revocation applies to future processing of personal information: https://www.facebook.com/login.php?next=https://www.facebook.com/ads/preferences/? entry_product = ad_settings_screen. To do this, you must be logged in to Facebook or Instagram. For more information on handling Facebook information, go to www.facebook.com/about/privacy.
                    </p>
                    <p> <b>Twitter (conversion tunist)</b></p>
                   
                    <p>
                        Our website also has a remarketing feature for Twitter. It is provided by Twitter Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, USA. With Twitter’s remarketing feature, we can offer advertising based on your Twitter platform’s interests. For this purpose, Twitter uses so-called tags. The tag records visits to our website and usage information (e.g., any interactions related to the advertising displayed, such as clicking on links, referrals, or likes) in a non-personal format. If you visit Twitter later, integrated ads will be displayed based on your interests. Twitter will then receive information from your browser that your device has visited our website. If you have registered for Twitter, Twitter may target a visit to your account. Even if you are not registered with Twitter or logged in, your service provider may be able to detect and store your IP address and other identifiers. Your information about the use of our services generated by the tags will be transferred to a Twitter server in the United States and stored there. For more information on disabling this feature on Twitter, visit https://help.twitter.com/de/safety-and-security/privacy-controls-for-tailored-ads. For more information on how to handle Twitter data, visit https://twitter.com/de/privacy. Your information about the use of our services generated by the tags will be transferred to a Twitter server in the United States and stored there. For more information on disabling this feature on Twitter, visit https://help.twitter.com/de/safety-and-security/privacy-controls-for-tailored-ads. For more information on how to handle Twitter data, visit https://twitter.com/de/privacy. Your information about the use of our services generated by the tags will be transferred to a Twitter server in the United States and stored there. For more information on disabling this feature on Twitter, visit https://help.twitter.com/de/safety-and-security/privacy-controls-for-tailored-ads. For more information on how to handle Twitter data, visit https://twitter.com/de/privacy.
                    </p>
                    <p>
                        Information on how to disable this feature on Twitter can be found at https://help.twitter.com/nl/safety-and-security/privacy-controls-for-tailored-ads. More information about how Twitter processes data can be found at https://twitter.com/en/privacy.
                    </p>
                    <p> <b>LinkedIn (Insight tag)</b></p>
                   
                    <p>
                        Our website also uses conversion tracking with the LinkedIn Insight tag provided by LinkedIn Ireland, Wilton Plaza, Wilton Place, Dublin 2, Ireland. The LinkedIn Insight tag is integrated into our website for this purpose, and LinkedIn sets a cookie on your device. LinkedIn receives information that you have visited our website and your IP address is collected. Timestamps and events, such as page displays, are also saved. This allows for a statistical evaluation of the use of our website for its continuous optimization. Among other things, we receive information about which LinkedIn advertisement or interaction on LinkedIn brought you to our website. This allows us to better control how our ads appear. To learn more about conversion tracking, visit https: //www.linkedin. com / help / linkedin / answer / 67595 / linkedin-conversion-trackingubersicht. Note that LinkedIn data can be stored and processed so that it can be linked to a corresponding user profile. LinkedIn may use the information for its own advertising purposes. For more information, see LinkedIn's Privacy Policy at https://www.linkedin.com/legal/privacy-policy. You can prevent LinkedIn from analyzing your usage data and displaying recommendations based on your interests at https://www.linkedin.com/psettings/guest-controls/retargeting-opt-out. com / legal / privacy-policy. You can prevent LinkedIn from analyzing your usage data and displaying recommendations based on your interests at https://www.linkedin.com/psettings/guest-controls/retargeting-opt-out. com / legal / privacy-policy. You can prevent LinkedIn from analyzing your usage data and displaying recommendations based on your interests at https://www.linkedin.com/psettings/guest-controls/retargeting-opt-out.<br>
                        LinkedIn is also certified under the EU-US Privacy Shield: https://www.privacyshield.gov/participant?id=a2zt0000000L0UZAA0&amp;status=Active.
                    </p>
                    <p></p>
                    <b>Shariff solution for social media platforms:</b>
                    <p>
                        Our website has buttons for various social media platforms (Facebook, Twitter, YouTube, LinkedIn, Instagram and Pinterest). When you click on one of these buttons, you will be taken to our company page in that platform. To protect your privacy, we have implemented a so-called Shariff solution. If you click a button on a social media provider (e.g. Facebook) on our website, your browser will connect directly to that provider’s servers, which may be located in the United States. If you are logged in to your account with this service provider, your profile information may be supplemented by information obtained from your use of our content. That service provider is responsible for processing your personal information. For more information on the processing of personal data, visit the website of the service provider in question.
                    </p>
                    <p>
                        <b>1.4 Other purposes for which personal data are processed</b> 
                        We process your personal data so that we can
                    </p>
                    <ul>
                        <li>  fulfills our legitimate interests, including <br>
                            (i) conducting business transactions (e.g., corporate reorganization, sale or transfer of assets, mergers) <br>
                            (ii) protecting our rights or assets, enforcing terms of use and legal notices, and forming, enforcing and defending legal claims
                        </li>
                        <li>   comply with legal obligations, court orders or other binding decisions</li>
                        <li>   use them for other purposes if you agree to this, such as subscribing to a newsletter; in such a case, you have the option to withdraw your consent at any time.</li>
                    </ul>
                    <p></p>
                    <p><b>2. Data Transfer</b></p>
                    <p>We may share personal information with third parties.</p>
                    <p> <b>2.1 Obligations to notify supervisory authorities and enforcement of rights </b></p>
                   
                    <p>
                        We may share personal information in pharmacovigilance cases in accordance with Section 6. In order to protect our rights or the rights of third parties, we may also disclose information to rights holders, consultants and authorities in accordance with the provisions of the law.
                    </p>
                    <p>
                        In order to protect our rights or those of third parties, we may also provide data to rightholders, consultants and authorities in accordance with legal provisions.
                    </p>
                    <p>  <b>2.2 Service Provider </b></p>
                  
                    <p>
                        We oblige service providers to process your personal information for the purposes described in this privacy statement. Such service providers process the information on our behalf solely in accordance with the instructions we provide and under our control in accordance with this privacy statement.
                    </p>
                    One of these providers is Adobe Systems Software Ireland Limited, 4-6 River-walk, Citywest Business Campus, Dublin 24, Ireland, which provides information and network analysis services.
                    <p>
                    </p>
                    <p> <b>2.3 Boehringer Ingelheim companies</b></p>
                   
                    <p>
                        As Boehringer Ingelheim is a global group, we use other companies in the group to process the data. These group companies process the data only for the purposes described in this privacy statement.
                    </p>
                    <p> <b>2.4 Transfer of data to non - EU recipients</b></p>
                   
                    <p>
                        Some of these service providers and Boehringer companies process personal data outside the EU. In these cases, we ensure an adequate level of data protection that meets the requirements of European law (normally through EU standard contract clauses published by the European Commission).
                    </p><br>
                    <p><b>3. Special data protection notice for pharmacovigilance activities</b></p>
                    <p>
                        If you report adverse events or other pharmacovigilance information related to Boehringer Ingelheim, we will only use and share this information for pharmacovigilance purposes. (Pharmacovigilance refers to the detection, assessment, understanding and prevention of adverse drug reactions or other drug-related problems.)
                    </p>
                    <p>
                        All reports are shared with Boehringer Ingelheim International GmbH, which maintains a global pharmacovigilance database.
                    </p>
                    <p>
                        Boehringer Ingelheim is required to report pharmacovigilance information to health authorities worldwide (including in countries with different levels of data protection outside the EU). Legal basis: Article 6 (1) (c) of the General EU Data Protection Regulation (GDPR) and Article 6 (1) (f) and Article 49 (1) (e) for transfers outside the EU.
                    </p>
                    <p>
                        The reports contain information about the event but only limited personal information:
                    </p><ul>
                        <li>   For patients, the report only includes age, gender, and initials in a given format, but never the patient’s name.</li>
                        <li>   For reporting persons, the report includes name, profession (e.g., physician or pharmacist), initials, or address, email address, and telephone number in the form provided. Contact details are needed so that the reporter can be contacted afterwards to ensure high quality and complete information on adverse events. If the reporter does not wish to provide his contact details to Boehringer Ingelheim or the authorities, enter “private” in the reporter's name field.</li>
                    </ul>
                    <p>If your information is shared with other Boehringer Ingelheim companies, business partners or service providers outside the EU, we will adequately protect your personal information. <br>
                    Due to the importance of adverse event reports for public health reasons, reports will be kept for at least ten years after the product has been withdrawn from the market in the last country where it was marketed.</p>
                   
                    <p>
                        <b>4. Removal</b>
                    </p>
                    <p>
                        Boehringer Ingelheim will retain your personal data for as long as is necessary for the purpose of the processing, which mainly means the provision of the services you have ordered. In other words, for example, we will send you our newsletters on an ongoing basis unless you cancel your subscription, and we will retain your user account information (login information, occupation, name, etc.) for as long as you retain your user account.
                    </p>
                    <p>
                        We retain personal information for as long as it is necessary for the business purpose or purposes for which it was collected. If you withdraw your consent, delete user accounts or object to the processing of data, we will delete the collected data in a timely manner.
                    </p>
                    <p>
                        In some cases, we need to retain data for compliance with statutory retention periods (e.g. in the context of pharmacovigilance). In such a case, we will ensure that your information is only used to fulfill our retention obligations and not for other purposes.
                    </p>
                    <p><b>5. Your rights</b></p>
                    <p>
                        Subject to the limitations of applicable law, you have the right to access your personal information and the right to rectify, restrict, delete and transfer your personal information. In addition, you have the right to refuse to be subject to automatic personal decision-making.
                    </p>
                    <p>
                        You also have the right to withdraw your consent at any time.
                    </p>
                    <p><b>Right to object</b></p>
                    <p>
                        To the extent that we base the processing on our legitimate interests, you may refuse such processing at any time. In this case, we will no longer process such personal information unless our interests are found to prevail. You may object to the use of the information for direct marketing purposes at any time. In addition, you may object to the processing of your personal data for transfer to non-EU authorities in the pharmacovigilance cases described in section 6, unless Boehringer Ingelheim's interests are found to prevail.
                    </p>
                    <p>
                        Requests or questions related to our processing of your personal data can be sent to:
                    </p>
                    <p>
                        Boehringer Ingelheim Boehringer AB <br>
                        - Data Protection Officer - <br>
                        Tammassaarenkatu5 <br>
                        00 180 Helsinki, <br>
                        Finland <br>
                        Email: <a href="mailto:george.atie@boehringer-ingelheim.com">george.atie@boehringer-ingelheim.com</a><br>
                    </p>
                    <p>
                        Jos sinulla on edelleen huolenaiheita, sinulla voi olla oikeus tehdä valitus oman maasi tietosuojasta tai BI:stä vastaavalle valvontaviranomaiselle:
                    </p>
                    <p>
                        Ratapihantire 9, 00520 , 800, 00521 Helsinki<br>
                        E-Mail: <a href="mailto:tietosuoja@om.fi">tietosuoja@om.fi</a>
                    </p>
                    <p>
                        Last updated: December 2020
                    </p>
                </div>
            </div>
        </div>
        <div id="term_of_use-modal" class="modal new-assem-modal">
            <!-- Modal content -->
            <div class="modal-content" style="text-align: left;">
                <span class="close modal-close">&times;</span>
                <h2>Terms of use</h2>
                <div><p><b>Recipients</b></p>
                  <p>This website is an international database of our headquarters (Ingelheim, Germany) and is intended to provide information about our global business. Please note that information on approval status and labeling of approved products may vary by country. Country-specific information may be available in the countries in which we do business.</p>
                  <p><b>Use of Content</b></p>
                  <p>All content on this site is the property of the Boehringer Ingelheim Group and is protected by copyright. Access to documents on this site (such as white papers, newsletters, fact sheets and frequently asked questions) is granted provided that (1) this notice, and in particular both the copyright notice and this license notice, appear in all copies, and (2) such documents on this site are used only for information, media purposes, personal use and non-commercial purposes, and that the documents are not copied or published on any online computer or in the commercial media, and that (3) no changes are made to the documents. Use for any other purpose is expressly prohibited and may result in serious civil and criminal penalties. Violations will be prosecuted.</p>
                  <p>The permission granted above does not cover the use of the design or layout of Boehringer-ingelheim.com or other sites owned, operated, licensed or operated by Boehringer Ingelheim Group companies. Portions of these websites are protected by copyright, design, trademark and unfair competition laws, among others, and may not be copied or imitated in whole or in part. No trademark, design, logo, graphic, sound or image on Boehringer Ingelheim's website may be copied or retransmitted without the express permission of Boehringer Ingelheim, the owner of those rights.</p>
                  <p>The owner reserves all rights not expressly granted herein.</p>
                  <p><b>Trademark notice</b></p>
                  <p>The trade names of the Boehringer Ingelheim products referred to herein are trademarks of the Boehringer Ingelheim Group, whether or not the names are in bold or bear the trademark symbol ®. The names of actual companies and products mentioned herein may be the trademarks of their respective owners. Use of these trademarks, the Boehringer Ingelheim company name, and the company logo other than as permitted herein is expressly prohibited and may be against the criminal law. The products mentioned here may have different trade names, labels, product presentations and strengths in different countries. Contact our local subsidiary if you need clarification.</p>
                 
                  <p><b>Disclaimer</b></p>
                  <p>The Boehringer Ingelheim Group and / or its respective suppliers make no representations about the suitability for any purpose of the information contained in the documents and related images published on this site. All such documents and related images are provided “as is” without warranty of any kind. The Boehringer Ingelheim Group and / or its respective suppliers hereby disclaim all warranties and conditions relating to this information, including all implied warranties and conditions of merchantability, fitness for a particular purpose, title and non-infringement. Use of the content is at the user's own risk. In no event shall the units of the Boehringer Ingelheim group and / or its similar suppliers be liable for any special,</p>
                  <p>Medicinal product dossiers are not intended to be used as an alternative to discussion with a healthcare professional or other qualified expert. If you need advice on a specific health problem, contact your healthcare professional.</p>
                  <p>Documents and related images published on the server may contain technical inaccuracies or typographical errors. Information may change from time to time. The Boehringer Ingelheim Group and / or its respective suppliers may make improvements and changes in the products and software described herein at any time.</p>
                  <p><b>Notices regarding software, documents and services available on this website</b></p>
                  <p>In no event shall the Boehringer Ingelheim Group and / or its respective suppliers be liable for any special, indirect or consequential damages or for any damages arising out of or in connection with the use or operation of the software, documents, services or information available on this site. whether it is an action for breach of contract, omission or other tort, resulting in loss of use, information or profits.</p>
                  <p><b>Links to Third Party Sites</b></p>
                  <p>Some links in this area allow you to leave the Boehringer Ingelheim website and go to external sites. Unless otherwise stated in the publication information of the external site, the Linked Sites are not under the control of Boehringer Ingelheim, and no Boehringer Ingelheim Group unit is responsible for the content of such linked site or link to this site or for any changes or updates to such sites. Nor is any unit of the Boehringer Ingelheim Group responsible for any web transmission or other type of data transmission received from any linked site. These links are provided for your convenience only and the inclusion of any link does not imply endorsement by the Boehringer Ingelheim Group of the site.</p>
                  <p><b>Inquiries and feedback</b></p>
                  <p>Inquiries and feedback sent to Boehringer Ingelheim through this website should not address personal health issues or certain prescription medications. In these matters, you should contact a healthcare professional. If the contact of a user of these documents contains feedback, such as questions, comments, suggestions or the like regarding the content of the documents, such information will be considered non-confidential and the Boehringer Ingelheim Group has no obligation to reproduce, use, disclose and share this information with others, but only in anonymous form as required by applicable privacy law.</p>
                  <p><b>RSS News Feeds</b></p>
                  <p>Your use of Boehringer Ingelheim's RSS feeds is subject to these Terms of Use. Boehringer Ingelheim reserves the right to discontinue this service at any time.</p>
              </div>
          </div>
      </div>
      <div id="imprint-modal" class="modal new-assem-modal">
        <!-- Modal content -->
        <div class="modal-content" style="text-align: left;">
            <span class="close modal-close">&times;</span>
            <h2>Imprint</h2>
            <div>
                <p>Boehringer Ingelheim Finland Ky</p>
                <p>Tammasaarenkatu 5</p>
                <p>00180 Helsinki, Finland</p>
                <p>Business ID FI 15976372</p>
                <p>Location Espoo</p>
                <p>Key personnel of Boehringer Ingelheim Finland Ky:</p>
                <p>Amos Gyllenbögel, President and CEO</p>
                <p>Jarmo Kaukua, Medical Director</p>
                <p>Tom Hellström, CFO</p>
                <p>Pia Mikkola, Human Resources</p>
                <p>Tiina Eramo, Director in charge</p>
                <p>Phone: 010 310 2800 (Mon-Thu 8.30-16, Fridays and public holidays 8.30-15; in July Mon-Fri 8.30-15)</p><br>
                <p>Email: <a href="mailto:medinfo.finland@boehringer-ingelheim.com">medinfo.finland@boehringer-ingelheim.com</a></p>
            </div>
        </div>
    </div>

      <!-- social media modal -->

    <!-- Facebook modal -->
    <div class="fbmodal" id="fbmodal">
        <div class="modal-content text-center">
            <span class="close">×</span>
            <span class="fb-icon">
             <svg  style="fill: #0036a9;" width="25" height="25" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg>
            </span>
            <div class="modal-fb-img">
                <picture>
                    <source type="image/webp" data-srcset="{{url('images/lung_logo_blue.webp')}}" srcset="{{url('images/lung_logo_blue.webp')}}">
                    <source type="image/png" data-srcset="{{url('images/lung_logo_blue.png')}}" srcset="{{url('images/lung_logo_blue.png')}}">
                    <img data-src="{{url('images/lung_logo_blue.png')}}" data-srcset="{{url('images/lung_logo_blue.png')}}" loading="lazy" class="lazyloaded" width="auto" height="auto" alt="LUNG LOGO" title="LUNG LOGO" src="{{url('images/lung_logo_blue.png')}}">
            </picture>              
            </div>
                         
            <p>I just used Lung Life and found out my lungs are <b>8 years</b> older than me. <a href="#">Click here </a>to find out yours.</p>
           <a href="#" class="fb-modal-share" id="facebook">SHARE</a>
        </div>
    </div>

    <!-- Twitter modal -->

    <div class="fbmodal" id="twmodal">
        <div class="modal-content text-center">
            <span class="close">×</span>
            <span class="fb-icon">
            <svg style="fill: #0036a9;" width="25" height="25" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="twitter"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path></svg>
            </span>
            <div class="modal-fb-img">
                <picture>
                    <source type="image/webp" data-srcset="{{url('images/lung_logo_blue.webp')}}" srcset="{{url('images/lung_logo_blue.webp')}}">
                    <source type="image/png" data-srcset="{{url('images/lung_logo_blue.png')}}" srcset="{{url('images/lung_logo_blue.png')}}">
                    <img data-src="{{url('images/lung_logo_blue.png')}}" data-srcset="{{url('images/lung_logo_blue.png')}}" loading="lazy" class="lazyloaded" width="auto" height="auto" alt="LUNG LOGO" title="LUNG LOGO" src="{{url('images/lung_logo_blue.png')}}">
            </picture>              
            </div>
                         
            <p>I just used Lung Life and found out my lungs are <b>8 years</b> older than me. <a href="#">Click here </a>to find out yours.</p>
           <a href="#" class="fb-modal-share" id="twitter">SHARE</a>
        </div>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<script type="text/javascript">
    var LANG = "{{ app()->getLocale() }}";
    var APP_URL = "{{ env('APP_URL') }}";
    var API_URL = "{{ env('API_URL') }}";
</script>
<script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/pace-master/js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/toast/js/jquery.toast.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/cookie/js/jquery.cookie.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<!-- Swiper JS -->
<script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
<script src='https://cdn.jsdelivr.net/npm/pdf-lib/dist/pdf-lib.js'></script>
<script src='https://cdn.jsdelivr.net/npm/pdf-lib/dist/pdf-lib.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
@yield('scripts')
</body>
</html>