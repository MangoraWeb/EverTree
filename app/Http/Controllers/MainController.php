<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class MainController extends Controller
{
    public function index() 
    {
        $pages = Pages::all();
        return view('main')->with('menu', $pages);
    }

    public function about() {
        return view('about');
    }


   
}
