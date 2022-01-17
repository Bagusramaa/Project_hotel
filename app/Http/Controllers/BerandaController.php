<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // Home Page
    function beranda(){
        return view('beranda');
    }
}
