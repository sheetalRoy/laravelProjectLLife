<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LungcheckController;
use App\Http\Controllers\LungageController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ToolboxController;
use App\Http\Controllers\SitemapController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    if(!App::getLocale()){
    	App::setLocale('en');
    	return redirect('en/'.route('select-language')); 
    }else{
    	return redirect('/'.App::getLocale());
    }
});
Route::group(['prefix' => '/{locale}/','where' => ['locale' => '[a-zA-Z]{2,4}'],'middleware'=>'locale'], function(){*/
	Route::get('/select-language', function () {
		return File::get(public_path() . '/select-language/index.html');
	})->name('select-language');
	Route::get('/', function () {
		return view('home');
	});
	Route::get('/register', function () {
		return view('register');
	});
	Route::get('/login', function () {
		return view('login');
	});
	/*Route::get('/en/lungage', function () {
		return File::get(public_path() . '/lungage/index.html');
	});*/
	Route::get('/lungage', function () {
		return view('lungage.index');
	});
	Route::get('/lungage/what-does-this-mean', function () {
		return view('lungage.what-does-this-mean');
	});
	Route::get('/lungage/what-is-copd', function () {
		return view('lungage.what-is-copd');
	});
	Route::get('/lungage/share-my-results', function () {
		return view('lungage.share-my-results');
	});
	Route::get('/lungage/assessment', function () {
		return view('lungage.assessment.index');
	});
	Route::get('/lungage/assessment/age', function () {
		return view('lungage.assessment.age');
	});
	Route::get('/lungage/assessment/height', function () {
		return view('lungage.assessment.height');
	});
	Route::get('/lungage/assessment/cigarettes', function () {
		return view('lungage.assessment.cigarettes');
	});
	Route::get('/lungage/assessment/smoking', function () {
		return view('lungage.assessment.smoking');
	});
	Route::get('/lungage/assessment/results', 'LungageController@lungageResult')->name('lungage-result'); 
	Route::get('/lungcheck', function () {
		return view('lungcheck.index');
	});
	Route::get('/lungcheck/improve-health', function () {
		return view('lungcheck.improve-health');
	});
	Route::get('/lungcheck/assessment', function () {
		return view('lungcheck.assessment.index');
	});
	Route::get('/lungcheck/assessment/breathing', function () {
		return view('lungcheck.assessment.breathing.index');
	});
	Route::get('/lungcheck/assessment/breathing/physical-activities', function () {
		return view('lungcheck.assessment.breathing.physical-activities');
	});
	Route::get('/lungcheck/assessment/breathing/concerned', function () {
		return view('lungcheck.assessment.breathing.concerned');
	});
	Route::get('/lungcheck/assessment/breathing/depressed', function () {
		return view('lungcheck.assessment.breathing.depressed');
	});
	Route::get('/lungcheck/assessment/general', function () {
		return view('lungcheck.assessment.general.index');
	});
	Route::get('/lungcheck/assessment/general/phlegm', function () {
		return view('lungcheck.assessment.general.phlegm');
	});
	Route::get('/lungcheck/assessment/activities', function () {
		return view('lungcheck.assessment.activities.index');
	});
	Route::get('/lungcheck/assessment/activities/moderate', function () {
		return view('lungcheck.assessment.activities.moderate');
	});
	Route::get('/lungcheck/assessment/activities/daily', function () {
		return view('lungcheck.assessment.activities.daily');
	});
	Route::get('/lungcheck/assessment/activities/social', function () {
		return view('lungcheck.assessment.activities.social');
	});
	Route::get('/lungcheck/assessment/suffer', function () {
		return view('lungcheck.assessment.suffer.index');
	});
	Route::get('/lungcheck/assessment/suffer/energy', function () {
		return view('lungcheck.assessment.suffer.energy');
	});
	Route::get('/lungcheck/assessment/suffer/tense-feeling', function () {
		return view('lungcheck.assessment.suffer.tense-feeling');
	});
	Route::get('/lungcheck/assessment/suffer/fatigue', function () {
		return view('lungcheck.assessment.suffer.fatigue');
	});
	// Lungcheck score
	Route::get('/lungcheck/assessment/your-score', 'LungcheckController@getAssessmentScore');
	// Route::get('/lungcheck/assessment/your-score', function () {
	// 	return view('lungcheck.assessment.your-score');
	// });
	Route::get('/lungcheck/assessment/talk-to-your-doctor', function () {
		return view('lungcheck.assessment.talk-to-your-doctor');
	});
	Route::get('/lungcheck/assessment/save-results', function () {
		return view('lungcheck.assessment.save-results');
	});
	Route::group(['middleware' => 'logincheck'], function(){
		Route::get('/toolbox', [ToolboxController::class,'toolboxHome']);
		// Route::get('/toolbox', function () {
		// 	return view('toolbox.index');
		// });
		Route::get('/toolbox/map-track', [ToolboxController::class,'mapTrackDashboard']);
		// Route::get('/toolbox/map-track', function () {
		// 	return view('toolbox.map-track.index');
		// });
		Route::get('/toolbox/map-track/my-result', 'ToolboxController@lungCheckResult');
		// Route::get('/toolbox/map-track/my-result', function () {
		// 	return view('toolbox.map-track.my-result');
		// });
		Route::get('/toolbox/map-track/progress-tracker', 'ToolboxController@loadProgressTracker');
		// Route::get('/toolbox/map-track/progress-tracker', function () {
		// 	return view('toolbox.map-track.progress-tracker');
		// });
		Route::get('/toolbox/map-track/understanding-your-progress', function () {
			return view('toolbox.map-track.understanding-your-progress');
		});
		Route::get('/toolbox/guide-me', function () {
			return view('toolbox.guide-me.index');
		});
		Route::get('/toolbox/guide-me/exercise-tips', function () {
			return view('toolbox.guide-me.exercise-tips');
		});
		Route::get('/toolbox/guide-me/mindfullness', function () {
			return view('toolbox.guide-me.mindfullness');
		});
		Route::get('/toolbox/guide-me/environmental', function () {
			return view('toolbox.guide-me.environmental');
		});
		Route::get('/toolbox/guide-me/stop-smoking', function () {
			return view('toolbox.guide-me.stop-smoking');
		});
		Route::get('/toolbox/talk-to-me', function () {
			return view('toolbox.talk-to-me.index');
		});
		Route::get('/toolbox/talk-to-me/better-conversations', function () {
			return view('toolbox.talk-to-me.better-conversations');
		});
		Route::get('/toolbox/talk-to-me/appointment-checklist', function () {
			return view('toolbox.talk-to-me.appointment-checklist');
		});
		Route::get('/toolbox/talk-to-me/question-you-could-ask', function () {
			return view('toolbox.talk-to-me.question-you-could-ask');
		});
		Route::get('/toolbox/patients-like-me', function () {
			return view('toolbox.patients-like-me');
		});
		Route::get('/toolbox/patients-like-me', function () {
			return view('toolbox.patients-like-me');
		});
	});
/*});*/
Route::get('/external-cmd', function() {
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
    Artisan::call('optimize:clear');
    return "Cache is cleared";
});
Route::get('download/{file}', function ($file) {
    $filename = 'public/' . $file . '.pdf';
    if (!Storage::exists($filename)) {
        return abort(418);
    }
    return response()->download(storage_path('app/' . $filename), 'lungcheck-report-'.date('Y-m-d-H-i-s') . '.pdf');
    //__('results_filename')
});

// User
Route::post('login', 'UserController@login')->name('api_login');
Route::get('logout', 'UserController@logout')->name('api_logout');
Route::post('register', 'UserController@register')->name('api_register');
Route::post('forgot', 'UserController@forgotUserId')->name('api_forgot_password');
Route::post('update-email', 'UserController@updateEmail')->name('api_update_email');
Route::get('get-results', 'UserController@getResults')->name('api_get_results');
Route::post('update-results', 'UserController@updateResults')->name('api_update_results');
Route::post('delete', 'UserController@delete')->name('api_delete_user');
Route::post('lungcheck', 'LungcheckController@lungcheck')->name('api_lungcheck');
Route::post('lungage', 'LungageController@sendMail')->name('api_lungage');
Route::post('lungage/email', 'EmailController@sendMail');
Route::post('lungage/pdf', 'PdfController@generatePdf')->name('generate_pdf');
Route::post('lungcheck/pdf', 'PdfController@generateLungCheckPdf')->name('generate_lungcheck_pdf');
Route::post('lungcheck/export-pdf','PdfController@exportPDF')->name('exportPDF');
Route::get('sitemap.xml', 'SitemapController@index');