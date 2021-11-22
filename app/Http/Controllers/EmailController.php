<?php

namespace App\Http\Controllers;

use App\Helpers\PDFHelper;
use App\Http\Requests\EmailRequest;
use App\Jobs\GenerateResultsPdf;
use App\Mail\ResultsPdfMail;
use App\MYPDF;
use App\Notifications\ResultsPdfNotification;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    /**
     * @param EmailRequest $request
     * @return mixed
     */
    public function sendMail(EmailRequest $request)
    {
        // get email and lungage in request
        $email = $request->input('email');

        $input = $request->input();
        $data = [
            'age' => $input['age'],
            'lungAge' => $input['lung_age'],
            'height' => $input['height'],
            'numberCigarettes' => $input['cigarettes_per_day'],
            'yearsSmoking' => $input['smoking_years'],
            'gender' => $input['gender'],
            'locale' => 'en'//$input['locale']
        ];
        $filename = PDFHelper::generatePDF($data);


        // send email (ResultsPdfNotification)

        $path = Storage::url($filename.'.pdf');

        Mail::to($email)->send(new ResultsPdfMail($email, $filename.'.pdf'));

        Storage::delete($path);

        return response(null, 200);
    }
}
