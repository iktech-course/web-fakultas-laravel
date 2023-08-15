<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index() 
    {
        return view('pages.landing.prodi.index');
    }

    public function show_ti()
    {
        $ti_1 = MataKuliah::where('semester', 1)->get();
        $ti_2 = MataKuliah::where('semester', 2)->get();
        $ti_3 = MataKuliah::where('semester', 3)->get();
        $ti_4 = MataKuliah::where('semester', 4)->get();
        $ti_5 = MataKuliah::where('semester', 5)->get();
        $ti_6 = MataKuliah::where('semester', 6)->get();
        $ti_7 = MataKuliah::where('semester', 7)->get();
        $ti_8 = MataKuliah::where('semester', 8)->get();
        return view('pages.landing.prodi.show-ti', compact('ti_1', 'ti_2', 'ti_3', 'ti_4', 'ti_5', 'ti_6', 'ti_7', 'ti_8'));
    }

    public function show_si()
    {
        return view('pages.landing.prodi.show-si');
    }
}
