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
    
    
    public function indexSWE()
    {
        return view('boxpromo.index-swe');
    }
    
    public function indexVN()
    {
        return view('boxpromo.index-vn');
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
    public function offerings_swe()
    {
        return view('boxpromo.offerings-swe');
    }
    public function offerings_vn()
    {
        return view('boxpromo.offerings-vn');
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
            public function important_notes_swe()
    {
        return view('boxpromo.important-notes-swe');
    }
        public function important_notes_vn()
    {
        return view('boxpromo.important-notes-vn');
    }
    
    public function time_plan()
    {
        return view('boxpromo.time-plan');
    }
    
public function who_am_i()
    {
        return view('boxpromo.who-am-i');
    }
    
    public function QA()
    {
        return view('boxpromo.QA');
    }
        

}
