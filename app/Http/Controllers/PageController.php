<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Contact
    function contact(){
        return view('contact');
    }
}
