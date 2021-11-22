@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')


    <div class="container">
			<!-- main title -->
			<div class="your-score-title">
				<h1 class="text-center">YOUR RESULTS</h1>
				<p class="text-center">See where you're doing well and where you might need help.</p>
			</div>
    </div>
	
	<div class="new-result">


                    <style type="text/css">
                        #resultsWrapper,
                        #balloonResultsWrapper,
                        #graphResultsWrapper {
                            display: none;
                        }

                        #graphResultsWrapper {
                            position: relative;
                            margin-top: 2rem;
                        }

                        #qrCodeWrapper {
                            text-align: center;
                        }

                        /* Bar results */
                        .domaindiv {
                            height: 80px;
                            background-color: white;
                            margin-bottom: 10px;
                            position: relative;
                        }

                        #datediv {
                            height: 36px;
                            background-color: #f9f9f9;
                        }

                        .fixeddatediv {
                            margin-top: 0;
                            /* will position this relative to containing div instead of window */
                            left: 0;
                            right: 0;
                            z-index: 2;
                        }

                        #datediv>div {
                            position: relative;
                            height: 36px;
                            margin: 0 20px;
                        }

                        #datediv svg {
                            overflow: visible;
                        }

                        #datediv .ct-labell {
                            height: 40px;
                            position: absolute;
                            top: 0;
                        }

                        #datediv .ct-label:last-child {
                            width: 40px !important;
                        }

                        .chartdiv {
                            position: relative;
                            top: 10px;
                            height: 70px;
                            margin: 0 20px;
                            background-color: white;
                        }

                        .charttitle {
                            position: absolute;
                            left: 20px;
                            top: 6px;
                            z-index: 1;
                        }

                        .domaindiv .ct-line {
                            stroke-width: 2px;
                            stroke: #a0a0a0;
                            stroke-dasharray: 1, 5;
                        }

                        .domaindiv .ct-area {
                            fill: #404040;
                        }

                        #balloonResultsWrapper {
                            height: 400px;
                            overflow: visible;
                            position: relative;
                            margin-bottom: 8rem;
                            margin-top: 140px;
                            border-bottom: 1px solid #0a5b85;
                        }

                        #balloonResultsWrapper>div {
                            width: 9.09%;
                            float: left;
                            height: 100%;
                            position: relative;
                        }

                        .balloon,
                        .balloonTitle {
                            position: absolute;
                            width: 100%;
                        }

                        .balloonTitle {
                            bottom: 0;
                            transform: translateY(5rem) rotate(45deg);
                            text-align: center;
                            font-size: small;
                        }

                        .balloonWrapper {
                            position: absolute;
                            left: 50%;
                        }

                        .balloon img {
                            margin: auto;
                            display: block;
                            width: 50px;
                            position: relative;
                        }
						
						
						
						  #resultsWrapper,
                        #balloonResultsWrapper,
                        #graphResultsWrapper {
                            display: none;
                        }

                        #graphResultsWrapper {
                            position: relative;
                            margin-top: 2rem;
                        }

                        #qrCodeWrapper {
                            text-align: center;
                        }

                        /* Bar results */
                        .domaindiv {
                            height: 80px;
                            background-color: white;
                            margin-bottom: 10px;
                            position: relative;
                        }

                        #datediv {
                            height: 36px;
                            background-color: #f9f9f9;
                        }

                        .fixeddatediv {
                            margin-top: 0;
                            /* will position this relative to containing div instead of window */
                            left: 0;
                            right: 0;
                            z-index: 2;
                        }

                        #datediv>div {
                            position: relative;
                            height: 36px;
                            margin: 0 20px;
                        }

                        #datediv svg {
                            overflow: visible;
                        }

                        #datediv .ct-labell {
                            height: 40px;
                            position: absolute;
                            top: 0;
                        }

                        #datediv .ct-label:last-child {
                            width: 40px !important;
                        }

                        .chartdiv {
                            position: relative;
                            top: 10px;
                            height: 70px;
                            margin: 0 20px;
                            background-color: white;
                        }

                        .charttitle {
                            position: absolute;
                            left: 20px;
                            top: 6px;
                            z-index: 1;
                        }

                        .domaindiv .ct-line {
                            stroke-width: 2px;
                            stroke: #a0a0a0;
                            stroke-dasharray: 1, 5;
                        }

                        .domaindiv .ct-area {
                            fill: #404040;
                        }

                        #balloonResultsWrapper {
                            height: 400px;
                            overflow: visible;
                            position: relative;
                            margin-bottom: 8rem;
                            margin-top: 140px;
                            border-bottom: 1px solid #0a5b85;
                        }

                        #balloonResultsWrapper>div {
                            width: 9.09%;
                            float: left;
                            height: 100%;
                            position: relative;
                        }

                        .balloon,
                        .balloonTitle {
                            position: absolute;
                            width: 100%;
                        }

                        .balloonTitle {
                            bottom: -80px;
                            transform: translateY(5rem) rotate(-60deg);
                            text-align: center;
                            font-size: small;
                        }

                        .balloonWrapper {
                            position: absolute;
                            left: 50%;
                        }

                        .balloon img {
                            margin: auto;
                            display: block;
                            width: 100%;
                            position: relative;
                        }
                    </style>

                    

                    <div id="resultsWrapper" style="display: block;">

                        <div class="row">
                            <div class="col">
                                <div class="float-right">
                                    <button id="balloonButton" class="btn btn-info active" onclick="onBalloonClick()">Ballonnen</button>
                                    <button id="graphButton" class="btn btn-info" onclick="onGraphClick()">Grafieken</button>
                                </div>
                            </div>
                        </div>

                        <div id="balloonResultsWrapper" style="display: block;">
                            <div id="domain_smoke_perc_balloon">
                                <div class="balloonTitle"><p>to smoke</p></div>
                                <div class="balloon" style="bottom: 250px;">
								
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-green.png') }}">
									<img data-src="{{ asset('images/Balloon-green.png') }}" data-srcset="{{ asset('images/Balloon-green.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-green.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_exacerbation_perc_balloon">
                                <div class="balloonTitle"><p>lung attack<br>(exacerbation)</p></div>
                                <div class="balloon" style="bottom: 0px;">
								
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_mrc_perc_balloon">
                                <div class="balloonTitle"><p>shortness of breath <br>question (mrc)</p></div>
                                <div class="balloon" style="bottom: 300px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-green.png') }}">
									<img data-src="{{ asset('images/Balloon-green.png') }}" data-srcset="{{ asset('images/Balloon-green.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-green.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_bmi_perc_balloon">
                                <div class="balloonTitle"><p>BMI</p></div>
                                <div class="balloon" style="bottom: 80px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_lung_function_perc_balloon">
                                <div class="balloonTitle"><p>lung function</p></div>
                                <div class="balloon" style="bottom: 200px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-green.png') }}">
									<img data-src="{{ asset('images/Balloon-green.png') }}" data-srcset="{{ asset('images/Balloon-green.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-green.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_exercise_perc_balloon">
                                <div class="balloonTitle"><p>movement behaviour</p></div>
                                <div class="balloon" style="bottom: 200px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-green.png') }}">
									<img data-src="{{ asset('images/Balloon-green.png') }}" data-srcset="{{ asset('images/Balloon-green.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-green.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_complaints_perc_balloon">
                                <div class="balloonTitle"><p>complaints</p></div>
                                <div class="balloon" style="bottom: 76px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_physical_health_perc_balloon">
                                <div class="balloonTitle"><p>physical health</p></div>
                                <div class="balloon" style="bottom: 76px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_mental_health_perc_balloon">
                                <div class="balloonTitle"><p>mental health</p></div>
                                <div class="balloon" style="bottom: 60px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_fatigue_perc_balloon">
                                <div class="balloonTitle"><p>fatigue</p></div>
                                <div class="balloon" style="bottom: 60px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                            <div id="domain_emotions_perc_balloon">
                                <div class="balloonTitle"><p>emotions feelings</p></div>
                                <div class="balloon" style="bottom: 52px;">
								<picture>
									<source media="(max-width: 767px)" srcset="{{ asset('images/Balloon-red.png') }}">
									<img data-src="{{ asset('images/Balloon-red.png') }}" data-srcset="{{ asset('images/Balloon-red.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Balloon-red.png') }}" />
								</picture>
								</div>
                            </div>
                        </div>

                        <div id="graphResultsWrapper" style="display: none;">

                            <div id="datediv" class="fixeddatediv">
                                <div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="-10" y="6" width="0.1111111111111111" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">11 Feb</span></foreignObject><foreignObject style="overflow: visible;" x="-9.88888888888889" y="6" width="0.1111111111111111" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">12 Feb</span></foreignObject><foreignObject style="overflow: visible;" x="-9.777777777777779" y="6" width="0.1111111111111111" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">14 Feb</span></foreignObject><foreignObject style="overflow: visible;" x="-9.666666666666666" y="6" width="0.1111111111111111" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">19 Feb</span></foreignObject><foreignObject style="overflow: visible;" x="-9.555555555555555" y="6" width="0.11111111111111116" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">25 Feb</span></foreignObject><foreignObject style="overflow: visible;" x="-9.444444444444445" y="6" width="0.11111111111111105" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">27 Feb</span></foreignObject><foreignObject style="overflow: visible;" x="-9.333333333333334" y="6" width="0.11111111111111105" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">9 Mar</span></foreignObject><foreignObject style="overflow: visible;" x="-9.222222222222221" y="6" width="0.11111111111111116" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">11 Mar</span></foreignObject><foreignObject style="overflow: visible;" x="-9.11111111111111" y="6" width="0.11111111111111116" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 0px; height: 14px;">12 Mar</span></foreignObject><foreignObject style="overflow: visible;" x="-9" y="6" width="30" height="14"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 14px;">27 Mar</span></foreignObject></g></svg></div>
                            </div>
                            <div id="beneathDateDivWrapper">
                                <div class="domaindiv firstdomaindiv" id="domain_smoke_perc">
                                    <div class="charttitle" style="color: green;">Roken</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,31L0.111,30L0.222,31L0.333,30.1L0.444,31L0.556,30L0.667,30L0.778,30.2L0.889,30L1,30.2L1,31Z" class="ct-area"></path><path d="M0,31L0.111,30L0.222,31L0.333,30.1L0.444,31L0.556,30L0.667,30L0.778,30.2L0.889,30L1,30.2" class="ct-line"></path><image xlink:href="./img/Balloon-green.png" width="30" height="40" x="-15" y="0.1999999999999993"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_exacerbation_perc">
                                    <div class="charttitle" style="color: red;">Longaanval (exacerbatie)</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,31L0.111,31L0.222,31L0.333,30L0.444,30L0.556,30.5L0.667,30.5L0.778,30.5L0.889,31L1,31L1,31Z" class="ct-area"></path><path d="M0,31L0.111,31L0.222,31L0.333,30L0.444,30L0.556,30.5L0.667,30.5L0.778,30.5L0.889,31L1,31" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="1"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_mrc_perc">
                                    <div class="charttitle" style="color: green;">Benauwdheidvraag (MRC)</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30L0.111,30.2L0.222,30L0.333,30L0.444,30.6L0.556,30.4L0.667,30L0.778,30L0.889,30L1,30L1,31Z" class="ct-area"></path><path d="M0,30L0.111,30.2L0.222,30L0.333,30L0.444,30.6L0.556,30.4L0.667,30L0.778,30L0.889,30L1,30" class="ct-line"></path><image xlink:href="./img/Balloon-green.png" width="30" height="40" x="-15" y="0"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_bmi_perc">
                                    <div class="charttitle" style="color: red;">BMI</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.52L0.111,30.2L0.222,30.52L0.333,30.18L0.444,30.44L0.556,30.18L0.667,30.18L0.778,31L0.889,31L1,30.8L1,31Z" class="ct-area"></path><path d="M0,30.52L0.111,30.2L0.222,30.52L0.333,30.18L0.444,30.44L0.556,30.18L0.667,30.18L0.778,31L0.889,31L1,30.8" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="0.8000000000000007"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_lung_function_perc">
                                    <div class="charttitle" style="color: green;">Longfunctie</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.8L0.111,30.5L0.222,30.9L0.333,30.5L0.444,30.5L0.556,30.4L0.667,30.5L0.667,31Z" class="ct-area"></path><path d="M0,30.8L0.111,30.5L0.222,30.9L0.333,30.5L0.444,30.5L0.556,30.4L0.667,30.5" class="ct-line"></path><image xlink:href="./img/Balloon-green.png" width="30" height="40" x="-15.333333333333334" y="0.5"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_exercise_perc">
                                    <div class="charttitle" style="color: green;">Beweeggedrag</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,31L0.111,31L0.222,30.5L0.333,30.5L0.444,30.5L0.556,30L0.667,30.5L0.778,30.5L0.889,30L1,30.5L1,31Z" class="ct-area"></path><path d="M0,31L0.111,31L0.222,30.5L0.333,30.5L0.444,30.5L0.556,30L0.667,30.5L0.778,30.5L0.889,30L1,30.5" class="ct-line"></path><image xlink:href="./img/Balloon-green.png" width="30" height="40" x="-15" y="0.5"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_complaints_perc">
                                    <div class="charttitle" style="color: red;">Klachten</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.2L0.111,30.5L0.222,30.5L0.333,30.91L0.444,30.5L0.556,30.2L0.667,30.84L0.778,30.81L0.889,30.7L1,30.81L1,31Z" class="ct-area"></path><path d="M0,30.2L0.111,30.5L0.222,30.5L0.333,30.91L0.444,30.5L0.556,30.2L0.667,30.84L0.778,30.81L0.889,30.7L1,30.81" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="0.8099999999999987"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_physical_health_perc">
                                    <div class="charttitle" style="color: red;">Lichamelijke gezondheid</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.7L0.111,30.7L0.222,30.7L0.333,30.84L0.444,30.7L0.556,30.86L0.667,30.81L0.778,30.85L0.889,30.86L1,30.81L1,31Z" class="ct-area"></path><path d="M0,30.7L0.111,30.7L0.222,30.7L0.333,30.84L0.444,30.7L0.556,30.86L0.667,30.81L0.778,30.85L0.889,30.86L1,30.81" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="0.8099999999999987"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_mental_health_perc">
                                    <div class="charttitle" style="color: red;">Geestelijke gezondheid</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.7L0.111,30.7L0.222,30.82L0.333,30.87L0.444,30.82L0.556,30.1L0.667,30.9L0.778,30.87L0.889,30.7L1,30.85L1,31Z" class="ct-area"></path><path d="M0,30.7L0.111,30.7L0.222,30.82L0.333,30.87L0.444,30.82L0.556,30.1L0.667,30.9L0.778,30.87L0.889,30.7L1,30.85" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="0.8500000000000014"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_fatigue_perc">
                                    <div class="charttitle" style="color: red;">Vermoeidheid</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.85L0.111,30.85L0.222,30.2L0.333,30.85L0.444,30L0.556,30.9L0.667,30L0.778,30.9L0.889,30.7L1,30.85L1,31Z" class="ct-area"></path><path d="M0,30.85L0.111,30.85L0.222,30.2L0.333,30.85L0.444,30L0.556,30.9L0.667,30L0.778,30.9L0.889,30.7L1,30.85" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="0.8500000000000014"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>
                                <div class="domaindiv" id="domain_emotions_perc">
                                    <div class="charttitle" style="color: red;">Emoties/gevoelens</div>
                                    <div class="chartdiv"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M0,31L0,30.57L0.111,30.82L0.222,30.7L0.333,30.82L0.444,30.82L0.556,30.7L0.667,30.82L0.778,30.57L0.889,30.83L1,30.87L1,31Z" class="ct-area"></path><path d="M0,30.57L0.111,30.82L0.222,30.7L0.333,30.82L0.444,30.82L0.556,30.7L0.667,30.82L0.778,30.57L0.889,30.83L1,30.87" class="ct-line"></path><image xlink:href="./img/Balloon-red.png" width="30" height="40" x="-15" y="0.870000000000001"></image></g></g><g class="ct-labels"></g></svg></div>
                                </div>






                            </div>

                        </div>

                    </div>


                </div>

	<!--<div class="container mob-p-0">
	    <div class="result_image-section">
			
		       <div class="symptoms_indicator">
					<p class="inf_symt_text">An indication of your energy levels </p>
					<p class="inf_symt_text">Your mood and emotional wellbeing</p>
					<p class="inf_symt_text">How you cope physically day-to-day</p>
					<p class="inf_symt_text">An indication of your mental health</p>
					<p class="inf_symt_text">Breathlessness, chest tightness, mucus production and other symptoms</p>
				</div>


		    <div class="result_img ">
			<picture>
				<source media="(max-width: 767px)" srcset="{{ asset('images/new-mob-heart.png') }}">
				<img data-src="{{ asset('images/Bitmap.png') }}" data-srcset="{{ asset('images/Bitmap.png') }}" loading="lazy" class="lazyloaded result-lung1" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/Bitmap.png') }}" />
			</picture>-->
		  	
				   <!--<div class="dynamic_text">
						<ul class="un-list">
							<!--FATIGUE-->
							<!--<li class="symptoms-result {{ ((isset($results['fatigue'])) ? $results['fatigue'] : '') }} p-child"><span>Fatigue</span></li>
							<!--EMOTION-->
							<!--<li class="symptoms-result1 {{ ((isset($results['emotions'])) ? $results['emotions'] : '') }} p-child"><span>Emotions</span></li>
							<!--FUNCTIONAL STATUS-->
							<!--<li class="symptoms-result2 {{ ((isset($results['functional'])) ? $results['functional'] : '') }} p-child"><span>Functional Status</span></li>
							<!--MENTAL STATUS-->
							<!--<li class="symptoms-result3 {{ ((isset($results['mental'])) ? $results['mental'] : '') }} p-child"><span>Mental status</span></li>
							<!--SYMPTOMS-->
							<!--<li class="symptoms-result4 {{ ((isset($results['symptoms'])) ? $results['symptoms'] : '') }} p-child"><span>Symptoms</span></li>
						</ul>
			        </div>

					<div class="totla_score_section">
			      		 <p class="score">overall <br> score: <br><span><strong id="total">0</strong></span></p>
			       </div>
			</div>-->
			<!-- end image -->

		<!--</div>
	<!--</div>-->

	<!--<div class="container text-center">
		<div>
			<ul class="nav-dots result-nav-dots">
				<li><span class="nav-dot"></span><br>POOR</li>
				<li><span class="nav-dot"></span><br>NEEDS<br>IMPROVEMENT</li>
				<li><span class="nav-dot active"></span><br>GOOD</li>
				<li><span class="nav-dot"></span><br>EXCELLENT</li>
			</ul>
		</div>
		<a href="javascript:;" class="copd-link" id="what-modal-show">What does my overall score mean?</a>-->
		<br><br><br><br><br><br>
		<p class="text-center pb-4 result-text2">If your results indicate some areas as poor or needing improvement, we advise you to talk about these with your doctor at the next appointment.</p>
		<div class="next-button w-100 pb-4"><a href="{{ url('lungcheck/improve-health') }}" data-ajax="false" class="ajax_anchor home-link1">NEXT <i class="arrow1 right"></i></a></div>

    </div>

@endsection