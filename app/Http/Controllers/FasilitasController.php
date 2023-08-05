<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        return view('pages.landing.fasilitas.index');
    }
}
