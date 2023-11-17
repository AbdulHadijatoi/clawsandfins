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

}
