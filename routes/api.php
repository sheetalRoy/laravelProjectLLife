<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Lungcheckcontroller;
use App\Http\Controllers\LungageController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PdfController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('download/{locale}/{file}', function ($locale, $file) {
    \Illuminate\Support\Facades\App::setLocale($locale);
    
    $filename = 'public/' . $file . '.pdf';

    if (!Storage::exists($filename)) {
        return abort(418);
    }

    return response()
        ->download(storage_path('app/' . $filename), __('results_filename') . '.pdf');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// User
// Route::post('login', [UserController::class,'login'])->name('api_login');
Route::get('logout', [UserController::class,'logout'])->name('api_logout');
// Route::post('register', [UserController::class,'register'])->name('api_register');
Route::post('forgot', [UserController::class,'forgotUserId'])->name('api_forgot_password');
Route::post('update-email', [UserController::class,'updateEmail'])->middleware('auth.code')->name('api_update_email');
Route::get('get-results', [UserController::class,'getResults'])->middleware('auth.code')->name('api_get_results');
// Route::post('update-results', [UserController::class,'updateResults'])->middleware('auth.code')->name('api_update_results');
// Route::post('delete', [UserController::class,'delete'])->middleware('auth.code')->name('api_delete_user');

// Nimmt Werte und Email entgegen, erzeugt cookie, erzeugt und versendet Email
Route::post('lungcheck', [Lungcheckcontroller::class,'lungcheck'])->name('api_lungcheck');

// Nimmt Werte und Email entgegen, erzeugt pdf mit Daten und sendet Email, speichert Werte in Cookie
Route::post('lungage', [LungageController::class,'sendMail'])->name('api_lungage');

Route::post('lungage/email', [EmailController::class,'sendMail']);

Route::post('lungage/pdf', [PdfController::class,'generatePdf'])->name('generate_pdf');

Route::get('/', function () {
    return response()->json([
        'name' => config('app.name'),
    ]);
});
Route::post('login', 'Api\UserController@login');
/* Protected */
// Route::group(['middleware' => 'auth:sanctum'], function(){
//     Route::delete('deleteUser/{id}', 'Api\UserController@deleteUser');
// });
Route::get('getlungcheckAssessment', 'Api\LungcheckController@getLungcheckAssessment');

Route::post('register', 'Api\UserController@register');
Route::get('forgotUserId', 'Api\UserController@forgotUserId');
Route::get('getResults', 'Api\UserController@getResults');
Route::put('updateResults', 'Api\UserController@updateResults');

