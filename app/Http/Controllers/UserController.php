<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResultsUpdateRequest;
use App\Http\Requests\UpdateRequest;
use App\Mail\ForgotCodeMail;
use App\Mail\RegisterMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Session;
class UserController extends Controller
{

    public function login(LoginRequest $request)
    {
        // will fail with 404 if user cannot be found

        $user = User::byCode($request->get('code'));
        if($user){
            session(['user' => $user]);
			if($user->results && $user->results!='null'){
                $result = json_decode($user->results, true);
                $countRes = is_array($result)?count($result):0;
               session(['countResult' => $countRes]);
            }else{
               session(['countResult' => '']);
            }
            return response()->json(['message' => __('successfully')], 200);
        }else{
            return response()->json(['message' => __('something_went_wrong')], 400);
        }
		
    }

    public function register(RegisterRequest $request)
    {
        $email = $request->input('email');
        $hashedMail = User::hashMail($email);

        if (User::where('email', $hashedMail)->exists()) {
            return response()->json(['message' => __('email_in_use'),'status'=>201], 201);
        }
        $user = new User();
        $user->email = $hashedMail;
        $user->results = ($request->has('results')) ? json_encode($request->input('results')) : NULL;
        do {
            $code = strtoupper(substr(md5(time()), 0, 8));
        } while (User::where('code', $code)->exists());

        $user->code = $code;
        $user->save();

        // send welcome mail
        Mail::to($email)->send(new RegisterMail($code));
        return response()->json(['message' => 'Registerd successfully','status'=>200], 200);
    }

    public function forgotUserId(ForgotRequest $request)
    {
        $hashedMail = User::hashMail($request->input('email'));
        $user = User::where('email', $hashedMail)->firstOrFail();

        Mail::to($request->input('email'))->send(new ForgotCodeMail($user->code));
        return response()->json([], 200);
    }

    public function updateEmail(UpdateRequest $request)
    {
        $user = \Request::get('user');

        $hashedNewEmail = User::hashMail($request->input('new_email'));

        if ($user->email !== $hashedNewEmail) {
            $user->email = $hashedNewEmail;
            $user->save();
        } elseif ($user->email !== $hashedNewEmail && User::where('email', $hashedNewEmail)->exists()) {
            throw new UnprocessableEntityHttpException(__('email_in_use'));
        }
        return response()->json([], 200);
    }

    public function getResults(Request $request)
    {
        $code = session('user')->code;
        
        if($code){ //Session::has('user')
            $user = User::byCode($code);
            //Session::get('user');
            //dd($user->results);
            return response()->json([
                'results' => json_decode($user->results)
            ], 200);
        }else{
           return response()->json([], 200); 
        }
    }

    public function updateResults(ResultsUpdateRequest $request)
    {
        if(Session::has('user')){
            $code = Session::get('user')->code;
            $user = User::where('code', $code)->first();
            $results = [];
            if($user->results && $user->results!='null'){
                $previous_result = json_decode($user->results);
                foreach ($previous_result as $key => $data) {
                    if($key!=date('d/m/Y')){
                        $results[$key] = $data;
                    }
                }
            }
            $results[date('d/m/Y')] = $request->input('results');
            $user->results = json_encode($results);
            $user->save();
            return response()->json([], 200);
        }else{
            session(['guestResult' => $request->input('results')]);
            return response()->json([], 200); 
        }
    }
    public function getGuestResult(Request $request){
        $results = $request->session()->get('guestResult');
        $resultArr = $cssClassNameArr = array(); 
        foreach($results as $key => $element) { 
            $resultArr[$key] = $element;
         }
         
        /* fatigue 
            score 1 means 14.28% - poor
            score 2 - 3 means 28.57% - 42.85% - need improvement
            score 4 - 5 means 57.14% - 71.42% - good
            score 6 - 7 means 85.71% - 100% - excellent
            max score 7, */
        if($resultArr['fatigue'] < 2){
            $cssClassNameArr["fatigue"] = 'fatigue_poor';
         }elseif($resultArr['fatigue']>1 && $resultArr['fatigue'] < 4){
            $cssClassNameArr["fatigue"] = 'fatigue_needimprovement';
        }elseif($resultArr['fatigue']> 3 && $resultArr['fatigue'] < 6){
            $cssClassNameArr["fatigue"] = 'fatigue_good';
        }else{
            $cssClassNameArr["fatigue"] = 'fatigue_excellent';
        }
        // mental max score 14
        // score 1 - 3 (1-25%) = poor / 4 - 7 (26-50%) = need-improve / 8 - 11 (51-75%) = good / 12 - 14 = excellent
        if($resultArr['mental'] < 4){
            $cssClassNameArr["mental"] = 'mental_poor';
         }elseif($resultArr['mental']>3 && $resultArr['mental'] < 8){
            $cssClassNameArr["mental"] = 'mental_needimprovement';
        }elseif($resultArr['mental']>7 && $resultArr['mental'] <12){
            $cssClassNameArr["mental"] = 'mental_good';
        }else{
            $cssClassNameArr["mental"] = 'mental_excellent';
        }
        // Functional max 28
        // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
        if($resultArr['functional'] < 8){
            $cssClassNameArr["functional"] = 'functional_poor';
        }elseif($resultArr['functional']>7 && $resultArr['functional'] <15){
            $cssClassNameArr["functional"] = 'functional_needimprovement';
        }elseif($resultArr['functional']>14 && $resultArr['functional'] <22){
            $cssClassNameArr["functional"] = 'functional_good';
        }else{
            $cssClassNameArr["functional"] = 'functional_excellent';
        }
        //  Emotions max score 21
        // score 1 - 5 (1-25%) = poor / 6 - 10 (26-50%) = need-improve / 11 - 15 (51-75%) = good / 16 - 21 = excellent
        if($resultArr['emotions'] <6){
            $cssClassNameArr["emotions"] = 'emotions_poor';
        }elseif($resultArr['emotions']>5 && $resultArr['emotions'] <11){
            $cssClassNameArr["emotions"] = 'emotions_needimprovement';
        }elseif($resultArr['emotions']>10 && $resultArr['emotions'] <16){
            $cssClassNameArr["emotions"] = 'emotions_good';
        }else{
            $cssClassNameArr["emotions"] = 'emotions_excellent';
        }
        // symptoms max 28
        // score 1 - 7 (1-25%) = poor / 8 - 14 (26-50%) = need-improve / 15 - 21 (51-75%) = good / 22 - 28 = excellent
         if($resultArr['symptoms'] < 8){
            $cssClassNameArr["symptoms"] = 'symptoms_poor';
        }elseif($resultArr['symptoms']>7 && $resultArr['symptoms'] <15){
            $cssClassNameArr["symptoms"] = 'symptoms_needimprovement';
        }elseif($resultArr['symptoms']>14 && $resultArr['symptoms'] <22){
            $cssClassNameArr["symptoms"] = 'symptoms_good';
        }else{
            $cssClassNameArr["symptoms"] = 'symptoms_excellent';
        }
        $request->session()->forget('guestResult');
        return $cssClassNameArr;
        
    }

    public function delete(Request $request)
    {
        $user = \Request::get('user');

        $user->delete();
        return response()->json([], 200);
    }
    public function logout(Request $request){
        \session()->forget(['user']);
		if ($request->session()->has('countResult')) {
            $request->session()->forget('countResult');
        }
        return response()->json([], 200);
    }
}
