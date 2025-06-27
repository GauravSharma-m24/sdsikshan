<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FeeController extends Controller
{
    public function downloadPDF()
    {
        $data = [
            ['class' => 'Nursery', 'tuition' => 15000, 'hostel' => 30000, 'mess' => 15000],
            ['class' => 'KG', 'tuition' => 16000, 'hostel' => 32000, 'mess' => 15000],
            ['class' => '1st - 5th', 'tuition' => 18000, 'hostel' => 35000, 'mess' => 18000],
            ['class' => '6th - 8th', 'tuition' => 20000, 'hostel' => 37000, 'mess' => 20000],
            ['class' => '9th - 10th', 'tuition' => 25000, 'hostel' => 40000, 'mess' => 22000],
            ['class' => '11th - 12th', 'tuition' => 28000, 'hostel' => 42000, 'mess' => 25000],
        ];

        $pdf = Pdf::loadView('pdf.fee_pdf', compact('data'))->setPaper('A4', 'portrait');
        return $pdf->download('Fee_Structure.pdf');
    }
}
