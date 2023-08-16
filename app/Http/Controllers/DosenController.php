<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
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
        return view('pages.landing.dosen.show', compact('dosen'));

        $publikasi = Publikasi::where('publikasi')->get();
        return view('pages.landing.dosen.show', compact('publikasi'));
    }
}
