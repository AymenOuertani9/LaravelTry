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
        $title="Welcome to Services";
        return view("pages.services")->with('title', $title);
    }

    public function about(){
        $title="Welcome to About";
        return view("pages.about")->with('title', $title);
    }
}
