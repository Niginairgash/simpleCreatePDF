<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use PDF;
class DomPdfController extends Controller
{
    public function getPdf(Request $request){
        $data = [
            'title' => 'Welcome to My page',
            'date' => date('m/d/Y')
        ];
        $pdf = FacadePdf::loadView('pagePDF', $data);

        return $pdf->download('page.pdf');
        
    }
}
