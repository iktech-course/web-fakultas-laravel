<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
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
        $dosen = Dosen::findOrFail(1);
        $ti_1 = MataKuliah::where('semester', 1)->where('program_studi', 'Teknik Informatika')->get();
        $ti_2 = MataKuliah::where('semester', 2)->where('program_studi', 'Teknik Informatika')->get();
        $ti_3 = MataKuliah::where('semester', 3)->where('program_studi', 'Teknik Informatika')->get();
        $ti_4 = MataKuliah::where('semester', 4)->where('program_studi', 'Teknik Informatika')->get();
        $ti_5 = MataKuliah::where('semester', 5)->where('program_studi', 'Teknik Informatika')->get();
        $ti_6 = MataKuliah::where('semester', 6)->where('program_studi', 'Teknik Informatika')->get();
        $ti_7 = MataKuliah::where('semester', 7)->where('program_studi', 'Teknik Informatika')->get();
        $ti_8 = MataKuliah::where('semester', 8)->where('program_studi', 'Teknik Informatika')->get();
        return view('pages.landing.prodi.show-ti', compact('ti_1', 'ti_2', 'ti_3', 'ti_4', 'ti_5', 'ti_6', 'ti_7', 'ti_8','dosen'));
    }

    public function show_si()
    {
        $dosen = Dosen::findOrFail(4);
        $si_1 = MataKuliah::where('semester', 1)->where('program_studi', 'Sistem Informasi')->get();
        $si_2 = MataKuliah::where('semester', 2)->where('program_studi', 'Sistem Informasi')->get();
        $si_3 = MataKuliah::where('semester', 3)->where('program_studi', 'Sistem Informasi')->get();
        $si_4 = MataKuliah::where('semester', 4)->where('program_studi', 'Sistem Informasi')->get();
        $si_5 = MataKuliah::where('semester', 5)->where('program_studi', 'Sistem Informasi')->get();
        $si_6 = MataKuliah::where('semester', 6)->where('program_studi', 'Sistem Informasi')->get();
        $si_7 = MataKuliah::where('semester', 7)->where('program_studi', 'Sistem Informasi')->get();
        $si_8 = MataKuliah::where('semester', 8)->where('program_studi', 'Sistem Informasi')->get();
        return view('pages.landing.prodi.show-si', compact('dosen', 'si_1', 'si_2', 'si_3','si_4', 'si_5', 'si_6', 'si_7', 'si_8'));
    }
}
