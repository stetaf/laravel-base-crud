<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class PageController extends Controller
{   
    /**
    * Display the homepage
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        $comics = Comic::all();
        $total = count($comics);

        return view('home', compact('total'));
    }
}
