<?php
namespace App\Helpers;
// use App\Models\User;
use App\User;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Session;

class LungCheckHelper{

    /* Store Count Result value in session */
    public static function storeResultCount(){
        if(Session::has('user')){
            $userSession = Session::get('user');
            $user = User::find($userSession->id);
            if($user->results){
                $result = json_decode($user->results, true);
                session(['countResult' => count($result)]);
            }else{
            session(['countResult' => '']);
            }
        }
    }

    /* Get Lungcheck Assessment Score */
    public static function getLungCheckMyResults(Request $request){
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
                 $r = ($resultArr[$count-1]['symptoms'] + $resultArr[$count-1]['mental'] + $resultArr[$count-1]['functional'] + $resultArr[$count-1]['emotions'] + $resultArr[$count-1]['fatigue']);
                 $newScore = (int)(($r - 14)/84 *100);
                 $cssClassNameArr["newScore"] = $newScore;
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
            
        }
        return $cssClassNameArr;
    }

    /* Get LungCheck Previous Result  */
    public static function getLungCheckPrevious(Request $request){
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
                //  echo $resultArr[1]['fatigue'];die();
                //  var_dump($resultArr);die();
                 $count = count($resultArr);
                 /* Score calculation 
                    var r = parseInt(e.symptoms) + parseInt(e.mental) + parseInt(e.functional) + parseInt(e.emotions) + parseInt(e.fatigue);
    			    var previous_score =  Math.floor((r - 14) / 84 * 100);
                 */
                 $r = ($resultArr[$count-2]['symptoms'] + $resultArr[$count-2]['mental'] + $resultArr[$count-2]['functional'] + $resultArr[$count-2]['emotions'] + $resultArr[$count-2]['fatigue']);
                 $prevScore = (int)(($r - 14)/84 *100);
                 $cssClassNameArr["prevScore"] = $prevScore;
                 /* fatigue 
                    score 1 means 14.28% - poor
                    score 2 - 3 means 28.57% - 42.85% - need improvement
                    score 4 - 5 means 57.14% - 71.42% - good
                    score 6 - 7 means 85.71% - 100% - excellent
                    max score 7, */
                if($resultArr[$count-2]['fatigue'] < 2){
                    $cssClassNameArr["fatigue"] = 'fatigue_poor';
                 }elseif($resultArr[$count-2]['fatigue']>1 && $resultArr[$count-2]['fatigue'] < 4){
                    $cssClassNameArr["fatigue"] = 'fatigue_needimprovement';
                }elseif($resultArr[$count-2]['fatigue']> 3 && $resultArr[$count-2]['fatigue'] < 6){
                    $cssClassNameArr["fatigue"] = 'fatigue_good';
                }else{
                    $cssClassNameArr["fatigue"] = 'fatigue_excellent';
                }
                // mental max score 14
                // score 1 - 3 (1-25%) = poor / 4 - 7 (26-50%) = need-improve / 8 - 11 (51-75%) = good / 12 - 14 = excellent
                if($resultArr[$count-2]['mental'] < 4){
                    $cssClassNameArr["mental"] = 'mental_poor';
                 }elseif($resultArr[$count-2]['mental']>3 && $resultArr[$count-2]['mental'] < 8){
                    $cssClassNameArr["mental"] = 'mental_needimprovement';
                }elseif($resultArr[$count-2]['mental']>7 && $resultArr[$count-2]['mental'] <12){
                    $cssClassNameArr["mental"] = 'mental_good';
                }else{
                    $cssClassNameArr["mental"] = 'mental_excellent';
                }
                // Functional max 28
                // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
                if($resultArr[$count-2]['functional'] < 8){
                    $cssClassNameArr["functional"] = 'functional_poor';
                }elseif($resultArr[$count-2]['functional']>7 && $resultArr[$count-2]['functional'] <15){
                    $cssClassNameArr["functional"] = 'functional_needimprovement';
                }elseif($resultArr[$count-2]['functional']>14 && $resultArr[$count-2]['functional'] <22){
                    $cssClassNameArr["functional"] = 'functional_good';
                }else{
                    $cssClassNameArr["functional"] = 'functional_excellent';
                }
                //  Emotions max score 21
                // score 1 - 5 (1-25%) = poor / 6 - 10 (26-50%) = need-improve / 11 - 15 (51-75%) = good / 16 - 21 = excellent
                if($resultArr[$count-2]['emotions'] <6){
                    $cssClassNameArr["emotions"] = 'emotions_poor';
                }elseif($resultArr[$count-2]['emotions']>5 && $resultArr[$count-2]['emotions'] <11){
                    $cssClassNameArr["emotions"] = 'emotions_needimprovement';
                }elseif($resultArr[$count-2]['emotions']>10 && $resultArr[$count-2]['emotions'] <16){
                    $cssClassNameArr["emotions"] = 'emotions_good';
                }else{
                    $cssClassNameArr["emotions"] = 'emotions_excellent';
                }
                // symptoms max 28
                // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
                 if($resultArr[$count-2]['symptoms'] < 8){
                    $cssClassNameArr["symptoms"] = 'symptoms_poor';
                }elseif($resultArr[$count-2]['symptoms']>7 && $resultArr[$count-2]['symptoms'] <15){
                    $cssClassNameArr["symptoms"] = 'symptoms_needimprovement';
                }elseif($resultArr[$count-2]['symptoms']>14 && $resultArr[$count-2]['symptoms'] <22){
                    $cssClassNameArr["symptoms"] = 'symptoms_good';
                }else{
                    $cssClassNameArr["symptoms"] = 'symptoms_excellent';
                }
            }
        }
        
        return $cssClassNameArr;
    }
}
