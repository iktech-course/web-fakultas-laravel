<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Pesan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $berita = Berita::count();
        $dosen = Dosen::count();
        $pesan = Pesan::count();   
        return view('pages.dashboard.index', compact('berita','dosen','pesan'));
    }
}
