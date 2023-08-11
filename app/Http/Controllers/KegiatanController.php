<?php

namespace App\Http\Controllers;

use App\Models\KegiatanAkademik;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        $kegiatan = KegiatanAkademik::paginate(5);
        return view('pages.landing.kegiatan-akademik.index', compact('kegiatan'));
    }

    public function show($id)
    {
        $kegiatan = KegiatanAkademik::findOrFail($id);
        return view('pages.landing.kegiatan-akademik.show',compact('kegiatan'));
    }

}
