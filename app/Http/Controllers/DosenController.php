<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MKPengampu;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::get();

        return view('pages.landing.dosen.index', compact('dosen'));
    }

    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        $publikasi = Publikasi::where('id_dosen', $id)->get();
        $mkpengampu = MKPengampu::with('matakuliah')->where('id_dosen', $id)->get();
        return view('pages.landing.dosen.show', compact('dosen','publikasi', 'mkpengampu'));

        
    }
}
