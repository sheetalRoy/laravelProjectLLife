@extends('layouts.main')
@section('title','TOOLBOX')
@section('content')
<div class="container">
    <p class="text-center m-0">Toolbox > Map & Track</p>
    <h1 class="text-center font-bold m-0 main-title">Progress Tracker</h1>
</div>
<div class="container">
    <div class="accordions">
        <div class="accordion-item">
            <div class="accordion-head">
                <ul>
                    <li>Good progress</li>
                    @if (count($goodProgress) > 0)
                        @foreach ($goodProgress as $good)
                            <li>{{ $good}} </li>
                        @endforeach
                    @else 
                        <li>No Record </li>
                    @endif
                </ul>
            </div>
            <div class="accordion-body">
                <p>Well done. Your hard work is paying off and your results are showing a steady improvement. So,
                    keep it up and keep checking your progress.</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-head">
                <ul>
                    <li>Remains the same</li>
                    <!-- <li>Emotions</li>
                    <li>Symptoms</li> -->
                    @if (count($remainSame) > 0)
                        @foreach ($remainSame as $same)
                            <li>{{ $same}} </li>
                        @endforeach
                    @else 
                        <li>No Record </li>
                    @endif
                </ul>
            </div>
            <div class="accordion-body">
                <p>Your overall total hasn’t really changed, which isn’t good or bad. A few small changes could make
                    a big difference. So, why not set some new goals and give it a go?</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-head">
                <ul>
                    <li>Needs Improvement</li>
                    <!--<li>Functional Status</li>-->
                    @if (count($needImprove) > 0)
                        @foreach ($needImprove as $improve)
                            <li>{{ $improve}} </li>
                        @endforeach
                    @else 
                        <li>No Record </li>
                    @endif
                </ul>
            </div>
            <div class="accordion-body">
                <p>Your results have dropped. The good news is there’s plenty you can do to help boost them. Have a
                    look at our Tips section and see what works for you.</p>
            </div>
        </div>
    </div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/map-track') }}" class="ajax_anchor home-link1" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection