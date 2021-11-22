<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\ForgotCodeMail;
use Carbon\Carbon;

class UserController extends Controller
{
     /* User  */
     public function login(Request $request){
        // $code = json_decode($request->code);
        $code = $request->get('code');
        $validator = Validator::make($request->all(), [
            'code' => 'required',
        ]);
        
        if($validator->fails()){
            return $validator->errors();
        }else{
            $user = User::where(['code' => $code])->first();
            // $user = User::find($code);   
            if($user){
                // $token = $user->createToken('my-app-token')->plainTextToken;
                return [
                    'user' => $user,
                    'status' => 200,
                    'message' => 'Login successfully'
                    // 'token' => $token
                ];
            }else{
                return [
                    'status' => 400,
                    'message' => 'User does not exist!'
                ];
            }
        }
        
    }
    /* Register */
    public function register(Request $request)
    {
        $email = $request->get('email');
        // $validated = $request->validate([
        //     'email' => 'required',
        // ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $hashedMail = User::hashMail($email);
            if (User::where('email', $hashedMail)->exists()) {
                return[
                    'message' => 'email_in_use',
                    'status'=>201
                ];
            }
            $user = new User();
            $user->email = $hashedMail;
            $user->results = NULL;
            do {
                $code = strtoupper(substr(md5(time()), 0, 8));
            } while (User::where('code', $code)->exists());

            $user->code = $code;
            $user->save();
            Mail::to($email)->send(new RegisterMail($code));
            if($user){
                    return [
                    'user' => $user,
                    'status' => 200,
                    'message' => 'successfully'
                ];
            }else{
                return [
                    'status' => 400,
                    'message' => 'Something went wrong!'
                ];
            }
        }
        
    }
    public function forgotUserId(Request $request)
    {
        $email = $request->get('email');
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $hashedMail = User::hashMail($email);
            $user = User::where('email', $hashedMail)->firstOrFail();

            Mail::to($request->input('email'))->send(new ForgotCodeMail($user->code));
            return [
                'user' => $user,
                'status' => 200
            ];
        }
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
    /* */
    public function getResults(Request $request)
    {
        // $code = json_decode($request->code);
        $code = $request->get('code');
        $validator = Validator::make($request->all(), [
            'code' => 'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $user = User::where('code', $code)->firstOrFail();
            if($user->results && $user->results!='null'){
                $data = json_decode($user->results);
                return [
                    'user' => $user,
                    'result' =>$data,
                    'status' => 200,
                    'message' => 'successfully'
                ];
            }else{
                return [
                    'status' => 400,
                    'message' => 'User does not exist!'
                ];
            }
        }
    }

    public function updateResults(Request $request)
    {
        $code = $request->get('code');
        $validator = Validator::make($request->all(), [
            'code' => 'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else{
            /* get json data from frontend */
            $date = json_decode($request->date);
            $symptoms = json_decode($request->symptoms);
            $mental = json_decode($request->mental);
            $functional = json_decode($request->functional);
            $emotions = json_decode($request->emotions);
            $fatigue = json_decode($request->fatigue);
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
            // $mytime = Carbon::now();
            $dateFormat = isset($date) ? $date : Carbon::now()->format('Y/m/d');
            $results['date'] = $dateFormat;
            $results['symptoms'] = $symptoms;
            $results['mental'] = $mental;
            $results['functional'] = $functional;
            $results['emaotions'] = $emotions;
            $results['fatigue'] = $fatigue;

            // $results[date('d/m/Y')] = $request->input('results');
            $user->results = json_encode($results);
            $user->save();
            return [
                'user' => $user,
                'result' =>$results,
                // 'prev' => $previous_result,
                'status' => 200,
                'message' => 'Updated successfully'
            ];
        }
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return [
            'status' => 200,
            'message' => 'Delete successfully'
        ];
    }
}
