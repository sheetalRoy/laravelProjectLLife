@extends('layouts.main')
@section('title','Lung Life')
@section('content')
<style type="text/css">
    html:after{background: none;}
</style>
<div class="img-center1">
    <picture>
        <source type="image/webp" data-srcset="{{ asset('images/lunglife_logo.webp') }}" srcset="{{ asset('images/lunglife_logo.webp') }}" />
        <source type="image/png" data-srcset="{{ asset('images/lunglife_logo.png') }}" srcset="{{ asset('images/lunglife_logo.png') }}" />
        <img data-src="{{ asset('images/lunglife_logo.png') }}" data-srcset="{{ asset('images/lunglife_logo.png') }}" loading="lazy" class="lazyloaded lunglife_logo" width="340" height="324" alt="Lung Life logo" title="Lung Life logo" src="{{ asset('images/lunglife_logo.png') }}" />
    </picture>
</div>
<div class="container welcome-page">
    <h1 class="text-center font-bold">Welcome to Lung Life.</h1>
    <p class="text-center pb-4">You'll find tools to help manage your COPD*, improve conversations with your health<br class="hidden-xs"> care professional and discover potentially big benefits from small changes.</p>
</div>
<div class="container login-card">
    <div class="{{ ((!Session::has('user')) ? 'col-md-4' : 'col-md-4') }}">
        <div class="home-cards">
            <a href="javascript:;" class="cookie-check" data-for="lungage">
                <div class="img-left">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/lung_age_icn.webp') }}" srcset="{{ asset('images/lung_age_icn.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/lung_age_icn.png') }}" srcset="{{ asset('images/lung_age_icn.png') }}" />
                        <img data-src="{{ asset('images/lung_age_icn.png') }}" data-srcset="{{ asset('images/lung_age_icn.png') }}" loading="lazy" class="lazyloaded lung_age_icn" width="58" height="72" alt="Lung Age" title="Lung Age" src="{{ asset('images/lung_age_icn.png') }}" />
                    </picture>
                </div>
                <div class="home-cards-txt">
                    <h3>Discover Lung Age</h3>
                    <p>Use this tool to reveal your approximate Lung Age. <br>&nbsp;</p>
                </div>
            </a>
        </div>
    </div>
    <div class="{{ ((!Session::has('user')) ? 'col-md-4' : 'col-md-4') }}">
        <div class="home-cards">
            <a href="javascript:;" class="cookie-check" data-for="lungcheck">
                <div class="img-left">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/lung_check_icn.webp') }}" srcset="{{ asset('images/lung_check_icn.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/lung_check_icn.png') }}" srcset="{{ asset('images/lung_check_icn.png') }}" />
                        <img data-src="{{ asset('images/lung_check_icn.png') }}" data-srcset="{{ asset('images/lung_check_icn.png') }}" loading="lazy" class="lazyloaded lung_check_icn" width="58" height="72" alt="Lung Check" title="Lung Check" src="{{ asset('images/lung_check_icn.png') }}" />
                    </picture>
                </div>
                <div class="home-cards-txt">
                    <h3>Discover Lung Check</h3>
                    <p>Use this tool to track where COPD is impacting your life.<br>&nbsp;</p>
                </div>
            </a>
        </div>
    </div>
    @if(!Session::has('user'))
    <div class="col-md-4 register-login">
        <div class="home-cards">
            <a href="javascript:;" class="cookie-check" data-for="login">
                <div class="img-left">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/login_icn.webp') }}" srcset="{{ asset('images/login_icn.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/login_icn.png') }}" srcset="{{ asset('images/login_icn.png') }}" />
                        <img data-src="{{ asset('images/login_icn.png') }}" data-srcset="{{ asset('images/login_icn.png') }}" loading="lazy" class="lazyloaded login_icn" width="58" height="72" alt="Login Register" title="Login Register" src="{{ asset('images/login_icn.png') }}" />
                    </picture>
                </div>
                <div class="home-cards-txt">
                    <h3>Login / Register</h3>
                    <p>Benefit more from LUNG LIFE by registering – track your progress and get content tailored to you.</p>
                </div>
            </a>
        </div>
    </div>
    @endif
    <div class="pb-4"></div>
</div>
<div class="container text-center" style="clear: both;">
    <a href="#" class="copd-link" id="copd-modal-show">* WHAT IS COPD?</a>
</div>
<div class="privacy_div text-center">
	<a href="javascript:;" id="privacy_statement_button">Privacy statement</a>
	<a href="javascript:;" id="term_of_use_button">Terms of use</a>
	<a href="javascript:;" id="imprint_button">Imprint</a>
	<p >&copy; Boehringer Ingelheim</p>
</div>
<div class="tooltip">
    <picture>
        <source type="image/webp" data-srcset="{{ asset('images/settings.webp') }}" srcset="{{ asset('images/settings.webp') }}" />
        <source type="image/png" data-srcset="{{ asset('images/settings.png') }}" srcset="{{ asset('images/settings.png') }}" />
        <img data-src="{{ asset('images/settings.png') }}" data-srcset="{{ asset('images/settings.png') }}" loading="lazy" class="lazyloaded login_icn" width="18" height="18" alt="" title="" src="{{ asset('images/settings.png') }}" />
    </picture>
    <span class="tooltiptext">manage my cookie preferences</span>
</div>
<!-- COPD Modal -->
<div id="copd-modal" class="copd-modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" id="copd-close">&times;</span>
        <h2>What is COPD?</h2>
        <p class="body-content"> Chronic obstructive pulmonary disease (COPD) is a common, preventable and treatable disease which causes difficulty breathing and means the airway becomes narrower. Symptoms include breathlessness, constant coughing with phlegm and people with COPD may experience short bursts where symptoms get worse called exacerbations. The main risk factor for COPD is smoking.</p>
        <p class="body-para"><b>References:</b></br>Global Initiative for Chronic Obstructive Lung Disease (Gold). Global Strategy for the Diagnosis, Management, and Prevention of Chronic Obstructive Pulmonary Disease; updated 2019. Available at:
            <a href="http://goldcopd.org"> http://goldcopd.org</a></p>
        </div>
    </div>
</div>
@endsection