<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dosen = Dosen::paginate(5);

        return view('pages.dashboard.dosen.index', compact('dosen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.dashboard.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi Input
        $this->validate($request,[
            'nama'               => 'required',
            'nidn'               => 'required',
            'foto'               => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'jabatan_fungsional' => 'required',
            'jabatan_struktural' => 'required',
            'program_studi'      => 'required',
            'no_wa'              => 'required',
            'deskripsi'          => 'required'
        ]);

        // dd($request);

        // Upload Foto
        $foto = $request->file('foto');
        $foto->storeAs('public/dosen', $foto->hashName());

        // Simpan Data Dosen
        $dosen = Dosen::create([
            'nama' => $request->input('nama'),
            'nidn' => $request->input('nidn'),
            'foto' => $foto->hashName(),
            'jabatan_fungsional' => $request->input('jabatan_fungsional'),
            'jabatan_struktural' => $request->input('jabatan_struktural'),
            'program_studi' => $request->input('program_studi'),
            'no_wa' => $request->input('no_wa'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Kembali Ke Halaman Dosen List
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('pages.dashboard.dosen.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
