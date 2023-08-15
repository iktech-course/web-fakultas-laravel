<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MKPengampu;
use Illuminate\Http\Request;

class MKPengampuController extends Controller
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
            'id_dosen' => 'required',
            'id_mk'     => 'required',
        ]);

        // Simpan Ke Database
        MKPengampu::create([
            'id_dosen' => $request->input('id_dosen'),
            'id_mk'     => $request->input('id_mk'),
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
        MKPengampu::destroy($id);

        return redirect()->route('dosen.show', $request->input('id_dosen'));

    }
}
