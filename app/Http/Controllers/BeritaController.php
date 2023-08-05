<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('pages.landing.berita.index');
    }

    public function show()
    {
        return view('pages.landing.berita.show');   
    }
}
