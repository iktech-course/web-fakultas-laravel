<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index() 
    {
        $berita = Berita::limit(3)->get();

        return view('pages.landing.profil-fakultas.index', compact('berita'));
    }
}
