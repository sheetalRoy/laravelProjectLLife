<?php

namespace App;

use Illuminate\Support\Facades\App;
//use TCPDF;
// use Karriere\PdfMerge\PdfMerge;
use Session;
//use FPDI;
class MyPdf_LungCheck extends \tFPDF
{

    private $data;

    public function __construct($data)
    {
        parent::__construct();

        $this->data = $data;
    }

    //Page header
    public function Header()
    {
        //$this->AddPage();
        // Add a Unicode font (uses UTF-8)
        /*$img_file = storage_path('pdf_images/lungcheck-result.jpg');
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 14);*/
        // Load a UTF-8 string from a file and print it
        
        /*$this->Write(8, 'test');
        // Select a standard font (uses windows-1252)
        $this->SetFont('Arial', '', 14);
        $this->Ln(10);
        $this->Write(5, 'The file size of this PDF is only 12 KB.');*/

        /*$style_bollino = array('width' => 0.25, 'dash' => 0, 'color' => array(0, 0, 0));

        $poor = [212, 139, 126];
        $need_improvement = [255, 161, 125];
        $good = [202, 225, 187];
        $excellent = [175, 215, 183];
        // Fatigue
        $fatigue = $this->data['latest_result']->fatigue;
        if($fatigue==1){
            $fatigue_color = $poor;
        }elseif($fatigue>=2 && $fatigue <=3){
            $fatigue_color = $need_improvement;
        }elseif($fatigue>=4 && $fatigue <=5){
            $fatigue_color = $good;
        }else{
            $fatigue_color = $excellent;
        }
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 20);
        $this->SetTextColor(255,255,255);
        $this->SetXY(49.5, 198);
        $this->SetFillColor($fatigue_color[0],$fatigue_color[1],$fatigue_color[2]);
        $this->Ellipse(52,197,8,8);
        $this->Text(49, 199.5, $this->data['latest_result']->fatigue);

        // Emotions
        $emotions = $this->data['latest_result']->emotions;
        if($emotions>=1 && $emotions <= 5){
            $emotions_color = $poor;
        }elseif($emotions>=6 && $emotions <=10){
            $emotions_color = $need_improvement;
        }elseif($emotions>=11 && $emotions <=15){
            $emotions_color = $good;
        }else{
            $emotions_color = $excellent;
        }
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 20);
        $this->SetTextColor(255,255,255);
        $this->SetXY(49.5, 198);
        $this->SetFillColor($emotions_color[0],$emotions_color[1],$emotions_color[2]);
        $this->Ellipse(78,197,8,8);
        $this->Text(74.7, 199.5, $this->data['latest_result']->emotions);

        // Functional
        $functional = $this->data['latest_result']->functional;
        if($functional>=1 && $functional <= 7){
            $functional_color = $poor;
        }elseif($functional>=8 && $functional <=14){
            $functional_color = $need_improvement;
        }elseif($functional>=15 && $functional <=21){
            $functional_color = $good;
        }else{
            $functional_color = $excellent;
        }
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 20);
        $this->SetTextColor(255,255,255);
        $this->SetXY(49.5, 198);
        $this->SetFillColor($functional_color[0],$functional_color[1],$functional_color[2]);
        $this->Ellipse(103,197,8,8);
        $this->Text(99.6, 199.5, $this->data['latest_result']->functional);

        // Mental
        $mental = $this->data['latest_result']->mental;
        if($mental>=1 && $mental <= 3){
            $mental_color = $poor;
        }elseif($mental>=4 && $mental <=7){
            $mental_color = $need_improvement;
        }elseif($mental>=8 && $mental <=11){
            $mental_color = $good;
        }else{
            $mental_color = $excellent;
        }
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 20);
        $this->SetTextColor(255,255,255);
        $this->SetXY(49.5, 198);
        $this->SetFillColor($mental_color[0],$mental_color[1],$mental_color[2]);
        $this->Ellipse(130,197,8,8);
        $this->Text(128, 199.5, $this->data['latest_result']->mental);

        // Symptoms
        $symptoms = $this->data['latest_result']->symptoms;
        if($symptoms>=1 && $symptoms <= 7){
            $symptoms_color = $poor;
        }elseif($symptoms>=8 && $symptoms <=14){
            $symptoms_color = $need_improvement;
        }elseif($symptoms>=15 && $symptoms <=21){
            $symptoms_color = $good;
        }else{
            $symptoms_color = $excellent;
        }
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 20);
        $this->SetTextColor(255,255,255);
        $this->SetXY(49.5, 198);
        $this->SetFillColor($mental_color[0],$mental_color[1],$mental_color[2]);
        $this->Ellipse(156,197,8,8);
        $this->Text(152.7, 199.5, $this->data['latest_result']->symptoms);

        // Average Score
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 20);
        $this->SetTextColor(0,0,255);
        $this->SetXY(175, 198);
        // $this->Cell(0, 0, $this->data['latest_result']->average_score);
        $this->SetFillColor(255,255,255);
        $this->Ellipse(180,197,8,8);
        $this->Text(176, 199.5, $this->data['latest_result']->average_score);*/
        /*$code = session('user')->code;
        $folderPath = public_path() . "/userPDFExport/";
        //$this->AddPage('P');
        $total = $folderPath . $code.'-total.png';
        $this->Image($total, -5, 0, 210, 90);
        $fatigue = $folderPath . $code.'-fatigue.png';
        $this->Image($fatigue, -5, 100, 210, 90);
        $emotions = $folderPath . $code.'-emotions.png';
        $this->Image($emotions, -5, 200, 210, 90);
        $this->SetXY(49.5, 300);
        $functional = $folderPath . $code.'-functional.png';
        $this->Image($functional, -5, 300, 210, 90);
        $mental = $folderPath . $code.'-mental.png';
        $this->Image($mental, -5, 400, 210, 90);
        $symptoms = $folderPath . $code.'-symptoms.png';
        $this->Image($symptoms, -5, 500, 210, 90);*/
    }
    private function Ellipse($x, $y, $rx, $ry, $style='F')
    {
        if($style=='F')
            $op='f';
        elseif($style=='FD' || $style=='DF')
            $op='B';
        else
            $op='S';
        $lx=4/3*(M_SQRT2-1)*$rx;
        $ly=4/3*(M_SQRT2-1)*$ry;
        $k=$this->k;
        $h=$this->h;
        $this->_out(sprintf('%.2F %.2F m %.2F %.2F %.2F %.2F %.2F %.2F c',
            ($x+$rx)*$k,($h-$y)*$k,
            ($x+$rx)*$k,($h-($y-$ly))*$k,
            ($x+$lx)*$k,($h-($y-$ry))*$k,
            $x*$k,($h-($y-$ry))*$k,$style));
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',
            ($x-$lx)*$k,($h-($y-$ry))*$k,
            ($x-$rx)*$k,($h-($y-$ly))*$k,
            ($x-$rx)*$k,($h-$y)*$k,$style));
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',
            ($x-$rx)*$k,($h-($y+$ly))*$k,
            ($x-$lx)*$k,($h-($y+$ry))*$k,
            $x*$k,($h-($y+$ry))*$k,$style));
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c %s',
            ($x+$lx)*$k,($h-($y+$ry))*$k,
            ($x+$rx)*$k,($h-($y+$ly))*$k,
            ($x+$rx)*$k,($h-$y)*$k,
            $op));
    }

}