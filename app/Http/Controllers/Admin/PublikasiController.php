<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_dosen'  => 'required',
            'judul'     => 'required',
            'publisher' => 'required',
            'tahun'     => 'required|numeric',
            'link'      => 'required',
        ]);

        // Simpan Ke Database
        Publikasi::create([
            'id_dosen' => $request->input('id_dosen'),
            'judul'     => $request->input('judul'),
            'publisher'     => $request->input('publisher'),
            'tahun'     => $request->input('tahun'),
            'link'     => $request->input('link'),

        ]);

        // Kembali Ke Halaman Index
        return redirect()->route('dosen.show', $request->input('id_dosen'));
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
    public function destroy(string $id, Request $request)
    {
        Publikasi::destroy($id);

        return redirect()->route('dosen.show', $request->input('id_dosen'));
    }
}
