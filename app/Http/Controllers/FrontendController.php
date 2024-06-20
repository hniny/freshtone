<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public  function contact(){
        return view('frontend.contact_us');
    }
    public function safety(){
        return view('frontend.safety');
    }
    public function colorContact(){
        return view('frontend.color_contact');
    }
    public function powerContact(){
        return view('frontend.power_contact');
    }
    public function dailyContact(){
        return view('frontend.daily_contact');
    }
    public function accessories(){
        return view('frontend.accessories');
    }
    public function eyeMask(){
        return view('frontend.eye_mask');
    }
    public function eyeCare(){
        return view('frontend.eye_care');
    }
}
