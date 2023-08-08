<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        return view('pages.landing.kegiatan-akademik.index');
    }

    public function show()
    {
        return view('pages.landing.kegiatan-akademik.show');
    }

}
