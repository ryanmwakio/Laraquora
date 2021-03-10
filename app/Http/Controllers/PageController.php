<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        return 'the about page';
        // return view('about');
    }

    public function contact(){
        return "the contact page";
        // return view('contact');
    }
}
