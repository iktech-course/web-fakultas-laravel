<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KegiatanAkademik;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = KegiatanAkademik::paginate(5);
        return view('pages.dashboard.kegiatan.index', compact('kegiatan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.dashboard.kegiatan.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kegiatan' => 'required',
            'deskripsi'     => 'required',
            'tanggal'       => 'required',
            'waktu'         => 'required',
            'lokasi'        => 'required',
            'pelaksana'     => 'required'
        ]);

        // dd($request);

        // Simpan Ke Database
        KegiatanAkademik::create([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'deskripsi'     => $request->input('deskripsi'),
            'tanggal'       => $request->input('tanggal'),
            'waktu'         => $request->input('waktu'),
            'lokasi'        => $request->input('lokasi'),
            'pelaksana'     => $request->input('pelaksana'),
        ]);

        // Kembali Ke Halaman Index
        return redirect()->route('kegiatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil Data Kegiatan
        $kegiatan = KegiatanAkademik::findOrFail($id);

        return view('pages.dashboard.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_kegiatan' => 'required',
            'deskripsi'     => 'required',
            'tanggal'       => 'required',
            'waktu'         => 'required',
            'lokasi'        => 'required',
            'pelaksana'     => 'required'
        ]);

        // dd($request);

        // Ambil Data Kegiatan
        $kegiatan = KegiatanAkademik::findOrFail($id);

        // Simpan Perubahan Ke Database
        $kegiatan->update([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'deskripsi'     => $request->input('deskripsi'),
            'tanggal'       => $request->input('tanggal'),
            'waktu'         => $request->input('waktu'),
            'lokasi'        => $request->input('lokasi'),
            'pelaksana'     => $request->input('pelaksana'),
        ]);

        // Kembali Ke Halaman Index
        return redirect()->route('kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Ambil Data Kegiatan
        $kegiatan = KegiatanAkademik::findOrFail($id);

        // Hapus Kegiatan
        $kegiatan->delete();

        // Kembali Ke Halaman Login
        return redirect()->route('kegiatan.index');
    }
}
