<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to Laravel";
        return view("pages.index")->with('title', $title);
    }

    public function services(){
        $data = array(
            'title'=> "Welcome to Services",
            'services' => ["programming","SEO", "Graphic design"]
        );
        
        return view("pages.services")->with($data);
    }

    public function about(){
        $title="Welcome to About";
        return view("pages.about")->with('title', $title);
    }
}
