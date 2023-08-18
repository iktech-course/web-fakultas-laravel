<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dosen;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $berita = Berita::limit(6)->get();
        $dosen = Dosen::where('jabatan_struktural', 'Dekan')->orWhere('jabatan_struktural', 'Wakil Dekan')->orWhere('jabatan_struktural', 'Kepala Program Studi')->orderByRaw('FIELD(id, 2,3,1,4)')->get();
        // dd($dosen);
        return view('pages.landing.index', compact('berita', 'dosen'));
    }
}
