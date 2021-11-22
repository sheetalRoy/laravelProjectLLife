<?php

namespace App\Http\Controllers;

use App\Helpers\LungCheckHelper;
use App\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Session;

class ToolboxController extends Controller
{   
    /* Toolbox home page */
    public function toolboxHome(Request $request){
        if(Session::has('user')){
            $countRes = '';
            $userSession = Session::get('user');
            $user = User::find($userSession->id);
            if($user->results && $user->results != ''){
                //echo $user->results;die();
                $result = json_decode($user->results, true);
                // $countRes = count($result);
                $countRes = is_array($result)?count($result):0;
                   // $request->session()->forget('countResult');
                $request->session()->put('countResult', $countRes);
                return view('toolbox.index');
            }else{
                return redirect('lungcheck');
                
            }
        }else{
            return redirect()->back()->with('failure', 'User has no results');
        }
        
    }
    /* Map & Track dashboard page */
    public function mapTrackDashboard(Request $request){
        if(Session::has('user')){
            $userSession = Session::get('user');
            $user = User::find($userSession->id);
            if($user->results){
                $result = json_decode($user->results, true);
                $countRes = is_array($result)?count($result):0;
                if($countRes > 1){
                   // $request->session()->forget('countResult');
                    $request->session()->put('countResult', $countRes);
                    // if($user->results){
                    //     $result = json_decode($user->results, true);
                    return view('toolbox.map-track.index');
                }else{
                    return response()->json([
                        'success' => false, 'message' => 'User has no results','url'=>true
                    ]);
                    // return redirect()->back()->with('failure', 'User has no results');
                }
                
            }else{
                return response()->json([
                        'success' => false, 'message' => 'User has no results','url'=>true
                    ]);
                // return redirect()->back()->with('failure', 'User has no results');
                
            }
        }else{
            return response()->json([
                        'success' => false, 'message' => 'User has no results','url'=>true
                    ]);
            // return redirect()->back()->with('failure', 'User has no results');
        }
    }
    
    /* Progress Tracker page */
    public function loadProgressTracker(Request $request){
        $resultArr = $goodArr = $sameArr = $improveArr = array();
        if(Session::has('user')){
            // $user = User::
            $userSession = Session::get('user');
            $user = User::find($userSession->id);
            if($user->results){
                $result = json_decode($user->results, true);
                if(count($result)>1){
                    foreach($result as $key => $element) { 
                        $resultArr[] = $element;
                     }
                     $count = count($resultArr);
                    // symptoms
                     if($resultArr[$count-1]['symptoms']>$resultArr[$count-2]['symptoms']){
                         $goodArr[] = 'Symptoms';
                     }elseif($resultArr[$count-1]['symptoms']<$resultArr[$count-2]['symptoms']){
                         $improveArr[] = 'Symptoms';
                     }else{
                         $sameArr[] = 'Symptoms';
                     }
                     // mental
                     if($resultArr[$count-1]['mental']>$resultArr[$count-2]['mental']){
                         $goodArr[] = 'Mental';
                     }elseif($resultArr[$count-1]['mental']<$resultArr[$count-2]['mental']){
                         $improveArr[] = 'Mental';
                     }else{
                         $sameArr[] = 'Mental';
                     }
                     // Functional check
                     if($resultArr[$count-1]['functional']>$resultArr[$count-2]['functional']){
                         $goodArr[] = 'Functional';
                     }elseif($resultArr[$count-1]['functional']<$resultArr[$count-2]['functional']){
                         $improveArr[] = 'Functional';
                     }else{
                         $sameArr[] = 'Functional';
                     }
                     // Emotions check
                     if($resultArr[$count-1]['emotions']>$resultArr[$count-2]['emotions']){
                         $goodArr[] = 'Emotions';
                     }elseif($resultArr[$count-1]['emotions']<$resultArr[$count-2]['emotions']){
                         $improveArr[] = 'Emotions';
                     }else{
                         $sameArr[] = 'Emotions';
                     }
                     // Fatigue check
                     if($resultArr[$count-1]['fatigue']>$resultArr[$count-2]['fatigue']){
                         $goodArr[] = 'Fatigue';
                     }elseif($resultArr[$count-1]['fatigue']<$resultArr[$count-2]['fatigue']){
                         $improveArr[] = 'Fatigue';
                     }else{
                         $sameArr[] = 'Fatigue';
                     }
                     return view('toolbox.map-track.progress-tracker',[
                        'goodProgress' => $goodArr, 'remainSame' => $sameArr, 'needImprove' => $improveArr
                    ]);
                }else{
                    return response()->json([
                        'success' => false, 'message' => 'User has no results','url'=>true
                    ]);
                    // return redirect()->back()->with('failure', 'User has no results');
                    
                }
            }else{
                return response()->json([
                        'success' => false, 'message' => 'User has no results','url'=>true
                    ]);
                // return redirect()->back()->with('failure', 'User has no results');
            }
        }else{
            return response()->json([
                        'success' => false, 'message' => 'User has no results','url'=>true
                    ]);
            // return redirect()->back()->with('failure', 'User has no results');
        }
       
    }
    public function lungCheckResult(Request $request){
        $previousResult = LungCheckHelper::getLungCheckPrevious($request);
        $newResult = LungCheckHelper::getLungCheckMyResults($request);
        return view('toolbox.map-track.my-result',
        ['previousResult' => $previousResult, 'newResult' => $newResult]);
    }

}
