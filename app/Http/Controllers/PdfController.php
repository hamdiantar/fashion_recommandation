<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        $content = $request->input('content');
//dd($content);
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true); // Enable HTML5 parsing
        $pdf = new Dompdf($options);

        // Load HTML content
        $pdf->loadHtml($content);

        $pdf->setPaper('A4', 'portrait');
        $pdf->render();

        return $pdf->stream('report.pdf');
    }
}
