@extends('layouts.main')
@section('title','SHORT OF BREATH')
@section('styles')
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
<style type="text/css">.ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper{background: none;}header {z-index: 1;position: relative;}</style>
@endsection
@section('content')
<main id="spapp" data-role="page" id="page1" data-url="page1">
    <!---A-2--->
    <section id="a-2" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">2 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW OFTEN DID YOU FEEL</p>
            <h1 class="text-center font-bold">SHORT OF BREATH DOING<br>PHYSICAL ACTIVITIES ?</h1>
            <p id="value3" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" id="range2" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput1(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-1" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-3" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-5" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-2--->
    <!---A-3--->
    <section id="a-3" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">3 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW OFTEN DID YOU FEEL</p>
            <h1 class="text-center font-bold">CONCERNED ABOUT GETTING A COLD<br>OR YOUR BREATHING GETTING</br>WORSE?</h1>
            <p id="value4" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" id="range3" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput2(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-2" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-4" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-6" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-3--->
    <!---A-4--->
    <section id="a-4" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">4 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW OFTEN DID YOU FEEL</p>
            <h1 class="text-center font-bold">DEPRESSED (DOWN) BECAUSE OF<br>YOUR BREATHING PROBLEMS?</h1>
            <p id="value5" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range4" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput3(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-3" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-5" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-7" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-4--->
    <!---A-5--->
    <section id="a-5" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">5 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">IN GENERAL, DURING THE PAST WEEK, HOW MUCH OF THE TIME</p>
            <h1 class="text-center font-bold">DID YOU COUGH?</h1>
            <p id="value6" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range5" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput4(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-4" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-6" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-8" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-5--->
    <!---A-6--->
    <section id="a-6" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">6 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">IN GENERAL, DURING THE PAST WEEK, HOW MUCH OF THE TIME</p>
            <h1 class="text-center font-bold">DID YOU PRODUCE PHLEGM?</h1>
            <p id="value7" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range6" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput5(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-5" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-7" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-9" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-6--->
    <!---A-7--->
    <section id="a-7" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">7 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">IN GENERAL, DURING THE PAST WEEK, HOW LIMITED WERE YOU IN THESE ACTIVITIES BECAUSE OF YOUR BREATHING PROBLEMS</p>
            <h1 class="text-center font-bold">STRENUOUS PHYSICAL ACTIVITIES</br>SUCH AS CLAIMBING STAIRS,</br>RUSHING,DOING SPORTS)?</h1>
            <p id="value8" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NOT LIMITED AT ALL</div>
                <div class="maxvalue">TOTALLY LIMITED OR UNABLE TO DO</div>
                <input class="add" type="number" data-type="range" 
                id="range7" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput6(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-6" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-8" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-10" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-7--->
    <!---A-8--->
    <section id="a-8" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">8 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW LIMITED WERE IN THESE ACTIVITIES BECAUSE OF YOUR BREATHING PROBLEMS</p>
            <h1 class="text-center font-bold">MODERATE PHYSICAL ACTIVITIES</br>(SUCH AS WALKING,HOUSE WORK,</br>CARRYING THINGS)?</h1>
            <p id="value9" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NOT LIMITED AT ALL</div>
                <div class="maxvalue">TOTALLY LIMITED OR UNABLE TO DO</div>
                <input class="add" type="number" data-type="range" 
                id="range8" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput7(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-7" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-9" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-11" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-8--->
    <!---A-9--->
    <section id="a-9" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">9 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW LIMITED WERE IN THESE ACTIVITIES BECAUSE OF YOUR BREATHING PROBLEMS</p>
            <h1 class="text-center font-bold">DAILY ACTIVITIES AT HOME</br>(SUCH AS DRESSING,</br>WASHING YOURSELF)?</h1>
            <p id="value10" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NOT LIMITED AT ALL</div>
                <div class="maxvalue">TOTALLY LIMITED OR UNABLE TO DO</div>
                <input class="add" type="number" data-type="range" 
                id="range9" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput8(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-8" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-10" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-12" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-9--->
    <!---A-10--->
    <section id="a-10" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">10 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW LIMITED WERE IN THESE ACTIVITIES BECAUSE OF YOUR BREATHING PROBLEMS</p>
            <h1 class="text-center font-bold">SOCIAL ACTIVITIES SUCH AS TALKING,</br>BEING WITH CHILDREN,VISITING</br>FRIENDS/RELATIVES)?</h1>
            <p id="value11" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NOT LIMITED AT ALL</div>
                <div class="maxvalue">TOTALLY LIMITED OR UNABLE TO DO</div>
                <input class="add" type="number" data-type="range" 
                id="range10" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput9(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-9" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-11" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-13" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-10--->
    <!---A-11--->
    <section id="a-11" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">11 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">HOW OFTEN IN THE PAST WEEK DID YOU SUFFER FROM</p>
            <h1 class="text-center font-bold">WORRY?</h1>
            <p id="value12" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range11" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput10(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-10" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-12" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-14" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-11--->
    <!---A-12--->
    <section id="a-12" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">12 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">HOW OFTEN IN THE PAST WEEK DID YOU SUFFER FROM</p>
            <h1 class="text-center font-bold">LACK OF ENTHUSIASM/ENERGY?</h1>
            <p id="value13" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range12" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput11(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-11" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-13" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-15" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-12--->
    <!---A-13--->
    <section id="a-13" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">13 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">HOW OFTEN IN THE PAST WEEK DID YOU SUFFER FROM</p>
            <h1 class="text-center font-bold">A TENS FEELING?</h1>
            <p id="value14" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range13" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput12(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-12" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-14" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-16" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-13--->
    <!---A-14--->
    <section id="a-14" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">14 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">HOW OFTEN IN THE PAST WEEK DID YOU SUFFER FROM</p>
            <h1 class="text-center font-bold">FATIGUE?</h1>
            <p id="value15" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range14" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput13(this.value);" onchange="updateTextInput(this.value);" oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#a-13" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#result-page" id="result" class="home-link1">Get Result </a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-17" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
    <!---END A-14--->
    <!---RESULT PAGE--->
    <section id="result-page" class="assesment">
        <div class="container text-center padd-top">
            <h1 class="text-center font-bold">YOUR RESULTS</h1>
            <p class="text-center pb-4 result-text1">See where you're doing well and where you might need help.</p>
            <picture class="text-center">
                <img data-src="{{ asset('images/result-lung-edit.png') }}" data-srcset="{{ asset('images/result-lung-edit.png') }}" loading="lazy" class="lazyloaded result-lung1" width="605" height="482" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/result-lung-edit.png') }}">
            </picture>
            <div>
                <ul class="nav-dots result-nav-dots">
                    <li><span class="nav-dot"></span><br>POOR</li>
                    <li><span class="nav-dot"></span><br>NEEDS<br>IMPROVEMENT</li>
                    <li><span class="nav-dot active"></span><br>GOOD</li>
                    <li><span class="nav-dot"></span><br>EXCELLENT</li>
                </ul>
            </div>
            <div class="container text-center">
                <a href="{{ url('lungcheck/assessment#result-page') }}" class="copd-link" id="what-modal">What does my overall score mean?</a>
            </div>
            <p class="text-center pb-4 result-text2">If your results indicate some areas as poor or needing improvement, we advise you to talk about these with your doctor at the next appointment.</p>
            <div class="next-button w-100 pb-4"><a href="{{ url('lungcheck/improve-health') }}" data-ajax="false" class="ajax_anchor home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="main-result">
            <p class="score">overall <br> score: <br><span><strong id="total">0</strong>%</span></p>
            <p class="symptoms-result"><span>fatigue</span></p>
            <p class="symptoms-result1"><span>emotions</span></p>
            <p class="symptoms-result2"><span>Functional Status</span></p>
            <p class="symptoms-result3"><span>Mental status</span></p>
            <p class="symptoms-result4"><span>symptoms</span></p>
        </div>    
    </section>
    <!---END RESULT PAGE--->
    <!---A-1--->
    <section id="a-1" class="assesment">
        <div class="container padd-top">
            <p class="text-center pb-4 home-text1 step_counter">1 of 14</p>
            <p class="text-center pb-4 home-text1 step_counter">ON AVERAGE, DURING THE PAST WEEK, HOW OFTEN DID YOU FEEL</p>
            <h1 class="text-center font-bold">SHORT OF BREATH <br>AT REST?</h1>
            <p id="value2" class="selected-result">SEVERAL TIMES</p>
            <div class="ui-slider">
                <div class="minvalue">NEVER</div>
                <div class="maxvalue">ALMOST ALL THE TIME</div>
                <input class="add" type="number" data-type="range" 
                id="range" name="rangeInput" min="0" step="1" max="99" value="50" onchange="updateTextInput(this.value);" 
                oninput="amount.value=rangeInput.value">
            </div>
        </div>
        <div class="container3 text-center">
            <div class="prev-button"><a href="#" class="prev-link1"><i class="arrow1 left"></i> BACK</a></div>
            <div class="next-button"><a href="#a-2" class="home-link1">NEXT <i class="arrow1 right"></i></a></div>
        </div>
        <div class="container3 text-center">
            <ul class="nav-dots">
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot active"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
                <li><a href="{{ url('lungcheck/assessment') }}" class="nav-dot"></a></li>
            </ul>
        </div>
        <div class="bg-img">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/bg-2.webp') }}" srcset="{{ asset('images/bg-2.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/bg-2.png') }}" srcset="{{ asset('images/bg-2.png') }}" />
                <img data-src="{{ asset('images/bg-2.png') }}" data-srcset="{{ asset('images/bg-2.png') }}" loading="lazy" class="lazyloaded bg-2 bg-4" width="9263" height="300" alt="Lung Life Background" title="Lung Life Background" src="{{ asset('images/bg-2.png') }}">
            </picture>
        </div>
    </section>
</main>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.spapp.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lung-mobile.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/function.min.js') }}"></script>
@endsection