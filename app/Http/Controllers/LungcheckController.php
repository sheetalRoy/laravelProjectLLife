<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Session;

class LungcheckController extends Controller
{
    /* Get Lungcheck Assessment Score */
    public function getAssessmentScore(Request $request){
        $resultArr = $cssClassNameArr = array(); 
        if(Session::has('user')){
            $userSession = Session::get('user');
            $user = User::find($userSession->id);
          //  echo $user->results;die();
            if($user->results){
                $result = json_decode($user->results, true);
                foreach($result as $key => $element) { 
                    $resultArr[] = $element;
                 }
                 $count = count($resultArr);
                /* fatigue 
                    score 1 means 14.28% - poor
                    score 2 - 3 means 28.57% - 42.85% - need improvement
                    score 4 - 5 means 57.14% - 71.42% - good
                    score 6 - 7 means 85.71% - 100% - excellent
                    max score 7, */
                if($resultArr[$count-1]['fatigue'] < 2){
                    $cssClassNameArr["fatigue"] = 'fatigue_poor';
                 }elseif($resultArr[$count-1]['fatigue']>1 && $resultArr[$count-1]['fatigue'] < 4){
                    $cssClassNameArr["fatigue"] = 'fatigue_needimprovement';
                }elseif($resultArr[$count-1]['fatigue']> 3 && $resultArr[$count-1]['fatigue'] < 6){
                    $cssClassNameArr["fatigue"] = 'fatigue_good';
                }else{
                    $cssClassNameArr["fatigue"] = 'fatigue_excellent';
                }
                // mental max score 14
                // score 1 - 3 (1-25%) = poor / 4 - 7 (26-50%) = need-improve / 8 - 11 (51-75%) = good / 12 - 14 = excellent
                if($resultArr[$count-1]['mental'] < 4){
                    $cssClassNameArr["mental"] = 'mental_poor';
                 }elseif($resultArr[$count-1]['mental']>3 && $resultArr[$count-1]['mental'] < 8){
                    $cssClassNameArr["mental"] = 'mental_needimprovement';
                }elseif($resultArr[$count-1]['mental']>7 && $resultArr[$count-1]['mental'] <12){
                    $cssClassNameArr["mental"] = 'mental_good';
                }else{
                    $cssClassNameArr["mental"] = 'mental_excellent';
                }
                // Functional max 28
                // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
                if($resultArr[$count-1]['functional'] < 8){
                    $cssClassNameArr["functional"] = 'functional_poor';
                }elseif($resultArr[$count-1]['functional']>7 && $resultArr[$count-1]['functional'] <15){
                    $cssClassNameArr["functional"] = 'functional_needimprovement';
                }elseif($resultArr[$count-1]['functional']>14 && $resultArr[$count-1]['functional'] <22){
                    $cssClassNameArr["functional"] = 'functional_good';
                }else{
                    $cssClassNameArr["functional"] = 'functional_excellent';
                }
                //  Emotions max score 21
                // score 1 - 5 (1-25%) = poor / 6 - 10 (26-50%) = need-improve / 11 - 15 (51-75%) = good / 16 - 21 = excellent
                if($resultArr[$count-1]['emotions'] <6){
                    $cssClassNameArr["emotions"] = 'emotions_poor';
                }elseif($resultArr[$count-1]['emotions']>5 && $resultArr[$count-1]['emotions'] <11){
                    $cssClassNameArr["emotions"] = 'emotions_needimprovement';
                }elseif($resultArr[$count-1]['emotions']>10 && $resultArr[$count-1]['emotions'] <16){
                    $cssClassNameArr["emotions"] = 'emotions_good';
                }else{
                    $cssClassNameArr["emotions"] = 'emotions_excellent';
                }
                // symptoms max 28
                // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
                 if($resultArr[$count-1]['symptoms'] < 8){
                    $cssClassNameArr["symptoms"] = 'symptoms_poor';
                }elseif($resultArr[$count-1]['symptoms']>7 && $resultArr[$count-1]['symptoms'] <15){
                    $cssClassNameArr["symptoms"] = 'symptoms_needimprovement';
                }elseif($resultArr[$count-1]['symptoms']>14 && $resultArr[$count-1]['symptoms'] <22){
                    $cssClassNameArr["symptoms"] = 'symptoms_good';
                }else{
                    $cssClassNameArr["symptoms"] = 'symptoms_excellent';
                }
            }
            
        }else{
            $userController = new UserController;
            $cssClassNameArr = $userController->getGuestResult($request);
        }
        return view('lungcheck.assessment.your-score',['results' => $cssClassNameArr]);
    }

}
