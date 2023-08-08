<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index() 
    {
        return view('pages.landing.prodi.index');
    }

    public function show_ti()
    {
        return view('pages.landing.prodi.show-ti');
    }

    public function show_si()
    {
        return view('pages.landing.prodi.show-si');
    }
}
