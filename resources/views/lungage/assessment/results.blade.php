@extends('layouts.main')
@section('title','Results')
@section('content')
<div class="text-center result_page">
	<svg data-v-7ba0f186="" data-v-2eceb7ae="" width="400px" height="400px" viewBox="0 0 607 709" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" uk-scrollspy="cls: uk-animation-slide-top;" class="svg-lung uk-scrollspy-inview uk-animation-slide-top" style="margin-top: -150px; max-width: 450px; width: 100%;"><g data-v-7ba0f186="" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path data-v-7ba0f186="" id="Mask" d="M456.523197,239.456966 C416.789668,198.54323 364.343016,213.997172 375.312701,244.908654 C375.312701,244.908654 389.357801,321.538049 375.000758,363.412261 C373.61328,367.44302 371.921514,371.921642 370.229749,376.41825 C365.399413,374.56205 360.488699,372.642898 355.700467,370.67878 C321.966581,356.852609 324.043013,349.605876 321.966581,303.218868 C320.345625,267.505008 322.066097,0 322.066097,0 L304.178162,0 L284.88744,0 C284.88744,0 286.613653,267.505008 285.013748,303.218868 C282.946885,349.605876 285.013748,356.852609 251.233933,370.67878 C246.470579,372.641099 241.580917,374.558453 236.767805,376.412854 C235.076039,371.918045 233.388101,367.441222 232.002537,363.412261 C217.624442,321.538049 231.65806,244.908654 231.65806,244.908654 C242.610521,213.997172 190.22511,198.54323 150.472442,239.456966 C117.770075,273.082601 62.7264484,325.191093 18.9261743,471.990955 C-27.6375723,627.942314 21.0600191,708.999968 64.5847114,708.999968 C106.191814,709.03774 129.003859,675.561392 202.989903,658.767461 C255.235609,646.946778 260.100393,601.020222 269.703651,540.474295 C277.27258,492.729311 262.18448,444.47711 247.687732,405.444754 C262.43901,397.696199 283.180364,386.895347 303.523656,387.053627 C323.819103,386.895347 344.579595,397.689005 359.309822,405.437559 C344.81116,444.471714 329.724973,492.725714 337.280506,540.474295 C346.866541,601.020222 351.765772,646.946778 404.009564,658.767461 C477.964988,675.561392 500.865066,709.03774 542.409015,708.999968 C585.929879,708.999968 634.640867,627.942314 588.075207,471.990955 C544.219434,325.191093 489.219823,273.082601 456.523197,239.456966 Z" fill="#AFD7B8"></path> <g data-v-7ba0f186="" transform="translate(387, 390)" fill="#FFFFFF" font-family="Montserrat, sans-serif" font-weight="bold" class="starthidden active"><text data-v-7ba0f186="" id="LUNG" font-size="41.4" line-spacing="41.4" x="75" y="40" text-anchor="middle">LUNG
      </text> <text data-v-7ba0f186="" id="AGE" font-size="28.5" line-spacing="28.5" x="75" y="72" text-anchor="middle">AGE
      </text> <text data-v-7ba0f186="" id="calculate-age" font-size="125" line-spacing="125" letter-spacing="-4" x="75" y="175" text-anchor="middle">20
      </text> <text data-v-7ba0f186="" id="YEARS-OLD" font-size="36" line-spacing="36" x="89" y="221" text-anchor="middle">YEARS OLD
      </text></g> <g data-v-7ba0f186="" transform="translate(25, 390)" fill="#FFFFFF" font-family="Montserrat, sans-serif" font-weight="bold" class="starthidden active"><text data-v-7ba0f186="" id="AGE" font-size="28.5" line-spacing="28.5" x="115" y="72" text-anchor="middle">AGE
      </text> <text data-v-7ba0f186="" id="actual-age" font-size="125" line-spacing="125" letter-spacing="-4" x="115" y="175" text-anchor="middle">16
      </text> <text data-v-7ba0f186="" id="YEARS-OLD" font-size="36" line-spacing="36" x="100" y="221" text-anchor="middle">YEARS OLD
      </text> <text data-v-7ba0f186="" id="ACTUAL" font-size="41.4" line-spacing="41.4" x="115" y="40" text-anchor="middle">ACTUAL
      </text></g></g></svg>
	<h1>THE LUNGS SEEM TO BE</h1>
	<h1 class="age_score" id="age_score">0</h1>
	<h1>YEARS OLDER</h1><br>
	<a href="javascript:;" data-for="lungage/what-does-this-mean" class="w_btn ajax_anchor cookie-check">What does this mean?</a>
	<p class="warning">This is an approximation of your Lung Age. For an accurate result and potential diagnosis speak to your doctor.</p>
</div>

@endsection
