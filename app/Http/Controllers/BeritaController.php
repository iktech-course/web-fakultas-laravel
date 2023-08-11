<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with('user')->paginate(5);

        return view('pages.landing.berita.index', compact('berita'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('pages.landing.berita.show', compact('berita'));   
    }
}
