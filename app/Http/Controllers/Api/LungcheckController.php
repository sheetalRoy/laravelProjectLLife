<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LungcheckController extends Controller
{
    
    public function getLungcheckAssessment(Request $request){
        $cssClassNameArr = array();
        //var_dump($request->all());die(); get all data
        //  $data = $request->all();
       // $data = json_decode($request->all());
        $emotions =json_decode($request->emotions);
        $symptoms = json_decode($request->symptoms);
        $fatigue = json_decode($request->fatigue);
        $functional = json_decode($request->functional);
        $mental = json_decode($request->mental);
        
        if($fatigue < 2){
            $cssClassNameArr["fatigue"] = 'fatigue_poor';
         }elseif($fatigue >1 && $fatigue < 4){
            $cssClassNameArr["fatigue"] = 'fatigue_needimprovement';
        }elseif($fatigue> 3 && $fatigue < 6){
            $cssClassNameArr["fatigue"] = 'fatigue_good';
        }else{
            $cssClassNameArr["fatigue"] = 'fatigue_excellent';
        }
        // // mental max score 14
        // // score 1 - 3 (1-25%) = poor / 4 - 7 (26-50%) = need-improve / 8 - 11 (51-75%) = good / 12 - 14 = excellent
        if($mental < 4){
            $cssClassNameArr["mental"] = 'mental_poor';
         }elseif($mental >3 && $mental < 8){
            $cssClassNameArr["mental"] = 'mental_needimprovement';
        }elseif($mental>7 && $mental <12){
            $cssClassNameArr["mental"] = 'mental_good';
        }else{
            $cssClassNameArr["mental"] = 'mental_excellent';
        }
        // // Functional max 28
        // // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
        if($functional < 8){
            $cssClassNameArr["functional"] = 'functional_poor';
        }elseif($functional >7 && $functional <15){
            $cssClassNameArr["functional"] = 'functional_needimprovement';
        }elseif($functional>14 && $functional <22){
            $cssClassNameArr["functional"] = 'functional_good';
        }else{
            $cssClassNameArr["functional"] = 'functional_excellent';
        }
        // //  Emotions max score 21
        // // score 1 - 5 (1-25%) = poor / 6 - 10 (26-50%) = need-improve / 11 - 15 (51-75%) = good / 16 - 21 = excellent
        if($emotions <6){
            $cssClassNameArr["emotions"] = 'emotions_poor';
        }elseif($emotions>5 && $emotions <11){
            $cssClassNameArr["emotions"] = 'emotions_needimprovement';
        }elseif($emotions>10 && $emotions <16){
            $cssClassNameArr["emotions"] = 'emotions_good';
        }else{
            $cssClassNameArr["emotions"] = 'emotions_excellent';
        }
        // // symptoms max 28
        // // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
         if($symptoms < 8){
            $cssClassNameArr["symptoms"] = 'symptoms_poor';
        }elseif($symptoms >7 && $symptoms <15){
            $cssClassNameArr["symptoms"] = 'symptoms_needimprovement';
        }elseif($symptoms>14 && $symptoms <22){
            $cssClassNameArr["symptoms"] = 'symptoms_good';
        }else{
            $cssClassNameArr["symptoms"] = 'symptoms_excellent';
        }
        return [
            'results' => $cssClassNameArr,
            'status' => 200
        ];
    }
   
}
