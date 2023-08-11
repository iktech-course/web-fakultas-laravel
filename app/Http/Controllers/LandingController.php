<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $berita = Berita::limit(6)->get();

        return view('pages.landing.index', compact('berita'));
    }
}
