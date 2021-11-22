<?php

namespace App;

use Illuminate\Support\Facades\App;
//use TCPDF;

class MYPDF extends \tFPDF
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
        //$bMargin = $this->getBreakMargin();
        //$auto_page_break = $this->AutoPageBreak;
        //$this->SetAutoPageBreak(false, 0);
        $img_file = storage_path('pdf_images/lang/' . $this->data['locale'] . '.jpg');
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        //$this->SetAutoPageBreak($auto_page_break, $bMargin);
        //$this->setPageMark();

        // define my standard colors
        $this->SetTextColor(0,0,255);
        $this->SetTextColor(255,255,255);

        // set default font subsetting mode
        //$this->setFontSubsetting(false);

        // actual age
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 79);
        $this->SetTextColor(255,255,255);
        $this->SetXY(44, 100);
        $this->Cell(0, 0, str_pad($this->data['age'], 2, '0', STR_PAD_LEFT), 0, 0, 'c');

        // lung age
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '', 79);
        $this->SetTextColor(255,255,255);
        $this->SetXY(127, 100);
        $this->Cell(0, 0, str_pad($this->data['lungAge'], 2, '0', STR_PAD_LEFT));

        // lung age difference
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '',55);
        $this->SetTextColor(0,0,255);
        $this->SetXY(92, 174);
        $this->Cell(0, 0, str_pad(($this->data['lungAge'] - $this->data['age']), 2, '0', STR_PAD_LEFT));

        // age-circle
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '',23);
        $this->SetTextColor(0,0,255);
        $this->SetXY(62.5, 222);
        $this->Cell(0, 0, str_pad($this->data['age'], 2, '0', STR_PAD_LEFT));

        // height-circle
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '',23);
        $this->SetTextColor(0,0,255);
        $this->SetXY(97.5, 221);
        $this->Cell(0, 0, $this->data['height']);

        // number of years smoking-circle
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '',23);
        $this->SetTextColor(0,0,255);
        $this->SetXY(173, 222);
        $this->Cell(0, 0, str_pad($this->data['yearsSmoking'], 2, '0', STR_PAD_LEFT));

        // number of cigarettes-circle
        $this->AddFont('montserratb', '', 'montserratb.ttf', true);
        $this->SetFont('montserratb', '',23);
        $this->SetTextColor(0,0,255);
        $this->SetXY(136, 222);
        $this->Cell(0, 0, str_pad($this->data['numberCigarettes'], 2, '0', STR_PAD_LEFT));
        if ($this->data['gender'] == 'female') {
            $this->Image(storage_path('pdf_images/female.jpg'), 21, 211, 21.3, 21.2, 'JPG', '', '', true, 300, '', false, false, 0, false, false, false);
        } else {
            $this->Image(storage_path('pdf_images/male.jpg'), 21, 211, 21.3, 21.2, 'JPG', '', '', true, 300, '', false, false, 0, false, false, false);
        }

//        // set fonts

//        $this->SetTextSpotColor('my_Green', 100);
        //        $this->SetXY(44,83);
        //        $this->Cell(0, 0,'54');
        //
        //        $this->SetXY(130,83);
        //        $this->Cell(0, 0,'99');
        //
        //

//
        //
        //        $this->SetFont($extraBold, '', 40);
        //
        //        $this->SetTextSpotColor('my_Blue', 100);
        //        $this->SetXY(58,158);
        //        $this->Cell(0, 0,'Hi Mercedes :)');

    }
}
