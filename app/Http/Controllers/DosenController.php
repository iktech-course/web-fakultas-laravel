<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('pages.landing.dosen.index');
    }

    public function show()
    {
        return view('pages.landing.dosen.show');
    }
}
