<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MatakuliahCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = MataKuliah::paginate(10);

        return view('pages.dashboard.matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.dashboard.matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'kode_mk' =>'required',
            'nama_mk' =>'required',
            'semester' =>'required',
            'sks'=> 'required',
            'program_studi' => 'required'
        ]);

       // dd($request);
       MataKuliah::create([
        'kode_mk' => $request->input('kode_mk'),
        'nama_mk' => $request->input('nama_mk'),
        'semester' => $request->input('semester'),
        'sks' => $request->input('sks'),
        'program_studi' => $request->input('program_studi')
       ]);

       return redirect()->route('matakuliah.index');

        //Simpan Matakuliah
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
        $matakuliah = MataKuliah::findOrFail($id);
        return view('pages.dashboard.matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request,[
            'kode_mk' =>'required',
            'nama_mk' =>'required',
            'semester' =>'required',
            'sks'=> 'required',
            'program_studi' => 'required'
        ]);

        $matakuliah = MataKuliah::findOrFail($id);

        $matakuliah->update([
            'kode_mk' =>$request->input('kode_mk'),
            'nama_mk' =>$request->input('nama_mk'),
            'semester' =>$request->input('semester'),
            'sks'=> $request->input('sks'),
            'program_studi' => $request->input('program_studi')
        ]);

        return redirect()->route('matakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $matakuliah = MataKuliah::findOrFail($id);

        $matakuliah->delete();

        return redirect()->route('matakuliah.index');

    }
}
