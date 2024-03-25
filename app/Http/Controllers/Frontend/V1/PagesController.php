<?php

namespace App\Http\Controllers\Frontend\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact_us');
    }

    public function admissionProcedure()
    {
        return view('frontend.pages.admission_procedure');
    }

    public function affiliation()
    {
        return view('frontend.pages.affiliation');
    }

    public function galleryPhotos()
    {
        return view('frontend.pages.gallery_photos');
    }

    public function generalRules()
    {
        return view('frontend.pages.general_rules');
    }

    public function visionMission()
    {
        return view('frontend.pages.vision_and_mission');
    }
}
