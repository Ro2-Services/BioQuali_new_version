<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about() { 
        return view('frontend.about');
    }

    public function analyses() { 
        return view('frontend.analyses');
    }

    public function articles() { 
        return view('frontend.articles');
    }

    public function categories() { 
        return view('frontend.categories');
    }

    public function contact() { 
        return view('frontend.contact');
    }

    public function equipements() { 
        return view('frontend.equipements');
    }

    public function home() { 
        return view('frontend.home');
    }

    public function index() { 
        return view('frontend.index');
    }

    public function realisation() { 
        return view('frontend.realisation');
    }

    public function services() { 
        return view('frontend.services');
    }

    public function skill() { 
        return view('frontend.skill');
    }

    public function tests() { 
        return view('frontend.tests');
    }

    public function welcome() { 
        return view('welcome');
    }

}