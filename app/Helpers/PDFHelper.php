<?php
namespace App\Helpers;
use App\MYPDF;
use App\MyPdf_LungCheck;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
//use TCPDF;
class PDFHelper{
    public static function generatePDF($data) {
        $pdf = new MYPDF($data);
        //$pdf->Output(storage_path().'/pdf/file.pdf', 'I');
        $filename = Str::random(48);
        Storage::put('public/'. $filename. '.pdf', $pdf->Output('result.pdf', 'S'));
        return $filename;
    }
    public static function generateLungCheckPdf() {
        $userData = \Session::get('user');
        $all_result = json_decode($userData->results);
        $all_result1 = json_decode($userData->results,true);
        $total_assements = count($all_result1);
        $total = 0;
        foreach($all_result as $result){
            $r = $result->fatigue + $result->symptoms + $result->functional + $result->mental + $result->emotions; 
            $total += floor(($r - 14) / 84 * 100);
        }
        $data = [];
        $data['latest_result'] = end($all_result);
        $data['latest_result']->average_score = floor($total / $total_assements);
        $pdf = new \tFPDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        
        $code = session('user')->code;
        $folderPath = public_path() . "/userPDFExport/";
        //$this->AddPage('P');
        $total = $folderPath . $code.'-total.png';
        $pdf->Image($total, -5, 10, 210, 125);
        $fatigue = $folderPath . $code.'-fatigue.png';
        $pdf->Image($fatigue, -5, 150, 210, 125);
        $pdf->AddPage();
        $emotions = $folderPath . $code.'-emotions.png';
        $pdf->Image($emotions, -5, 10, 210, 125);
        
        $functional = $folderPath . $code.'-functional.png';
        $pdf->Image($functional, -5, 150, 210, 125);
        $pdf->AddPage();
        $mental = $folderPath . $code.'-mental.png';
        $pdf->Image($mental, -5, 10, 210, 125);
        $symptoms = $folderPath . $code.'-symptoms.png';
        $pdf->Image($symptoms, -5, 150, 210, 125);
        //$pdf->Output(storage_path().'/pdf/file.pdf', 'I');
        $code = session('user')->code;
        //$pdf->Output(public_path() . "/userPDFExport/".$code.'.pdf', 'F');
        $filename = Str::random(48);
        Storage::put('public/'. $filename. '.pdf', $pdf->Output('result.pdf', 'S'));
        return $filename;
    }
}