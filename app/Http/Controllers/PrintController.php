<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print()
    {
        $html =  view('dashboard.printpdf');

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render('dashboard.printpdf');

        // Output the generated PDF to Browser
        $dompdf->stream('dashboard.printpdf');
        // return view('dashboard.printpdf');
    }
}
