<?php

namespace App\Http\Controllers;

use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Languages;
use App\Models\Portfolio;
use App\Models\Profiles;
use Illuminate\Http\Request;
use PDF;

class DownloadController extends Controller
{
    public function index()
    {
        $profiles = Profiles::first();
        $experiences = Experiences::orderBy('Date', 'desc')->get();
        $educations = Educations::orderBy('Time', 'desc')->get();
        $languages = Languages::orderBy('StartDate', 'desc')->get();
        $portfolios = Portfolio::all();

        $pdf = PDF::loadView('download.index', compact('profiles', 'experiences', 'educations', 'languages', 'portfolios'));
        
        return $pdf->download('download');
    }
} 