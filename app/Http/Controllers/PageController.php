<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    /**
    * Display the homepage
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        return view('home');
    }
}
