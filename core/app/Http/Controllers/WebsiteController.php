<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function astrocred(){
        return view('/astrocred');
    }
    public function astropulse(){
        return view('/astropulse');
    }
    public function astromobile(){
        return view('/astromobile');
    }

    public function contact(){
        return view('/contact');
    }

    public function history(){
        return view('/history');
    }
    public function mision(){
        return view('/mision');
    }

    public function vision(){
        return view('/vision');
    }

    public function about(){
        return view('/about');
    }

}
