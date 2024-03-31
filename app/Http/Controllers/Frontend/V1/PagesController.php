<?php

namespace App\Http\Controllers\Frontend\V1;
use App\Models\TopRanker;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {   
        $topRankers = TopRanker::display()->get(); // Retrieve all top rankers from the database
        //return view('frontend.pages.index', compact('topRankers'));
        
        $news = News::published()->orderBy('created_at', 'desc')->get();
        return view('frontend.pages.index', compact('news', 'topRankers'));
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
