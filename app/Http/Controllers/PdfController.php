<?php

namespace App\Http\Controllers;

use App\Helpers\PDFHelper;
use App\MYPDF;
use App\MyPdf_LungCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PDF;
#use Image;
class PdfController extends Controller{
    public function generatePdf(Request $request){
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
        return response([
            'url' => url('/api/download/' . $data['locale'] . '/' . PDFHelper::generatePDF($data))
        ]);
    }

    public function generateLungCheckPdf(Request $request){
        return response([
            'url' => url('download/' . PDFHelper::generateLungCheckPdf())
        ]);
    }
    public function exportPDF(Request $request){
        $code = session('user')->code;
        //print_r($_FILES);
        /*move_uploaded_file(
            $_FILES['pdf']['tmp_name'], 
            public_path() . "/userPDFExport/".$code.'-'.$_POST['name'].".png"
        );*/
        $image = $_POST['image'];

        $folderPath = public_path() . "/userPDFExport/";
        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode($folderPath, $image_parts[0]);
        $image_base64 = base64_decode($image_parts[1]);
        $name = $code.'-'.$_POST['name'].".png";
        $file = $folderPath . $name;
        $output = file_put_contents($file, $image_base64);

    }
}