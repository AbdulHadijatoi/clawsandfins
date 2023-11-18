<?php

namespace App\Http\Controllers;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boxpromo.index');
    }
    
    public function timeline()
    {
        return view('boxpromo.timeline');
    }
    
    public function cv()
    {
        return view('boxpromo.cv');
    }

    public function letter_of_intent()
    {
        return view('boxpromo.letter_of_intent');
    }
    public function long_version()
    {
        return view('boxpromo.long-version');
    }
    public function offerings()
    {
        return view('boxpromo.offerings');
    }
    public function crab_box_promo_video()
    {
        return view('boxpromo.crab-box-promo-video');
    }
    public function video_for_distributers()
    {
        return view('boxpromo.video-for-distributers');
    }
    public function important_notes()
    {
        return view('boxpromo.important-notes');
    }

}
