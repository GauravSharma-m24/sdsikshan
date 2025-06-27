<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicEvent;
use Barryvdh\DomPDF\Facade\Pdf;

class ContentController extends Controller
{
    public function homeIndex(){
        return view('user.pages.index');
    }

    public function about(){
        return view('user.pages.about');
    }

    public function feeStructure(){
        return view('user.pages.fee_Structure');
    }

    public function calender()
    {
        $events = AcademicEvent::orderBy('event_date')->get();
        return view('user.pages.calender', compact('events'));
    }

    public function exportPdf()
    {
        $events = AcademicEvent::orderBy('event_date')->get();
        $pdf = PDF::loadView('pdf.calender_pdf', compact('events'));
        return $pdf->download('academic-calendar.pdf');
    }
}
